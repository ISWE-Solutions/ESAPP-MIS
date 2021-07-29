<?php

namespace api\modules\v1\controllers;

class AwpboutputController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\AwpbOutput';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
