<?php

namespace api\modules\v1\controllers;

class MefaabstrainingtopicenrolmentController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\MeFaabsTrainingTopicEnrolment';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
