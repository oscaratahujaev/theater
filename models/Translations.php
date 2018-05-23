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
            [['code', 'name_ru', 'name_uz'], 'required'],
            [['code', 'name_ru', 'name_uz'], 'string', 'max' => 255],
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
        ];
    }
}
