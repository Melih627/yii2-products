<?php

namespace melih058\products\controllers;

use yii\web\Controller;

/**
 * Default controllers for the `products` module
 */
class LoginController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
