<?php

    namespace common\filters;

    use yii\filters\Cors;

    class CustomCors extends Cors
    {
        public function beforeAction($action)
        {
            parent::beforeAction($action);

            if ($this->request->isOptions && $this->request->headers->has('Access-Control-Request-Method')) {
                // it is CORS preflight request, respond with 200 OK without further processing
                $this->response->setStatusCode(200);
                return false;
            }

            return true;
        }
    }