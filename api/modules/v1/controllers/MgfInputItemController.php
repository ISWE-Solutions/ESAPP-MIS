<?php

namespace api\modules\v1\controllers;

class MgfinputitemController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\MgfInputItem';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
