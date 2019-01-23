<?php

namespace frontend\controllers;

use frontend\models\Category;
use frontend\models\Book;
use yii\data\Pagination;

class CategoryController extends \yii\web\Controller
{
    public function actionIndex($id)
    {                
        $category = Category::findOne($id);
        
        $query = Book::find()->where(['category_id' => $id]);

        $count = $query->count();

        $pagination = new Pagination(['totalCount' => $count, 'pageSize' => 8]);
        
        $books = $query->offset($pagination->offset)
                ->limit($pagination->limit)
                ->all(); 
        
        return $this->render('category', [
            'books' => $books,
            'pagination' => $pagination,
            'category' => $category,
        ]);
    }
}