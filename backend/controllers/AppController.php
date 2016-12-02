<?php


namespace backend\controllers;


use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

class AppController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'allow' => false,
                        'roles' => ['?'],
                    ],
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    //'logout' => ['post'],
                ],
            ],
        ];
    }

    public function init()
    {
        $res = $this->behaviors();
        if(!isset($res['access'])){
            echo "Для контроллера <b>".self::className()."</b> в поведении не прописант access, добавьте правила доступа, либо удалите его совсем, чтобы поведение унаследовалось от <b>AppController</b>.";
            exit;
        }
        parent::init(); // Call parent implementation;
    }
}