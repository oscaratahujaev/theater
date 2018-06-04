<?php
/**
 * Created by PhpStorm.
 * User: m_toshpolatov
 * Date: 24.05.2018
 * Time: 16:30
 */
/**
 * @var $files
 * */
use app\components\Functions;
use yii\helpers\Url;

$this->title = Yii::t('main', 'Галерея');
?>


<div class="widgetTabs">
    <div id="topOfPage" class="topTabsWrap">
        <div class="main">
            <div class="speedBar">
                <a class="home" href="<?= Url::to('/') ?>"><?= Yii::t('main', 'home'); ?></a>
                <span class="breadcrumbs_delimiter">
							<i class="icon-right-open-mini"></i>
						</span>
                <span><?= Yii::t('main', 'Галерея'); ?></span>
            </div>
            <h3 class="pageTitle h3"><?= Yii::t('main', 'Галерея'); ?></h3>
        </div>
    </div>

    <div class="mainWrap without_sidebar">
        <div class="main">
            <div class="content">
                <aside id="tabBlog" class="blogContent">
                    <section class="post post_format_standard postAlter hrShadow no_padding">
                        <div class="container">
                            <article class="post_content">
                                <div class="post_info infoPost">
                                    <!--Posted
                                    <a href="#" class="post_date date updated">July 17, 2014</a>
                                    <span class="separator">|</span>
                                    by
                                    <span class="vcard">
													<a href="#" class="post_author fn" rel="author">admin</a>
												</span>
                                    <span class="separator">|</span>
                                    <span class="post_cats">
													in
													<a class="cat_link" href="#">Post formats fullwidth</a>
												</span>-->
                                </div>
                                <div class="post_text_area">
                                    <p>Phasellus pretium justo lacus, vitae condimentum metus pharetra et. Ut lacus
                                        magna, consequat sed urna id, lobortis feugiat nulla. Phasellus egestas in
                                        turpis faucibus ornare. Quisque fringilla, arcu ac posuere consectetur, nibh
                                        tortor tempus lorem, eget porttitor purus arcu sagittis purus. Nam tellus
                                        turpis, lobortis ac sapien adipiscing, porttitor accumsan lacus. Phasellus
                                        sodales euismod congue. Nam sagittis dolor eu lacus blandit porta. Donec mattis
                                        augue luctus ante porta pulvinar. Curabitur arcu odio, lacinia ut euismod vel,
                                        euismod at metus. Proin fermentum bibendum facilisis. Donec faucibus purus nec
                                        euismod gravida. Donec sed porta leo, quis tempus sapien. Praesent vitae nunc
                                        vel massa hendrerit congue ac nec ipsum. Maecenas nec risus a lorem malesuada
                                        laoreet. Sed quis ante mollis arcu tincidunt ullamcorper.</p>
                                    <div id="sc_gallery_1" class="sc_gallery columnsWrap">
                                        <h3><?= Yii::t('main', 'photo') ?></h3>
                                        <?php foreach ($files as $file): ?>
                                            <div class="columns1_5">
                                                <div class="galleryPic">
                                                    <div class="thumb hoverIncrease" data-image="<?= $file['path'] ?>"
                                                         data-title="<?= $file['filename'] ?>">
                                                        <img alt="-2278" src="<?= $file['path'] ?>">
                                                    </div>
                                                    <h4>&nbsp;</h4>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>

                                    </div>
                                </div>

                                <div class="clearfix"></div>

                                <div class="row" style="margin-bottom:100px;">
                                    <h3><?= Yii::t('main', 'video') ?></h3>

                                    <?php
                                    $videos = Functions::listGalleryVideo();
                                    ?>


                                    <div class="admin-image">
                                        <?php foreach ($videos as $item): ?>
                                            <div class="my-video">
                                                <video width="400" controls>
                                                    <source src="<?= $item['path'] ?>">
                                                </video>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </section>

                </aside>
            </div>
        </div>
    </div>


</div>