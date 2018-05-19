<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "performance_artist".
 *
 * @property int $id
 * @property int $performance_id
 * @property int $artist_id
 *
 * @property Artists $artist
 * @property Performance $performance
 */
class PerformanceArtist extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'performance_artist';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['performance_id', 'artist_id'], 'integer'],
            [['artist_id'], 'exist', 'skipOnError' => true, 'targetClass' => Artists::className(), 'targetAttribute' => ['artist_id' => 'id']],
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
            'performance_id' => Yii::t('main', 'Performance ID'),
            'artist_id' => Yii::t('main', 'Актер'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArtist()
    {
        return $this->hasOne(Artists::className(), ['id' => 'artist_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerformance()
    {
        return $this->hasOne(Performance::className(), ['id' => 'performance_id']);
    }
}
