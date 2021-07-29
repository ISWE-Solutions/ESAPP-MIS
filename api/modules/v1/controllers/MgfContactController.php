<?php

namespace api\modules\v1\controllers;

class MgfcontactController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\MgfContact';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
