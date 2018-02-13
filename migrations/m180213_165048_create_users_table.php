<?php

use yii\db\Migration;

/**
 * Handles the creation of table `users`.
 */
class m180213_165048_create_users_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable(\app\models\User::tableName(), [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'password' => $this->string()->notNull(),
            'authKey' => $this->string(),
            'accessToken' => $this->string(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'last_seen' => $this->integer()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(\app\models\User::STATUS_INACTIVE),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable(\app\models\User::tableName());
    }
}
