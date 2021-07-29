<?php

namespace api\modules\v1\controllers;

class MgfscreeningController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\MgfScreening';

    public function actionIndex()
    {
        return $this->render('index');
    }
}
