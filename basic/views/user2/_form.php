<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User2 */
/* @var $form yii\widgets\ActiveForm $form*/
?>

<div class="user2-form">

    <?php $form = ActiveForm::begin(); ?>

    
    <?= $form->field($model, 'username')->textInput(['maxlength' => true, 'placeholder' => 'Username']) ?>
    
    <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'placeholder' => 'Name']) ?>
    
    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true, 'placeholder' => 'Password']) ?>

    <?= $form->field($model, 'type')->dropDownList([1 => 'Shelter Administrator' ,2 => 'Normal User'],['prompt'=>'Choose Role']) ?>

    <div class="form-group">
        <?= Html::submitButton('Register', ['class' => 'btn']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
