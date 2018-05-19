<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "artists".
 *
 * @property int $id
 * @property string $fullname
 * @property string $description
 * @property string $description_uz
 * @property string $photo_path
 * @property string $photo_name
 *
 * @property PerformanceArtist[] $performanceArtists
 */
class Artists extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'artists';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description','description_uz'], 'string'],
            [['fullname', 'photo_path', 'photo_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('main', 'ID'),
            'fullname' => Yii::t('main', 'Фамилия и имя'),
            'description' => Yii::t('main', 'Краткое описание'),
            'description_uz' => Yii::t('main', 'Краткое описание'),
            'photo_path' => Yii::t('main', 'Photo Path'),
            'photo_name' => Yii::t('main', 'Photo Name'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerformanceArtists()
    {
        return $this->hasMany(PerformanceArtist::className(), ['artist_id' => 'id']);
    }
}