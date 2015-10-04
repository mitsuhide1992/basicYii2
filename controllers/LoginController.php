<?php

namespace app\controllers;

use Yii;
use app\models\Userinfo; 

class LoginController extends \yii\web\Controller
{
    public function actionIndex()
    {	
    	$model = new Userinfo;
        return $this->render('Login', ['model' => $model]);
    }

}
