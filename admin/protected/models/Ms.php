<?php

/**
 * This is the model class for table "tbl_ms".
 *
 * The followings are the available columns in table 'tbl_ms':
 * @property integer $id
 * @property string $var_name
 * @property string $value1
 * @property string $value2
 * @property string $value3
 * @property string $value4_text
 * @property string $value5_text
 * @property integer $value6_int
 * @property integer $value7_int
 */
class Ms extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Ms the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_ms';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('value6_int, value7_int', 'numerical', 'integerOnly'=>true),
			array('var_name, value1, value2, value3', 'length', 'max'=>100),
			array('value4_text, value5_text', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, var_name, value1, value2, value3, value4_text, value5_text, value6_int, value7_int', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'var_name' => 'Var Name',
			'value1' => 'Value1',
			'value2' => 'Value2',
			'value3' => 'Value3',
			'value4_text' => 'Value4 Text',
			'value5_text' => 'Value5 Text',
			'value6_int' => 'Value6 Int',
			'value7_int' => 'Value7 Int',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('var_name',$this->var_name,true);
		$criteria->compare('value1',$this->value1,true);
		$criteria->compare('value2',$this->value2,true);
		$criteria->compare('value3',$this->value3,true);
		$criteria->compare('value4_text',$this->value4_text,true);
		$criteria->compare('value5_text',$this->value5_text,true);
		$criteria->compare('value6_int',$this->value6_int);
		$criteria->compare('value7_int',$this->value7_int);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}