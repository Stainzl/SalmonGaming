<?php
/**
 * Created by PhpStorm.
 * User: michael.schweiker
 * Date: 19.12.2017
 * Time: 11:30
 */
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>TEMPLATE</title>
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
        @include('head')
        @yield('main')
        @include('footer')
        @yield('scripts' ,'')
    </body>
</html>