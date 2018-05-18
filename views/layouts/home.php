<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\assets\HomeAsset;
use app\widgets\Footer;
use app\widgets\Header;
use yii\helpers\Html;

HomeAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="home page themerex_body fullscreen top_panel_above theme_skin_kidscare">
<?php $this->beginBody() ?>
<div class="main_content">
    <div class="boxedWrap">

        <!--Navigation Bar-->
        <?= Header::widget() ?>
        <!--Navigation Bar-->


        <!--Slider home page-->
        <div id="mainslider_1"
             class="sliderHomeBullets staticSlider slider_engine_revo slider_alias_revo-babbysitter mainslider_1">
            <div id="rev_slider_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
                <div id="rev_slider_1" class="rev_slider fullwidthabanner">
                    <ul>
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="300"
                            data-saveperformance="off">
                            <img src="images/transparent.png" alt="babbysitter-slider-ground"
                                 data-bgposition="center bottom" data-bgfit="normal" data-bgrepeat="no-repeat">
                            <div class="tp-caption _bs_slider_title tp-fade skewtorightshort tp-resizeme rs-parallaxlevel-0"
                                 data-x="center" data-hoffset="236" data-y="bottom" data-voffset="-397" data-speed="700"
                                 data-start="2000" data-easing="Power3.easeInOut" data-splitin="none"
                                 data-splitout="words" data-elementdelay="0.1" data-endelementdelay="0.1"
                                 data-endspeed="300">WE WILL TAKE CARE
                            </div>
                            <div class="tp-caption _bs_slider_title tp-fade skewtorightshort tp-resizeme rs-parallaxlevel-0"
                                 data-x="center" data-hoffset="180" data-y="bottom" data-voffset="-357" data-speed="700"
                                 data-start="2500" data-easing="Power3.easeInOut" data-splitin="none"
                                 data-splitout="words" data-elementdelay="0.1" data-endelementdelay="0.1"
                                 data-endspeed="300">OF YOUR KIDS
                            </div>
                            <div class="tp-caption _bs_slider_text tp-fade tp-resizeme rs-parallaxlevel-0"
                                 data-x="center" data-hoffset="241" data-y="bottom" data-voffset="-301" data-speed="700"
                                 data-start="3500" data-easing="Power3.easeInOut" data-splitin="none"
                                 data-splitout="none" data-elementdelay="0.2" data-endelementdelay="0.1"
                                 data-endspeed="300">Share this page with friends who need help, too.
                            </div>
                            <div class="tp-caption tp-fade rs-parallaxlevel-3" data-x="center" data-hoffset="-176"
                                 data-y="bottom" data-voffset="-126" data-speed="700" data-start="500"
                                 data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                 data-endspeed="300">
                                <div class="tp-layer-inner-rotation   rs-wave" data-speed="2" data-angle="0"
                                     data-radius="5" data-origin="50% 50%">
                                    <img src="images/babbysitter-slider-babby.png" alt="" data-ww="433" data-hh="391">
                                </div>
                            </div>
                            <div class="tp-caption lfl rs-parallaxlevel-3" data-x="center" data-hoffset="-492"
                                 data-y="bottom" data-voffset="-348" data-speed="1000" data-start="2500"
                                 data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                 data-endspeed="300">
                                <div class="tp-layer-inner-rotation   rs-slideloop" data-easing="Power3.easeInOut"
                                     data-speed="2" data-xs="-10" data-xe="10" data-ys="0" data-ye="0">
                                    <img src="images/babbysitter-slider-cloud-1a.png" alt="">
                                </div>
                            </div>
                            <div class="tp-caption lft rs-parallaxlevel-4" data-x="center" data-hoffset="-73"
                                 data-y="bottom" data-voffset="-548" data-speed="1000" data-start="3500"
                                 data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                 data-endspeed="300">
                                <div class="tp-layer-inner-rotation   rs-slideloop" data-easing="Power3.easeInOut"
                                     data-speed="2" data-xs="-15" data-xe="15" data-ys="0" data-ye="0">
                                    <img src="images/babbysitter-slider-cloud-2a.png" alt="">
                                </div>
                            </div>
                            <div class="tp-caption lfl rs-parallaxlevel-3" data-x="center" data-hoffset="373"
                                 data-y="bottom" data-voffset="-123" data-speed="1000" data-start="4500"
                                 data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                 data-endspeed="300">
                                <div class="tp-layer-inner-rotation   rs-slideloop" data-easing="Power3.easeInOut"
                                     data-speed="2" data-xs="-10" data-xe="10" data-ys="0" data-ye="0">
                                    <img src="images/babbysitter-slider-cloud-3a.png" alt="">
                                </div>
                            </div>
                            <div class="tp-caption tp-fade rs-parallaxlevel-5" data-x="center" data-hoffset="-487"
                                 data-y="bottom" data-voffset="-251" data-speed="1000" data-start="1200"
                                 data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                 data-endspeed="300">
                                <div class="tp-layer-inner-rotation   rs-pulse" data-easing="Power3.easeInOut"
                                     data-speed="2" data-zoomstart="1" data-zoomend="1.4">
                                    <img src="images/babbysitter-slider-star-1.png" alt="">
                                </div>
                            </div>
                            <div class="tp-caption tp-fade rs-parallaxlevel-6" data-x="center" data-hoffset="-373"
                                 data-y="bottom" data-voffset="-533" data-speed="1000" data-start="2000"
                                 data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                 data-endspeed="300">
                                <div class="tp-layer-inner-rotation   rs-pulse" data-easing="Power3.easeInOut"
                                     data-speed="2" data-zoomstart="1" data-zoomend="1.4">
                                    <img src="images/babbysitter-slider-star-2.png" alt="">
                                </div>
                            </div>
                            <div class="tp-caption tp-fade rs-parallaxlevel-7" data-x="center" data-hoffset="-57"
                                 data-y="bottom" data-voffset="-491" data-speed="1000" data-start="3000"
                                 data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                 data-endspeed="300">
                                <div class="tp-layer-inner-rotation   rs-pulse" data-easing="Power3.easeInOut"
                                     data-speed="2" data-zoomstart="1" data-zoomend="1.4">
                                    <img src="images/babbysitter-slider-star-3.png" alt="">
                                </div>
                            </div>
                            <div class="tp-caption tp-fade rs-parallaxlevel-6" data-x="center" data-hoffset="198"
                                 data-y="bottom" data-voffset="-553" data-speed="1000" data-start="4000"
                                 data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                 data-endspeed="300">
                                <div class="tp-layer-inner-rotation   rs-pulse" data-easing="Power3.easeInOut"
                                     data-speed="2" data-zoomstart="1" data-zoomend="1.4">
                                    <img src="images/babbysitter-slider-star-4.png" alt="">
                                </div>
                            </div>
                            <div class="tp-caption tp-fade rs-parallaxlevel-5" data-x="center" data-hoffset="484"
                                 data-y="bottom" data-voffset="-579" data-speed="1000" data-start="5000"
                                 data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                 data-endspeed="300">
                                <div class="tp-layer-inner-rotation   rs-pulse" data-easing="Power3.easeInOut"
                                     data-speed="2" data-zoomstart="1" data-zoomend="1.4">
                                    <img src="images/babbysitter-slider-star-5.png" alt="">
                                </div>
                            </div>
                            <div class="tp-caption customin customout rs-parallaxlevel-10" data-x="center"
                                 data-hoffset="412" data-y="bottom" data-voffset="-485"
                                 data-customin="x:-300;y:700;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-customout="x:70;y:-150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.01;scaleY:0.01;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="3500" data-start="2500" data-easing="Power0.easeIn" data-elementdelay="0.1"
                                 data-endelementdelay="0.1" data-end="6000" data-endspeed="1000"
                                 data-endeasing="Power0.easeInOut">
                                <img src="images/babbysitter-slider-rocket.png" alt="">
                            </div>
                            <div class="tp-caption _bs_slider_text tp-fade tp-resizeme rs-parallaxlevel-0"
                                 data-x="center" data-hoffset="144" data-y="bottom" data-voffset="-233" data-speed="700"
                                 data-start="3900" data-easing="Power3.easeInOut" data-splitin="none"
                                 data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                                 data-endspeed="300" data-captionhidden="on">
                                <a href='#'>
                                    <img src='images/social-icon-1.png' alt=''>
                                </a>
                                <a href='#'>
                                    <img src='images/social-icon-2.png' alt=''>
                                </a>
                                <a href='#'>
                                    <img src='images/social-icon-3.png' alt=''>
                                </a>
                                <a href='#'>
                                    <img src='images/social-icon-4.png' alt=''>
                                </a>
                            </div>
                            <div class="tp-caption tp-fade rs-parallaxlevel-0" data-x="center" data-hoffset="0"
                                 data-y="bottom" data-voffset="40" data-speed="300" data-start="0"
                                 data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                 data-endspeed="300">
                                <img src="images/babbysitter-slider-ground-3.png" alt="">
                            </div>
                        </li>
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="300"
                            data-saveperformance="off">
                            <img src="images/transparent.png" alt="babbysitter-slider-ground"
                                 data-bgposition="center bottom" data-bgfit="normal" data-bgrepeat="no-repeat">
                            <div class="tp-caption _bs_slider_title tp-fade skewtorightshort tp-resizeme rs-parallaxlevel-0"
                                 data-x="center" data-hoffset="221" data-y="bottom" data-voffset="-410" data-speed="700"
                                 data-start="2000" data-easing="Power3.easeInOut" data-splitin="none"
                                 data-splitout="words" data-elementdelay="0.1" data-endelementdelay="0.1"
                                 data-endspeed="300">MULTIFUNCTIONAL
                            </div>
                            <div class="tp-caption _bs_slider_title tp-fade skewtorightshort tp-resizeme rs-parallaxlevel-0"
                                 data-x="center" data-hoffset="124" data-y="bottom" data-voffset="-370" data-speed="700"
                                 data-start="2500" data-easing="Power3.easeInOut" data-splitin="none"
                                 data-splitout="words" data-elementdelay="0.1" data-endelementdelay="0.1"
                                 data-endspeed="300">WEBSITE
                            </div>
                            <div class="tp-caption _bs_slider_text tp-fade tp-resizeme rs-parallaxlevel-0"
                                 data-x="center" data-hoffset="190" data-y="bottom" data-voffset="-320" data-speed="700"
                                 data-start="3500" data-easing="Power3.easeInOut" data-splitin="none"
                                 data-splitout="none" data-elementdelay="0.2" data-endelementdelay="0.1"
                                 data-endspeed="300">Optimized for Work with Touchscreen
                            </div>
                            <div class="tp-caption sft rs-parallaxlevel-6" data-x="center" data-hoffset="-323"
                                 data-y="bottom" data-voffset="-359" data-speed="1000" data-start="2000"
                                 data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                 data-endspeed="300">
                                <div class="tp-layer-inner-rotation   rs-pulse" data-easing="Power3.easeInOut"
                                     data-speed="2" data-zoomstart="1" data-zoomend="1.1">
                                    <img src="images/babbysitter-slider-sun.png" alt="">
                                </div>
                            </div>
                            <div class="tp-caption lfb fadeout rs-parallaxlevel-0" data-x="center" data-hoffset="-170"
                                 data-y="bottom" data-voffset="180" data-speed="700" data-start="900"
                                 data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                 data-endspeed="300">
                                <img src="images/babbysitter-slider-girl.png" alt="">
                            </div>
                            <div class="tp-caption lfl rs-parallaxlevel-3" data-x="center" data-hoffset="-492"
                                 data-y="bottom" data-voffset="-348" data-speed="1000" data-start="2500"
                                 data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                 data-endspeed="300">
                                <div class="tp-layer-inner-rotation   rs-slideloop" data-easing="Power3.easeInOut"
                                     data-speed="2" data-xs="-10" data-xe="10" data-ys="0" data-ye="0">
                                    <img src="images/babbysitter-slider-cloud-1a.png" alt="">
                                </div>
                            </div>
                            <div class="tp-caption lft rs-parallaxlevel-4" data-x="center" data-hoffset="-73"
                                 data-y="bottom" data-voffset="-548" data-speed="1000" data-start="3500"
                                 data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                 data-endspeed="300">
                                <div class="tp-layer-inner-rotation   rs-slideloop" data-easing="Power3.easeInOut"
                                     data-speed="2" data-xs="-15" data-xe="15" data-ys="0" data-ye="0">
                                    <img src="images/babbysitter-slider-cloud-2a.png" alt="">
                                </div>
                            </div>
                            <div class="tp-caption lfl rs-parallaxlevel-5" data-x="center" data-hoffset="470"
                                 data-y="bottom" data-voffset="-440" data-speed="1000" data-start="4500"
                                 data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                 data-endspeed="300">
                                <div class="tp-layer-inner-rotation   rs-slideloop" data-easing="Power3.easeInOut"
                                     data-speed="5" data-xs="-10" data-xe="10" data-ys="0" data-ye="0">
                                    <img src="images/babbysitter-slider-cloud-1a.png" alt="" data-ww="166.9390243902439"
                                         data-hh="486">
                                </div>
                            </div>
                            <div class="tp-caption customin customout rs-parallaxlevel-10" data-x="center"
                                 data-hoffset="300" data-y="bottom" data-voffset="-85"
                                 data-customin="x:500;y:-100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-customout="x:-550;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.01;scaleY:0.01;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="3500" data-start="2450" data-easing="Power0.easeIn" data-elementdelay="0.1"
                                 data-endelementdelay="0.1" data-endspeed="1000" data-endeasing="Power0.easeInOut">
                                <div class="tp-layer-inner-rotation   rs-wave" data-speed="1" data-angle="0"
                                     data-radius="3" data-origin="3% 3%">
                                    <img src="images/babbysitter-slider-ufo.png" alt="">
                                </div>
                            </div>
                            <div class="tp-caption _bs_slider_text tp-fade tp-resizeme rs-parallaxlevel-0"
                                 data-x="center" data-hoffset="120" data-y="bottom" data-voffset="-180" data-speed="300"
                                 data-start="4500" data-easing="Power3.easeInOut" data-splitin="none"
                                 data-splitout="none" data-elementdelay="0.2" data-endelementdelay="0.1"
                                 data-endspeed="300">
                                <div class="sc_button sc_button_style_global sc_button_size_huge alignright curveButton right squareButton global huge">
                                    <a href="#" class="">Buy Now</a>
                                </div>
                            </div>
                            <div class="tp-caption tp-fade rs-parallaxlevel-0" data-x="center" data-hoffset="0"
                                 data-y="bottom" data-voffset="40" data-speed="300" data-start="0"
                                 data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                 data-endspeed="300">
                                <img src="images/babbysitter-slider-ground-3.png" alt="">
                            </div>
                        </li>
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="300"
                            data-saveperformance="off">
                            <img src="images/transparent.png" alt="babbysitter-slider-ground"
                                 data-bgposition="center bottom" data-bgfit="normal" data-bgrepeat="no-repeat">
                            <div class="tp-caption tp-fade rs-parallaxlevel-0" data-x="center" data-hoffset="57"
                                 data-y="bottom" data-voffset="10" data-speed="1300" data-start="500"
                                 data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                 data-endspeed="300">
                                <img src="images/babbysitter-slider-boy.png" alt="">
                            </div>
                            <div class="tp-caption _bs_slider_title tp-fade skewtorightshort tp-resizeme rs-parallaxlevel-0"
                                 data-x="center" data-hoffset="-351" data-y="bottom" data-voffset="-415"
                                 data-speed="700" data-start="2000" data-easing="Power3.easeInOut" data-splitin="none"
                                 data-splitout="words" data-elementdelay="0.1" data-endelementdelay="0.1"
                                 data-endspeed="300">NEED SUPPORT HELP?
                            </div>
                            <div class="tp-caption _bs_slider_text_big tp-fade tp-resizeme rs-parallaxlevel-0"
                                 data-x="center" data-hoffset="-430" data-y="bottom" data-voffset="-375"
                                 data-speed="700" data-start="3500" data-easing="Power3.easeInOut" data-splitin="none"
                                 data-splitout="none" data-elementdelay="0.2" data-endelementdelay="0.1"
                                 data-endspeed="300">Go To Axiom Tickets!
                            </div>
                            <div class="tp-caption lfr rs-parallaxlevel-3" data-x="center" data-hoffset="-485"
                                 data-y="bottom" data-voffset="-520" data-speed="1000" data-start="2500"
                                 data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                 data-endspeed="300">
                                <div class="tp-layer-inner-rotation   rs-wave" data-speed="2" data-angle="0"
                                     data-radius="10" data-origin="50% 50%">
                                    <img src="images/babbysitter-slider-butterfly-1.png" alt="">
                                </div>
                            </div>
                            <div class="tp-caption lft rs-parallaxlevel-1" data-x="center" data-hoffset="-141"
                                 data-y="bottom" data-voffset="-151" data-speed="1000" data-start="3500"
                                 data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                 data-endspeed="300">
                                <div class="tp-layer-inner-rotation   rs-wave" data-speed="2" data-angle="0"
                                     data-radius="10" data-origin="50% 50%">
                                    <img src="images/babbysitter-slider-butterfly-2.png" alt="">
                                </div>
                            </div>
                            <div class="tp-caption lfl rs-parallaxlevel-2" data-x="center" data-hoffset="233"
                                 data-y="bottom" data-voffset="-376" data-speed="1000" data-start="4500"
                                 data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                 data-endspeed="300">
                                <div class="tp-layer-inner-rotation   rs-wave" data-speed="5" data-angle="0"
                                     data-radius="10" data-origin="50% 50%">
                                    <img src="images/babbysitter-slider-butterfly-3.png" alt="">
                                </div>
                            </div>
                            <div class="tp-caption _bs_slider_text tp-fade tp-resizeme rs-parallaxlevel-0"
                                 data-x="center" data-hoffset="-435" data-y="bottom" data-voffset="-200"
                                 data-speed="300" data-start="4500" data-easing="Power3.easeInOut" data-splitin="none"
                                 data-splitout="none" data-elementdelay="0.2" data-endelementdelay="0.1"
                                 data-endspeed="300">
                                <div class="sc_button sc_button_style_global sc_button_size_banner alignright curveButton right squareButton global banner">
                                    <a href="http://axiom.ticksy.com/" class="">Open ticket</a>
                                </div>
                            </div>
                            <div class="tp-caption tp-fade rs-parallaxlevel-0" data-x="center" data-hoffset="0"
                                 data-y="bottom" data-voffset="40" data-speed="300" data-start="0"
                                 data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                 data-endspeed="300">
                                <img src="images/babbysitter-slider-ground-3.png" alt="">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Slider home page-->
        <div class="content">
            <section class="post no_padding">
                <div class="container">

                    <div class="">
                        <h2 class="sc_title sc_title_regular aligncenter margin_bottom_small">Pricing tables</h2>
                        <div class="sc_pricing_table columns_4 alignCenter">
                            <div class="sc_pricing_columns sc_pricing_column_1">
                                <ul class="columnsAnimate">
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
                            <div class="sc_pricing_columns sc_pricing_column_2">
                                <ul class="columnsAnimate">
                                    <li class="sc_pricing_data sc_pricing_title">Standard</li>
                                    <li class="sc_pricing_data sc_pricing_price">
                                        <div class="sc_price_item">
                                            <span class="sc_price_currency">$</span>
                                            <div class="sc_price_money">39</div>
                                            <div class="sc_price_info">
                                                <div class="sc_price_penny">99</div>
                                                <div class="sc_price_period">monthly</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="sc_pricing_data">10 Websites</li>
                                    <li class="sc_pricing_data">Unlimited Bandwidth</li>
                                    <li class="sc_pricing_data">1 TB Disk Space</li>
                                    <li class="sc_pricing_data">100 MySQL databases</li>
                                    <li class="sc_pricing_data">1000 Email Addresses</li>
                                </ul>
                            </div>
                            <div class="sc_pricing_columns sc_pricing_column_3">
                                <ul class="columnsAnimate">
                                    <li class="sc_pricing_data sc_pricing_title">Premium</li>
                                    <li class="sc_pricing_data sc_pricing_price">
                                        <div class="sc_price_item">
                                            <span class="sc_price_currency">$</span>
                                            <div class="sc_price_money">49</div>
                                            <div class="sc_price_info">
                                                <div class="sc_price_penny">99</div>
                                                <div class="sc_price_period">monthly</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="sc_pricing_data">50 Websites</li>
                                    <li class="sc_pricing_data">Unlimited Bandwidth</li>
                                    <li class="sc_pricing_data">Unlimited Disk Space</li>
                                    <li class="sc_pricing_data">100 MySQL Databases</li>
                                    <li class="sc_pricing_data">5000 Email Addresses</li>
                                </ul>
                            </div>
                            <div class="sc_pricing_columns sc_pricing_column_4">
                                <ul class="columnsAnimate">
                                    <li class="sc_pricing_data sc_pricing_title">Gold</li>
                                    <li class="sc_pricing_data sc_pricing_price">
                                        <div class="sc_price_item">
                                            <span class="sc_price_currency">$</span>
                                            <div class="sc_price_money">59</div>
                                            <div class="sc_price_info">
                                                <div class="sc_price_penny">99</div>
                                                <div class="sc_price_period">monthly</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="sc_pricing_data">Unlimited Websites</li>
                                    <li class="sc_pricing_data">Unlimited Bandwidth</li>
                                    <li class="sc_pricing_data">Unlimited Disk Space</li>
                                    <li class="sc_pricing_data">Unlimited MySQL Databases</li>
                                    <li class="sc_pricing_data">Unlimited Email Addresses</li>
                                </ul>
                            </div>
                        </div>
                        <div class="sc_line sc_line_style_solid margin_top_big margin_bottom_big"></div>
                    </div>

                    <div class="">
                        <div class="sc_pricing_table columns_5 alignCenter">
                            <div class="sc_pricing_columns sc_pricing_column_1">
                                <ul>
                                    <li class="sc_pricing_data sc_pricing_united">Choose Your Plan</li>
                                    <li class="sc_pricing_data">Amount of space</li>
                                    <li class="sc_pricing_data">Bandwidth per month</li>
                                    <li class="sc_pricing_data">Free domain names</li>
                                    <li class="sc_pricing_data">phpMyAdmin</li>
                                    <li class="sc_pricing_data">24h Support</li>
                                    <li class="sc_pricing_data sc_pricing_footer">
                                    </li>
                                </ul>
                            </div>
                            <div class="sc_pricing_columns sc_pricing_column_2">
                                <ul class="columnsAnimate">
                                    <li class="sc_pricing_data sc_pricing_title">Basic</li>
                                    <li class="sc_pricing_data sc_pricing_price">
                                        <div class="sc_price_item">
                                            <span class="sc_price_currency">$</span>
                                            <div class="sc_price_money">19</div>
                                            <div class="sc_price_info">
                                                <div class="sc_price_penny">99</div>
                                                <div class="sc_price_period">Monthly</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="sc_pricing_data">UNLIMITED</li>
                                    <li class="sc_pricing_data">100 GB</li>
                                    <li class="sc_pricing_data">3 Free</li>
                                    <li class="sc_pricing_data">
													<span class="sc_icon icon-cancel">
													</span>
                                    </li>
                                    <li class="sc_pricing_data">
													<span class="sc_icon icon-cancel">
													</span>
                                    </li>
                                    <li class="sc_pricing_data sc_pricing_footer">
                                        <div class="sc_button sc_button_style_global sc_button_size_medium squareButton global medium">
                                            <a href="#" class="">Sign Up</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sc_pricing_columns sc_pricing_column_3">
                                <ul class="columnsAnimate">
                                    <li class="sc_pricing_data sc_pricing_title">Standard</li>
                                    <li class="sc_pricing_data sc_pricing_price">
                                        <div class="sc_price_item">
                                            <span class="sc_price_currency">$</span>
                                            <div class="sc_price_money">59</div>
                                            <div class="sc_price_info">
                                                <div class="sc_price_penny">99</div>
                                                <div class="sc_price_period">Monthly</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="sc_pricing_data">UNLIMITED</li>
                                    <li class="sc_pricing_data">500 GB</li>
                                    <li class="sc_pricing_data">6 Free</li>
                                    <li class="sc_pricing_data">
													<span class="sc_icon icon-ok">
													</span>
                                    </li>
                                    <li class="sc_pricing_data">
													<span class="sc_icon icon-cancel">
													</span>
                                    </li>
                                    <li class="sc_pricing_data sc_pricing_footer">
                                        <div class="sc_button sc_button_style_global sc_button_size_medium squareButton global medium">
                                            <a href="#" class="">Sign Up</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sc_pricing_columns sc_pricing_column_4">
                                <ul class="columnsAnimate">
                                    <li class="sc_pricing_data sc_pricing_title">Premium</li>
                                    <li class="sc_pricing_data sc_pricing_price">
                                        <div class="sc_price_item">
                                            <span class="sc_price_currency">$</span>
                                            <div class="sc_price_money">79</div>
                                            <div class="sc_price_info">
                                                <div class="sc_price_penny">99</div>
                                                <div class="sc_price_period">Monthly</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="sc_pricing_data">UNLIMITED</li>
                                    <li class="sc_pricing_data">1 TB</li>
                                    <li class="sc_pricing_data">10 Free</li>
                                    <li class="sc_pricing_data">
													<span class="sc_icon icon-ok">
													</span>
                                    </li>
                                    <li class="sc_pricing_data">
													<span class="sc_icon icon-ok">
													</span>
                                    </li>
                                    <li class="sc_pricing_data sc_pricing_footer">
                                        <div class="sc_button sc_button_style_global sc_button_size_medium squareButton global medium">
                                            <a href="#" class="">Sign Up</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sc_pricing_columns sc_pricing_column_5">
                                <ul class="columnsAnimate">
                                    <li class="sc_pricing_data sc_pricing_title">Gold</li>
                                    <li class="sc_pricing_data sc_pricing_price">
                                        <div class="sc_price_item">
                                            <span class="sc_price_currency">$</span>
                                            <div class="sc_price_money">99</div>
                                            <div class="sc_price_info">
                                                <div class="sc_price_penny">99</div>
                                                <div class="sc_price_period">Monthly</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="sc_pricing_data">UNLIMITED</li>
                                    <li class="sc_pricing_data">UNLIMITED</li>
                                    <li class="sc_pricing_data">UNLIMITED</li>
                                    <li class="sc_pricing_data">
													<span class="sc_icon icon-ok">
													</span>
                                    </li>
                                    <li class="sc_pricing_data">
													<span class="sc_icon icon-ok">
													</span>
                                    </li>
                                    <li class="sc_pricing_data sc_pricing_footer">
                                        <div class="sc_button sc_button_style_global sc_button_size_medium squareButton global medium">
                                            <a href="#" class="">Sign Up</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sc_line sc_line_style_solid margin_top_big margin_bottom_big">
                        </div>
                    </div>

                    <div class="">
                        <div class="sc_pricing_table columns_4 alignCenter">
                            <div class="sc_pricing_columns sc_pricing_column_1">
                                <ul>
                                    <li class="sc_pricing_data sc_pricing_title_img">
                                        <img src="images/kidscare-fullscreen-slide-2.jpg" alt=""/>
                                    </li>
                                    <li class="sc_pricing_data sc_pricing_price">
                                        <div class="sc_price_item">
                                            <span class="sc_price_currency">$</span>
                                            <div class="sc_price_money">29</div>
                                            <div class="sc_price_info">
                                                <div class="sc_price_penny">99</div>
                                                <div class="sc_price_period">Monthly</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="sc_pricing_data">10 Splendide philosophia et</li>
                                    <li class="sc_pricing_data">Cum at probo / minimum</li>
                                    <li class="sc_pricing_data">Falli libris has id facer</li>
                                    <li class="sc_pricing_data">Pertinax vel eum ne molestie</li>
                                    <li class="sc_pricing_data sc_pricing_footer">
                                        <div class="sc_button sc_button_style_global sc_button_size_medium squareButton global medium">
                                            <a href="#" class="">Sign Up</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sc_pricing_columns sc_pricing_column_2">
                                <ul>
                                    <li class="sc_pricing_data sc_pricing_title_img">
                                        <img src="images/kidscare-fullscreen-slide-3.jpg" alt=""/>
                                    </li>
                                    <li class="sc_pricing_data sc_pricing_price">
                                        <div class="sc_price_item">
                                            <span class="sc_price_currency">$</span>
                                            <div class="sc_price_money">39</div>
                                            <div class="sc_price_info">
                                                <div class="sc_price_penny">99</div>
                                                <div class="sc_price_period">Monthly</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="sc_pricing_data">50 Splendide philosophia et</li>
                                    <li class="sc_pricing_data">Cum at probo / minimum</li>
                                    <li class="sc_pricing_data">Falli libris has id facer</li>
                                    <li class="sc_pricing_data">Pertinax vel eum ne molestie</li>
                                    <li class="sc_pricing_data sc_pricing_footer">
                                        <div class="sc_button sc_button_style_global sc_button_size_medium squareButton global medium">
                                            <a href="#" class="">Sign Up</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sc_pricing_columns sc_pricing_column_3">
                                <ul>
                                    <li class="sc_pricing_data sc_pricing_title_img">
                                        <img src="images/kidscare-19.jpg" alt=""/>
                                    </li>
                                    <li class="sc_pricing_data sc_pricing_price">
                                        <div class="sc_price_item">
                                            <span class="sc_price_currency">$</span>
                                            <div class="sc_price_money">49</div>
                                            <div class="sc_price_info">
                                                <div class="sc_price_penny">99</div>
                                                <div class="sc_price_period">Monthly</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="sc_pricing_data">100 Splendide philosophia et</li>
                                    <li class="sc_pricing_data">Cum at probo / minimum</li>
                                    <li class="sc_pricing_data">Falli libris has id facer</li>
                                    <li class="sc_pricing_data">Pertinax vel eum ne molestie</li>
                                    <li class="sc_pricing_data sc_pricing_footer">
                                        <div class="sc_button sc_button_style_global sc_button_size_medium squareButton global medium">
                                            <a href="#" class="">Sign Up</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sc_pricing_columns sc_pricing_column_4">
                                <ul>
                                    <li class="sc_pricing_data sc_pricing_title_img">
                                        <img src="images/kidscare-17.jpg" alt=""/>
                                    </li>
                                    <li class="sc_pricing_data sc_pricing_price">
                                        <div class="sc_price_item">
                                            <span class="sc_price_currency">$</span>
                                            <div class="sc_price_money">59</div>
                                            <div class="sc_price_info">
                                                <div class="sc_price_penny">99</div>
                                                <div class="sc_price_period">Monthly</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="sc_pricing_data">200 Splendide philosophia et</li>
                                    <li class="sc_pricing_data">Cum at probo / minimum</li>
                                    <li class="sc_pricing_data">Falli libris has id facer</li>
                                    <li class="sc_pricing_data">Pertinax vel eum ne molestie</li>
                                    <li class="sc_pricing_data sc_pricing_footer">
                                        <div class="sc_button sc_button_style_global sc_button_size_medium squareButton global medium">
                                            <a href="#" class="">Sign Up</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </div>
        <!--Main Content-->
        <div class="mainWrap without_sidebar">
            <div class="content">
                <div class="">
                    <section class="post post_format_standard postAlter no_margin page type-page">
                        <article class="post_content">
                            <div class="post_text_area">
                                <!--Book A ticket-->
                                <section class="green_section">
                                    <div class="container container_style_1">
                                        <div class="">
                                            <div class="sc_section bg_tint_dark">
                                                <div class="sc_content main ">
                                                    <div class="columnsWrap sc_columns sc_columns_count_5">
                                                        <div class="columns3_5 sc_column_item sc_column_item_1 odd first span_3">
                                                            <h3 class="sc_title sc_title_regular style_1 font_ubuntu title_type_2">
                                                                Find a babysitter for your kids during the holidays so
                                                                you can shop, attend parties and wrap presents!</h3>
                                                        </div>
                                                        <div class="columns2_5 sc_column_item sc_column_item_4 even span_2 after_span_3">
                                                            <div class="sc_button sc_button_style_global sc_button_size_banner alignright curveButton squareButton global banner margin_bottom_none">
                                                                <a href="#" class="">Book a Sitter</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!--Book A ticket-->

                                <!--Service Icons-->
                                <section class="">
                                    <div class="container container_style_2">
                                        <div class="">
                                            <div class="sc_content main ">
                                                <div class="columnsWrap sc_columns sc_columns_count_5">
                                                    <div class="columns1_5 sc_column_item sc_column_item_1 odd first">
                                                        <a href="#">
                                                            <div class="sc_title_icon sc_title_top sc_size_huge">
                                                                <img src="images/babbysitter-icon-1.png" alt=""/>
                                                            </div>
                                                            <h6 class="sc_title sc_title_iconed style_1">Funny
                                                                educational games</h6>
                                                        </a>
                                                    </div>
                                                    <div class="columns1_5 sc_column_item sc_column_item_2 even">
                                                        <a href="#">
                                                            <div class="sc_title_icon sc_title_top sc_size_huge">
                                                                <img src="images/babbysitter-icon-2.png" alt=""/>
                                                            </div>
                                                            <h6 class="sc_title sc_title_iconed style_1">Outside
                                                                activities</h6>
                                                        </a>
                                                    </div>
                                                    <div class="columns1_5 sc_column_item sc_column_item_3 odd">
                                                        <a href="#">
                                                            <div class="sc_title_icon sc_title_top sc_size_huge">
                                                                <img src="images/babbysitter-icon-3.png" alt=""/>
                                                            </div>
                                                            <h6 class="sc_title sc_title_iconed style_1">Babysitter last
                                                                minute service</h6>
                                                        </a>
                                                    </div>
                                                    <div class="columns1_5 sc_column_item sc_column_item_4 even">
                                                        <a href="#">
                                                            <div class="sc_title_icon sc_title_top sc_size_huge">
                                                                <img src="images/babbysitter-icon-4.png" alt=""/>
                                                            </div>
                                                            <h6 class="sc_title sc_title_iconed style_1">Drawing,
                                                                coloring, and painting</h6>
                                                        </a>
                                                    </div>
                                                    <div class="columns1_5 sc_column_item sc_column_item_5 odd">
                                                        <a href="#">
                                                            <div class="sc_title_icon sc_title_top sc_size_huge">
                                                                <img src="images/babbysitter-icon-5.png" alt=""/>
                                                            </div>
                                                            <h6 class="sc_title sc_title_iconed style_1">Book a
                                                                Sitter!</h6>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!--Service Icons-->

                                <!--Sky Blue Section-->
                                <section class="no_padding skyblue_section">
                                    <div class="container">
                                        <div class="">
                                            <div class="sc_parallax dark" data-parallax-speed="0.3"
                                                 data-parallax-x-pos="50%" data-parallax-y-pos="50%">
                                                <div class="sc_parallax_content parallax_image_1">
                                                    <div class="sc_content main ">
                                                        <div class="columnsWrap sc_columns sc_columns_count_2">
                                                            <div class="columns1_2 sc_column_item sc_column_item_1 odd first">
                                                            </div>
                                                            <div class="columns1_2 sc_column_item sc_column_item_2 even">
                                                                <h1 class="sc_title style_2 sc_title_regular font_ubuntu text_uppercase title_type_1">
                                                                    Pre-screened, qualified and responsible
                                                                    babysitter</h1>
                                                                <div class="text_md">
                                                                    <p>Find great child care for your family at
                                                                        reasonable price. Simply drop us a few lines and
                                                                        we will pick the best option for you.</p>
                                                                </div>
                                                                <div class="sc_button sc_button_style_global sc_button_size_huge curveButton squareButton global huge">
                                                                    <a href="#" class="">Purchase</a>
                                                                </div>
                                                                <div class="sc_button sc_button_style_global sc_button_size_huge curveButton right short squareButton global huge">
                                                                    <a href="#" class="">More</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!--Sky Blue Section-->


                                <!--Available BabySitters-->
                                <section class="blue_section">
                                    <div class="container">
                                        <div class="">
                                            <div class="sc_section bg_tint_dark">
                                                <div class="sc_content main ">
                                                    <h2 class="sc_title sc_title_regular aligncenter">Available
                                                        Babysitters</h2>
                                                    <div class="sc_team no_padding margin_top_middle margin_bottom_m20">
                                                        <div class="sc_columns columnsWrap">
                                                            <div class="columns1_4">
                                                                <div class="sc_team_item sc_team_item_1 odd first">
                                                                    <div class="sc_team_item_avatar">
                                                                        <img alt="babbysitter-team-1.jpg"
                                                                             src="images/babbysitter-team-11-370x370.jpg">
                                                                        <div class="sc_team_item_description">
                                                                            <div class="sc_button sc_button_style_global sc_button_size_big squareButton fullSize global big">
                                                                                <a href="#" class="">Book Now</a></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sc_team_item_info">
                                                                        <h3 class="sc_team_item_title">Kristan W.</h3>
                                                                        <div class="sc_team_item_position theme_accent2">
                                                                            After School Babysitter
                                                                        </div>
                                                                        <ul class="sc_team_item_socials">
                                                                            <li>
                                                                                <a href="#"
                                                                                   class="social_icons social_twitter twitter twitter_image"
                                                                                   target="_blank">
                                                                                    <span></span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"
                                                                                   class="social_icons social_facebook facebook facebook_image"
                                                                                   target="_blank">
                                                                                    <span></span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"
                                                                                   class="social_icons social_gplus gplus gplus_image"
                                                                                   target="_blank">
                                                                                    <span></span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="columns1_4">
                                                                <div class="sc_team_item sc_team_item_2 even">
                                                                    <div class="sc_team_item_avatar">
                                                                        <img alt="babbysitter-team-2.jpg"
                                                                             src="images/babbysitter-team-21-370x370.jpg">
                                                                        <div class="sc_team_item_description">
                                                                            <div class="sc_button sc_button_style_global sc_button_size_big squareButton fullSize global big">
                                                                                <a href="#" class="">Book Now</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sc_team_item_info">
                                                                        <h3 class="sc_team_item_title">Valerie C.</h3>
                                                                        <div class="sc_team_item_position theme_accent2">
                                                                            Before School Babysitter
                                                                        </div>
                                                                        <ul class="sc_team_item_socials">
                                                                            <li>
                                                                                <a href="#"
                                                                                   class="social_icons social_facebook facebook facebook_image"
                                                                                   target="_blank">
                                                                                    <span></span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"
                                                                                   class="social_icons social_twitter twitter twitter_image"
                                                                                   target="_blank">
                                                                                    <span></span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"
                                                                                   class="social_icons social_gplus gplus gplus_image"
                                                                                   target="_blank">
                                                                                    <span></span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"
                                                                                   class="social_icons social_dribbble dribbble dribbble_image"
                                                                                   target="_blank">
                                                                                    <span></span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="columns1_4">
                                                                <div class="sc_team_item sc_team_item_3 odd">
                                                                    <div class="sc_team_item_avatar">
                                                                        <img alt="babbysitter-team-3.jpg"
                                                                             src="images/babbysitter-team-31-370x370.jpg">
                                                                        <div class="sc_team_item_description">
                                                                            <div class="sc_button sc_button_style_global sc_button_size_big squareButton fullSize global big">
                                                                                <a href="#" class="">Book Now</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sc_team_item_info">
                                                                        <h3 class="sc_team_item_title">Rachel H.</h3>
                                                                        <div class="sc_team_item_position theme_accent2">
                                                                            School Year Babysitter
                                                                        </div>
                                                                        <ul class="sc_team_item_socials">
                                                                            <li>
                                                                                <a href="#"
                                                                                   class="social_icons social_facebook facebook facebook_image"
                                                                                   target="_blank">
                                                                                    <span></span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"
                                                                                   class="social_icons social_twitter twitter twitter_image"
                                                                                   target="_blank">
                                                                                    <span></span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"
                                                                                   class="social_icons social_gplus gplus gplus_image"
                                                                                   target="_blank">
                                                                                    <span></span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="columns1_4">
                                                                <div class="sc_team_item sc_team_item_4 even">
                                                                    <div class="sc_team_item_avatar">
                                                                        <img alt="babbysitter-team-4.jpg"
                                                                             src="images/babbysitter-team-41-370x370.jpg">
                                                                        <div class="sc_team_item_description">
                                                                            <div class="sc_button sc_button_style_global sc_button_size_big squareButton fullSize global big">
                                                                                <a href="#" class="">Book Now</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sc_team_item_info">
                                                                        <h3 class="sc_team_item_title">Nicole H.</h3>
                                                                        <div class="sc_team_item_position theme_accent2">
                                                                            School Year Babysitter
                                                                        </div>
                                                                        <ul class="sc_team_item_socials">
                                                                            <li>
                                                                                <a href="#"
                                                                                   class="social_icons social_facebook facebook facebook_image"
                                                                                   target="_blank">
                                                                                    <span></span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"
                                                                                   class="social_icons social_dribbble dribbble dribbble_image"
                                                                                   target="_blank">
                                                                                    <span></span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"
                                                                                   class="social_icons social_gplus gplus gplus_image"
                                                                                   target="_blank">
                                                                                    <span></span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!--Available BabySitters-->

                                <!--Testimonials-->
                                <section class="yellow_section with_testimonials">
                                    <div class="container">
                                        <div class="">
                                            <div class="sc_section bg_tint_dark">
                                                <div class="sc_content main ">
                                                    <h2 class="sc_title style_2 sc_title_regular aligncenter margin_bottom_middle">
                                                        What our Happy Parents Say</h2>
                                                    <div class="sc_testimonials sc_testimonials_style_2 with_aircraft">
                                                        <div class="sc_slider sc_slider_swiper sc_slider_nopagination sc_slider_autoheight swiper-slider-container"
                                                             data-interval="7000">
                                                            <ul class="sc_testimonials_items slides swiper-wrapper">
                                                                <li class="sc_testimonials_item swiper-slide">
                                                                    <div class="sc_testimonials_item_content">
                                                                        <div class="sc_testimonials_item_quote">
                                                                            <div class="sc_testimonials_item_text">It is
                                                                                such a great feeling to know that our
                                                                                family has found a child care that is so
                                                                                loving and supportive. KidsCare has
                                                                                given our children excellent care! Their
                                                                                babysitters are so wonderful and
                                                                                encouraging to our family.
                                                                            </div>
                                                                        </div>
                                                                        <div class="sc_testimonials_item_author">
                                                                            <div class="sc_testimonials_item_avatar">
                                                                                <img alt='' src='images/no-ava.png'
                                                                                     srcset='images/no-ava.png'
                                                                                     class='avatar avatar-50 photo'/>
                                                                            </div>
                                                                            <div class="sc_testimonials_item_name">
                                                                                Marcus
                                                                            </div>
                                                                            <div class="sc_testimonials_item_position">
                                                                                Purchaser
                                                                            </div>
                                                                        </div>
                                                                        <div class="sc_testimonials_item_object">
                                                                            <div class="object"></div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="sc_testimonials_item swiper-slide">
                                                                    <div class="sc_testimonials_item_content">
                                                                        <div class="sc_testimonials_item_quote">
                                                                            <div class="sc_testimonials_item_text">It is
                                                                                such a great feeling to know that our
                                                                                family has found a child care that is so
                                                                                loving and supportive. KidsCare has
                                                                                given our children excellent care! Their
                                                                                babysitters are so wonderful and
                                                                                encouraging to our family.
                                                                            </div>
                                                                        </div>
                                                                        <div class="sc_testimonials_item_author">
                                                                            <div class="sc_testimonials_item_avatar">
                                                                                <img alt='' src='images/ava_1.jpg'
                                                                                     srcset='images/ava_1.jpeg'
                                                                                     class='avatar avatar-50 photo'/>
                                                                            </div>
                                                                            <div class="sc_testimonials_item_name">
                                                                                Martha
                                                                            </div>
                                                                            <div class="sc_testimonials_item_position">
                                                                                Purchaser
                                                                            </div>
                                                                        </div>
                                                                        <div class="sc_testimonials_item_object">
                                                                            <div class="object"></div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="sc_testimonials_item swiper-slide">
                                                                    <div class="sc_testimonials_item_content">
                                                                        <div class="sc_testimonials_item_quote">
                                                                            <div class="sc_testimonials_item_text">It is
                                                                                such a great feeling to know that our
                                                                                family has found a child care that is so
                                                                                loving and supportive. KidsCare has
                                                                                given our children excellent care! Their
                                                                                babysitters are so wonderful and
                                                                                encouraging to our family.
                                                                            </div>
                                                                        </div>
                                                                        <div class="sc_testimonials_item_author">
                                                                            <div class="sc_testimonials_item_avatar">
                                                                                <img src="images/no-ava.png" alt="">
                                                                            </div>
                                                                            <div class="sc_testimonials_item_name">
                                                                                Marcus
                                                                            </div>
                                                                            <div class="sc_testimonials_item_position">
                                                                                Purchaser
                                                                            </div>
                                                                        </div>
                                                                        <div class="sc_testimonials_item_object">
                                                                            <div class="object"></div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="sc_testimonials_item swiper-slide">
                                                                    <div class="sc_testimonials_item_content">
                                                                        <div class="sc_testimonials_item_quote">
                                                                            <div class="sc_testimonials_item_text">It is
                                                                                such a great feeling to know that our
                                                                                family has found a child care that is so
                                                                                loving and supportive. KidsCare has
                                                                                given our children excellent care! Their
                                                                                babysitters are so wonderful and
                                                                                encouraging to our family.
                                                                            </div>
                                                                        </div>
                                                                        <div class="sc_testimonials_item_author">
                                                                            <div class="sc_testimonials_item_avatar">
                                                                                <img src="images/no-ava.png" alt="">
                                                                            </div>
                                                                            <div class="sc_testimonials_item_name">
                                                                                Nilsen
                                                                            </div>
                                                                            <div class="sc_testimonials_item_position">
                                                                                Purchaser
                                                                            </div>
                                                                        </div>
                                                                        <div class="sc_testimonials_item_object">
                                                                            <div class="object"></div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!--Testimonials-->

                                <!--Price Table-->
                                <section class="with_pricetable">

                                    <div class="container">
                                        <div class="">
                                            <div class="sc_section bg_tint_light">
                                                <div class="sc_content main ">
                                                    <h2 class="sc_title style_2 aligncenter sc_title_regular margin_bottom_small">
                                                        Babysitting Rates</h2>
                                                    <div class="sc_columns columnsWrap">
                                                        <div class="sc_pricing_table columns1_3 alignCenter table_color_green margin_top_small margin_bottom_small">
                                                            <div class="sc_pricing_columns sc_pricing_column_1">
                                                                <ul class="columnsAnimate">
                                                                    <li class="sc_pricing_data sc_pricing_title">1
                                                                        Child
                                                                    </li>
                                                                    <li class="sc_pricing_data sc_pricing_price">
                                                                        <div class="sc_price_item">
                                                                            <span class="sc_price_currency">$</span>
                                                                            <div class="sc_price_money">18</div>
                                                                            <div class="sc_price_info">
                                                                                <div class="sc_price_penny">
                                                                                </div>
                                                                                <div class="sc_price_period">/ hour
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="sc_pricing_data">Save $5 every year
                                                                        compared to the monthly plan by paying yearly.
                                                                    </li>
                                                                    <li class="sc_pricing_data sc_pricing_footer">
                                                                        <div class="sc_button sc_button_style_global sc_button_size_big curveButton squareButton global big  ico">
                                                                            <a href="#" class="inherit">Purchase</a>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="sc_pricing_table columns1_3 alignCenter table_color_blue margin_top_small margin_bottom_small">
                                                            <div class="sc_pricing_columns sc_pricing_column_1">
                                                                <ul class="columnsAnimate">
                                                                    <li class="sc_pricing_data sc_pricing_title">2
                                                                        Children
                                                                    </li>
                                                                    <li class="sc_pricing_data sc_pricing_price">
                                                                        <div class="sc_price_item">
                                                                            <span class="sc_price_currency">$</span>
                                                                            <div class="sc_price_money">20</div>
                                                                            <div class="sc_price_info">
                                                                                <div class="sc_price_penny">
                                                                                </div>
                                                                                <div class="sc_price_period">/ hour
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="sc_pricing_data">Save $15 every year
                                                                        compared to the monthly plan by paying yearly.
                                                                    </li>
                                                                    <li class="sc_pricing_data sc_pricing_footer">
                                                                        <div class="sc_button sc_button_style_global sc_button_size_big curveButton squareButton global big  ico">
                                                                            <a href="#" class="inherit">Purchase</a>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="sc_pricing_table columns1_3 alignCenter table_color_orange margin_top_small margin_bottom_small">
                                                            <div class="sc_pricing_columns sc_pricing_column_1">
                                                                <ul class="columnsAnimate">
                                                                    <li class="sc_pricing_data sc_pricing_title">3
                                                                        Children
                                                                    </li>
                                                                    <li class="sc_pricing_data sc_pricing_price">
                                                                        <div class="sc_price_item">
                                                                            <span class="sc_price_currency">$</span>
                                                                            <div class="sc_price_money">20</div>
                                                                            <div class="sc_price_info">
                                                                                <div class="sc_price_penny">
                                                                                </div>
                                                                                <div class="sc_price_period">/ hour
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="sc_pricing_data">Save $50 every year
                                                                        compared to the monthly plan by paying yearly.
                                                                    </li>
                                                                    <li class="sc_pricing_data sc_pricing_footer">
                                                                        <div class="sc_button sc_button_style_global sc_button_size_big curveButton squareButton global big  ico">
                                                                            <a href="#" class="inherit">Purchase</a>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!--Price Table-->
                            </div>
                        </article>
                    </section>
                </div>
            </div>
        </div>
        <!--Main Content-->

        <!--Footer -->
        <?= Footer::widget() ?>
        <!--Footer-->

    </div>

</div>
<div class="upToScroll">
    <a href="#" class="addBookmark icon-star-empty" title="Add the current page into bookmarks"> </a>
    <a href="#" class="scrollToTop icon-up-open-big" title="Back to top"> </a>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
