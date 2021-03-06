<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FilmSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Films';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="film-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Film', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            'year',
            'rating',
            'budget',
            'release_date',
            'genre',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
