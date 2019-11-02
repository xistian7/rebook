<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pais".
 *
 * @property string $nombre
 * @property string $name
 * @property string $nom
 * @property string $iso2
 * @property string $iso3
 * @property int $phone_code
 *
 * @property User[] $users
 */
class Pais extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pais';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'name', 'nom', 'iso2', 'iso3', 'phone_code'], 'required'],
            [['phone_code'], 'integer'],
            [['nombre', 'name', 'nom', 'iso2', 'iso3'], 'string', 'max' => 255],
            [['iso3'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nombre' => 'Nombre',
            'name' => 'Name',
            'nom' => 'Nom',
            'iso2' => 'Iso2',
            'iso3' => 'Iso3',
            'phone_code' => 'Phone Code',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['pais_iso3' => 'iso3']);
    }
}
