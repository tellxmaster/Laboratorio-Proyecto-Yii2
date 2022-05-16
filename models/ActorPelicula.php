<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "actor_pelicula".
 *
 * @property int $APL_ID Id
 * @property int|null $ACT_ID Actor
 * @property int|null $PEL_ID Película
 * @property string $APL_PAPEL Papel
 *
 * @property Actor $aCT
 * @property Pelicula $pEL
 */
class ActorPelicula extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'actor_pelicula';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ACT_ID', 'PEL_ID'], 'integer'],
            [['APL_PAPEL'], 'required'],
            [['APL_PAPEL'], 'string', 'max' => 60],
            [['ACT_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Actor::className(), 'targetAttribute' => ['ACT_ID' => 'ACT_ID']],
            [['PEL_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Pelicula::className(), 'targetAttribute' => ['PEL_ID' => 'PEL_ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'APL_ID' => 'Id',
            'ACT_ID' => 'Actor',
            'PEL_ID' => 'Película',
            'APL_PAPEL' => 'Papel',
        ];
    }

    /**
     * Gets query for [[ACT]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getACT()
    {
        return $this->hasOne(Actor::className(), ['ACT_ID' => 'ACT_ID']);
    }

    /**
     * Gets query for [[PEL]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPEL()
    {
        return $this->hasOne(Pelicula::className(), ['PEL_ID' => 'PEL_ID']);
    }
}
