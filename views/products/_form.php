<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use Melih627\products\models;
;

/* @var $this yii\web\View */
/* @var $model melih058\products\models\Products */
/* @var $form yii\widgets\ActiveForm */
/* @var $categories sabsay03\categories\models\Categories */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'count')->textInput() ?>



    <?php
    $city = $categories::find()->all();

    $listData=ArrayHelper::map($city,'id','name');
    ?>

    <?= $form->field($model, 'category_id')->dropDownList($listData) ?>

    <?= $form->field($model, 'picture')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
