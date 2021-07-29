<?php

namespace api\modules\v1\controllers;

class AwpbfunderController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\AwpbFunder';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
