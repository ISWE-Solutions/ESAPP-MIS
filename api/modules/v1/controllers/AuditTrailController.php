<?php

namespace api\modules\v1\controllers;

class AudittrailController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\AuditTrail';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
