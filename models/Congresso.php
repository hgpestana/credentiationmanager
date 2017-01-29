<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%congresso}}".
 *
 * @property integer $id
 * @property string $nome
 * @property string $data
 *
 * @property CongressoHasMesavotoHasMilitante[] $congressoHasMesavotoHasMilitantes
 */
class Congresso extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%congresso}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['nome', 'data'], 'string'],
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
            'data' => 'Data',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCongressoHasMesavotoHasMilitantes()
    {
        return $this->hasMany(CongressoHasMesavotoHasMilitante::className(), ['congresso' => 'id']);
    }
}
