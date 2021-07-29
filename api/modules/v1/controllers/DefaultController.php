<?php

namespace api\modules\v1\controllers;

use OpenApi\Annotations as OA;

/**
 * @OA\Info(title="ESAPP MIS API", version="1.0")
 */
class DefaultController extends \yii\web\Controller
{
    /**
     * @OA\Get(
     *     path="/api/v1",
     *     @OA\Response(response="200", description="Get default action")
     * )
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        // ...
    }

    public function actionIndex()
    {
        return $this->render('index');
    }
}
