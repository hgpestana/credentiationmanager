<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%participacao}}".
 *
 * @property integer $id
 * @property integer $congresso
 * @property integer $mesavoto
 * @property integer $militante
 * @property string $papel
 *
 * @property Militante $militante0
 * @property Mesavoto $mesavoto0
 * @property Congresso $congresso0
 */
class Participacao extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%participacao}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['congresso', 'mesavoto', 'militante'], 'integer'],
            [['papel'], 'string'],
            [['militante'], 'exist', 'skipOnError' => true, 'targetClass' => Militante::className(), 'targetAttribute' => ['militante' => 'id']],
            [['mesavoto'], 'exist', 'skipOnError' => true, 'targetClass' => Mesavoto::className(), 'targetAttribute' => ['mesavoto' => 'id']],
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
            'mesavoto' => Yii::t('app', 'Mesavoto'),
            'militante' => Yii::t('app', 'Militante'),
            'papel' => Yii::t('app', 'Papel'),
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
    public function getMesavoto0()
    {
        return $this->hasOne(Mesavoto::className(), ['id' => 'mesavoto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCongresso0()
    {
        return $this->hasOne(Congresso::className(), ['id' => 'congresso']);
    }
}
