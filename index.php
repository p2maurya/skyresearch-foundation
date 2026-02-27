<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SkyResearch Foundation</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
<style>
/* Reset & Fonts */
body, h1, h2, h3, p, a, ul, li, button { margin:0; padding:0; box-sizing:border-box; font-family:'Inter', sans-serif; }
body { background:#f4f6f8; color:#333; line-height:1.6; }
a { text-decoration:none; color:inherit; }

/* Navbar */
header { background:#0d6efd; color:white; padding:15px 50px; display:flex; justify-content:space-between; align-items:center; position:sticky; top:0; z-index:100; }
header h2 { font-weight:700; font-size:24px; }
header nav a { margin-left:20px; padding:8px 15px; border-radius:5px; transition:0.3s; }
header nav a:hover { background:#0056b3; }
header nav .apply-btn { background:#28a745; color:white; }
header nav .apply-btn:hover { background:#218838; }

/* Hero Section */
.hero { text-align:center; padding:100px 20px; background:linear-gradient(to right, #6a11cb, #2575fc); color:white; }
.hero h1 { font-size:48px; margin-bottom:15px; }
.hero p { font-size:20px; margin-bottom:30px; }
.hero .apply-btn { background:#ffc107; color:#333; padding:12px 25px; font-weight:600; }
.hero .apply-btn:hover { background:#e0a800; }

/* Programs Section */
.programs { max-width:1200px; margin:50px auto; padding:0 20px; display:grid; grid-template-columns:repeat(auto-fit,minmax(250px,1fr)); gap:20px; }
.program-card { background:white; padding:20px; border-radius:10px; box-shadow:0 4px 15px rgba(0,0,0,0.1); transition:0.3s; }
.program-card:hover { transform:translateY(-5px); box-shadow:0 8px 25px rgba(0,0,0,0.15); }
.program-card h3 { margin-bottom:10px; color:#0d6efd; }

/* Footer */
footer { background:#333; color:white; text-align:center; padding:20px 50px; margin-top:50px; }
footer a { color:#ffc107; text-decoration:none; }
footer a:hover { text-decoration:underline; }

/* Buttons */
button, .apply-btn { cursor:pointer; transition:0.3s; }

/* Responsive */
@media(max-width:768px){ header { flex-direction:column; align-items:flex-start; } header nav { margin-top:10px; } }
</style>
</head>
<body>

<header>
    <h2>SkyResearch</h2>
    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="#programs">Programs</a>
        <a class="apply-btn" href="contact_form.php">Apply Now</a>
    </nav>
</header>

<section class="hero">
    <h1>Empowering Students Through Research 🚀</h1>
    <p>Join our 6-month Internship Program & grow your skills</p>
    <a class="apply-btn" href="contact_form.php">Apply Now</a>
</section>

<section id="programs" class="programs">
    <div class="program-card">
        <h3>Data Analytics Internship</h3>
        <p>Learn data analysis, visualization, and real-world projects with expert guidance.</p>
    </div>
    <div class="program-card">
        <h3>Full Stack Development</h3>
        <p>Hands-on training in HTML, CSS, JS, PHP, MySQL, and modern web development practices.</p>
    </div>
    <div class="program-card">
        <h3>AI & Machine Learning</h3>
        <p>Introduction to AI, ML models, and real-world datasets like Titanic & Netflix projects.</p>
    </div>
</section>

<footer>
    <p>© 2026 SkyResearch Foundation. All rights reserved.</p>
    <p>Follow us: <a href="#">LinkedIn</a> | <a href="#">GitHub</a></p>
</footer>

</body>
</html>