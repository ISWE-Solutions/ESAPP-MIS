<?php

namespace api\modules\v1\controllers;

class MequarterlyoperationsfundsrequisitionController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\MeQuarterlyOperationsFundsRequisition';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
