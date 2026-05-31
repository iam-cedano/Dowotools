<?php

if (!function_exists('async_script_meta_tags')) {
    function render_async_script_meta_tags($scripts)
    {
        foreach ($scripts as $script) {
            ?>
            <script src="<?= $script ?>" async></script>
            <?php
        }
    }
}

if (!function_exists('deferred_script_meta_tags')) {
    function render_deferred_script_meta_tags($scripts)
    {
        foreach ($scripts as $script) {
            ?>
            <script src="<?= $script ?>" defer></script>
            <?php
        }
    }
}

if (!function_exists('stylesheet_meta_tags')) {
    function render_stylesheet_meta_tags($stylesheets)
    {
        foreach ($stylesheets as $stylesheet) {
            ?>
            <link rel="stylesheet" href="<?= $stylesheet ?>">
            <?php
        }
    }
}