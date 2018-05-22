<?php

use yii\db\Migration;

/**
 * Class m180520_095228_fileupload
 */
class m180520_095228_fileupload extends Migration
{
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->addColumn('performance', 'file_name', $this->string(255));
        $this->addColumn('performance', 'file_path', $this->string(255));
        $this->dropColumn('performance', 'files');
    }

    public function down()
    {
        echo "m180520_095228_fileupload cannot be reverted.\n";

        return false;
    }

}
