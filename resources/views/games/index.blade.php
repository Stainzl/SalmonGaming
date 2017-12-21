<?php
/**
 * User: michael.schweiker
 * Date: 21.12.2017
 * Time: 14:46
 */
?>

@extends('base')

@section('main')
    <section id="one" class="wrapper style1 special">
        <div class="container">
            <header class="major">
                <h2>These are our games:</h2>
            </header>
            <div class="row 150%">
                <div class="4u 12u$(medium)">
                    <section class="box">
                        <a href="/games/curvefever/curvefever.php"><i class="icon big rounded color1 fa fa-play-circle"></i></a>
                        <h3>Curve Fever</h3>
                    </section>
                </div>
                <div class="4u 12u$(medium)">
                    <section class="box">
                        <a href="/games/fourwins/fourwins.php"><i class="icon big rounded color9 fa fa-play-circle"></i></a>
                        <h3>Four Wins</h3>
                    </section>
                </div>
                <div class="4u$ 12u$(medium)">
                    <section class="box">
                        <a href="/games/na/na.php"><i class="icon big rounded color6 fa fa-play-circle"></i></a>
                        <h3>n.A.</h3>
                    </section>
                </div>
            </div>
        </div>
    </section>
@endsection
