<?php

namespace api\modules\v1\controllers;

class MgforganisationController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\MgfOrganisation';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
