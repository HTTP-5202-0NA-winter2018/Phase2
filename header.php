<?php
$nav = ['#' => 'Home', '#features' => 'Features', 'about-us' => 'About Us', 'contact-us' => 'Contact Us'];
function mainNav($array) {
    foreach($array as $key => $value) {
        echo "<li><a href='" . $key . "'>" . $value . "</a></li>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Condo Management</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/general.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/header.css" />
    <link rel="stylesheet" type="text/css" href="css/footer.css" />
</head>
<body>
<header id="header">
    <div class="page-wrapper">
        <div id="logo-and-title">
            <div id="logo-container">
                <a href="index.php"><img id="logo" src="images/logo.svg" alt="Condo Management logo" /></a>
            </div>
            <h1 class="hidden">Condo Management</h1>
        </div>

        <nav id="main-nav">
            <h2 class="hidden">Main Navigation</h2>
            <ul class="menu">
                <?php
                echo mainNav($nav);
                ?>
            </ul>
        </nav>
    </div>
</header>

