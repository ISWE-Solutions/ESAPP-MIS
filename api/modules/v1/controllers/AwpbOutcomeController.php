<?php

namespace api\modules\v1\controllers;

class AwpboutcomeController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\AwpbOutcome';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
