<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'name')->label('Nombre')->textInput(['placeholder' => 'Introduce tu nombre'])?>
<?= $form->field($model,'email')->textInput(['placeholder' => 'Introduce tu correo'])?>
<div class="form-group">
    <?= Html::submitButton('Enviar', ['class'=> 'btn btn-primary'])?>
</div>
<?php ActiveForm::end(); ?>
