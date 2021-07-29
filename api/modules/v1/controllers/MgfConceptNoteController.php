<?php

namespace api\modules\v1\controllers;

class MgfconceptnoteController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\MgfConceptNote';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
