<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 25.12.16
 * Time: 14:11
 */

namespace app\models;

use yii\db\ActiveRecord;

class Portfolio extends ActiveRecord
{
    public static function tableName()
    {
        return 'portfolio';
    }

    public function getProjects(){
        return $this->hasMany(Project::className(), ['portfolio_id' => 'id']);
    }
}