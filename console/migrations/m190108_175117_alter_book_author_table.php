<?php

use yii\db\Migration;

/**
 * Class m190108_175117_alter_book_author_table
 */
class m190108_175117_alter_book_author_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%book}}', 'author_id', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropColumn('{{%book}}', 'author_id');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190108_175117_alter_book_author_table cannot be reverted.\n";

        return false;
    }
    */
}
