<?php

namespace api\modules\v1\controllers;

class MgfpastprojectController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\MgfPastproject';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
