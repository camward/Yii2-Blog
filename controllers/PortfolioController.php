<?php

namespace app\controllers;

use Yii;
use app\models\Portfolio;
use app\models\Project;

class PortfolioController extends AppController
{
    public function actionIndex()
    {
        $portfolio = Portfolio::find()->asArray()->with('projects')->all();
        return $this->render('index', compact('portfolio'));
    }

    public function actionView($id)
    {
        // $project = Project::findOne($id);
        $project = Project::find()->asArray()->where(['id' => $id])->with('images')->all();
        return $this->render('view', compact('project'));
    }
}
