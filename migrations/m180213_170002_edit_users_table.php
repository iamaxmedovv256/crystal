<?php

use yii\db\Migration;

/**
 * Class m180213_170002_edit_users_table
 */
class m180213_170002_edit_users_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->alterColumn(\app\models\User::tableName(), 'updated_at', $this->integer()->defaultValue(null));
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180213_170002_edit_users_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180213_170002_edit_users_table cannot be reverted.\n";

        return false;
    }
    */
}
