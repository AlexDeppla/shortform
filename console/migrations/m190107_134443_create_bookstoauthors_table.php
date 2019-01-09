<?php

use yii\db\Migration;

/**
 * Handles the creation of table `bookstoauthors`.
 */
class m190107_134443_create_bookstoauthors_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('bookstoauthors', [
            'id' => $this->primaryKey(),
            'book_id' => $this->integer(),
            'author_id' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('bookstoauthors');
    }
}
