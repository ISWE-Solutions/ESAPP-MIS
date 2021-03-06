<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AwpbComponentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Awpb Components';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="awpb-component-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Awpb Component', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'component_code',
            'parent_component_id',
            'component_description',
            'component_outcome:ntext',
            //'component_output:ntext',
            //'subcomponent',
            //'created_at',
            //'updated_at',
            //'created_by',
            //'updated_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
