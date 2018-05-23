<?php

use yii\db\Migration;

/**
 * Class m180522_070112_update
 */
class m180522_070112_update extends Migration
{


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->alterColumn('repertuar', 'date', 'datetime');
    }

    public function down()
    {
        $this->alterColumn('repertuar', 'date', 'date');
        echo "m180522_070112_update cannot be reverted.\n";
        return false;
    }

}
