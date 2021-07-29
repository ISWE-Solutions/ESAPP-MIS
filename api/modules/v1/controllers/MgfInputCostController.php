<?php

namespace api\modules\v1\controllers;

class MgfinputcostController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\MgfInputCost';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
