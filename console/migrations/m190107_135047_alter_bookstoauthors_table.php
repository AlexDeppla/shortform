<?php

use yii\db\Migration;

/**
 * Class m190107_135047_alter_bookstoauthors_table
 */
class m190107_135047_alter_bookstoauthors_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp() {
        $this->addColumn('{{%bookstoauthors}}', 'book_id', $this->integer());
        $this->addColumn('{{%bookstoauthors}}', 'author_id', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        $this->dropColumn('{{%bookstoauthors}}', 'book_id');
        $this->dropColumn('{{%bookstoauthors}}', 'author_id');
    }

}
