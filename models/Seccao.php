<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%seccao}}".
 *
 * @property integer $id
 * @property integer $federacao
 * @property string $nome
 *
 * @property Mesavoto[] $mesavotos
 * @property Militante[] $militantes
 * @property Federacao $federacao0
 */
class Seccao extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%seccao}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['federacao', 'nome'], 'required'],
            [['federacao'], 'integer'],
            [['nome'], 'string'],
            [['federacao'], 'exist', 'skipOnError' => true, 'targetClass' => Federacao::className(), 'targetAttribute' => ['federacao' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'federacao' => Yii::t('app', 'Federacao'),
            'nome' => Yii::t('app', 'Nome'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMesavotos()
    {
        return $this->hasMany(Mesavoto::className(), ['seccao' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMilitantes()
    {
        return $this->hasMany(Militante::className(), ['seccao' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFederacao0()
    {
        return $this->hasOne(Federacao::className(), ['id' => 'federacao']);
    }
}
