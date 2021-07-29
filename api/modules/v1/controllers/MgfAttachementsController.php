<?php

namespace api\modules\v1\controllers;

class MgfattachementsController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\MgfAttachements';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
