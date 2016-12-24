<?php

namespace app\controllers;

class MyController extends AppController
{
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionContact()
    {
        return $this->render('contact');
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

}
