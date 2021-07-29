<?php

namespace api\modules\v1\controllers;

class CommoditycategoriesController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\CommodityCategories';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
