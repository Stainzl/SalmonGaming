<?php
/**
 * Created by PhpStorm.
 * User: michael.schweiker
 * Date: 19.12.2017
 * Time: 11:46
 */
?>

@foreach($scripts as $script)
    <script src="{{ asset($script) }}"></script>
@endforeach
