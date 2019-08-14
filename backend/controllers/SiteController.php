<?php
namespace backend\controllers;

use yii\web\Controller;

/**
 * Class SiteController 站点控制器
 * @package backend\controllers
 */
class SiteController extends Controller
{
    /**
     * 默认动作
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
