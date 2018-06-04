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
    <link rel="shortcut icon" type="image/png" href="/images/favicon.png"/>
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
        
        <?= $content ?>

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
