<?php
namespace frontend\controllers;

use yii\web\Controller;

/**
 * 默认站点控制器
 */
class SiteController extends Controller
{
    /**
     * 默认动作
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
