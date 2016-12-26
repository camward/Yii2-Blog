<?php

namespace app\controllers;

use Yii;
use app\models\BlogCategories;
use app\models\BlogPost;
use yii\data\Pagination;
use  app\models\Comments;

class BlogController extends AppController
{
    public function actionIndex($cat_id = 0)
    {
        $cat = BlogCategories::find()->asArray()->all();
        $last_posts = BlogPost::find()->asArray()->orderBy(['date'=>SORT_DESC])->limit(3)->all();
        $comment = Comments::find()->count();

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

        return $this->render('index', compact('cat', 'posts', 'last_posts', 'pages', 'comment'));
    }

    public function actionView($id)
    {
        $cat = BlogCategories::find()->asArray()->all();
        $last_posts = BlogPost::find()->asArray()->orderBy(['date'=>SORT_DESC])->limit(3)->all();
        $posts = BlogPost::find()->asArray()->where(['id' => $id])->all();
        $comment = Comments::find()->count();
        $comment_list = Comments::find()->asArray()->orderBy(['id'=>SORT_DESC])->all();

//        echo date('Y-m-d');
//        echo '<br />';
//        echo Yii::$app->request->get('id');

        $model = new Comments();
        if($model->load(Yii::$app->request->post())){
            if($model->save()){
                Yii::$app->session->setFlash('success', 'Ваш комментарий добавлен');
                return $this->refresh();
            }
            else{
                Yii::$app->session->setFlash('error', 'Ошибка при добавлении комментария');
            }
        }

        return $this->render('view', compact('cat', 'last_posts', 'posts', 'model', 'comment', 'comment_list'));
    }
}
