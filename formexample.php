<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8"/>
<meta authors="숙명여자대학교 IT공학과 지수현"/>
<title>SOOHYUN'S HOME</title>
<link rel="stylesheet" type="text/css" href="stylehome.css"/>
</head>
<body>
  <header>
      <a id="logo" href="index.htm">SOOHYUN</a>
    <nav>
      <ul>
        <li><a href="contact.html" >Contact</a></li>
        <li><a href="hobby.html" >Hobby</a></li>
        <li><a href="time.html" >Portfolio</a></li>
        <li><a href="profile.html" >Profile</a></li>
      </ul>
    </nav>
  </header>
  <article class="con">
  <?php
    $n = $_GET["name"];
    $t = $_GET["tel"];
    $e = $_GET["email"];
    $m = $_GET["memo"];

   ?>
  <p> Name : <?php print $n; ?> </p>
  <p> Tel : <?php print $t; ?> </p>
  <p> Email : <?php print $e; ?> </p>
  <p> Memo : <?php print $m; ?></p>
</article>
</body>
</html>
