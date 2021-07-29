<?php

$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'esapp-mis-api',
    'basePath' => dirname(__DIR__),    
    'bootstrap' => ['log'],
    'modules' => [
        'v1' => [
            'basePath' => '@app/modules/v1',
            'class' => 'api\modules\v1\Module'
        ]
    ],
    'components' => [   
        'request' => [
            'enableCookieValidation' => false,
            'enableCsrfValidation' => false,
            'parsers' => [
                'application/json' => \yii\web\JsonParser::class,
            ],
        ],     
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => false,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => false,
            'rules' => [
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => [
                        'v1/AuditTrail',
                        'v1/AwpbActivity',
                        'v1/AwpbActivityLine',
                        'v1/AwpbComment',
                        'v1/AwpbCommodityTypes',
                        'v1/AwpbComponent',
                        'v1/AwpbExpenseCategory',
                        'v1/AwpbFunder',
                        'v1/AwpbIndicator',
                        'v1/AwpbOutcome',
                        'v1/AwpbOutput',
                        'v1/AwpbTemplate',
                        'v1/AwpbTemplateActivity',
                        'v1/AwpbUnitOfMeasure',
                        'v1/Camp',
                        'v1/CommodityCategories',
                        'v1/CommodityPriceCollection',
                        'v1/CommodityPriceLevel',
                        'v1/CommodityType',
                        'v1/District',
                        'v1/Market',
                        'v1/MeFaabsCategoryAFarmer',
                        'v1/MeFaabsGroup',
                        'v1/MeFaabsTrainingAttendanceSheet',
                        'v1/MeFaabsTrainingTopicEnrolment',
                        'v1/MeFaabsTrainingTopics',
                        'v1/MeQuarterlyOperationsFundsRequisition',
                        'v1/MeQuarterlyWorkPlan',
                        'v1/MgfActivity',
                        'v1/MgfApplicant',
                        'v1/MgfApplication',
                        'v1/MgfApproval',
                        'v1/MgfApprovalStatus',
                        'v1/MgfAttachements',
                        'v1/MgfComponent',
                        'v1/MgfConceptNote',
                        'v1/MgfContact',
                        'v1/MgfExperience',
                        'v1/MgfFinalEvaluation',
                        'v1/MgfInputCost',
                        'v1/MgfInputItem',
                        'v1/MgfOffer',
                        'v1/MgfOperation',
                        'v1/MgfOrganisation',
                        'v1/MgfOrganisationalDetails',
                        'v1/MgfPartnership',
                        'v1/MgfPastproject',
                        'v1/MgfPosition',
                        'v1/MgfProjectEvaluation',
                        'v1/MgfProposal',
                        'v1/MgfProposalEvaluation',
                        'v1/MgfReviewer',
                        'v1/MgfScreening',
                        'v1/MgfSelectionCategory',
                        'v1/MgfSelectionCriteria',
                        'v1/MgfSelectionGrade',
                        'v1/Province',
                        'v1/User',
                    ]
                ]
            ],        
        ]
    ],
    'params' => $params,
];



