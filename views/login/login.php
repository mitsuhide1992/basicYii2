<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Userinfo */
/* @var $form ActiveForm */
?>
<div class="Login">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'emailAddress') ?>
        <?= $form->field($model, 'username') ?>
        <?= $form->field($model, 'phoneNumber') ?>
        <?= $form->field($model, 'password') ?>
        <?= $form->field($model, 'birthDate') ?>
        <?= $form->field($model, 'addressOne') ?>
        <?= $form->field($model, 'addressTwo') ?>
        <?= $form->field($model, 'suburb') ?>
        <?= $form->field($model, 'Poscode') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- Login -->
