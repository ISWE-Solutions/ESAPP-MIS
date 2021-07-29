<?php

namespace api\modules\v1\controllers;

class MgfapprovalController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\MgfApproval';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
