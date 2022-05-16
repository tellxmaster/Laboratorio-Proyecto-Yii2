<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "actor".
 *
 * @property int $ACT_ID Id
 * @property int|null $SEX_ID Sexo
 * @property string $ACT_NOMBRE Nombre
 *
 * @property ActorPelicula[] $actorPeliculas
 * @property Sexo $sEX
 */
class Actor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'actor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['SEX_ID'], 'integer'],
            [['ACT_NOMBRE'], 'required'],
            [['ACT_NOMBRE'], 'string', 'max' => 60],
            [['SEX_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Sexo::className(), 'targetAttribute' => ['SEX_ID' => 'SEX_ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ACT_ID' => 'Id',
            'SEX_ID' => 'Sexo',
            'ACT_NOMBRE' => 'Nombre',
        ];
    }

    /**
     * Gets query for [[ActorPeliculas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getActorPeliculas()
    {
        return $this->hasMany(ActorPelicula::className(), ['ACT_ID' => 'ACT_ID']);
    }

    /**
     * Gets query for [[SEX]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSEX()
    {
        return $this->hasOne(Sexo::className(), ['SEX_ID' => 'SEX_ID']);
    }
}
