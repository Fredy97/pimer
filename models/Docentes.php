<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "docentes".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $paterno
 * @property string $materno
 * @property integer $edad
 * @property string $email
 * @property string $telefono
 * @property integer $nu_genero
 * @property integer $nu_grupo
 * @property string $direccion
 *
 * @property Genero $nuGenero
 * @property Genero $nuGenero0
 * @property Grupo $nuGrupo
 * @property Grupo $nuGrupo0
 */
class Docentes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'docentes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'paterno', 'edad', 'email'], 'required'],
            [['nombre', 'paterno', 'materno', 'email', 'telefono', 'direccion'], 'string'],
            [['edad', 'nu_genero', 'nu_grupo'], 'integer'],
            [['nu_genero'], 'exist', 'skipOnError' => true, 'targetClass' => Genero::className(), 'targetAttribute' => ['nu_genero' => 'id']],
            [['nu_genero'], 'exist', 'skipOnError' => true, 'targetClass' => Genero::className(), 'targetAttribute' => ['nu_genero' => 'id']],
            [['nu_grupo'], 'exist', 'skipOnError' => true, 'targetClass' => Grupo::className(), 'targetAttribute' => ['nu_grupo' => 'id']],
            [['nu_grupo'], 'exist', 'skipOnError' => true, 'targetClass' => Grupo::className(), 'targetAttribute' => ['nu_grupo' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nombre' => Yii::t('app', 'Nombre'),
            'paterno' => Yii::t('app', 'Paterno'),
            'materno' => Yii::t('app', 'Materno'),
            'edad' => Yii::t('app', 'Edad'),
            'email' => Yii::t('app', 'Email'),
            'telefono' => Yii::t('app', 'Telefono'),
            'nu_genero' => Yii::t('app', 'Nu Genero'),
            'nu_grupo' => Yii::t('app', 'Nu Grupo'),
            'direccion' => Yii::t('app', 'Direccion'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNuGenero()
    {
        return $this->hasOne(Genero::className(), ['id' => 'nu_genero']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNuGenero0()
    {
        return $this->hasOne(Genero::className(), ['id' => 'nu_genero']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNuGrupo()
    {
        return $this->hasOne(Grupo::className(), ['id' => 'nu_grupo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNuGrupo0()
    {
        return $this->hasOne(Grupo::className(), ['id' => 'nu_grupo']);
    }
}
