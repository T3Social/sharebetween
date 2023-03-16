<?php

use humhub\modules\content\widgets\stream\StreamEntryWidget;
use humhub\modules\sharebetween\models\Share;

/* @var $share Share */
?>
<?php if ($share->getContentRecord()->content->canView()) : ?>
    <?= StreamEntryWidget::renderStreamEntry($share->getContentRecord()) ?>
<?php else : ?>
    <p><?= Yii::t('SharebetweenModule.base', 'Content not available') ?></p>
    <?= Yii::t('SharebetweenModule.base', 'This content has either been deleted or you no longer have permission to access it.') ?>
<?php endif; ?>