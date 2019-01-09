<?php

use yii\db\Migration;

/**
 * Handles the dropping of table `book`.
 */
class m190107_135732_drop_book_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
         $this->dropColumn('{{%book}}', 'author');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
         $this->addColumn('{{%book}}', 'author', $this->string());
    }
}
