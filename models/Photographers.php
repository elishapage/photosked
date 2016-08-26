<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "photographers".
 *
 * @property integer $id
 * @property string $photographer_name
 *
 * @property Assignment[] $assignments
 */
class Photographers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'photographers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['photographer_name'], 'required'],
            [['photographer_name'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'photographer_name' => 'Photographer Name',
            'photographer_status' => 'Photographer Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAssignments()
    {
        return $this->hasMany(Assignment::className(), ['photographer' => 'id']);
    }
}
