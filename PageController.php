<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Categories;

/*Контроллер для страниц сайта*/
class PageController extends Controller
{

    /**
     	Для страницы списка товаров
     */
    public function actionListproducts()
    {

        if(isset($_GET['id']) && $_GET['id'] != "" && filter_var($_GET['id'], FILTER_VALIDATE_INT))
        {

            $categories = Categories::find()->where(['id' => $_GET['id']])->asArray()->one();

            if(count($categories) > 0)
                return $this->render('listproducts', compact('categories'));
        }

        return $this->redirect(['page/catalog']);


    }

    /**
        Для страницы каталога
     */
    public function actionCatalog()
    {
        $categories = Categories::find()->asArray()->all();

        return $this->render('catalog', compact('categories'));
    }

    /**
     	Для страницы новостей
     */
    public function actionNews()
    {
        return $this->render('news');
    }

    /**
     	Для страницы контакты
     */
    public function actionContacts()
    {
        return $this->render('contacts');
    }

    /**
     	Для страницы входа
     */
    public function actionLogin()
    {
        return $this->render('login');
    }

    /**
     	Для страницы регистрации
     */
    public function actionRegistration()
    {
        return $this->render('registration');
    }

    /**
     	Для страницы обратная связь
     */
    public function actionFormcontact()
    {
        return $this->render('formcontact');
    }

    /**
     	Для страницы личный кабинет
     */
    public function actionLk()
    {
        return $this->render('lk');
    }

    /**
     	Для страницы Доставка
     */
    public function actionDostavka()
    {
        return $this->render('dostavka');
    }

    /**
     	Для страницы Оплата
     */
    public function actionOplata()
    {
        return $this->render('oplata');
    }

    /**
     	Для страницы О компании
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     	Для страницы Скидки
     */
    public function actionSale()
    {
        return $this->render('sale');
    }

    /**
     	Для страницы Карта сайта
     */
    public function actionSitemap()
    {
        return $this->render('sitemap');
    }

    /**
     	Для страницы корзина
     */
    public function actionCart()
    {
        return $this->render('cart');
    }

    /**
     	Для страницы Список желаний
     */
    public function actionListorder()
    {
        return $this->render('listorder');
    }



    


}
