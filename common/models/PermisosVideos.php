<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "permisos_videos".
 *
 * @property int $id
 * @property int $id_user
 * @property int $id_video
 * @property string $data_inicio
 * @property string $data_final
 * @property int $num_visitas_simultaneas
 * @property int $num_visitas_actual
 *
 * @property User $user
 * @property Video $video
 */
class PermisosVideos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'permisos_videos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'id_video', 'data_inicio', 'data_final', 'num_visitas_simultaneas', 'num_visitas_actual'], 'required'],
            [['id_user', 'id_video', 'num_visitas_simultaneas', 'num_visitas_actual'], 'integer'],
            [['data_inicio', 'data_final'], 'safe'],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
            [['id_video'], 'exist', 'skipOnError' => true, 'targetClass' => Video::className(), 'targetAttribute' => ['id_video' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'Id User',
            'id_video' => 'Id Video',
            'data_inicio' => 'Data Inicio',
            'data_final' => 'Data Final',
            'num_visitas_simultaneas' => 'Num Visitas Simultaneas',
            'num_visitas_actual' => 'Num Visitas Actual',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVideo()
    {
        return $this->hasOne(Video::className(), ['id' => 'id_video']);
    }
}
