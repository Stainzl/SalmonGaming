<?php
/**
 * User: michael.schweiker
 * Date: 21.12.2017
 * Time: 14:52
 */
?>

@extends('base')

@section('main')
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
                        <a href="/wiki/na/na.php"><i class="icon big rounded color9 fa fa-book"></i></a>
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
@endsection
