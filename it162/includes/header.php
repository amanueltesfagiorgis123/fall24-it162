<?php include 'portal-config.php';?>
<!DOCTYPE html>
<html lang="en">
 <head>
     <title><?=$title?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <script src="https://use.fontawesome.com/6a71565c22.js"></script>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/forms.css">
 </head>
 <body>
     <header>
     <h1><i class="logo fa <?=$logo?>"></i>Amanuel Tesfagiorgis</h1>
        <nav class="topnav" id="myTopnav">
        <?=makeLinks($nav1)?>
          <!-- 
            <a href="/index.php" class="active">Home</a>
            <a href="/case-study.php"target="_blank">Case Study</a>
            <a href="/contact.php" class="blank">Contact</a>
-->
            <a href="https://github.com/amanueltesfagiorgis123" target="_blank">GitHub</a>
            <a href="https://www.linkedin.com/in/amanuel-tesfagiorgis-2b5645273/" target="_blank">LinkedIn</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        </nav>
     </header>
     <main class="wrapper">
     <h2 class="subheader"><?=$PageID?></h2>
     <!--header ends here-->