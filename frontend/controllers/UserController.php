<?php

namespace frontend\controllers;

use frontend\models\forms\SignupForm;
use frontend\models\forms\LoginForm;
use Yii;

class UserController extends \yii\web\Controller {

    public function actionLogin()
    {
        $model = new LoginForm();
        
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(['site/index']);
        }
        
        return $this->render('login', [
            'model' => $model
        ]);
    }

    public function actionSignup() {
        $model = new SignupForm();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'User registered!');
            return $this->redirect(['site/index']);
        }

        return $this->render('signup', [
                    'model' => $model,
        ]);
    }

}