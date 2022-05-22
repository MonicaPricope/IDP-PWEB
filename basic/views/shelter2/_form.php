<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Shelter2 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shelter2-form">

    <?php $form = ActiveForm::begin(); ?>

   
    <?= $form->field($model, 'title')->textInput(['maxlength' => true, 'placeholder' => 'Title']) ?>

    <?= $form->field($model, 'location')->textInput(['maxlength' => true, 'placeholder' => 'Location']) ?>

    <?= $form->field($model, 'admin_name')->textInput(['maxlength' => true, 'placeholder' => 'Admin\'s Name']) ?>

    <?= $form->field($model, 'admin_phone')->textInput(['maxlength' => true, 'placeholder' => 'Admin\'s Phone Number']) ?>

    <?= $form->field($model, 'ocupants')->textInput(['placeholder' => 'No Ocupants']) ?>

    <?= $form->field($model, 'capacity')->textInput(['placeholder' => 'Capacity']) ?>
    
    <?= $form->field($model, 'map_user')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
