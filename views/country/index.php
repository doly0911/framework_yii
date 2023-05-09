<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

?>
<h1>Países</h1>
<p>Obtenidos de la BD yii2basic creada para este ejemplo...</p>
<ul>
    <?php foreach ($countries as $country): ?>
        <li>
            <?= Html::encode("{$country->name} ({$country->code})") ?> :
            <?= $country->population ?>
        </li>
    <?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>