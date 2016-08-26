<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Photographers */

$this->title = 'Create Photographers';
$this->params['breadcrumbs'][] = ['label' => 'Photographers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="photographers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
