<?php

/**
 * This is the model class for table "tb_filme".
 *
 * The followings are the available columns in table 'tb_filme':
 * @property integer $idfilme
 * @property string $nome
 * @property integer $idcategoria
 *
 * The followings are the available model relations:
 * @property TbAluguel[] $tbAluguels
 * @property TbCategoria $idcategoria0
 */
class Filme extends CActiveRecord
{
	/**

	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tb_filme';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, idcategoria', 'required'),
			array('idcategoria', 'numerical', 'integerOnly'=>true),
			array('nome', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idfilme, nome, idcategoria, idcategoria0', 'safe', 'on'=>'search'),
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
			'tbAlugueis' => array(self::HAS_MANY, 'Aluguel', 'idfilme'),
			'idcategoria0' => array(self::BELONGS_TO, 'Categoria', 'idcategoria'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idfilme' => 'Idfilme',
			'nome' => 'Nome',


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

		$criteria = new CDbCriteria;

		$criteria->compare('idfilme',$this->idfilme);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('idcategoria',$this->idcategoria0); 


		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
			
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Filme the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

}
