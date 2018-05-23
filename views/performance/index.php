<?php
use yii\helpers\Url;

$this->title = Yii::t('main', 'Performances');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="widgetTabs">
    <div id="topOfPage" class="topTabsWrap">
        <div class="main">
            <div class="speedBar">
                <a class="home" href="index-2.html">Home</a>
                <span class="breadcrumbs_delimiter">
							<i class="icon-right-open-mini"></i>
						</span>
                <a class="all" href="#">All Posts</a>
                <span class="breadcrumbs_delimiter">
							<i class="icon-right-open-mini"></i>
						</span>
                <span class="current">Pricing Tables</span>
            </div>
            <h3 class="pageTitle h3">Pricing Tables</h3>
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
                                                        <img alt="<?= $performance->file_name ?>"
                                                             src="<?= $performance->file_path ?>">
                                                    </div>
                                                    <div class="sc_blogger_content">
                                                        <div class="sc_blogger_content_inner">
                                                            <?= substr($performance->description, 0, 150) ?>
                                                            ...
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <h4 class="sc_blogger_title sc_title">
                                                <a href="#"><?= $performance->title ?></a>

                                            </h4>
                                            <div class="reviews_summary blog_reviews">
                                                <div class="criteria_summary criteria_row">
                                                                <span>Режиссер:
                                                                    <strong><?= $performance->author ?></strong></span>
                                                </div>
                                            </div>
                                            <div class="sc_blogger_content">
                                            </div>
                                            <div class="sc_blogger_info">
                                                <div class="squareButton light ico sc_blogger_more">
                                                    <a class="icon-link" title="" href="#">More</a>
                                                </div>
                                                <div class="sc_blogger_author">
                                                    Posted by
                                                    <a href="#" class="post_author">admin</a>
                                                    <span class="separator">|</span>
                                                    Views
                                                    <span class="comments_number">176</span>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="sc_section bg_tint_none sc_aligncenter margin_top_middle">
                            <div class="">
                                <div class="sc_button sc_button_style_global sc_button_size_banner squareButton global banner">
                                    <a style="height: 74px;line-height: 78px;font-size: 20px; padding: 0 12px 0 11px;"
                                       href="#" class="">More cool classes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>