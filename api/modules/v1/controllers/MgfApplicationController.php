<?php

namespace api\modules\v1\controllers;

class MgfapplicationController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\MgfApplication';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
