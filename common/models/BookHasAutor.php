<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "book_has_autor".
 *
 * @property int $id
 * @property int $id_book
 * @property int $id_autor
 */
class BookHasAutor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book_has_autor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_book', 'id_autor'], 'required'],
            [['id', 'id_book', 'id_autor'], 'integer'],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_book' => 'Id Book',
            'id_autor' => 'Id Autor',
        ];
    }
}
