<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%militante}}".
 *
 * @property integer $id
 * @property integer $numero
 * @property integer $seccao
 * @property string $nome
 * @property string $sexo
 * @property string $morada
 * @property string $localidade
 * @property string $codigopostal
 * @property string $email
 * @property string $dataadesao
 * @property string $datanascimento
 * @property string $telefone
 * @property string $telemovel
 *
 * @property CongressoHasMesavotoHasMilitante[] $congressoHasMesavotoHasMilitantes
 * @property Seccao $seccao0
 */
class Militante extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%militante}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['numero', 'nome'], 'required'],
            [['numero', 'seccao'], 'integer'],
            [['nome', 'sexo', 'morada', 'localidade', 'codigopostal', 'email', 'dataadesao', 'datanascimento', 'telefone', 'telemovel'], 'string'],
            [['numero'], 'unique'],
            [['seccao'], 'exist', 'skipOnError' => true, 'targetClass' => Seccao::className(), 'targetAttribute' => ['seccao' => 'id']],
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
            'seccao' => 'Seccao',
            'nome' => 'Nome',
            'sexo' => 'Sexo',
            'morada' => 'Morada',
            'localidade' => 'Localidade',
            'codigopostal' => 'Codigopostal',
            'email' => 'Email',
            'dataadesao' => 'Dataadesao',
            'datanascimento' => 'Datanascimento',
            'telefone' => 'Telefone',
            'telemovel' => 'Telemovel',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCongressoHasMesavotoHasMilitantes()
    {
        return $this->hasMany(CongressoHasMesavotoHasMilitante::className(), ['militante' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSeccao0()
    {
        return $this->hasOne(Seccao::className(), ['id' => 'seccao']);
    }
}
