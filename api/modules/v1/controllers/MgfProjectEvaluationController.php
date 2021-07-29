<?php

namespace api\modules\v1\controllers;

class MgfprojectevaluationController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\MgfProjectEvaluation';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
