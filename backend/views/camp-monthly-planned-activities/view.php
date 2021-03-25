<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\MeCampSubprojectRecordsMonthlyPlannedActivities */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Me Camp Subproject Records Monthly Planned Activities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="me-camp-subproject-records-monthly-planned-activities-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'camp_id',
            'activity_id',
            'faabs_id',
            'month',
            'year',
            'zone',
            'activity_target',
            'beneficiary_target_total',
            'beneficiary_target_women',
            'beneficiary_target_youth',
            'beneficiary_target_women_headed',
            'created_at',
            'updated_at',
            'created_by',
            'updated_by',
        ],
    ]) ?>

</div>