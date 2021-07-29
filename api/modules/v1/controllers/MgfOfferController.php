<?php

namespace api\modules\v1\controllers;

class MgfofferController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\MgfOffer';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
