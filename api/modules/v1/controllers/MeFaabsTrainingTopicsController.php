<?php

namespace api\modules\v1\controllers;

class MefaabstrainingtopicsController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\MeFaabsTrainingTopics';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
