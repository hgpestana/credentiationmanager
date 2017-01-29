<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%federacao}}".
 *
 * @property integer $id
 * @property integer $numero
 * @property string $nome
 *
 * @property Seccao[] $seccaos
 */
class Federacao extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%federacao}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['numero'], 'integer'],
            [['nome'], 'required'],
            [['nome'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'numero' => 'Numero',
            'nome' => 'Nome',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSeccaos()
    {
        return $this->hasMany(Seccao::className(), ['federacao' => 'id']);
    }
}
