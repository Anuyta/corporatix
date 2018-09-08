<?php

namespace app\controllers;


use app\models\Goods;
use app\models\Items;
use yii\web\Controller;
use yii\web\NotFoundHttpException;


class SiteController extends Controller
{
    public $layout = "corporatix";

    public function actionIndex()
    {
        $items = Items::find()->all();
//        return 1;
        return $this->render('index', array(
            'items' => $items
        ));
    }

    public function actionView($id)
    {
        $item = Items::findOne($id);

        if(!$item){
            throw new NotFoundHttpException();
        }

        return $this->render('view',array(
            'item' => $item
        ));
    }
}
