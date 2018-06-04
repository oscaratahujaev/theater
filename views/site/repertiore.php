<?php
/**
 * Created by PhpStorm.
 * User: m_toshpolatov
 * Date: 23.05.2018
 * Time: 9:22
 */
use app\models\Lang;
use yii\helpers\Url;

$title_key = 'title_' . Lang::getCurrent()->url;
?>

<div class="widgetTabs">
    <div id="topOfPage" class="topTabsWrap">
        <div class="main">
            <div class="speedBar">
                <a class="home" href="<?= Url::to('/') ?>"><?= Yii::t('main', 'home') ?></a>
                <span class="breadcrumbs_delimiter">
								<i class="icon-right-open-mini"></i>
							</span>
                <span class="current"><?= Yii::t('main', 'Репертуар') ?> </span>
            </div>
            <div class="tabsButton">
                <ul class="" role="tablist">
                </ul>
            </div>
        </div>
    </div>


    <div class="mainWrap without_sidebar">
        <div class="main">
            <div class="content">
                <aside id="archives-1" class="widgetTop widget widget_archive">
                    <div class="">
                        <div class="sc_pricing_table columns_4 alignCenter">
                            <?php foreach ($repertiores[5]['values'] as $item): ?>
                                <div class="sc_pricing_columns sc_pricing_column_1">
                                    <ul class="columnsAnimate repertuar">
                                        <li class="sc_pricing_data sc_pricing_title"><?= $item[$title_key] ?></li>
                                        <?php $datetime = new DateTime($item['date']) ?>
                                        <li class="sc_pricing_data"><?= $datetime->format('d M, Y') ?></li>
                                        <li class="sc_pricing_data"><?= $item['price'] . ' UZS' ?></li>
                                        <li class="sc_pricing_data">Режиссёр: <?= $item['author'] ?></li>
                                        <div class="sc_pricing_data custom-button">
                                            <div class="sc_button sc_button_style_global sc_button_size_big squareButton fullSize global big">
                                                <a href="<?= Url::to('http://tickit.co') ?>" class="">
                                                    <?= Yii::t('main', 'buyTicket') ?>
                                                </a>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="sc_line sc_line_style_solid margin_top_big margin_bottom_big"></div>
                    </div>
                </aside>

                <?php foreach ($repertiores as $index => $repertiore): ?>
                    <aside id="archives-<?= $index ?>" class="widgetTop widget widget_archive">
                        <h3 class="titleHide title"><?= date("F", mktime(0, 0, 0, $index, 10));
                            ?></h3>
                        <div class="">
                            <div class="sc_pricing_table columns_4 alignCenter">
                                <?php foreach ($repertiore['values'] as $item): ?>
                                    <div class="sc_pricing_columns sc_pricing_column_1">
                                        <ul class="columnsAnimate repertuar">
                                            <li class="sc_pricing_data sc_pricing_title"><?= $item[$title_key] ?></li>
                                            <?php $datetime = new DateTime($item['date']) ?>
                                            <li class="sc_pricing_data"><?= $datetime->format('d M, Y') ?></li>
                                            <li class="sc_pricing_data"><?= $item['price'] . ' UZS' ?></li>
                                            <li class="sc_pricing_data"><?= Yii::t('main', 'Producer') ?>
                                                : <?= $item['author'] ?></li>
                                            <div class="sc_pricing_data custom-button">
                                                <div class="sc_button sc_button_style_global sc_button_size_big squareButton fullSize global big">
                                                    <a href="<?= Url::to('http://tickit.co') ?>" class="">
                                                        <?= Yii::t('main', 'buyTicket') ?>
                                                    </a>
                                                </div>
                                            </div>
                                        </ul>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="sc_line sc_line_style_solid margin_top_big margin_bottom_big"></div>
                        </div>
                    </aside>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

</div>

<div class="footerContentWrap">