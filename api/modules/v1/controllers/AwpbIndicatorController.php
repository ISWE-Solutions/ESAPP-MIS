<?php

namespace api\modules\v1\controllers;

class AwpbindicatorController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\AwpbIndicator';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
