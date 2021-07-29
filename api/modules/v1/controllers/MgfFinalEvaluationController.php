<?php

namespace api\modules\v1\controllers;

class MgffinalevaluationController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\MgfFinalEvaluation';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
