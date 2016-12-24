<?php

namespace app\controllers;

use Yii;
use app\models\Contact;

class MyController extends AppController
{
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionContact()
    {
        $model = new Contact();
        if($model->load(Yii::$app->request->post())){
            if($model->validate()){
                Yii::$app->session->setFlash('success', 'Ваше сообщение отправлено');
                return $this->refresh();
            }
            else{
                Yii::$app->session->setFlash('error', 'Ошибка при отправке сообщения');
            }
        }

        return $this->render('contact', compact('model'));
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

}
