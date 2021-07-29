<?php

namespace api\modules\v1\controllers;

class MgfselectioncriteriaController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\MgfSelectionCriteria';

    public function actionIndex()
    {
        return $this->render('index');
    }
}
