<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "items".
 *
 * @property int $id
 * @property string $title
 * @property string $descriprion
 * @property string $full_text
 * @property string $url
 */
class Items extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'items';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'descriprion', 'full_text', 'url'], 'required'],
            [['full_text'], 'string'],
            [['title'], 'string', 'max' => 30],
            [['descriprion', 'url'], 'string', 'max' => 255],
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
            'descriprion' => 'Descriprion',
            'full_text' => 'Full Text',
            'url' => 'Url',
        ];
    }
}
