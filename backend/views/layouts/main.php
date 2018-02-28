<?php
/**
 * @var $this yii\web\View
 * @var $content string view render result
 */
?>
<?php $this->beginContent('@backend/views/layouts/common.php'); ?>
    <div class="box">
        <div class="box-body">
            <?= $content ?>
        </div>
    </div>
<?php $this->endContent(); ?>