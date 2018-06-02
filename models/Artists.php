<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "artists".
 *
 * @property int $id
 * @property string $fullname
 * @property string $description_ru
 * @property string $description_uz
 * @property string $description_en
 * @property string $photo_path
 * @property string $photo_name
 *
 * @property PerformanceArtist[] $performanceArtists
 */
class Artists extends \yii\db\ActiveRecord
{


    public $mainPhoto;

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
            [['description_ru', 'description_uz', 'description_en'], 'string'],
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
            'description_ru' => Yii::t('main', 'Краткое описание на Рус.'),
            'description_uz' => Yii::t('main', 'Краткое описание на Узб.'),
            'description_en' => Yii::t('main', 'Краткое описание на Анг.'),
            'photo_path' => Yii::t('main', 'Photo Path'),
            'photo_name' => Yii::t('main', 'Photo Name'),
        ];
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {

            if ($file = UploadedFile::getInstance($this, 'mainPhoto')) {
                $path = 'uploads/' . $file->baseName . '.' . $file->extension;
                $file->saveAs($path);
                $this->photo_name = $file->baseName . '.' . $file->extension;
                $this->photo_path = $path;
            }
            return true;
        }
        return false;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerformanceArtists()
    {
        return $this->hasMany(PerformanceArtist::className(), ['artist_id' => 'id']);
    }
}
