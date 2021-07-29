<?php

namespace api\modules\v1\controllers;

class MgfreviewerController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\MgfReviewer';

    public function actionIndex()
    {
        return $this->render('index');
    }
}
