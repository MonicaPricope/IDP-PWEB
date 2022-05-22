<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Shelter2 */

$this->title = 'Create Shelter ';
$this->params['breadcrumbs'][] = ['label' => 'Shelter 2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shelter2-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
