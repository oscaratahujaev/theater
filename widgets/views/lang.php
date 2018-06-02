<?php
/**
 * Created by PhpStorm.
 * User: a_atahujaev
 * Date: 23.05.2018
 * Time: 11:01
 */
/**
 * @var $langs \app\models\Lang[]
 */
//debug($current->url);
//exit;
?>


<div class="language">
    <?php foreach ($langs as $lang): ?>

        <a href="<?= '/' . $lang->url . Yii::$app->getRequest()->getLangUrl() ?>">
            <img width="20" src="/images/lang/<?= $lang->image ?>" alt="lang">
        </a>

    <?php endforeach; ?>
</div>
