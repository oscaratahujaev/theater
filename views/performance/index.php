<?php
use app\components\Functions;
use app\models\Lang;
use yii\helpers\Url;

$this->title = Yii::t('main', 'Performances');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="widgetTabs">
    <div id="topOfPage" class="topTabsWrap">
        <div class="main">
            <div class="speedBar">
                <a class="home" href="<?= Url::to('/') ?>"><?= Yii::t('main', 'home') ?></a>
                <span class="breadcrumbs_delimiter">
							<i class="icon-right-open-mini"></i>
						</span>
                <span class="current"><?= Yii::t('main', 'Спектакли') ?></span>
            </div>
            <h3 class="pageTitle h3"><?= Yii::t('main', 'Спектакли') ?></h3>
        </div>
    </div>


    <div class="mainWrap without_sidebar">
        <div class="main">
            <section id="performance">
                <div class="container">
                    <div class="sc_content main ">
                        <div class="sc_blogger sc_blogger_horizontal style_image style_image_classes">
                            <div class="columnsWrap">
                                <?php foreach ($performances as $performance): ?>
                                    <div class="columns1_3 column_item_1 odd first" style="float: right;">
                                        <article class="sc_blogger_item">
                                            <div class="thumb">
                                                <a href="<?= Url::to(['/performance/view/?id=' . $performance->id]) ?>">
                                                    <div>
                                                        <img alt="/<?= $performance->file_name ?>"
                                                             src="/<?= $performance->file_path ?>">
                                                    </div>
                                                    <div class="sc_blogger_content">
                                                        <div class="sc_blogger_content_inner">
                                                            <?= mb_substr($performance->{'description_' . Lang::getCurrent()->url}, 0, 100) ?>
                                                            ...
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <h4 class="sc_blogger_title sc_title">
                                                <a href="<?= Url::to(['/performance/view/?id=' . $performance->id]) ?>">
                                                    <?= $performance->{'title_' . Lang::getCurrent()->url} ?>
                                                </a>

                                            </h4>
                                            <div class="reviews_summary blog_reviews">
                                                <div class="criteria_summary criteria_row">
                                                                <span>Режиссер:
                                                                    <strong><?= $performance->author ?></strong></span>
                                                </div>
                                            </div>
                                            <div class="sc_blogger_content">
                                            </div>
                                        </article>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>