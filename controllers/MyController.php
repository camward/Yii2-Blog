<?php

namespace app\controllers;

use Yii;
use app\models\Contact;
use app\models\Project;

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
        $project = Yii::$app->cache->get('project_index');
        if(empty($project)){
            $project = Project::find()->orderBy(['id'=>SORT_DESC])->limit(5)->all();
            Yii::$app->cache->set('project_index', $project, 60*60*24);
        }

        return $this->render('index', compact('project'));
    }

}
