<?php

namespace frontend\controllers;

use Yii;
use frontend\models\MgfContact;
use frontend\models\MgfContactSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\models\MgfOrganisation;
use yii\filters\AccessControl;
include("findid.php");

/**
 * MgfContactController implements the CRUD actions for MgfContact model.
 */
class MgfContactController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors(){
        return [
            'access'=>[
                'class'=>AccessControl::className(),
                'only'=>['create','update','index','view'],
                'rules'=>[
                    [
                        'allow'=>true,
                        'roles'=>['@']
                    ],
                ]
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all MgfContact models.
     * @return mixed
     */
    public function actionIndex(){
        $searchModel = new MgfContactSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MgfContact model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id){
        //$id=getOrganisationID();  
        return $this->render('view', ['model' => $this->findModel($id),]);
    }

    /**
     * Creates a new MgfContact model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id){
        $organisation=MgfOrganisation::findOne($id);
        $model = new MgfContact();
        if ($model->load(Yii::$app->request->post())) {
            $model->applicant_id=$organisation->applicant_id;
            $model->organisation_id=$id;

            if($model->save()){
                Yii::$app->session->setFlash('success', 'Saved successfully.');
            }else{
                Yii::$app->session->setFlash('error', 'NOT Saved');
            }
            
            return $this->redirect(['mgf-organisation/view', 'id' => $id]);
        }
    }

    /**
     * Updates an existing MgfContact model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id){
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['mgf-organisation/view', 'id' => $model->organisation_id]);
        }

        return $this->render('update', ['model' => $model,]);
    }

    /**
     * Deletes an existing MgfContact model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id){
        $model = $this->findModel($id);
        $this->findModel($id)->delete();
        return $this->redirect(['mgf-organisation/view', 'id' => $model->organisation_id]);
    }

    /**
     * Finds the MgfContact model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return MgfContact the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id){
        if (($model = MgfContact::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
