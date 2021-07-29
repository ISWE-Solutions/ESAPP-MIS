<?php

namespace api\modules\v1\controllers;

class AwpbtemplateController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\AwpbTemplate';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
