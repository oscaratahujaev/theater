<?php
/**
 * Created by PhpStorm.
 * User: m_toshpolatov
 * Date: 23.05.2018
 * Time: 9:22
 */ ?>

<div class="widgetTabs">
    <div id="topOfPage" class="topTabsWrap">
        <div class="main">
            <div class="speedBar">
                <a class="home" href="index-2.html">January</a>
                <span class="breadcrumbs_delimiter">
								<i class="icon-right-open-mini"></i>
							</span>
                <a class="all" href="#">All Posts</a>
                <span class="breadcrumbs_delimiter">
								<i class="icon-right-open-mini"></i>
							</span>
                <span class="current">Audio post example with cover image</span>
            </div>
            <h3 class="pageTitle h3">Audio post example with cover image</h3>
            <div class="tabsButton">
                <ul class="" role="tablist">
                    <li class="" role="tab">
                        <a href="#tabBlog">
                            <!--<span>Home</span>-->
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <div class="mainWrap without_sidebar">
        <div class="main">
            <div class="content">
                <h2 class="sc_title sc_title_regular aligncenter margin_bottom_small">Pricing tables</h2>

                <?php foreach ($repertiores as $index => $repertiore): ?>
                    <aside id="archives-<?= $index ?>" class="widgetTop widget widget_archive">
                        <h3 class="titleHide title"><?= $index ?></h3>
                        <div class="">
                            <div class="sc_pricing_table columns_4 alignCenter">
                                <?php foreach ($repertiore['values'] as $item): ?>
                                    <div class="sc_pricing_columns sc_pricing_column_1">
                                        <ul class="columnsAnimate repertuar">
                                            <li class="sc_pricing_data sc_pricing_title">Basic</li>
                                            <li class="sc_pricing_data sc_pricing_price">
                                                <div class="sc_price_item">
                                                    <span class="sc_price_currency">$</span>
                                                    <div class="sc_price_money">29</div>
                                                    <div class="sc_price_info">
                                                        <div class="sc_price_penny">99</div>
                                                        <div class="sc_price_period">monthly</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="sc_pricing_data">1 Website</li>
                                            <li class="sc_pricing_data">Unlimited Bandwidth</li>
                                            <li class="sc_pricing_data">100 GB Disk Space</li>
                                            <li class="sc_pricing_data">10 MySQL Databases</li>
                                            <li class="sc_pricing_data">100 Email Addresses</li>
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