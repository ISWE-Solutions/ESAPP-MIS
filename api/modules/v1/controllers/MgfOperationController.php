<?php

namespace api\modules\v1\controllers;

class MgfoperationController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\MgfOperation';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
