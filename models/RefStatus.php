<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ref_status".
 *
 * @property int $id
 * @property string $name
 *
 * @property Performance[] $performances
 */
class RefStatus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ref_status';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('main', 'ID'),
            'name' => Yii::t('main', 'Name'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerformances()
    {
        return $this->hasMany(Performance::className(), ['status' => 'id']);
    }
}
