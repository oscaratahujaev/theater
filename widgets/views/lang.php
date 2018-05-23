<?php
/**
 * Created by PhpStorm.
 * User: a_atahujaev
 * Date: 23.05.2018
 * Time: 11:01
 */
//debug($current->url);
//exit;
?>


<div class="language">
    <?php foreach ($langs as $lang): ?>
        <?php if ($lang->url == 'uz'): ?>
            <a href="<?= '/' . $lang->url . Yii::$app->getRequest()->getLangUrl() ?>">
                <img width="20" src="/images/lang/Uzbekistan-icon.png" alt="lang">
            </a>
        <?php else: ?>
            <a href="<?= '/' . $lang->url . Yii::$app->getRequest()->getLangUrl() ?>">
                <img width="20" src="/images/lang/Russia-icon.png" alt="lang">
            </a>
        <?php endif; ?>

    <?php endforeach; ?>
</div>
