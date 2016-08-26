<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "assignment".
 *
 * @property integer $id
 * @property string $date
 * @property string $time
 * @property integer $duration
 * @property integer $photographer
 * @property string $time_created
 * @property string $slug
 * @property string $reporter_name
 * @property string $location
 * @property string $assignment_info
 * @property string $contact_info
 *
 * @property Photographers $photographer0
 */
class Assignment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'assignment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'time', 'duration', 'photographer', 'slug'], 'required'],
            [['date', 'time', 'time_created'], 'safe'],
            [['duration', 'photographer'], 'integer'],
            [['slug', 'reporter_name'], 'string', 'max' => 30],
            [['location'], 'string', 'max' => 200],
            [['assignment_info'], 'string', 'max' => 1000],
            [['contact_info'], 'string', 'max' => 300],
            [['photographer'], 'exist', 'skipOnError' => true, 'targetClass' => Photographers::className(), 'targetAttribute' => ['photographer' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'time' => 'Time',
            'duration' => 'Duration',
            'photographer' => 'Photographer',
            'time_created' => 'Time Created',
            'slug' => 'Slug',
            'reporter_name' => 'Reporter Name',
            'location' => 'Location',
            'assignment_info' => 'Assignment Info',
            'contact_info' => 'Contact Info',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    //public function getPhotographer0()
    public function getPhotographers()
    {
        return $this->hasOne(Photographers::className(), ['id' => 'photographer']);
    }
}
