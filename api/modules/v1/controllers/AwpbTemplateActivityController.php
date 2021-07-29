<?php

namespace api\modules\v1\controllers;

class AwpbtemplateactivityController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\AwpbTemplateActivity';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
