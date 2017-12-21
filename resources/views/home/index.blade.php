<?php
/**
 * Created by PhpStorm.
 * User: michael.schweiker
 * Date: 19.12.2017
 * Time: 14:20
 */
?>

@extends('base')

@section('main')
    <!-- Banner -->
    <section id="banner">
        <h2>Welcome to the Salmon Gaming website</h2>
        <p>some selfmade browsergames will be hosted here</p>
        <ul class="actions">
            <li>
                <a href="#one" class="button big">Get infos</a>
            </li>
        </ul>
    </section>

    <!-- One -->
    <section id="one" class="wrapper style1 special">
        <div class="container">
            <header class="major">
                <h2>General information</h2>
                <p>This is what we are and what we are doing</p>
            </header>
            <div class="row 150%">
                <div class="4u 12u$(medium)">
                    <section class="box">
                        <i class="icon big rounded color1 fa-cloud"></i>
                        <h3>Who are we?</h3>
                        <p>We are applied computer science students at DHBW in Stuttgart, Germany.</p>
                    </section>
                </div>
                <div class="4u 12u$(medium)">
                    <section class="box">
                        <i class="icon big rounded color9 fa-desktop"></i>
                        <h3>What are we doing?</h3>
                        <p>Beside studying, we like to program video games and wanted them in a website.</p>
                    </section>
                </div>
                <div class="4u$ 12u$(medium)">
                    <section class="box">
                        <i class="icon big rounded color6 fa-rocket"></i>
                        <h3>How to support?</h3>
                        <p>If you find bugs in games or made an own game, you can contact us.</p>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <!-- Two -->
    <section id="two" class="wrapper style2 special">
        <div class="container">
            <header class="major">
                <h2>Team</h2>
                <p>This is the main team behind Salmon Gaming</p>
            </header>
            <section class="profiles">
                <div class="row">
                    <section class="3u 6u(medium) 12u$(xsmall) profile">
                        <img src="images/profile/profile_nidietz.gif" alt="" />
                        <h4>Nico Dietz</h4>
                        <p>Website and Games</p>
                    </section>
                    <section class="3u 6u$(medium) 12u$(xsmall) profile">
                        <img src="images/profile/profile_madettmann.gif" alt="" />
                        <h4>Max Dettmann</h4>
                        <p>Social Media</p>
                    </section>
                    <section class="3u 6u(medium) 12u$(xsmall) profile">
                        <img src="images/profile/profile_placeholder.gif" alt="" />
                        <h4>Matthias Dierberger</h4>
                        <p>Games</p>
                    </section>
                    <section class="3u$ 6u$(medium) 12u$(xsmall) profile">
                        <img src="images/profile/profile_placeholder.gif" alt="" />
                        <h4>Michael Schweiker</h4>
                        <p>Website</p>
                    </section>
                </div>
                <div class="row">
                    <section class="3u 6u(medium) 12u$(xsmall) profile">
                        <img src="images/profile/profile_placeholder.gif" alt="" />
                        <h4>n.A.</h4>
                        <p>n.A.</p>
                    </section>
                    <section class="3u 6u$(medium) 12u$(xsmall) profile">
                        <img src="images/profile/profile_placeholder.gif" alt="" />
                        <h4>n.A.</h4>
                        <p>n.A.</p>
                    </section>
                    <section class="3u 6u(medium) 12u$(xsmall) profile">
                        <img src="images/profile/profile_placeholder.gif" alt="" />
                        <h4>n.A.</h4>
                        <p>n.A.</p>
                    </section>
                    <section class="3u$ 6u$(medium) 12u$(xsmall) profile">
                        <img src="images/profile/profile_placeholder.gif" alt="" />
                        <h4>n.A.</h4>
                        <p>n.A.</p>
                    </section>
                </div>
            </section>
            <footer>
                <p>Now you know who we are and what we are doing. You can play a game and have fun.</p>
                <ul class="actions">
                    <li>
                        <a href="#" class="button big">back to top</a>
                    </li>
                </ul>
            </footer>
        </div>
    </section>

    <!-- Three -->
    <section id="three" class="wrapper style3 special">
        <div class="container">
            <header class="major">
                <h2>Contact us</h2>
                <p>You have some Feedback, found a bug or made a own game, just fill out the form!</p>
            </header>
        </div>
        <div class="container 50%">
            <form action="#" method="post">
                <div class="row uniform">
                    <div class="6u 12u$(small)">
                        <input name="name" id="name" value="" placeholder="Name" type="text">
                    </div>
                    <div class="6u$ 12u$(small)">
                        <input name="email" id="email" value="" placeholder="Email" type="email">
                    </div>
                    <div class="12u$">
                        <textarea name="message" id="message" placeholder="Message" rows="6"></textarea>
                    </div>
                    <div class="12u$">
                        <ul class="actions">
                            <li><input value="Send Message" class="special big" type="submit"></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
