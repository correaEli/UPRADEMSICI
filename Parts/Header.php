<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
<title>Web-Based Assessment Plataform</title>
<link href="Components/Contems.css" rel="stylesheet" type="text/css">
</head>

<!-- Menu------------------------------------------------------------------------------------------------>

<header>
<div class= "Menu">
    <div class= "Nav">
    <h1>WEB-BASED ASSESSMENT PLATAFORM</h1>
    <div id="home">
        <a href="goHome">Home</a>
    </div>
    </div>
        <div class="barStatus">
            <form class="form-inline my-2 my-lg-0">
        <?php
          if (!isset($loggedUser)) {
        ?>
            <a type="button" class="botones_log" href="index.php?a=login">Login</a>
        <?php
        } else {
        ?>
            <a class="BAR_Info" >
        <?php
          echo '<span style="color: white; font-weight: bold;">Hi ' . $loggedUser->username . '&nbsp;';
        ?>
            </a>
            <a class="botones_log" href="index.php?a=logout">Logout</a>
        <?php
        }
        ?>
            </form>
        </div>
</div>
</header>
<body>
<main>