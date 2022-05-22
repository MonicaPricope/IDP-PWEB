<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Shelter2Search */
/* @var $dataProvider yii\data\ActiveDataProvider */


$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shelter2-index">

    <h1>Shelters</h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'location',
            'admin_name',
            'admin_phone',
            'ocupants',
            'capacity',
            'map_user',
            [
                'class' => ActionColumn::className(),
                //'urlCreator' => function ($action, Shelter2 $model, $key, $index, $column) {
                //    return Url::toRoute([$action, 'id' => $model->id]);
                // }
            ],
        ],
    ]); ?>
    
    <p>
        <?= Html::a('Create Shelter ', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


</div>
