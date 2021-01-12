<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;
use backend\models\User;
use backend\models\Storyofchange;

/* @var $this yii\web\View */
/* @var $model backend\models\Storyofchange */

$this->title = "View story ";
$this->params['breadcrumbs'][] = ['label' => 'My Stories of change', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="card card-success card-outline">
    <div class="card-body">
        <div class="card-header">
            <div class="card-title">
                <?php
                if ($model->status == 0 || $model->status == 3) {
                    echo Html::a('<i class="fas fa-trash fa-2x"></i>', ['delete', 'id' => $model->id], [
                        'title' => 'Remove Story',
                        'data-placement' => 'top',
                        'style' => "padding:10px;",
                        'data-toggle' => 'tooltip',
                        'data' => [
                            'confirm' => 'Are you sure you want to remove story: ' . $model->title . '?',
                            'method' => 'post',
                        ],
                    ]);
                }
                if ($model->status == 0 || $model->status == 3) {
                    echo Html::a(
                            '<span class="fa fa-edit fa-2x"></span>', ['check-list', 'id' => $model->id], [
                        'title' => 'Edit Story',
                        'data-toggle' => 'tooltip',
                        'data-placement' => 'top',
                        'data-pjax' => '0',
                        'style' => "padding:30px;",
                        'class' => 'bt btn-lg'
                            ]
                    );
                }
                ?>
            </div>
            <div class="card-tools">
                <?php
                if ($model->status == 0 || $model->status == 3) {
                    if (!empty($model->sequel) && !empty($model->conclusions) &&
                            !empty($model->results) && !empty($model->actions) && !empty($model->challenge) &&
                            !empty($model->introduction)) {
                        ?>
                        <?=
                        Html::a('<i class="fas fa-save"></i> Submit for review',
                                ['storyofchange/submit-story', 'id' => $model->id],
                                [
                                    'class' => 'btn btn-success btn-xs',
                                    'data-toggle' => 'tooltip',
                                    'data-placement' => 'top',
                                    'data' => [
                                        'confirm' => 'Are you sure you want to submit story:"' . $model->title . '" for review?'
                                        . '<br>You will not be able to make changes to the story once submitted',
                                        'method' => 'post',
                                    ],
                        ]);
                        ?>
                        <?php
                    }
                }
                //This is a hack, just to use pjax for the delete confirm button
                $query = backend\models\User::find()->where(['id' => '-2']);
                $dataProvider = new \yii\data\ActiveDataProvider([
                    'query' => $query,
                ]);
                GridView::widget([
                    'dataProvider' => $dataProvider,
                ]);
                ?> 
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <?=
                DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        [
                            'attribute' => 'title',
                        ],
                        [
                            'attribute' => 'interviewee_names',
                        ],
                        [
                            'attribute' => 'interviewer_names',
                        ],
                        [
                            'attribute' => 'date_interviewed',
                        ],
                        [
                            'attribute' => 'status', 'format' => 'raw',
                            'value' => function($model) {
                                $str = "";
                                if ($model->status == Storyofchange::_accepted) {
                                    $str = "<p style='margin:2px;padding:2px;display:inline-block;' class='badge badge-success'> "
                                            . "<i class='fa fa-check'></i> Accepted</p><br>";
                                } elseif ($model->status == Storyofchange::_submitted_for_review) {
                                    $str = "<p style='margin:2px;padding:2px;display:inline-block;' class='badge badge-info'> "
                                            . "<i class='fa fa-times'></i> Submitted for review</p><br>";
                                } elseif ($model->status == Storyofchange::_resent_back) {
                                    $str = "<p style='margin:2px;padding:2px;display:inline-block;' class='badge badge-warning'> "
                                            . "<i class='fa fa-times'></i> Resent back. Requires changes</p><br>";
                                } else {
                                    $str = "<p style='margin:2px;padding:2px;display:inline-block;' class='badge badge-danger'> "
                                            . "<i class='fa fa-times'></i> Pending submision for review</p><br>";
                                }
                                return $str;
                            },
                        ],
                        [
                            'label' => 'IKM officer comments',
                            'attribute' => 'ikmo_comments',
                            'visible' => $model->status === Storyofchange::_resent_back || $model->status === Storyofchange::_accepted ? true : false
                        ],
                    ],
                ])
                ?>
            </div>

            <div class="col-lg-12">
                <div class="card card-success card-outline card-tabs">
                    <div class="card-header p-0 pt-1 border-bottom-0">
                        <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="introduction-tab" data-toggle="pill" href="#introduction" role="tab" aria-controls="introduction" aria-selected="true">Introduction</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="challenges-tab" data-toggle="pill" href="#challenges" role="tab" aria-controls="challenges" aria-selected="false">Challenges</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="actions-tab" data-toggle="pill" href="#actions" role="tab" aria-controls="actions" aria-selected="false">Actions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="results-tab" data-toggle="pill" href="#results" role="tab" aria-controls="results" aria-selected="false">Results</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="conclusion-tab" data-toggle="pill" href="#conclusion" role="tab" aria-controls="conclusion" aria-selected="false">Conclusion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="sequel-tab" data-toggle="pill" href="#sequel" role="tab" aria-controls="sequel" aria-selected="false">Sequel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="media-tab" data-toggle="pill" href="#media" role="tab" aria-controls="media" aria-selected="false">Media</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-two-tabContent">
                            <div class="tab-pane fade show active" id="introduction" role="tabpanel" aria-labelledby="introduction-tab">
                                <p><?= $model->introduction ?></p>
                            </div>
                            <div class="tab-pane fade" id="challenges" role="tabpanel" aria-labelledby="challenges-tab">
                                <p><?= $model->challenge ?></p>
                            </div>
                            <div class="tab-pane fade" id="actions" role="tabpanel" aria-labelledby="actions-tab">
                                <p><?= $model->actions ?></p>
                            </div>
                            <div class="tab-pane fade" id="results" role="tabpanel" aria-labelledby="results-tab">
                                <p><?= $model->results ?></p>
                            </div>
                            <div class="tab-pane fade" id="conclusion" role="tabpanel" aria-labelledby="conclusion-tab">
                                <p><?= $model->conclusions ?></p>
                            </div>
                            <div class="tab-pane fade" id="sequel" role="tabpanel" aria-labelledby="sequel-tab">
                                <p><?= $model->sequel ?></p>
                            </div>
                            <div class="tab-pane fade" id="media" role="tabpanel" aria-labelledby="media-tab">
                                <p>Story interview audio, pictures, videos etc</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>

        </div>
    </div>
</div>
