<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fornecedor".
 *
 * @property int $id
 * @property string $Nome
 * @property int|null $Telemovel
 * @property string|null $Email
 * @property string|null $Morada
 *
 * @property Comprapecas[] $comprapecas
 */
class Fornecedor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fornecedor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nome'], 'required'],
            [['Telemovel'], 'integer'],
            [['Nome'], 'string', 'max' => 100],
            [['Email'], 'string', 'max' => 50],
            [['Morada'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Nome' => 'Nome',
            'Telemovel' => 'Telemovel',
            'Email' => 'Email',
            'Morada' => 'Morada',
        ];
    }

    /**
     * Gets query for [[Comprapecas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getComprapecas()
    {
        return $this->hasMany(Comprapecas::class, ['Fornecedor_id' => 'id']);
    }
}