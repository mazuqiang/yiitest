<?php
namespace app\controllers;


use app\assets\AppAsset;
use app\models\LoginForm;
use yii\base\Model;
use yii\helpers\Html;
use yii\web\Controller;

class IndexController extends Controller{



    public function actionIndex(){
        $model = new LoginForm();
        if($model->load(Yii::$app->request->post()) && $model->login()){
            return $this->goBack();
        }
        $this->layout = 'login';
        return $this->render('login', ['model'=>$model]);
    }

}