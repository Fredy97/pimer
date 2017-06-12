<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "grupo".
 *
 * @property integer $id
 * @property string $grupo
 *
 * @property Docentes[] $docentes
 * @property Docentes[] $docentes0
 */
class Grupo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'grupo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['grupo'], 'required'],
            [['grupo'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'grupo' => Yii::t('app', 'Grupo'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocentes()
    {
        return $this->hasMany(Docentes::className(), ['nu_grupo' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocentes0()
    {
        return $this->hasMany(Docentes::className(), ['nu_grupo' => 'id']);
    }
}
