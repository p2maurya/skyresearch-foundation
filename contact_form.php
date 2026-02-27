<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "skyresearch";
$port = 3307;

$conn = mysqli_connect($servername,$username,$password,$database,$port);
if(!$conn){ die("Connection failed: ".mysqli_connect_error()); }

$status = "";
if($_SERVER['REQUEST_METHOD']==='POST'){
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $subject=mysqli_real_escape_string($conn,$_POST['subject']);
    $message=mysqli_real_escape_string($conn,$_POST['message']);
    $sql="INSERT INTO contacts (name,email,subject,message) VALUES ('$name','$email','$subject','$message')";
    $status = mysqli_query($conn,$sql) ? "success" : "error";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Apply - SkyResearch</title>
<style>
body{font-family:Inter,sans-serif;background:#f4f6f8;padding:30px;}
form{max-width:500px;margin:auto;background:white;padding:25px;border-radius:10px;box-shadow:0 0 15px rgba(0,0,0,0.1);}
input,textarea{width:100%;padding:10px;margin-bottom:10px;border:1px solid #ccc;border-radius:5px;}
button{background:#28a745;color:white;border:none;padding:10px 20px;border-radius:5px;cursor:pointer;}
button:hover{background:#218838;}
#popupMsg{display:none;position:fixed;top:20px;right:20px;padding:15px 20px;border-radius:8px;color:white;font-size:16px;z-index:1000;box-shadow:0 0 10px rgba(0,0,0,0.3);}
#popupMsg.success{background:#28a745;}
#popupMsg.error{background:#dc3545;}
</style>
</head>
<body>

<h2 style="text-align:center;margin-bottom:20px;">Apply for Internship</h2>

<form method="post">
<input name="name" placeholder="Your Name" required>
<input name="email" placeholder="Your Email" required>
<input name="subject" placeholder="Subject" required>
<textarea name="message" placeholder="Message" rows="5" required></textarea>
<button type="submit">Send</button>
</form>

<div id="popupMsg"></div>

<script>
let status="<?php echo $status; ?>";
if(status){
    const popup=document.getElementById('popupMsg');
    popup.textContent=status==="success"?"Message sent successfully!":"Error sending message!";
    popup.className=status==="success"?"success":"error";
    popup.style.display='block';
    setTimeout(()=>{ popup.style.display='none'; },4000);
}
</script>

</body>
</html>