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
        $project = Project::findOne($id);
        return $this->render('view', compact('project'));
    }
}
