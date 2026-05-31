<!DOCTYPE html>
<html lang="<?= service('request')->getLocale() ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/global.css') ?>" />

    <script src="<?= base_url('assets/js/jquery-4.0.0.min.js') ?>" defer></script>
    <script src="<?= base_url('assets/js/global.js') ?>" defer></script>

    <?php
        if (isset($stylesheets)) {
            render_stylesheet_meta_tags($stylesheets);
        }

        if (isset($asyncScripts)) {
            render_async_script_meta_tags($asyncScripts);
        }

        if (isset($deferredScripts)) {
            render_deferred_script_meta_tags($deferredScripts);
        }

    render_localization_meta_tags();
    ?>

    <title><?= lang('Header.page-title')  ?></title>
</head>
<body>
<header>
    <div class="header-content">
        <div class="header-logo">
            <h1 id="company-name">
                <a href="<?= base_url() ?>">
                    Dowotools
                </a>
            </h1>
        </div>
        <div class="header-search">
            <input type="text" placeholder="<?= lang('Header.search-placeholder') ?? 'Search...' ?>" />
        </div>
        <div class="header-third-section">
            <label class="language-selector-label" for="language-selector"><?= lang('Header.language') ?></label>
            <select id="language-selector" class="language-selector" aria-label="Language selector">
                <option value="es">Español</option>
                <option value="en">English</option>
            </select>
        </div>
    </div>
</header>