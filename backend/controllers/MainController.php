<?php

namespace backend\controllers;
use yii\filters\AccessControl;

class MainController extends \yii\web\Controller
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
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    function init()
    {
        parent::init();
        $app = \Yii::$app;
        
        
        /*tactic filtrar i mirar si l'usuari i l'empresa estan actives per poder-se logejar*/
        
        $userActual=\Yii::$app->user;
        
        if($userActual->id != null){

            $estatUsuari=$userActual->getIdentity()->status;
            
            if($estatUsuari==0){
                \Yii::$app->user->logout();
            }
        } 
        /*fi tactic*/
        
        if (isset($_POST['_lang']))
        {
            $app->language = $_POST['_lang'];
            $app->session['_lang'] = $app->language;
        }
        else if (isset($app->session['_lang']))
        {
            $app->language = $app->session['_lang'];
        }
    }

    protected function outputJSON($data) {

        $this->layout=false;
        header('Content-type: application/json');
        echo json_encode($data);
        \Yii::$app->end();
    }
}
