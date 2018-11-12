<?php

    namespace base\web;

    class Response extends \yii\web\Response
    {

        public $format = self::FORMAT_JSON;
        public $acceptMimeType = 'application/json';
        public $formatters = [
            self::FORMAT_JSON => 'yii\web\JsonResponseFormatter'
        ];

    }
