<?php

namespace frontend\controllers;

class ProfileController extends \yii\web\Controller
{
    public function actionIndex($id)
    {   
        return $this->render('profile', [
            
        ]);
    }
    
    public function actionAdd()
    {
        return $this->render('add');
    }

}
