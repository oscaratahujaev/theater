<?php
/**
 * Created by PhpStorm.
 * User: a_atahujaev
 * Date: 19.05.2018
 * Time: 12:46
 */

namespace app\components;


use app\models\RefStatus;
use yii\helpers\ArrayHelper;

class Functions
{


    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    public static function getStatus()
    {
        return ArrayHelper::map(RefStatus::find()->all(), 'id', 'name');
    }

    /**
     * Returns array of images for each performance
     */
    public static function listPerformanceFiles($title)
    {
        $arr = [];
        $extensions = ['png', 'jpg'];
        $path = "uploads/performance/";
        $path .= $title . "/";

        if (is_dir($path)) {
            $files = scandir($path);
            foreach ($files as $file) {
                $ext = pathinfo($path . $file, PATHINFO_EXTENSION);
                if (in_array($ext, $extensions)) {
                    $arr[] = [
                        'filename' => $file,
                        'path' => '/' . $path . $file,
                    ];
                }
            }
        }


        return $arr;
    }

    /**
     * Returns array of images for gallery
     */
    public static function listGalleryFiles()
    {
        $arr = [];
        $extensions = ['png', 'jpg'];
        $path = "uploads/gallery/";

        if (is_dir($path)) {
            $files = scandir($path);
            foreach ($files as $file) {
                $ext = pathinfo($path . $file, PATHINFO_EXTENSION);
                if (in_array($ext, $extensions)) {
                    $arr[] = [
                        'filename' => $file,
                        'path' => '/' . $path . $file,
                    ];
                }
            }
        }

        return $arr;
    }

}