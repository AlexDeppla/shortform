<?php

namespace frontend\models;

use yii\db\ActiveRecord;

/**
 * Description of Profile
 *
 * @author Roman
 */
class Profile extends ActiveRecord  
{
    public function addToProfile($book)
    {
        $_SESSION['profile'][$book->id] = [
            'title' => $book->title,
            'author' => $book->author->name,
            'category' => $book->category->title,
        ];
    }
}
