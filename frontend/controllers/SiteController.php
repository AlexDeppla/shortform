<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use frontend\models\ContactForm;
use frontend\models\Book;
use yii\data\Pagination;


/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {        
        $query = Book::find();
        
        $count = $query->count();
        
        $pagination = new Pagination(['totalCount' => $count, 'pageSize' => '3']);
        
        $books = $query->offset($pagination->offset)
                ->limit($pagination->limit)
                ->all();
        
        $sci_fy = Book::find()->orderBy('date desc')->where(['category_id' => 1])->one();
        $drama = Book::find()->orderBy('date desc')->where(['category_id' => 2])->one();
        $comedy = Book::find()->orderBy('date desc')->where(['category_id' => 3])->one();
        
        return $this->render('index', [
            'books' => $books,
            'pagination' => $pagination,
            'sci_fy' => $sci_fy,
            'drama' => $drama,
            'comedy' => $comedy,
        ]);
    }
    
    /*
     * Displays single page
     * 
     * @return mixed
     */
    public function actionView($id)
    {
        $books = Book::findOne($id);
        
        return $this->render('view', [
            'books' => $books,
        ]);
    }
    
    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }
}
