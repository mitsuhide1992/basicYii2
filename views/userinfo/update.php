<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Userinfo */

$this->title = 'Update Userinfo: ' . ' ' . $model->emailAddress;
$this->params['breadcrumbs'][] = ['label' => 'Userinfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->emailAddress, 'url' => ['view', 'id' => $model->emailAddress]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="userinfo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
