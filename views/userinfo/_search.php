<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserinfoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="userinfo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'emailAddress') ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'addressOne') ?>

    <?= $form->field($model, 'addressTwo') ?>

    <?= $form->field($model, 'suburb') ?>

    <?php // echo $form->field($model, 'Poscode') ?>

    <?php // echo $form->field($model, 'phoneNumber') ?>

    <?php // echo $form->field($model, 'birthDate') ?>

    <?php // echo $form->field($model, 'password') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
