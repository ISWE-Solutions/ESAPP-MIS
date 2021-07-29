<?php

namespace api\modules\v1\controllers;

class MgfcomponentController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\MgfComponent';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
