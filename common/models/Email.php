<?php
namespace common\models;
use Yii;
class Email extends \yii\db\ActiveRecord
{
    const INCIDENCIA = 'Incidencia';
    const SEGUIMENT = 'Seguiment';
    const RECUPERARCLAU = 'Recuperar contraseña';
    const ALTASISTEMA = 'Alta sistema';
    const CONTACTA = 'Contacta';
    const COMISSIO = 'Comissio de seguiment';
    const OFERTADEFEINA = 'Oferta de feina';
    const SUBSCRIPCIO = 'Subscripció';
    const CAMPANYES =  'Campanyes';
    const ACTA =  'Acta';
    const CIUTADA =  'Ciutadania';
    const CONFIRMACIOALTA =  'Confirmació alta';
    const CONVOCATORIA =  'Convocatoria';
    const TIPOS = [ 1 => Email::INCIDENCIA, 2 => Email::SEGUIMENT,  3 => Email::RECUPERARCLAU,
                    4 => Email::ALTASISTEMA, 5 => Email::CONTACTA, 6 => Email::OFERTADEFEINA,  10 => Email::COMISSIO,
                    11 => Email::SUBSCRIPCIO, 12 => Email::CAMPANYES, 13 => Email::ACTA,
                    14 => Email::CIUTADA, 15 => EMAIL::CONFIRMACIOALTA, 16 => EMAIL::CONVOCATORIA];
    /* METODE 1.2 PER ENVIAR EMAILS:
      EXEMPLE ---------------------
       $tipo = STRING nom equivalent al TIPOS dalt, exemple per confirmacio alta hem de passar: 'Confirmació alta'
       $model_usuari_o_actor = OBJECTE de la clase que pertoqui
       $email_list = STRING de un email (Aixo es fa servir per quan es passa una llista de emails de diferents OBJECTES (EX: ACTOR + PERSONA))
              --------------------
    */
    public function enviarEmail($tipo, $model = null, $email_list = null, $post = null){
      $email = Yii::$app->mailer;
      $email = $email->compose();
      $body = '';
      $guid = uniqid("", true);
      $enviar = false;
      $email_enviat = 0;
      /* DESTINATARI DE LEMAIL, EN FUNCIO DE SI MOL PASSEN PER ARRAY, DE SI ES USER O ACTOR, O DE SI ES UN ATRE TIPO DE OBJECTE */
      if($email_list) {
        $emailEnviament = $email_list;
      } else if(isset($model->email)){
                $emailEnviament = $model->email;
      } else if(!$post) $emailEnviament = UserFront::findOne($model->user_front_id)->email;
      switch($tipo){
        case Email::CONVOCATORIA:
            $arrayContinguts = EMAIL::sendEmailSeguimentDestinataris('REQUEST', $model, $post);
            $emailEnviament  = $arrayContinguts[0];
            
            $body = "T'esperem!";
            $email = $email->attachContent(file_get_contents($arrayContinguts[1]), ['fileName' => 'meeting.ics', 'contentType' => 'text/plain']);
            $enviar = true;
            //return true;
            break;
        case Email::ALTASISTEMA: // FRONT, EMAIL QUE ES REB QUAN ES REGISTRA L'USUARI
            $body = Yii::$app->mailer->render('layouts/email_alta',['user_front' => $model, 'area_geografica' => $areaGeografica, 'guid' => $guid]);
            $email = $email->setSubject(Yii::t('app', 'La teva sol·licitud al registre del '.$areaGeografica->nom.' s\'està cursant 👍🏼'));
            break;
        case Email::CONFIRMACIOALTA:  // BACK, EMAIL QUE S'ENVIA QUAN EL TECNIC CONFIRMA EL REGISTRE
            //$email = $email->compose('layouts/email_confirmacio_alta',['user_front' => $model, 'area_geografica' => $areaGeografica]);
            $body = Yii::$app->mailer->render('layouts/email_confirmacio_alta',['user_front' => $model, 'area_geografica' => $areaGeografica, 'guid' => $guid]);
            $email = $email->setSubject(Yii::t('app', 'La teva sol·licitud al registre del '.$areaGeografica->nom.' ha estat aceptada ✅'));
            $email = $email->attach($model->buildPdf());
            $enviar = true;
            break;

        case Email::RECUPERARCLAU:
            $body = Yii::$app->mailer->render('layouts/recuperar_clau',
                      ['contrasenya' => $model->newpassword,
                      'usuari' => $model,
                      'guid' => $guid
                      ]);
            $email = $email->setSubject(Yii::t('app',' - Recuperar clau ') . $model->name . ' '. $model->surname);
            break;
        case Email::CONTACTA: // FRONT, EMAIL QUE S'ENVIA QUAN ENVIEN MISSATGE PEL CONTACTA
            //$email = $email->compose('layouts/formulari_contacte',['modelContact' => $model,'area_geografica' => $areaGeografica]);
            $body = Yii::$app->mailer->render('layouts/formulari_contacte',['modelContact' => $model,'area_geografica' => $areaGeografica, 'guid' => $guid]);
            $email = $email->setSubject(Yii::t('app', '['.$areaGeografica->nom.'] - Formulari de contacta de ').$model->subject);
            break;

      }
      $email = $email->setHtmlBody($body);
      $email = $email->setFrom( [Yii::$app->params['adminEmail'] => 'cris@rilom.com']);
      $email = $email->setTo($emailEnviament);
      if($enviar){
          $email->send();
          $email_enviat = 1;
      }
    }
}