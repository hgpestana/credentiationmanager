<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%credenciacao}}".
 *
 * @property integer $id
 * @property integer $congresso
 * @property integer $militante
 * @property string $voto
 * @property string $data
 *
 * @property Militante $militante0
 * @property Congresso $congresso0
 */
class Credenciacao extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%credenciacao}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['congresso', 'militante'], 'integer'],
            [['voto', 'data'], 'string'],
            [['militante'], 'exist', 'skipOnError' => true, 'targetClass' => Militante::className(), 'targetAttribute' => ['militante' => 'id']],
            [['congresso'], 'exist', 'skipOnError' => true, 'targetClass' => Congresso::className(), 'targetAttribute' => ['congresso' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'congresso' => Yii::t('app', 'Congresso'),
            'militante' => Yii::t('app', 'Militante'),
            'voto' => Yii::t('app', 'Voto'),
            'data' => Yii::t('app', 'Data'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMilitante0()
    {
        return $this->hasOne(Militante::className(), ['id' => 'militante']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCongresso0()
    {
        return $this->hasOne(Congresso::className(), ['id' => 'congresso']);
    }
}
