<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "genero".
 *
 * @property integer $id
 * @property string $genero
 *
 * @property Docentes[] $docentes
 * @property Docentes[] $docentes0
 */
class Genero extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'genero';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['genero'], 'required'],
            [['genero'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'genero' => Yii::t('app', 'Genero'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocentes()
    {
        return $this->hasMany(Docentes::className(), ['nu_genero' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocentes0()
    {
        return $this->hasMany(Docentes::className(), ['nu_genero' => 'id']);
    }
}
