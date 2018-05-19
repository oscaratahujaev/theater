<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "repertuar".
 *
 * @property int $id
 * @property int $performance_id
 * @property string $date
 * @property int $price
 * @property int $status
 *
 * @property Performance $performance
 */
class Repertuar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'repertuar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['performance_id', 'price', 'status'], 'integer'],
            [['date'], 'safe'],
            [['performance_id'], 'exist', 'skipOnError' => true, 'targetClass' => Performance::className(), 'targetAttribute' => ['performance_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('main', 'ID'),
            'performance_id' => Yii::t('main', 'Спектакль'),
            'date' => Yii::t('main', 'Дата'),
            'price' => Yii::t('main', 'Цена'),
            'status' => Yii::t('main', 'Статус'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerformance()
    {
        return $this->hasOne(Performance::className(), ['id' => 'performance_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus_()
    {
        return $this->hasOne(RefStatus::className(), ['id' => 'status']);
    }

}
