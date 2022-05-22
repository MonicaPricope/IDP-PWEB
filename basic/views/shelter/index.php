<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ShelterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Shelters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shelter-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           # 'id',
            'title',
            'location',
            'admin_name',
            'admin_phone',
            'ocupants',
            'capacity',
            [
                'class' => ActionColumn::className(),
                #'urlCreator' => function ($action, Shelter $model, $key, $index, $column) {
                #    return Url::toRoute([$action, 'id' => $model->id]);
               #  }
            ],
        ],
    ]); ?>

    <p>
        <?= Html::a('Create Shelter', ['create'], ['class' => 'main-btn btn btn-success']) ?>
    </p>
</div>
