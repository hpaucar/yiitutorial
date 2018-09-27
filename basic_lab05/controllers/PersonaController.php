<?php
namespace app\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\PersonaForm;
use app\models\Persona;
use app\models\Ubicacion;

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
        $ubicacion = new Ubicacion();

        if ($model->load(Yii::$app->request->post())) {
            
            $ubicacion->latitud = $model->latitud;
            $ubicacion->longitud = $model->longitud;

            $ubicacion->save();

            $persona->nombre =  $model->nombre;
            $persona->apellidos =  $model->apellidos;
            $persona->direccion_lat_lon = $ubicacion->id_ubicacion;
            
            $persona->save();

            return $this->render('registrado', [
            'persona' => $persona,
            'ubicacion' => $ubicacion,
        ]);

        }
        return $this->render('index', [
            'model' => $model,
        ]);        
    }
}














?>