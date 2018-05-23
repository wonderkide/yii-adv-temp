<?php

namespace frontend\controllers;

use Yii;
//use common\models\Blog;
//use frontend\models\BlogSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl; //<<------ Use

/**
 * BlogController implements the CRUD actions for Blog model.
 */
class BlogController extends Controller
{
  public function behaviors()
{
    return [
        'verbs' => [
            'class' => VerbFilter::className(),
            'actions' => [
                'delete' => ['post'],
            ],
        ],
        'access'=>[
          'class'=>AccessControl::className(),
          'rules'=>[
            [
              'allow'=>true,
              'actions'=>['index','view','create','update'],
              'roles'=>['Author']
            ],
            [
              'allow'=>true,
              'actions'=>['delete'],
              'roles'=>['Management']
            ]
          ]
        ]
    ];
}

    //...

}