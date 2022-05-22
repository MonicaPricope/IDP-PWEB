<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ShelterSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shelter-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'location') ?>

    <?= $form->field($model, 'admin_name') ?>

    <?= $form->field($model, 'admin_phone') ?>

    <?php // echo $form->field($model, 'ocupants') ?>

    <?php // echo $form->field($model, 'capacity') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
