<div class="widgetTabs">
    <div id="topOfPage" class="topTabsWrap">
        <div class="main">
            <div class="speedBar">
                <a class="home" href="<?= \yii\helpers\Url::to(['/']) ?>"><?= Yii::t('main', 'home') ?></a>
                <span class="breadcrumbs_delimiter">
							<i class="icon-right-open-mini"></i>
						</span>
                <a class="all"
                   href="<?= \yii\helpers\Url::to('/performance/index') ?>"><?= Yii::t('main', 'Спектакли') ?></a>
                <span class="breadcrumbs_delimiter">
							<i class="icon-right-open-mini"></i>
						</span>
                <span class="current"><?= $performance->title; ?></span>
            </div>
            <h3 class="pageTitle h3"><?= Yii::t('main', 'Спектакли') ?></h3>
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
                                </div>
                                <h1 class="post_title entry-title"><?= $performance->title; ?></h1>

                                <div class="post_text_area">
                                    <p> <?= $performance->description ?></p>
                                    <h2><?= Yii::t('main', 'artists') ?></h2>
                                    <div>
                                        <?php if (!is_null($performance->performanceArtists)): ?>
                                            <div class="container blue_section">
                                                <div style="padding: 0 15px;">
                                                    <div class="sc_section bg_tint_dark">
                                                        <div class="sc_content main ">
                                                            <div class="sc_team no_padding margin_top_middle margin_bottom_m20">
                                                                <div class="sc_columns columnsWrap">
                                                                    <?php foreach ($artists as $performanceArtist): ?>
                                                                        <div class="columns1_4">
                                                                            <div class="sc_team_item sc_team_item_1 odd first">
                                                                                <div class="sc_team_item_avatar">
                                                                                    <img alt="<?= $performanceArtist->artist->photo_name ?>"
                                                                                         src="<?= '/' . $performanceArtist->artist->photo_path ?>">
                                                                                    <div class="sc_team_item_description">
                                                                                        <div class="sc_button sc_button_style_global sc_button_size_big squareButton fullSize global big">
                                                                                            <a href="#"
                                                                                               class="">More</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="sc_team_item_info">
                                                                                    <h3 class="sc_team_item_title"><?= $performanceArtist->artist->fullname ?></h3>
                                                                                    <div class="sc_team_item_position theme_accent2">
                                                                                        <?= substr($performanceArtist->artist->description, 0, 50) ?>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    <?php endforeach; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <br>
                                    <h2><?= Yii::t('main', 'Галерея') ?></h2>
                                    <div class='gallery gallery_style_1 galleryid-810 gallery-columns-6 gallery-size-thumbnail margin_bottom_mini'>
                                        <?php foreach ($files as $file): ?>
                                            <dl class='gallery-item'>
                                                <dt class='gallery-icon landscape'>
                                                    <a href='<?= $file['path'] ?>'>
                                                        <img src="<?= $file['path'] ?>"
                                                             class="attachment-thumbnail"
                                                             alt="<?= $file['filename'] ?>"/>
                                                    </a>
                                                </dt>
                                                <dd></dd>
                                            </dl>
                                        <?php endforeach; ?>
                                    </div>

                                </div>
                            </article>
                        </div>
                    </section>
                    <br><br>
                </aside>
            </div>
        </div>
    </div>
</div>