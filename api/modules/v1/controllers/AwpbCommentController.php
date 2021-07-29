<?php

namespace api\modules\v1\controllers;

class AwpbcommentController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\AwpbComment';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
