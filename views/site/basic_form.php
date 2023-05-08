<?php
use yii\helpers\Html;
?>
<p>Has ingresado la siguiente infromación: </p>
<ul>
    <li>
        <label>Nombre: </label> <?= Html::encode($model->name) ?>
    </li>
    <li>
        <label>Email</label>: <?= Html::encode($model->email) ?>
    </li>
</ul>
