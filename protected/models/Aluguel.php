<?php

/**
 * This is the model class for table "tb_aluguel".
 *
 * The followings are the available columns in table 'tb_aluguel':
 * @property string $idaluguel
 * @property integer $iduser
 * @property double $vltotal
 * @property string $data_inicial
 * @property string $data_final
 * @property integer $qtdfilme
 *
 * The followings are the available model relations:
 * @property TbUser $iduser0
 */
class Aluguel extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tb_aluguel';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('vltotal, data_inicial, data_final', 'required'),
			array('iduser, qtdfilme', 'numerical', 'integerOnly'=>true),
			array('vltotal', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idaluguel, iduser, vltotal, data_inicial, data_final, qtdfilme', 'safe', 'on'=>'search'),
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
			'iduser0' => array(self::BELONGS_TO, 'TbUser', 'iduser'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idaluguel' => 'Idaluguel',
			'iduser' => 'Iduser',
			'vltotal' => 'Vltotal',
			'data_inicial' => 'Data Inicial',
			'data_final' => 'Data Final',
			'qtdfilme' => 'Qtdfilme',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idaluguel',$this->idaluguel,true);
		$criteria->compare('iduser',$this->iduser);
		$criteria->compare('vltotal',$this->vltotal);
		$criteria->compare('data_inicial',$this->data_inicial,true);
		$criteria->compare('data_final',$this->data_final,true);
		$criteria->compare('qtdfilme',$this->qtdfilme);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Aluguel the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
