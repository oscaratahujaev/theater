<?php

/* @var $this yii\web\View */

use app\widgets\Navbar;
use yii\helpers\Url;

$this->title = Yii::t("main", 'home');
$this->registerJsFile('/js/map.js');
$this->registerJsFile('https://maps.googleapis.com/maps/api/js?key=AIzaSyCOKJj4CRPir1lP-GbSV9aTU6CGGpripJA&callback=initMap');

?>
<!--Slider home page-->
<div id="mainslider_1"
     class="sliderHomeBullets staticSlider slider_engine_revo slider_alias_revo-babbysitter mainslider_1">
    <div id="rev_slider_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
        <div id="rev_slider_1" class="rev_slider fullwidthabanner">
            <ul>
                <li data-transition="fade" data-slotamount="7" data-masterspeed="300"
                    data-saveperformance="off">
                    <img src="/images/transparent.png" alt="babbysitter-slider-ground"
                         data-bgposition="center bottom" data-bgfit="normal" data-bgrepeat="no-repeat">
                    <div class="tp-caption _bs_slider_title tp-fade skewtorightshort tp-resizeme rs-parallaxlevel-0"
                         data-x="center" data-hoffset="236" data-y="bottom" data-voffset="-397" data-speed="700"
                         data-start="2000" data-easing="Power3.easeInOut" data-splitin="none"
                         data-splitout="words" data-elementdelay="0.1" data-endelementdelay="0.1"
                         data-endspeed="300">ТЕАТР МАРИОНЕТОК

                    </div>
                    <div class="tp-caption _bs_slider_title tp-fade skewtorightshort tp-resizeme rs-parallaxlevel-0"
                         data-x="center" data-hoffset="250" data-y="bottom" data-voffset="-357" data-speed="700"
                         data-start="2500" data-easing="Power3.easeInOut" data-splitin="none"
                         data-splitout="words" data-elementdelay="0.1" data-endelementdelay="0.1"
                         data-endspeed="300">SILK ROUTE MARIONETTES
                    </div>
                    <div class="tp-caption tp-fade rs-parallaxlevel-3" data-x="center" data-hoffset="-176"
                         data-y="bottom" data-voffset="10" data-speed="700" data-start="500"
                         data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                         data-endspeed="300">
                        <div class="tp-layer-inner-rotation   rs-wave" data-speed="2" data-angle="0"
                             data-radius="5" data-origin="50% 50%">
                            <img src="/images/babbysitter-slider-babby.png" alt="" data-ww="220" data-hh="491">
                        </div>
                    </div>
                    <div class="tp-caption lfl rs-parallaxlevel-3" data-x="center" data-hoffset="-492"
                         data-y="bottom" data-voffset="-348" data-speed="1000" data-start="2500"
                         data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                         data-endspeed="300">
                        <div class="tp-layer-inner-rotation   rs-slideloop" data-easing="Power3.easeInOut"
                             data-speed="2" data-xs="-10" data-xe="10" data-ys="0" data-ye="0">
                            <img src="/images/babbysitter-slider-cloud-1a.png" alt="">
                        </div>
                    </div>
                    <div class="tp-caption lft rs-parallaxlevel-4" data-x="center" data-hoffset="-73"
                         data-y="bottom" data-voffset="-548" data-speed="1000" data-start="3500"
                         data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                         data-endspeed="300">
                        <div class="tp-layer-inner-rotation   rs-slideloop" data-easing="Power3.easeInOut"
                             data-speed="2" data-xs="-15" data-xe="15" data-ys="0" data-ye="0">
                            <img src="/images/babbysitter-slider-cloud-2a.png" alt="">
                        </div>
                    </div>
                    <div class="tp-caption lfl rs-parallaxlevel-3" data-x="center" data-hoffset="373"
                         data-y="bottom" data-voffset="-123" data-speed="1000" data-start="4500"
                         data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                         data-endspeed="300">
                        <div class="tp-layer-inner-rotation   rs-slideloop" data-easing="Power3.easeInOut"
                             data-speed="2" data-xs="-10" data-xe="10" data-ys="0" data-ye="0">
                            <img src="/images/babbysitter-slider-cloud-3a.png" alt="">
                        </div>
                    </div>
                    <div class="tp-caption tp-fade rs-parallaxlevel-5" data-x="center" data-hoffset="-487"
                         data-y="bottom" data-voffset="-251" data-speed="1000" data-start="1200"
                         data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                         data-endspeed="300">
                        <div class="tp-layer-inner-rotation   rs-pulse" data-easing="Power3.easeInOut"
                             data-speed="2" data-zoomstart="1" data-zoomend="1.4">
                            <img src="/images/babbysitter-slider-star-1.png" alt="">
                        </div>
                    </div>
                    <div class="tp-caption tp-fade rs-parallaxlevel-6" data-x="center" data-hoffset="-373"
                         data-y="bottom" data-voffset="-533" data-speed="1000" data-start="2000"
                         data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                         data-endspeed="300">
                        <div class="tp-layer-inner-rotation   rs-pulse" data-easing="Power3.easeInOut"
                             data-speed="2" data-zoomstart="1" data-zoomend="1.4">
                            <img src="/images/babbysitter-slider-star-2.png" alt="">
                        </div>
                    </div>
                    <div class="tp-caption tp-fade rs-parallaxlevel-7" data-x="center" data-hoffset="-57"
                         data-y="bottom" data-voffset="-491" data-speed="1000" data-start="3000"
                         data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                         data-endspeed="300">
                        <div class="tp-layer-inner-rotation   rs-pulse" data-easing="Power3.easeInOut"
                             data-speed="2" data-zoomstart="1" data-zoomend="1.4">
                            <img src="/images/babbysitter-slider-star-3.png" alt="">
                        </div>
                    </div>
                    <div class="tp-caption tp-fade rs-parallaxlevel-6" data-x="center" data-hoffset="198"
                         data-y="bottom" data-voffset="-553" data-speed="1000" data-start="4000"
                         data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                         data-endspeed="300">
                        <div class="tp-layer-inner-rotation   rs-pulse" data-easing="Power3.easeInOut"
                             data-speed="2" data-zoomstart="1" data-zoomend="1.4">
                            <img src="/images/babbysitter-slider-star-4.png" alt="">
                        </div>
                    </div>
                    <div class="tp-caption tp-fade rs-parallaxlevel-5" data-x="center" data-hoffset="484"
                         data-y="bottom" data-voffset="-579" data-speed="1000" data-start="5000"
                         data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                         data-endspeed="300">
                        <div class="tp-layer-inner-rotation   rs-pulse" data-easing="Power3.easeInOut"
                             data-speed="2" data-zoomstart="1" data-zoomend="1.4">
                            <img src="/images/babbysitter-slider-star-5.png" alt="">
                        </div>
                    </div>
                    <div class="tp-caption customin customout rs-parallaxlevel-10" data-x="center"
                         data-hoffset="412" data-y="bottom" data-voffset="-485"
                         data-customin="x:-300;y:700;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-customout="x:70;y:-150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.01;scaleY:0.01;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="3500" data-start="2500" data-easing="Power0.easeIn" data-elementdelay="0.1"
                         data-endelementdelay="0.1" data-end="6000" data-endspeed="1000"
                         data-endeasing="Power0.easeInOut">
                        <img src="/images/babbysitter-slider-rocket.png" alt="">
                    </div>
                    <div class="tp-caption _bs_slider_text tp-fade tp-resizeme rs-parallaxlevel-0"
                         data-x="center" data-hoffset="144" data-y="bottom" data-voffset="-233" data-speed="700"
                         data-start="3900" data-easing="Power3.easeInOut" data-splitin="none"
                         data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                         data-endspeed="300" data-captionhidden="on">
                        <a href='<?= Url::to('https://www.instagram.com/silkroutemarionettes') ?>'>
                            <img src='/images/instagram.png' alt=''>
                        </a>
                        <a href='<?= Url::to('https://www.facebook.com/silkroutemarionettestashkent/?ref=br_rs') ?>'>
                            <img src='/images/facebook3.png' alt=''>
                        </a>
                    </div>
                    <div class="tp-caption tp-fade rs-parallaxlevel-0" data-x="center" data-hoffset="0"
                         data-y="bottom" data-voffset="40" data-speed="300" data-start="0"
                         data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                         data-endspeed="300">
                        <img src="/images/babbysitter-slider-ground-3.png" alt="">
                    </div>
                </li>
                <li data-transition="fade" data-slotamount="7" data-masterspeed="300"
                    data-saveperformance="off">
                    <img src="/images/transparent.png" alt="babbysitter-slider-ground"
                         data-bgposition="center bottom" data-bgfit="normal" data-bgrepeat="no-repeat">
                    <div class="tp-caption _bs_slider_title tp-fade skewtorightshort tp-resizeme rs-parallaxlevel-0"
                         data-x="center" data-hoffset="221" data-y="bottom" data-voffset="-410" data-speed="700"
                         data-start="2000" data-easing="Power3.easeInOut" data-splitin="none"
                         data-splitout="words" data-elementdelay="0.1" data-endelementdelay="0.1"
                         data-endspeed="300">АЛAДДИН И ЕГО
                    </div>
                    <div class="tp-caption _bs_slider_title tp-fade skewtorightshort tp-resizeme rs-parallaxlevel-0"
                         data-x="center" data-hoffset="200" data-y="bottom" data-voffset="-370" data-speed="700"
                         data-start="2500" data-easing="Power3.easeInOut" data-splitin="none"
                         data-splitout="words" data-elementdelay="0.1" data-endelementdelay="0.1"
                         data-endspeed="300">ВОЛШЕБНАЯ ЛАМПА
                    </div>
                    <div class="tp-caption _bs_slider_text tp-fade tp-resizeme rs-parallaxlevel-0"
                         data-x="center" data-hoffset="190" data-y="bottom" data-voffset="-320" data-speed="700"
                         data-start="3500" data-easing="Power3.easeInOut" data-splitin="none"
                         data-splitout="none" data-elementdelay="0.2" data-endelementdelay="0.1"
                         data-endspeed="300">
                    </div>
                    <div class="tp-caption sft rs-parallaxlevel-6" data-x="center" data-hoffset="-323"
                         data-y="bottom" data-voffset="-359" data-speed="1000" data-start="2000"
                         data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                         data-endspeed="300">
                        <div class="tp-layer-inner-rotation   rs-pulse" data-easing="Power3.easeInOut"
                             data-speed="2" data-zoomstart="1" data-zoomend="1.1">
                            <img src="/images/babbysitter-slider-sun.png" alt="">
                        </div>
                    </div>
                    <div class="tp-caption lfb fadeout rs-parallaxlevel-0" data-x="center" data-hoffset="-170"
                         data-y="bottom" data-voffset="0" data-speed="700" data-start="900"
                         data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                         data-endspeed="300">
                        <img src="/images/babbysitter-slider-girl.png" alt="" data-ww="200" data-hh="430">
                    </div>
                    <div class="tp-caption lfl rs-parallaxlevel-3" data-x="center" data-hoffset="-492"
                         data-y="bottom" data-voffset="-348" data-speed="1000" data-start="2500"
                         data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                         data-endspeed="300">
                        <div class="tp-layer-inner-rotation   rs-slideloop" data-easing="Power3.easeInOut"
                             data-speed="2" data-xs="-10" data-xe="10" data-ys="0" data-ye="0">
                            <img src="/images/babbysitter-slider-cloud-1a.png" alt="">
                        </div>
                    </div>
                    <div class="tp-caption lft rs-parallaxlevel-4" data-x="center" data-hoffset="-73"
                         data-y="bottom" data-voffset="-548" data-speed="1000" data-start="3500"
                         data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                         data-endspeed="300">
                        <div class="tp-layer-inner-rotation   rs-slideloop" data-easing="Power3.easeInOut"
                             data-speed="2" data-xs="-15" data-xe="15" data-ys="0" data-ye="0">
                            <img src="/images/babbysitter-slider-cloud-2a.png" alt="">
                        </div>
                    </div>
                    <div class="tp-caption lfl rs-parallaxlevel-5" data-x="center" data-hoffset="470"
                         data-y="bottom" data-voffset="-440" data-speed="1000" data-start="4500"
                         data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                         data-endspeed="300">
                        <div class="tp-layer-inner-rotation   rs-slideloop" data-easing="Power3.easeInOut"
                             data-speed="5" data-xs="-10" data-xe="10" data-ys="0" data-ye="0">
                            <img src="/images/babbysitter-slider-cloud-1a.png" alt="" data-ww="166.9390243902439"
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
                            <img src="/images/babbysitter-slider-ufo.png" alt="">
                        </div>
                    </div>
                    <div class="tp-caption _bs_slider_text tp-fade tp-resizeme rs-parallaxlevel-0"
                         data-x="center" data-hoffset="120" data-y="bottom" data-voffset="-180" data-speed="300"
                         data-start="4500" data-easing="Power3.easeInOut" data-splitin="none"
                         data-splitout="none" data-elementdelay="0.2" data-endelementdelay="0.1"
                         data-endspeed="300">
                        <div class="sc_button sc_button_style_global sc_button_size_huge alignright curveButton right squareButton global huge">
                            <a href="<?= Url::to('http://tickit.co') ?>" class=""><?= Yii::t('main', 'buyTicket') ?></a>
                        </div>
                    </div>
                    <div class="tp-caption tp-fade rs-parallaxlevel-0" data-x="center" data-hoffset="0"
                         data-y="bottom" data-voffset="40" data-speed="300" data-start="0"
                         data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                         data-endspeed="300">
                        <img src="/images/babbysitter-slider-ground-3.png" alt="">
                    </div>
                </li>
                <li data-transition="fade" data-slotamount="7" data-masterspeed="300"
                    data-saveperformance="off">
                    <img src="/images/transparent.png" alt="babbysitter-slider-ground"
                         data-bgposition="center bottom" data-bgfit="normal" data-bgrepeat="no-repeat">
                    <div class="tp-caption tp-fade rs-parallaxlevel-0" data-x="center" data-hoffset="57"
                         data-y="bottom" data-voffset="10" data-speed="1300" data-start="500"
                         data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                         data-endspeed="300">
                        <img src="/images/babbysitter-slider-boy.png" alt="">
                    </div>
                    <div class="tp-caption _bs_slider_title tp-fade skewtorightshort tp-resizeme rs-parallaxlevel-0"
                         data-x="center" data-hoffset="-351" data-y="bottom" data-voffset="-480"
                         data-speed="700" data-start="2000" data-easing="Power3.easeInOut" data-splitin="none"
                         data-splitout="words" data-elementdelay="0.1" data-endelementdelay="0.1"
                         data-endspeed="300">Необыкновенные музыканты?
                    </div>
                    <div class="tp-caption lfr rs-parallaxlevel-3" data-x="center" data-hoffset="-485"
                         data-y="bottom" data-voffset="-520" data-speed="1000" data-start="2500"
                         data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                         data-endspeed="300">
                        <div class="tp-layer-inner-rotation   rs-wave" data-speed="2" data-angle="0"
                             data-radius="10" data-origin="50% 50%">
                            <img src="/images/babbysitter-slider-butterfly-1.png" alt="">
                        </div>
                    </div>
                    <div class="tp-caption lft rs-parallaxlevel-1" data-x="center" data-hoffset="-141"
                         data-y="bottom" data-voffset="-151" data-speed="1000" data-start="3500"
                         data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                         data-endspeed="300">
                        <div class="tp-layer-inner-rotation   rs-wave" data-speed="2" data-angle="0"
                             data-radius="10" data-origin="50% 50%">
                            <img src="/images/babbysitter-slider-butterfly-2.png" alt="">
                        </div>
                    </div>
                    <div class="tp-caption lfl rs-parallaxlevel-2" data-x="center" data-hoffset="233"
                         data-y="bottom" data-voffset="-376" data-speed="1000" data-start="4500"
                         data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                         data-endspeed="300">
                        <div class="tp-layer-inner-rotation   rs-wave" data-speed="5" data-angle="0"
                             data-radius="10" data-origin="50% 50%">
                            <img src="/images/babbysitter-slider-butterfly-3.png" alt="">
                        </div>
                    </div>
                    <div class="tp-caption _bs_slider_text tp-fade tp-resizeme rs-parallaxlevel-0"
                         data-x="center" data-hoffset="-435" data-y="bottom" data-voffset="-200"
                         data-speed="300" data-start="4500" data-easing="Power3.easeInOut" data-splitin="none"
                         data-splitout="none" data-elementdelay="0.2" data-endelementdelay="0.1"
                         data-endspeed="300">
                        <div class="sc_button sc_button_style_global sc_button_size_banner alignright curveButton right squareButton global banner">
                            <a href="<?= Url::to('http://tickit.co') ?>" class=""><?= Yii::t('main', 'buyTicket') ?></a>
                        </div>
                    </div>
                    <div class="tp-caption tp-fade rs-parallaxlevel-0" data-x="center" data-hoffset="0"
                         data-y="bottom" data-voffset="40" data-speed="300" data-start="0"
                         data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                         data-endspeed="300">
                        <img src="/images/babbysitter-slider-ground-3.png" alt="">
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--Slider home page-->

<!--Main Content-->
<div class="mainWrap without_sidebar">
    <div class="content">
        <div class="">
            <section class="post post_format_standard postAlter no_margin page type-page">
                <article class="post_content">
                    <div class="post_text_area">
                        <!--Service Icons-->
                        <section id="performance">
                            <div class="container">
                                <div class="sc_content main ">
                                    <div class="aligncenter margin_bottom_middle">
                                        <h2 class="sc_title style_2 sc_title_regular"><?= Yii::t('main', 'Спектакли') ?></h2>

                                    </div>
                                    <div class="sc_blogger sc_blogger_horizontal style_image style_image_classes">
                                        <div class="columnsWrap">
                                            <?php foreach ($performances as $performance): ?>
                                                <div class="columns1_3 column_item_1 odd first" style="float: right;">
                                                    <article class="sc_blogger_item">
                                                        <div class="thumb">
                                                            <a href="<?= Url::to('/performance/view?id=' . $performance->id) ?>">
                                                                <div>
                                                                    <img alt="<?= $performance->file_name ?>"
                                                                         src="/<?= $performance->file_path ?>">
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
                                                            <a href="#"><?= $performance->title . Yii::$app->language ?></a>

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
                                                                <a class="icon-link" title=""
                                                                   href="<?= Url::to('/performance/index') ?>">
                                                                    <?= Yii::t('main', 'more') ?></a>
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
                                                   href="<?= Url::to('/performance/index') ?>"
                                                   class=""><?= Yii::t('main', 'more') ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--Service Icons-->

                        <!--Available BabySitters-->
                        <section id="artists" class="blue_section">
                            <div class="container">
                                <div class="">
                                    <div class="sc_section bg_tint_dark">
                                        <div class="sc_content main ">
                                            <h2 class="sc_title sc_title_regular aligncenter"><?= Yii::t('main', 'Our artists') ?></h2>
                                            <div class="sc_team no_padding margin_top_middle margin_bottom_m20">
                                                <div class="sc_columns columnsWrap">
                                                    <?php foreach ($artists as $artist): ?>
                                                        <div class="columns1_4">
                                                            <div class="sc_team_item sc_team_item_1 odd first">
                                                                <div class="sc_team_item_avatar">
                                                                    <img alt="<?= $artist->photo_name ?>"
                                                                         src="/<?= $artist->photo_path ?>">
                                                                </div>
                                                                <div class="sc_team_item_info">
                                                                    <h3 class="sc_team_item_title"><?=  $artist->fullname ?></h3>
                                                                    <div class="sc_team_item_position theme_accent2">
                                                                        <?= substr($artist->description, 0, 50) ?>
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
                        </section>
                        <!--Available BabySitters-->
                        <!--Sky Blue Section-->
                        <br>
                        <br>
                        <section id="repertuar" class="post no_padding"
                                 style="width: 90%;margin-left: 5%;margin-top:30px;">
                            <div class="container">
                                <div class="">
                                    <h2 class="sc_title sc_title_regular aligncenter margin_bottom_small"><?= Yii::t('main', 'Репертуар') ?></h2>
                                    <div class="sc_pricing_table columns_4 alignCenter">
                                        <?php foreach ($repertoires as $repertoire): ?>
                                            <div class="sc_pricing_columns sc_pricing_column_1">
                                                <ul class="columnsAnimate">
                                                    <li class="sc_pricing_data sc_pricing_title">
                                                        <?= $repertoire->performance->title ?>
                                                    </li>
                                                    <?php $datetime = new DateTime($repertoire->date) ?>
                                                    <li class="sc_pricing_data"><?= $datetime->format('d M, Y') ?></li>
                                                    <li class="sc_pricing_data"><?= date("H:i:s", strtotime($repertoire->date)) ?></li>
                                                    <li class="sc_pricing_data"><?= $repertoire->price ?> UZS</li>
                                                    <li class="sc_pricing_data"><?= $repertoire->performance->author ?></li>
                                                    <li class="sc_pricing_data">
                                                        <div class="sc_button sc_button_style_global sc_button_size_big squareButton fullSize global big">
                                                            <a href="<?= Url::to('http://tickit.co') ?>" class="">Купить
                                                                Билет</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="sc_section bg_tint_none sc_aligncenter margin_top_middle">
                                        <div class="">
                                            <div class="sc_button sc_button_style_global sc_button_size_banner squareButton global banner">
                                                <a style="height: 74px;line-height: 78px;font-size: 23px; padding: 0 12px 0 11px;"
                                                   href="<?=Url::to('/site/repertoire')?>" class=""><?= Yii::t('main', 'more') ?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc_line sc_line_style_solid margin_top_big margin_bottom_big"></div>
                                </div>
                            </div>
                        </section>
                        <!--Sky Blue Section-->

                        <!--Price Table-->
                        <section id="contacts" class="no_padding">
                            <div class="container">

                                <div class="columnsWrap sc_columns custom_columns sc_columns_count_2">
                                    <div class="columns1_2 sc_column_item sc_column_item_1 odd first">
                                        <div id="map" class="sc_googlemap sc_googlemap_style_2"
                                             data-description="Ташкент 100021 Узбекистан"
                                             data-address="Ташкент 100021 Узбекистан" data-latlng="" data-zoom="16"
                                             data-style="default" data-point="">
                                        </div>
                                    </div>
                                    <div class="columns1_2 sc_column_item sc_column_item_2 even"
                                         style="padding: 20px 50px 0 0;text-align: justify;">
                                        <h3 class="sc_title sc_title_regular">Ташкентский детский театр марионеток <br>
                                            «THEATRE – STUDIO SILK ROUTE MARIONETTES»</h3>
                                        <div class="">
                                            <p>Ташкентский детский театр марионеток «Theatre – Studio Silk Route
                                                Marionettes» — первый и единственный профессиональный театр марионеток в
                                                Центральной Азии. Основываясь на вековых традициях народного узбекского
                                                искусства «чодир-хаел» (куклы на нитях), детально изучив сохранившиеся
                                                летописи, творчески осмыслив непреходящую ценность кукольного зрелища
                                                для становления человеческой личности от младости до старости, новый
                                                театр являет миру уникальный синтез современных сценических технологий и
                                                свежесть музыкально-пластических решений с эксклюзивным наследием
                                                мастерства и чаяний предшественников — кугирчокчи.</p>
                                            <p>Марионетки, живущие и действующие в спектаклях наших дней, — учат,
                                                развивают, воспитывают и детей, и взрослых; пробуждают интерес к
                                                творческому восприятию жизни, возрождают возвышенные чувства от
                                                соприкосновения с чудом сценического «оживления» красочных кукол и их
                                                перевоплощения в запоминающиеся образы.</p>

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
