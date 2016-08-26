<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PhotographersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Photographers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="photographers-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Photographers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'photographer_name',
            'photographer_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
