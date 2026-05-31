<?php

if (!function_exists('render_localization_meta_tags')) {
    function render_localization_meta_tags()
    {
        $supportedLocales = config('App')->supportedLocales;

        $currentUri = current_url(true);

        foreach ($supportedLocales as $locale) {
            $uriClone = clone $currentUri;

            $uriClone->setSegment(1, $locale);

            $url = (string) $uriClone;
            ?>
                <link rel="alternate" hreflang="<?= $locale ?>" href="<?= $url ?>">
            <?php
        }
    }
}
