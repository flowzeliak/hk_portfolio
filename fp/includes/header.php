<?php include 'config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?=$title?></title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src='https://www.google.com/recaptcha/api.js'></script>
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/form.css" />
</head>
<body>
<div class="banner">
    <a href="index.php" class="bigboy">I'll Manage That</a><br>
    &emsp;&emsp;&emsp;&emsp;Hye Kim - Product Management
</div>
<div class="banner-mobile">
    <a href="index.php" class="littleguy">Hye Kim</a><br>
    Product Management
</div>
<nav>
    <ul class="topnav" id="myTopnav">
        <?=makeLinks($nav1)?>
        <!--<li><a href="resume.html">Resume</a></li>
        <li><a href="education.html">Education</a></li>
        <li><a href="projects.html">Project Portfolio</a></li>
        <li><a href="skills.html">Skills</a></li>-->
        <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
</nav>
