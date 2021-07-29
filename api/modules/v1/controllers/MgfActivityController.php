<?php

namespace api\modules\v1\controllers;

class MgfactivityController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\MgfActivity';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
