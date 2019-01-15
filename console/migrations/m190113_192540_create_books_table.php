<?php

use yii\db\Migration;

/**
 * Handles the creation of table `books`.
 */
class m190113_192540_create_books_table extends Migration
{
    /**
     * {@inheritdoc}
     */
   public function safeUp()
    {
        $this->createTable('book', [
            'id' => $this->primaryKey(),
            'title'=>$this->string(),
            'content'=>$this->text(),
            'author_id'=>$this->string(),
            'date'=>$this->date(),
            'image'=>$this->string(),
            'viewed'=>$this->integer(),
            'status'=>$this->integer(),
            'category_id'=>$this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('book');
    }
}
