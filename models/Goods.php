<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "goods".
 *
 * @property int $id
 * @property string $title
 * @property string $desc
 * @property string $full_text
 * @property string $url
 */
class Goods extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'goods';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'desc', 'full_text', 'url'], 'required'],
            [['full_text'], 'string'],
            [['title'], 'string', 'max' => 30],
            [['desc'], 'string', 'max' => 150],
            [['url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'desc' => 'Desc',
            'full_text' => 'Full Text',
            'url' => 'Url',
        ];
    }
}
