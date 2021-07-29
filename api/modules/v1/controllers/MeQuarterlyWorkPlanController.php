<?php

namespace api\modules\v1\controllers;

class MequarterlyworkplanController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\MeQuarterlyWorkPlan';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
