<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ReservationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reservations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reservation-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'location_id',
            'start_time',
            'end_time',
            [
                'class' => ActionColumn::className(),
                //'urlCreator' => function ($action, Reservation $model, $key, $index, $column) {
                //    return Url::toRoute([$action, 'id' => $model->id]);
                // }
            ],
        ],
    ]); ?>
    
    <p>
        <?= Html::a('Create Reservation', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


</div>
