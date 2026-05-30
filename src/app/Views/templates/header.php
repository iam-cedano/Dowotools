<!DOCTYPE html>
<html lang="<?= service('request')->getLocale() ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/global.css') ?>" />

    <script src="<?= base_url('assets/js/jquery-4.0.0.min.js') ?>" defer></script>
    <script src="<?= base_url('assets/js/global.js') ?>" defer></script>

    <?php
    if (isset($stylesheets)):
        foreach ($stylesheets as $stylesheet): ?>
            <link rel="stylesheet" href="<?= $stylesheet ?>" />
        <?php endforeach;
    endif;
    ?>
    
    <?php
    if (isset($defferedScripts)):
        foreach ($defferedScripts as $script): ?>
            <script src="<?= $script ?>" type="text/javascript" defer></script>
        <?php endforeach;
    endif;
    ?>
    
    <?php
    if (isset($asyncScripts)):
        foreach ($asyncScripts as $script): ?>
                    <script src="<?= $script ?>" type="text/javascript" async></script>
            <?php endforeach;
    endif;
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
        </div>
    </div>
</header>