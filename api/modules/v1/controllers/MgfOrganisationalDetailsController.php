<?php

namespace api\modules\v1\controllers;

class MgforganisationaldetailsController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\MgfOrganisationalDetails';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
