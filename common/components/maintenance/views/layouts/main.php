<?php
/**
 * @author Eugene Terentev <eugene@terentev.net>
 * @var $this \yii\web\View
 * @var $content string
 */

use yii\helpers\Html;

\yii\bootstrap\BootstrapAsset::register($this)
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= \Yii::$app->language; ?>">
    <head>
        <meta charset="<?= \Yii::$app->charset; ?>">
        <title><?= Html::encode(Yii::$app->name); ?></title>
        <?php $this->head(); ?>
    </head>
    <body class="maintenance-body">
    <?php $this->beginBody() ?>
    <div class="container">
        <?= $content; ?>
    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>
