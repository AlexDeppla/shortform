<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
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
        
        $recent1 = Book::find()->orderBy('date desc')->where(['category_id' => 1])->one();
        $recent2 = Book::find()->orderBy('date desc')->where(['category_id' => 2])->one();
        $recent3 = Book::find()->orderBy('date desc')->where(['category_id' => 3])->one();
        
//        echo '<pre>';
//        print_r($recent);
//        echo '</pre>';
//        die;
        
        return $this->render('index', [
            'books' => $books,
            'pagination' => $pagination,
            'recent1' => $recent1,
            'recent2' => $recent2,
            'recent3' => $recent3,
        ]);
    }
    
    /*
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

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
