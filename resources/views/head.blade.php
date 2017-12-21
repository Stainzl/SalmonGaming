<?php
/**
 * Created by PhpStorm.
 * User: michael.schweiker
 * Date: 19.12.2017
 * Time: 11:34
 */
?>

<header id="header">
    <h1><a href="{{ route("home") }}">Salmon Gaming</a></h1>
    <nav id="nav">
        <ul>
            <li><a href="{{ route("home") }}">Home</a></li>
            <li><a href="{{ route("games") }}">Games</a></li>
            <li><a href="{{ route("wiki") }}">Wiki</a></li>
            <li><a href="{{ route("login") }}" class="button special">Sign Up</a></li>
        </ul>
    </nav>
</header>
