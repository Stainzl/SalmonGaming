<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wiki - Curve Fever</title>
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
<section id="main" class="wrapper">
    <div class="container">

        <header class="major">
            <h2>Curve Fever</h2>
        </header>

        <!-- Text -->
        <section>
            <h3>What is Curve Fever?</h3>
            <p>
                Curve Fever is a snake multiplayer. </br>
                Two, Three or Four player play as curves or snakes and </br>
                try to not touch the other players or the walls. </br>
                The last living player wins the round.
            </p>

            <hr />

            <h3>How to play?</h3>
            <div class="box alt">
                <div class="row 50% uniform">
                    <div class="row">
                        <img src="explanation.png" alt="" height="400"/>
                        <div>
                        <h4>The Game Field</h4>
                        <ol>
                            <li>Put in the players name here.</li>
                            <li>Select the players controls here.</li>
                            <li>Here is where the game takes place.</li>
                        </ol>
                        </div>
                    </div>
                </div>
                <div class="row 50% uniform">
                     <div class="row">
                         <img src="controls.png" alt="" height="400"/>
                         <div>
                             <h4>The Controls</h4>
                             <p>
                                 It's possible to play with 2,3 or 4-Player at the same time.</br>
                                 Just use the dropdown menu to choose the correct controls for every player.</br>
                                 You can see all the possible controls in this picture.</br>
                                 <-/-> means Arrowkeys left and right.
                             </p>
                          </div>
                     </div>
                </div>
                <div class="row 50% uniform">
                    <div class="row">
                        <img src="scoreboard.png" alt="" height="400"/>
                        <div>
                            <h4>The Scoreboard</h4>
                            <ol>
                                <li>The color of the players curve.</li>
                                <li>This is the players name.</li>
                                <li>Here you can see the controls of the player.</li>
                                <li>This is the current score.</li>
                                <li>You can remove a player by clicking [X].</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <hr />

            <h3>Current bugs:</h3>
            <ul>
                <li>After removing a player, it can't be added again until site reloads.</li>
                <li>Scoreboard format is not correct.</li>
                <li>Controls field isn't centered.</li>
                <li>Controls dropdown menu isn't centered.</li>
                <li>When the snake is creating a hole, you get teleported.</li>
                <li>After a round hovering over the scoreboard it will start flickering.</li>
            </ul>

            <hr />

            <h3>Planned Updates:</h3>
            <ul>
                <li>Power-Ups for more fun.</li>
                <li>After our account-system is working, a global scoreboard.</li>
                <li>Online multiplayer, not only local multiplayer.</li>
            </ul>

        </section>
    </div>
</section>

<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/footer.php";
    include_once($path);
?>