<div class="widgetTabs">
    <div id="topOfPage" class="topTabsWrap">
        <div class="main">
            <div class="speedBar">
                <a class="home" href="<?= \yii\helpers\Url::to('/') ?>">Home</a>
                <span class="breadcrumbs_delimiter">
								<i class="icon-right-open-mini"></i>
							</span>
                <a class="<?= \yii\helpers\Url::to('/performance/') ?>" href="#">Performances</a>
                <span class="breadcrumbs_delimiter">
								<i class="icon-right-open-mini"></i>
							</span>
                <span class="current">Standard Gallery</span>
            </div>
            <h3 class="pageTitle h3">Standard Gallery</h3>
            <div class="tabsButton">
                <ul class="" role="tablist">
                    <li class="" role="tab">
                        <!-- <a href="#tabBlog">
                             <span></span>
                         </a>-->
                    </li>
                </ul>
            </div>
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
                                <h1 class="post_title entry-title"><?= $performance->title ?></h1>
                                <div class="post_text_area">
                                    <p> <?= $performance->description ?></p>


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

                                    <p>Proin leo tellus, sollicitudin ac vestibulum sed, blandit vel neque. Nunc
                                        sagittis mauris elementum elementum cursus. Curabitur in venenatis nisi, vel
                                        mattis mauris. Ut lacinia dictum neque ut varius. Nullam pharetra pellentesque
                                        auctor. In condimentum dolor id diam scelerisque, faucibus lacinia est aliquam.
                                        Ut ultrices ultrices egestas. Vivamus faucibus pretium ligula, quis sollicitudin
                                        justo semper et. Maecenas scelerisque orci tincidunt felis cursus, eu placerat
                                        mauris aliquet. Curabitur aliquam purus justo. Maecenas pulvinar congue ipsum,
                                        eu eleifend risus. Curabitur dignissim nulla sed posuere posuere. Vestibulum
                                        eget turpis enim.</p>
                                    <div class="tagsWrap">
                                        <div class="postSharing">
                                            <ul>
                                                <li class="squareButton light ico share">
                                                    <a class="icon-share shareDrop" title="Share" href="#">Share</a>
                                                    <ul class="share-social shareDrop">
                                                        <li>
                                                            <a href="#" class="share-item"
                                                               onclick="window.open('http://pinterest.com/', '_blank', 'scrollbars=0, resizable=1, menubar=0, left=100, top=100, width=480, height=400, toolbar=0, status=0'); return false;">
                                                                <img src="/images/pinterest_color.png" alt="pinterest">Pinterest</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="share-item"
                                                               onclick="window.open('https://twitter.com/', '_blank', 'scrollbars=0, resizable=1, menubar=0, left=100, top=100, width=480, height=400, toolbar=0, status=0'); return false;">
                                                                <img src="/images/twitter_color.png" alt="twitter">Twitter</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="share-item"
                                                               onclick="window.open('http://www.facebook.com/', '_blank', 'scrollbars=0, resizable=1, menubar=0, left=100, top=100, width=480, height=400, toolbar=0, status=0'); return false;">
                                                                <img src="/images/facebook_color.png" alt="facebook">Facebook</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="squareButton light ico">
                                                    <a class="icon-eye" title="Views - 178" href="#">178</a>
                                                </li>
                                                <li class="squareButton light ico">
                                                    <a class="icon-comment-1" title="Comments - 0" href="#">0</a>
                                                </li>
                                                <li class="squareButton light ico likeButton like" data-postid="810"
                                                    data-likes="0" data-title-like="Like" data-title-dislike="Dislike">
                                                    <a class="icon-heart-1" title="Like - 0" href="#">
                                                        <span class="likePost">0</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="infoPost">
                                            Tags: <a class="tag_link" href="#">post formats,</a>
                                            <a class="tag_link" href="#">gallery</a>
                                        </div>
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