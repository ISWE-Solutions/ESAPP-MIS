<?php

namespace api\modules\v1\controllers;

class MefaabsgroupsController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\MeFaabsGroups';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
