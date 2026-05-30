<aside id="main-sidebar">
    <nav class="sidebar-nav">
        <ul>
            <li><a href="<?= url_to('Math::index') ?>"><img src="<?= base_url('assets/imgs/calculator-48x48.webp') ?>" alt="Calculator icon" class="logo" /> <span class="tool-name"><?= lang('Sidebar.Math') ?></span></a></li>
            <li><a href="<?= url_to('Text::index') ?>"><img src="<?= base_url('assets/imgs/text-48x48.webp') ?>" alt="Text icon" class="logo" /> <span class="tool-name"><?= lang('Sidebar.Text') ?></span></a></li>
            <li><a href="<?= url_to('Images::index') ?>"><img src="<?= base_url('assets/imgs/picture-48x48.webp') ?>" alt="Picture icon" class="logo" /> <span class="tool-name"><?= lang('Sidebar.Images') ?></span></a></li>
            <li style="display: none"><a href="<?= url_to('Office::index') ?>"><img src="<?= base_url('assets/imgs/old-world-logo-48x48.webp') ?>" alt="Microsoft Office World icon" class="logo" /> <span class="tool-name"><?= lang('Sidebar.Office') ?></span></a></li>
            <li style="display: none"><a href="<?= url_to('Roblox::index') ?>"><img src="<?= base_url('assets/imgs/roblox-logo-48x48.webp') ?>" alt="Roblox icon" class="logo" /> <span class="tool-name"><?= lang('Sidebar.Roblox') ?></span></a></li>
        </ul>
    </nav>
    <button id="sidebar-toggle" aria-label="Toggle Sidebar">
        <span></span>
        <span></span>
        <span></span>
    </button>
</aside>