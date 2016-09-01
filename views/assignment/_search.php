<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AssignmentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="assignment-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'date') ?>
    

    <?= $form->field($model, 'time') ?>

    <?= $form->field($model, 'duration') ?>

    <?= $form->field($model, 'photographer') ?>

    <?php // echo $form->field($model, 'time_created') ?>

    <?php // echo $form->field($model, 'slug') ?>

    <?php // echo $form->field($model, 'reporter_name') ?>

    <?php // echo $form->field($model, 'location') ?>

    <?php // echo $form->field($model, 'assignment_info') ?>

    <?php // echo $form->field($model, 'contact_info') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
