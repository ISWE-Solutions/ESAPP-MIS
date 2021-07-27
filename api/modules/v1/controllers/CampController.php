<?php

namespace api\modules\v1\controllers;

class CampController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\Camp';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
