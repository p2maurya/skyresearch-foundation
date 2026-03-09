document.getElementById("contactForm")
.addEventListener("submit",function(e){

e.preventDefault()

let formData=new FormData(this)

fetch("send.php",{

method:"POST",
body:formData

})

.then(res=>res.text())
.then(data=>{

document.getElementById("response").innerHTML=data

})

})