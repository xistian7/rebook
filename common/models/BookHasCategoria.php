<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "book_has_categoria".
 *
 * @property int $id
 * @property int $id_book
 * @property int $id_categoria
 */
class BookHasCategoria extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book_has_categoria';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_book', 'id_categoria'], 'required'],
            [['id_book', 'id_categoria'], 'integer'],
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
            'id_categoria' => 'Id Categoria',
        ];
    }
}
