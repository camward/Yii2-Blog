<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 25.12.16
 * Time: 15:25
 */

namespace app\models;

use yii\db\ActiveRecord;

class ProjectImages extends ActiveRecord
{
    public static function tableName()
    {
        return 'project_images';
    }
}