<?php

namespace api\modules\v1\controllers;

class AwpbexpensecategoryController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\AwpbExpenseCategory';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
