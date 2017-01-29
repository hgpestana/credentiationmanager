<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%mesavoto}}".
 *
 * @property integer $id
 * @property string $nome
 * @property integer $seccao
 *
 * @property CongressoHasMesavotoHasMilitante[] $congressoHasMesavotoHasMilitantes
 * @property Seccao $seccao0
 */
class MesaVoto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%mesavoto}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['nome'], 'string'],
            [['seccao'], 'integer'],
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
            'nome' => 'Nome',
            'seccao' => 'Seccao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCongressoHasMesavotoHasMilitantes()
    {
        return $this->hasMany(CongressoHasMesavotoHasMilitante::className(), ['mesavoto' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSeccao0()
    {
        return $this->hasOne(Seccao::className(), ['id' => 'seccao']);
    }
}
