<?php

namespace app\controllers;

use Yii;
use app\models\BlogCategories;
use app\models\BlogPost;

class BlogController extends AppController
{
    public function actionIndex($cat_id = 0)
    {
        $cat = BlogCategories::find()->asArray()->all();
        $last_posts = BlogPost::find()->asArray()->orderBy(['date'=>SORT_DESC])->limit(3)->all();

        if($cat_id == 0)
            $posts = BlogPost::find()->asArray()->all();
        else
            $posts = BlogPost::find()->asArray()->where(['categories_id' => $cat_id])->all();

        return $this->render('index', compact('cat', 'posts', 'last_posts'));
    }

    public function actionView($id)
    {
        $cat = BlogCategories::find()->asArray()->all();
        $last_posts = BlogPost::find()->asArray()->orderBy(['date'=>SORT_DESC])->limit(3)->all();
        $posts = BlogPost::find()->asArray()->where(['id' => $id])->all();
        return $this->render('view', compact('cat', 'last_posts', 'posts'));
    }
}
