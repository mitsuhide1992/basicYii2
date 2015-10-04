<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Userinfo */

$this->title = $model->emailAddress;
$this->params['breadcrumbs'][] = ['label' => 'Userinfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userinfo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->emailAddress], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->emailAddress], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'emailAddress:email',
            'username',
            'addressOne',
            'addressTwo',
            'suburb',
            'Poscode',
            'phoneNumber',
            'birthDate',
            'password',
        ],
    ]) ?>

</div>
