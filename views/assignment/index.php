<?php

use yii\helpers\Html;
use yii\grid\GridView;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AssignmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Assignments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="assignment-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Assignment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],
            ['attribute'=>'photographer',
            'value'=>'photographers.photographer_name'],
            'slug',
            //'id',
            //'date',
            ['attribute'=>'date',
                'value'=>'date',
                'format'=> 'raw',
                'filter'=>DatePicker::widget([
                    'model' => $searchModel,
                    'attribute' => 'date',
                    'template' => '{addon}{input}',
                    'clientOptions' => [
                        'autoclose' => true,
                        'format' => 'yyyy-mm-dd',
                        'todayBtn'=> 'linked',
                        ]
])],

            'time',
            //'duration',
        
            //'photographer0.photographer_name',

            // 'time_created',
             
            // 'reporter_name',
            // 'location',
            // 'assignment_info',
            // 'contact_info',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
