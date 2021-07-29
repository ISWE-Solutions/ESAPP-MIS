<?php

namespace api\modules\v1\controllers;

class MgfexperienceController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\MgfExperience';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
