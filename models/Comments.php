<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 25.12.16
 * Time: 22:32
 */

namespace app\models;

use yii\db\ActiveRecord;

class Comments extends ActiveRecord
{
    public static function tableName(){
        return 'blog_comments';
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'email' => 'E-mail',
            'text' => 'Комментарий'
        ];
    }

    public function rules()
    {
        return [
            [['name', 'email', 'text'], 'required', 'message' => 'Поле обязательно для заполнения'],
            ['email', 'email'],
            ['text', 'trim'],
        ];
    }
}
