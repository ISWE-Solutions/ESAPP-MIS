<?php

namespace api\modules\v1\controllers;

class MgfpositionController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\MgfPosition';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
