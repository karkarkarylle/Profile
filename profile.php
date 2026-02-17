<?php
$profile = [
  "name" => "Karylle",
  "title" => "3rd Year BSIT Student • IT3R11 • Working Student",
  "avatar" => "assets/avatar.jpg",

  "about" => "Dedicated working student eager to apply university learning in real-world settings. I’m a fast learner who’s reliable and organized, balancing work and academics with focus and strong determination to graduate. I enjoy collaborating with others, taking on new challenges, and continuously improving through feedback, curiosity, and hands-on experience.",

  "education" => [
    [
      "school" => "University of Science and Technology of Southern Philippines (USTP)",
      "program" => "BS in Information Technology",
      "years" => "2023 – Current",
    ],
    [
      "school" => "Cagayan de Oro National High School (Senior High School)",
      "program" => "Science, Technology, Engineering, Mathematics (STEM)",
      "years" => "2021 – 2023",
    ],
  ],

  "skills" => [
    "Front End Developer",
    "User Interface Design",
  ],

  "languages" => [
    "English",
    "Bisaya",
    "Tagalog",
  ],

  "work_experience" => [
    ["role" => "Outreach Specialist", "years" => "2023 – 2025"],
    ["role" => "Outreach Marketing Coordinator", "years" => "2025 – 2026"],
    ["role" => "Customer Service Assistant", "years" => "2025"],
    ["role" => "Tech Manager", "years" => "2025"],
    ["role" => "CS Manager", "years" => "2025 – 2026"],
  ],

  "contact" => [
    "email" => "karylleannemaagad1@gmail.com",
    "phone" => "09285979236",
  ],
];

function e($str) {
  return htmlspecialchars((string)$str, ENT_QUOTES, 'UTF-8');
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?= e($profile["name"]) ?> • Profile</title>

<style>
:root{
  --pink-1:#ff4fa1;
  --pink-2:#ff86c7;
  --pink-3:#ffd1e8;
  --ink:#1f1f1f;
  --muted:#6b6b6b;
  --card:#ffffff;
  --bg:#fff6fb;
  --shadow: 0 20px 50px rgba(0,0,0,.08);
}
*{box-sizing:border-box}
body{
  margin:0;
  font-family: ui-sans-serif, system-ui;
  color:var(--ink);
  background: linear-gradient(180deg, var(--bg), #ffffff 60%);
  min-height:100vh;
  padding:40px 16px;
}
.wrap{max-width:820px;margin:auto}
.card{
  background:var(--card);
  border-radius:18px;
  box-shadow:var(--shadow);
  overflow:hidden;
}
.topbar{
  height:10px;
  background:linear-gradient(90deg,var(--pink-1),var(--pink-2));
}
.header{
  padding:28px;
  text-align:center;
}
.avatar{
  width:180px;
  height:180px;
  border-radius:50%;
  object-fit:cover;
  border:6px solid white;
  box-shadow:0 16px 40px rgba(255,79,161,.25);
  transition: transform .4s ease, box-shadow .4s ease;
}
.avatar:hover{
  transform:scale(1.08) rotate(3deg);
  box-shadow:0 20px 50px rgba(255,79,161,.4);
}
h1{margin:14px 0 6px;font-size:28px}
.subtitle{color:var(--muted);font-size:14px;margin:0}
.content{padding:20px 28px 30px}
.section{margin-top:20px}
.section-title{
  font-size:18px;
  margin-bottom:10px;
  border-bottom:2px solid #f1c2dd;
  padding-bottom:6px;
}
.about{line-height:1.6}
.toggle-btn{
  margin-top:10px;
  padding:8px 14px;
  border:none;
  border-radius:999px;
  background:linear-gradient(90deg,var(--pink-1),var(--pink-2));
  color:white;
  cursor:pointer;
  font-size:13px;
  transition:.2s;
}
.toggle-btn:hover{transform:scale(1.05)}
.edu-item{
  padding:10px;
  border:1px solid #f1c2dd;
  border-radius:12px;
  margin-bottom:10px;
}
.edu-meta{color:var(--muted);font-size:13px}
.chips{
  display:flex;
  flex-wrap:wrap;
  gap:8px;
  list-style:none;
  padding:0;
}
.chip{
  background:#ffd1e8;
  padding:6px 12px;
  border-radius:999px;
  font-size:13px;
}
.contact a{
  display:block;
  padding:10px;
  border:1px solid #f1c2dd;
  border-radius:10px;
  text-decoration:none;
  color:var(--ink);
  margin-bottom:8px;
}
.footer{
  text-align:center;
  padding:15px;
  font-size:13px;
  color:var(--muted);
}
</style>
</head>

<body>
<div class="wrap">
<div class="card">
<div class="topbar"></div>

<div class="header">
<img class="avatar" src="<?= e($profile["avatar"]) ?>" alt="Profile photo">
<h1><?= e($profile["name"]) ?></h1>
<p class="subtitle"><?= e($profile["title"]) ?></p>
</div>

<div class="content">

<section class="section">
<h2 class="section-title">Get to Know Me</h2>
<p class="about" id="aboutText"><?= e($profile["about"]) ?></p>
<button class="toggle-btn" onclick="toggleAbout()">Hide</button>
</section>

<section class="section">
<h2 class="section-title">Educational Background</h2>
<?php foreach ($profile["education"] as $edu): ?>
<div class="edu-item">
<strong><?= e($edu["school"]) ?></strong>
<div class="edu-meta"><?= e($edu["program"]) ?> • <?= e($edu["years"]) ?></div>
</div>
<?php endforeach; ?>
</section>

<section class="section">
<h2 class="section-title">Skills</h2>
<ul class="chips">
<?php foreach ($profile["skills"] as $skill): ?>
<li class="chip"><?= e($skill) ?></li>
<?php endforeach; ?>
</ul>
</section>

<section class="section">
<h2 class="section-title">Languages</h2>
<ul class="chips">
<?php foreach ($profile["languages"] as $lang): ?>
<li class="chip"><?= e($lang) ?></li>
<?php endforeach; ?>
</ul>
</section>

<section class="section">
<h2 class="section-title">Work Experience</h2>
<ul>
<?php foreach ($profile["work_experience"] as $job): ?>
<li><strong><?= e($job["role"]) ?></strong> (<?= e($job["years"]) ?>)</li>
<?php endforeach; ?>
</ul>
</section>

<section class="section">
<h2 class="section-title">Contact Information</h2>
<div class="contact">
<a href="mailto:<?= e($profile["contact"]["email"]) ?>">
Email: <?= e($profile["contact"]["email"]) ?>
</a>
<a href="tel:<?= e($profile["contact"]["phone"]) ?>">
Phone: <?= e($profile["contact"]["phone"]) ?>
</a>
</div>
</section>

</div>

<div class="footer">
© <?= date("Y") ?> <?= e($profile["name"]) ?>
</div>

</div>
</div>

<script>
function toggleAbout(){
  const about=document.getElementById("aboutText");
  const btn=document.querySelector(".toggle-btn");
  if(about.style.display==="none"){
    about.style.display="block";
    btn.textContent="Hide";
  }else{
    about.style.display="none";
    btn.textContent="Show";
  }
}
</script>

</body>
</html>
