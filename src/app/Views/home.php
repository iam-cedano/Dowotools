<main>
    <div id="topic-list">
        <div id="math-container" class="container">
            <div class="topic-name"><span><?= lang('Home.mathematics') ?></span></div>
            <span class="description"><?= lang('Home.mathematics-description') ?></span>
            <div class="tools">
                <ul>
                    <li><a href="<?= url_to('Math::addTwoNumbers') ?>">► <?= lang('Home.sum-of-two-numbers') ?></a></li>
                    <li><a href="<?= url_to('Math::areaCalculator') ?>">► <?= lang('Home.area-calculator') ?></a></li>
                    <li><a href="<?= url_to('Math::volumeCalculator') ?>">► <?= lang('Home.volume-calculator') ?></a></li>
                </ul>
            </div>
            <a class="more-link" href="<?= url_to('Math::index') ?>"><?= lang('Home.more') ?></a>
        </div>
    </div>
</main>