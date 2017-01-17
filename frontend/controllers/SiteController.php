<?php
namespace frontend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use source\models\LoginForm;
use source\models\ContactForm;
use source\models\Post;
use source\core\front\FrontController;
use source\models\User;
use source\models\Content;
use source\LuLu;
use yii\data\ActiveDataProvider;

class SiteController extends FrontController
{
    public function actionIndex()
    {
        return $this->render('index', []);
    }

    public function actionLogin()
    {
        if (! \Yii::$app->user->isGuest)
        {
            return $this->goHome();
        }
        
        $model = new User();
        $model->scenario = 'login';
     //   var_dump(\Yii::$app->user->isGuest);
        if ($model->load(Yii::$app->request->post()) && $model->login())
        {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        
        return $this->goHome();
    }

    public function actionContact()
    {
        //$this->layout=false;
        
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail']))
        {
            Yii::$app->session->setFlash('contactFormSubmitted');
            
            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model
        ]);
    }

    public function actionAbout()
    {
        return $this->render('about', [
            'test' => 5, 
            'testData' => $this->testData
        ]);
    }

    public function actionClose()
    {
        return $this->render('close', [
            'message' => '站点维护中。。。'
        ]);
    }
    
    public function actionGuestbook()
    {
        return $this->render('guestbook', []);
    }
       
    
    //多语言切换
	public function actionLanguage(){       
               $language=  \Yii::$app->request->get('lang');  
                if(isset($language)){  
                    \Yii::$app->session['language']=$language;  
                }  
             //切换完语言哪来的返回到哪里
              $this->goBack(\Yii::$app->request->headers['Referer']);  
            }  
}
