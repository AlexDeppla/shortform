<?php

namespace frontend\controllers;

use frontend\models\Book;
use frontend\models\Profile;
use Yii;

class ProfileController extends \yii\web\Controller {

    public function actionAdd() {
        $id = Yii::$app->request->get('id');

        $book = Book::findOne($id);
        if (empty($book)) {
            return false;
        }
        $session = Yii::$app->session;
        $session->open();
        $profile = new Profile();
        $profile->addToProfile($book);
        $this->layout = false;
        return $this->render('profile-modal', compact('session'));
    }

    public function actionClear() {
        $session = $id = Yii::$app->session;
        $session->open();
        $session->remove('profile');
        $this->layout = false;
        return $this->render('profile-modal', compact('session'));
    }

    public function actionDelItem() {
        $id = Yii::$app->request->get('id');
        $session = Yii::$app->session;
        $session->open();
        $profile = new Profile();
        
        $this->layout = false;
        return $this->render('profile-modal', compact('session'));
    }

    public function actionShow() {
        $session = Yii::$app->session;
        $session->open();
        $this->layout = false;
        return $this->render('profile-modal', compact('session'));
    }
}
