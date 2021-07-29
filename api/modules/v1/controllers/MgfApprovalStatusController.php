<?php

namespace api\modules\v1\controllers;

class MgfapprovalstatusController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\MgfApprovalStatus';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
