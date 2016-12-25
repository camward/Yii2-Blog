<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 25.12.16
 * Time: 14:12
 */

namespace app\models;

use yii\db\ActiveRecord;

class Project extends ActiveRecord
{
    public static function tableName()
    {
        return 'project';
    }

    public function getImages(){
        return $this->hasMany(ProjectImages::className(), ['project_id' => 'id']);
    }
}