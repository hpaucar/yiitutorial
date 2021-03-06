<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Curso;
use app\models\CursoForm;

/**
* Clase Matricula, Gestiona todo lo referente  a curso e Incripción
*/
class MatriculaController extends Controller
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
    	return $this->render('index');  

    }

    public function actionCrear_curso()
    {
    	$model = new CursoForm();
    	$curso = new Curso();

    	if ($model->load(Yii::$app->request->post())) {
    		$curso->nombre = $model->nombre; 
    		$curso->descripcion = $model->descripcion; 

    		$curso->save();

    		return $this->render('creadoExito', [
    				'curso'=>$curso,
    			]);    		
    	}

    	return $this->render('crearCurso', [
    			'model'=>$model,
    		]);

    }



}

?>