<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $date
 * @property string $image
 * @property int $viewed
 * @property int $status
 * @property int $category_id
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content'], 'required'],
            [['content'], 'string'],
            [['date'], 'safe'],
            [['viewed', 'status', 'category_id', 'author_id'], 'integer'],
            [['title', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content of book',
            'date' => 'Date',
            'image' => 'Image',
            'viewed' => 'Viewed',
            'status' => 'Status',
            'category_id' => 'Category',
            'author_id' => 'Author',
        ];
    }
    
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
    
    public function getAuthor()
    {
        return $this->hasOne(Author::class, ['id' => 'author_id'])->one();
    }
    
    public function getAuthorName()
    {
        if($author = $this->getAuthor())
        {
            return $author->name;
        }
        return 'not set';
    }
}
    
   
