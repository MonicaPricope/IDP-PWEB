<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Reservation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reservation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput(['placeholder' => 'Id']) ?>

    <?= $form->field($model, 'user_id')->textInput(['placeholder' => 'User ID']) ?>

    <?= $form->field($model, 'location_id')->textInput(['placeholder' => 'Location ID']) ?>

    <?= $form->field($model, 'start_time')->textInput(['placeholder' => 'Start time']) ?>

    <?= $form->field($model, 'end_time')->textInput(['placeholder' => 'End time']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
