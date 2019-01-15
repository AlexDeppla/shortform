<?php

namespace backend\models;

use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string $title
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'string', 'max' => 255],
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
        ];
    }
    
    public function getBooks()
    {
         return $this->hasMany(Book::class, ['category_id' => 'id']);
    }
    
    public static function getList()
    {
        $list = self::find()->asArray()->all();

        return ArrayHelper::map($list, 'id', 'title');
        
    }
}
