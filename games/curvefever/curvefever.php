<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Games - Curve Fever</title>
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
    <noscript>
        <link rel="stylesheet" href="/css/skel.css" />
        <link rel="stylesheet" href="/css/style.css" />
        <link rel="stylesheet" href="/css/style-xlarge.css" />
    </noscript>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" charset="utf-8">

</head>

<body>

<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/header.php";
include_once($path);
?>

<!-- Main -->
<section id="game">
    <div>

        <div id="paused" style="display:none">
            <div>PAUSED</div>
        </div>

        <div id="round-score" style="display:none">
            <div id="round-score-players"></div>
        </div>

        <canvas id="canvas" width="800" height="500"></canvas>

        <div id="right">
            <div id="score">
            </div>
            <div id="addplayer">
                <input id="new-player-name"><br/>
                <select id="new-player-controls"></select>
                <input type="buttoncf" id="add-new-player" value="Add Player"><br />
                <div id="players"></div>
                <input type="buttoncf" value="Play" onClick="Game.Controller.startAnimation();" id="start">
            </div>
        </div>

    </div>
</section>

<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/footer.php";
include_once($path);
?>

<script id="player-template" type="text/template"template>
    <div class="color" style="background:<%= color %>"></div>
    <%= name %>
    <%= keyLabel %>
    <div class="score"><%= score %></div>
    <span class="remove">[X]</span>
</script>

<script type="text/javascript" src="lib/utils.js"></script>
<script type="text/javascript" src="lib/jquery.js"></script>
<script type="text/javascript" src="lib/underscore.js"></script>
<script type="text/javascript" src="lib/backbone.js"></script>
<script type="text/javascript" src="config.js"></script>
<script type="text/javascript" src="app.js"></script>
<script type="text/javascript" src="model-curve.js"></script>
<script type="text/javascript" src="collection-curveManager.js"></script>
<script type="text/javascript" src="view-app.js"></script>
<script type="text/javascript" src="view-curve.js"></script>
<script type="text/javascript" src="view-players.js"></script>
<script type="text/javascript" src="controller.js"></script>
<script type="text/javascript" src="game.js"></script>