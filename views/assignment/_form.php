<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Photographers;
use dosamigos\datepicker\DatePicker;
use kartik\time\TimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Assignment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="assignment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'date')->widget(
                DatePicker::className(), [
        // inline too, not bad
         'inline' => true, 
         // modify template for custom rendering
        'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]]);?>

    <!-- <?= $form->field($model, 'time')->textInput() ?> -->
      <? 
echo $form->field($model, 'time')->widget(TimePicker::classname(), [
    'pluginOptions'=> [
        'defaultTime' => '9:00 AM',
    ]
]); ?>




    <?= $form->field($model, 'duration')->textInput() ?>

     
    <?= $form->field($model, 'photographer')->dropDownList(
        ArrayHelper::map(Photographers::find()->all(),'id', 'photographer_name'),['prompt'=>'Select Photographer']
    ) ?>


    <!-- <?= $form->field($model, 'time_created')->textInput() ?>
 -->
    
    <?= $form->field($model, 'reporter_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'assignment_info')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_info')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
