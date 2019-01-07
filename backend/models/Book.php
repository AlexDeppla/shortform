<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $author
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
            [['viewed', 'status', 'category_id'], 'integer'],
            [['title', 'author', 'image'], 'string', 'max' => 255],
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
            'author' => 'Author',
            'date' => 'Date',
            'image' => 'Image',
            'viewed' => 'Viewed',
            'status' => 'Status',
            'category_id' => 'Category ID',
        ];
    }
}
