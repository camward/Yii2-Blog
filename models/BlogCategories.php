<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 25.12.16
 * Time: 18:36
 */

namespace app\models;

use yii\db\ActiveRecord;

class BlogCategories extends ActiveRecord
{
    public static function tableName()
    {
        return 'blog_categories';
    }
}