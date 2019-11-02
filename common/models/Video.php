<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "video".
 *
 * @property int $id
 * @property string $src
 * @property string $nombre
 * @property string $descripcion
 *
 * @property PermisosVideos[] $permisosVideos
 * @property RecetaHasVideo[] $recetaHasVideos
 */
class Video extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'video';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['src', 'nombre', 'descripcion'], 'required'],
            [['src', 'nombre', 'descripcion'], 'string', 'max' => 2000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'src' => 'Src',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPermisosVideos()
    {
        return $this->hasMany(PermisosVideos::className(), ['id_video' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecetaHasVideos()
    {
        return $this->hasMany(RecetaHasVideo::className(), ['id_video' => 'id']);
    }
}
