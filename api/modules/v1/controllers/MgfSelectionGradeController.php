<?php

namespace api\modules\v1\controllers;

class MgfselectiongradeController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\MgfSelectionGrade';

    public function actionIndex()
    {
        return $this->render('index');
    }
}
