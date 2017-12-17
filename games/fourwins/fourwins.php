<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Games - Four Wins</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]>
    <script src="/js/html5shiv.js"></script>
    <![endif]-->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/skel.min.js"></script>
    <script src="/js/skel-layers.min.js"></script>
    <script src="/js/init.js"></script>
    <!--Game JavaScript File-->
    <script src="main.js"></script>
    <noscript>
        <link rel="stylesheet" href="/css/skel.css" />
        <link rel="stylesheet" href="/css/style.css" />
        <link rel="stylesheet" href="/css/style-xlarge.css" />
    </noscript>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" charset="utf-8">
</head>
<body onload="loadfunction()">

<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/header.php";
include_once($path);
?>

<!-- Main -->
<section id="game">
    <table type="fw" height="500">
        <tr>
            <td onclick="clickfunction(0,0)" name="0-0"></td>
            <td onclick="clickfunction(1,0)" name="1-0"></td>
            <td onclick="clickfunction(2,0)" name="2-0"></td>
            <td onclick="clickfunction(3,0)" name="3-0"></td>
            <td onclick="clickfunction(4,0)" name="4-0"></td>
            <td onclick="clickfunction(5,0)" name="5-0"></td>
            <td onclick="clickfunction(6,0)" name="6-0"></td>
        </tr>
        <tr>
            <td onclick="clickfunction(0,1)" name="0-1"></td>
            <td onclick="clickfunction(1,1)" name="1-1"></td>
            <td onclick="clickfunction(2,1)" name="2-1"></td>
            <td onclick="clickfunction(3,1)" name="3-1"></td>
            <td onclick="clickfunction(4,1)" name="4-1"></td>
            <td onclick="clickfunction(5,1)" name="5-1"></td>
            <td onclick="clickfunction(6,1)" name="6-1"></td>
        </tr>
        <tr>
            <td onclick="clickfunction(0,2)" name="0-2"></td>
            <td onclick="clickfunction(1,2)" name="1-2"></td>
            <td onclick="clickfunction(2,2)" name="2-2"></td>
            <td onclick="clickfunction(3,2)" name="3-2"></td>
            <td onclick="clickfunction(4,2)" name="4-2"></td>
            <td onclick="clickfunction(5,2)" name="5-2"></td>
            <td onclick="clickfunction(6,2)" name="6-2"></td>
        </tr>
        <tr>
            <td onclick="clickfunction(0,3)" name="0-3"></td>
            <td onclick="clickfunction(1,3)" name="1-3"></td>
            <td onclick="clickfunction(2,3)" name="2-3"></td>
            <td onclick="clickfunction(3,3)" name="3-3"></td>
            <td onclick="clickfunction(4,3)" name="4-3"></td>
            <td onclick="clickfunction(5,3)" name="5-3"></td>
            <td onclick="clickfunction(6,3)" name="6-3"></td>
        </tr>
        <tr>
            <td onclick="clickfunction(0,4)" name="0-4"></td>
            <td onclick="clickfunction(1,4)" name="1-4"></td>
            <td onclick="clickfunction(2,4)" name="2-4"></td>
            <td onclick="clickfunction(3,4)" name="3-4"></td>
            <td onclick="clickfunction(4,4)" name="4-4"></td>
            <td onclick="clickfunction(5,4)" name="5-4"></td>
            <td onclick="clickfunction(6,4)" name="6-4"></td>
        </tr>
        <tr>
            <td onclick="clickfunction(0,5)" name="0-5"></td>
            <td onclick="clickfunction(1,5)" name="1-5"></td>
            <td onclick="clickfunction(2,5)" name="2-5"></td>
            <td onclick="clickfunction(3,5)" name="3-5"></td>
            <td onclick="clickfunction(4,5)" name="4-5"></td>
            <td onclick="clickfunction(5,5)" name="5-5"></td>
            <td onclick="clickfunction(6,5)" name="6-5"></td>
        </tr>
    </table>
</section>

<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/footer.php";
include_once($path);
?>