<?php

namespace frontend\controllers;

use yii\web\Controller;

class TestController extends \yii\web\Controller
{
   public function actionIndex()
   {
    $data = 'hohobaifern';
    return $this->render('index',['data' => $data]);
   }
   public function actionTest()
   {
    $data = 'hohofern';
    return $this->render('test',['data' => $data]);
   }
}