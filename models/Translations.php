<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "translations".
 *
 * @property int $id
 * @property string $code
 * @property string $name_ru
 * @property string $name_uz
 * @property string $name_en
 */
class Translations extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'translations';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code', 'name_ru', 'name_uz', 'name_en'], 'required'],
            [['code', 'name_ru', 'name_uz', 'name_en'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('main', 'ID'),
            'code' => Yii::t('main', 'Code'),
            'name_ru' => Yii::t('main', 'Name Ru'),
            'name_uz' => Yii::t('main', 'Name Uz'),
            'name_en' => Yii::t('main', 'Name En'),
        ];
    }
}
