<?php

use yii\db\Migration;

/**
 * Handles the creation of table `author`.
 */
class m190107_133613_create_author_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('author', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'birthdate' => $this->date(), 
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('author');
    }
}
