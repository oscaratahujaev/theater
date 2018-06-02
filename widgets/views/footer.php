<?php
/**
 * Created by PhpStorm.
 * User: m_toshpolatov
 * Date: 18.05.2018
 * Time: 9:51
 */
use app\models\Lang;

?>
<div class="footerContentWrap">
    <footer class="footerWrap footerStyleLight contactFooterWrap">
        <div class="main contactFooter">
            <section>
                <div class="logo">
                    <a href="index-2.html">
                        <img src="/images/logo-mit-schrift.png" style="width: 270px;" alt="">
                    </a>
                </div>
                <div class="contactAddress">
                    <address class="addressRight">
                        <?= Yii::t('main', 'Phone') ?> : +998 (90) 808-57-87<br>
                        <?= Yii::t('main', 'Phone') ?> : +998 (95) 198-83-83
                    </address>
                    <address class="addressLeft">
                        <?php
                        $curUrl = Lang::getCurrent()->url;
                        ?>
                        <?php if ($curUrl == 'en') { ?>
                            Tashkent, Karatash, 5A<br>
                            Samarqand Darvoza, Third Floor
                        <?php } elseif ($curUrl == 'uz') { ?>
                            Toshkent, Karatash, 5A,<br>
                            Samarqand Darvoza, uchinchi qavat
                        <?php } elseif ($curUrl == 'ru') { ?>
                            г.Ташкент, ул. Караташ, 5А<br>
                            Samarqand Darvoza, Третий этаж
                        <?php } ?>

                    </address>
                </div>
            </section>
        </div>
    </footer>
    <div class="upToScrollWrapper">
        <div class="upToScroll">
            <a href="#" class="scrollToTop" title="Back to top">
            </a>
        </div>
    </div>

</div>
