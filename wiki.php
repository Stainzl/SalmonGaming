<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wiki</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]><script src="/js/html5shiv.js"></script><![endif]-->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/skel.min.js"></script>
    <script src="/js/skel-layers.min.js"></script>
    <script src="/js/init.js"></script>
    <noscript>
        <link rel="stylesheet" href="/css/skel.css" />
        <link rel="stylesheet" href="/css/style.css" />
        <link rel="stylesheet" href="/css/style-xlarge.css" />
    </noscript>
</head>
<body>

    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/header.php";
    include_once($path);
    ?>

    <!-- Main -->
<section id="one" class="wrapper style1 special">
    <div class="container">
        <header class="major">
            <h2>Here are the wiki pages to our games:</h2>
        </header>
        <div class="row 150%">
            <div class="4u 12u$(medium)">
                <section class="box">
                    <a href="/wiki/curvefever/curvefever.php"><i class="icon big rounded color1 fa fa-book"></i></a>
                    <h3>Curve Fever</h3>
                </section>
            </div>
            <div class="4u 12u$(medium)">
                <section class="box">
                    <a href="/wiki/fourwins/fourwins.php"><i class="icon big rounded color9 fa fa-book"></i></a>
                    <h3>Four Wins</h3>
                </section>
            </div>
            <div class="4u$ 12u$(medium)">
                <section class="box">
                    <a href="/wiki/na/na.php"><i class="icon big rounded color6 fa fa fa-book"></i></a>
                    <h3>n.A.</h3>
                </section>
            </div>
        </div>
    </div>
</section>

<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/footer.php";
    include_once($path);
?>