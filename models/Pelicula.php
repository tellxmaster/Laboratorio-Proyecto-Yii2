<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pelicula".
 *
 * @property int $PEL_ID Id
 * @property int|null $GEN_ID Genero
 * @property int|null $DIR_ID Director
 * @property int|null $FOR_ID Formato
 * @property string $PEL_NOMBRE Nombre
 * @property float $PEL_COSTO Costo
 * @property string|null $PEL_FECHA_ESTRENO Fecha Estreno
 *
 * @property ActorPelicula[] $actorPeliculas
 * @property Alquiler[] $alquilers
 * @property Director $dIR
 * @property Formato $fOR
 * @property Genero $gEN
 */
class Pelicula extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pelicula';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['GEN_ID', 'DIR_ID', 'FOR_ID'], 'integer'],
            [['PEL_NOMBRE', 'PEL_COSTO'], 'required'],
            [['PEL_COSTO'], 'number'],
            [['PEL_FECHA_ESTRENO'], 'safe'],
            [['PEL_NOMBRE'], 'string', 'max' => 60],
            [['DIR_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Director::className(), 'targetAttribute' => ['DIR_ID' => 'DIR_ID']],
            [['FOR_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Formato::className(), 'targetAttribute' => ['FOR_ID' => 'FOR_ID']],
            [['GEN_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Genero::className(), 'targetAttribute' => ['GEN_ID' => 'GEN_ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'PEL_ID' => 'Id',
            'GEN_ID' => 'Genero',
            'DIR_ID' => 'Director',
            'FOR_ID' => 'Formato',
            'PEL_NOMBRE' => 'Nombre',
            'PEL_COSTO' => 'Costo',
            'PEL_FECHA_ESTRENO' => 'Fecha Estreno',
        ];
    }

    /**
     * Gets query for [[ActorPeliculas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getActorPeliculas()
    {
        return $this->hasMany(ActorPelicula::className(), ['PEL_ID' => 'PEL_ID']);
    }

    /**
     * Gets query for [[Alquilers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAlquilers()
    {
        return $this->hasMany(Alquiler::className(), ['PEL_ID' => 'PEL_ID']);
    }

    /**
     * Gets query for [[DIR]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDIR()
    {
        return $this->hasOne(Director::className(), ['DIR_ID' => 'DIR_ID']);
    }

    /**
     * Gets query for [[FOR]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFOR()
    {
        return $this->hasOne(Formato::className(), ['FOR_ID' => 'FOR_ID']);
    }

    /**
     * Gets query for [[GEN]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGEN()
    {
        return $this->hasOne(Genero::className(), ['GEN_ID' => 'GEN_ID']);
    }
}
