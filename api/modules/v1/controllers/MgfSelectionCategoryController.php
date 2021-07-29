<?php

namespace api\modules\v1\controllers;

class MgfselectioncategoryController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\MgfSelectionCategory';

    public function actionIndex()
    {
        return $this->render('index');
    }
}
