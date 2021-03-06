<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\PersonaForm;
use app\models\Persona;

/**
* Clase controladora de Persona
*/
class PersonaController extends Controller
{

	public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

        /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }


    /**
     * Displays homepage of Persona.
     *
     * @return string
     */
    public function actionIndex()
    {
    	$model = new PersonaForm();
    	$persona = new Persona();

        if ($model->load(Yii::$app->request->post())) {
            
            $persona->nombre =  $model->nombre;
            $persona->apellidos =  $model->apellidos;
            $persona->edad = $model->edad;
            
            $persona->save();
        }
        return $this->render('index', [
            'model' => $model,
        ]);        
    }

}






?>