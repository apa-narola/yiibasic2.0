<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property integer $id
 * @property string $title
 * @property string $data
 * @property integer $create_time
 * @property integer $update_time
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
       return [
			[['title', 'data'], 'required'],
			[['data'], 'string'],
			[['create_time', 'update_time'], 'safe'],
			[['title'], 'string', 'max' => 255]
		];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'data' => Yii::t('app', 'Data'),
            'create_time' => Yii::t('app', 'Create Time'),
            'update_time' => Yii::t('app', 'Update Time'),
        ];
    }
	public function behaviors()
	{
		return array(
			'timestamp' => array(
				'class' => 'yii\behaviors\AutoTimestamp'
			)
		);
	}
	
}
