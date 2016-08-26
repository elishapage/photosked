<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Photographers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="photographers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'photographer_name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'photographer_status')->dropDownList (['active' => 'Active', 'inactive'=>'Inactive', ], ['prompt'=>'Status']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
