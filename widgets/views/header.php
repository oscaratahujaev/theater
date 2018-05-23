<?php
/**
 *
 * header widget
 * */
use app\widgets\WLang;
use yii\helpers\Url;

?>
<header class="noFixMenu menu_right without_user_menu">
    <div class="topWrapFixed"></div>
    <div class="topWrap">
        <div class="mainmenu_area">
            <div class="main with_logo_left">
                <div class="logo logo_left">
                    <a href="<?= Url::to('/') ?>">
                        <img src="/images/logo-mit-schrift.png" style="height: 78px;position: relative;top: -19px;"
                             class="logo_main" alt="">
                        <img src="/images/logo-mit-schrift.png" style="height: 51px; top: -4px;position: relative;"
                             class="logo_fixed" alt="">
                        <span class="logo_slogan"></span>
                    </a>
                </div>
                <a href="#" class="openResponsiveMenu">Меню</a>
                <nav role="navigation" class="menuTopWrap topMenuStyleLine">
                    <ul id="mainmenu" class="">
                        <li class="menu-item current-menu-ancestor menu-item-has-children">
                            <a href="<?= Url::to(['/']) ?>"><?= Yii::t('main', 'home') ?></a>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="<?= Url::to("#performance") ?>"><?= Yii::t('main', 'Спектакли') ?></a>
                        </li>
                        <li class="menu-item menu-item-has-children columns custom_view_item">
                            <a title="Tools and Pages" href="#repertuar">
                                <span class="menu_icon icon-params"></span>
                                <?= Yii::t('main', 'Репертуар') ?>
                            </a>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a title="Layouts and hovers" href="<?= Url::to("/gallery/index") ?>">
                                <span class="menu_icon icon-thumbs-up"></span>
                                <?= Yii::t('main', 'Галерея') ?>
                            </a>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a title="Posts pages" href="<?= Url::to("#contacts") ?> ">
                                <span class="menu_icon icon-note"></span>
                                <?= Yii::t('main', 'Контакты') ?>
                            </a>
                        </li>
                        <?= WLang::widget(); ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>