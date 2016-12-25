<?php

namespace app\controllers;

use Yii;
use app\models\BlogCategories;
use app\models\BlogPost;
use yii\data\Pagination;

class BlogController extends AppController
{
    public function actionIndex($cat_id = 0)
    {
        $cat = BlogCategories::find()->asArray()->all();
        $last_posts = BlogPost::find()->asArray()->orderBy(['date'=>SORT_DESC])->limit(3)->all();

        if($cat_id == 0){
            // $posts = BlogPost::find()->asArray()->all();
            $query = BlogPost::find();
            $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 2, 'forcePageParam' => false, 'pageSizeParam' => false]);
            $posts = $query->offset($pages->offset)->limit($pages->limit)->all();
        }
        else{
            // $posts = BlogPost::find()->asArray()->where(['categories_id' => $cat_id])->all();
            $query = BlogPost::find()->where(['categories_id' => $cat_id]);
            $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 1, 'forcePageParam' => false, 'pageSizeParam' => false]);
            $posts = $query->offset($pages->offset)->limit($pages->limit)->all();
        }

        return $this->render('index', compact('cat', 'posts', 'last_posts', 'pages'));
    }

    public function actionView($id)
    {
        $cat = BlogCategories::find()->asArray()->all();
        $last_posts = BlogPost::find()->asArray()->orderBy(['date'=>SORT_DESC])->limit(3)->all();
        $posts = BlogPost::find()->asArray()->where(['id' => $id])->all();
        return $this->render('view', compact('cat', 'last_posts', 'posts'));
    }
}
