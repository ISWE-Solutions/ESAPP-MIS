<?php

namespace api\modules\v1\controllers;

class MgfapplicantController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\MgfApplicant';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
