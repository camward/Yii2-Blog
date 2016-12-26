<?php

namespace app\controllers;

use Yii;
use app\models\Portfolio;
use app\models\Project;

class PortfolioController extends AppController
{
    public function actionIndex()
    {
        $portfolio = Yii::$app->cache->get('portfolio');
        if(empty($portfolio)){
            $portfolio = Portfolio::find()->asArray()->with('projects')->all();
            Yii::$app->cache->set('portfolio', $portfolio, 60*60);
        }

        return $this->render('index', compact('portfolio'));
    }

    public function actionView($id)
    {
        // $project = Project::findOne($id);
        // $project = Project::find()->asArray()->where(['id' => $id])->with('images')->all();

        $project = Yii::$app->cache->get('portfolio_project');
        if(empty($project)){
            $project = Project::find()->asArray()->where(['id' => $id])->with('images')->all();
            Yii::$app->cache->set('portfolio_project', $project, 60*60);
        }

        return $this->render('view', compact('project'));
    }
}
