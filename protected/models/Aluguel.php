<?php

/**
 * This is the model class for table "tb_aluguel".
 *
 * The followings are the available columns in table 'tb_aluguel':
 * @property integer $idaluguel
 * @property integer $idusuario
 * @property integer $idfilme
 * @property string $data_inicial
 * @property string $data_final
 *
 * The followings are the available model relations:
 * @property TbFilme $idfilme0
 * @property TbUser $idusuario0
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
			array('idusuario, idfilme, data_inicial, data_final', 'required'),
			array('idusuario, idfilme', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idaluguel, idusuario0, idfilme0, data_inicial, data_final', 'safe', 'on'=>'search'),
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
			'idfilme0' => array(self::BELONGS_TO, 'Filme', 'idfilme'),
			'idusuario0' => array(self::BELONGS_TO, 'User', 'idusuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idaluguel' => 'Idaluguel',
			'idusuario' => 'Idusuario',
			'idfilme' => 'Idfilme',
			'data_inicial' => 'Data Inicial',
			'data_final' => 'Data Final',
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

		$criteria->compare('idaluguel',$this->idaluguel);
		$criteria->compare('idusuario',$this->idusuario0);
		$criteria->compare('idfilme',$this->idfilme0);
		$criteria->compare('data_inicial',$this->data_inicial,true);
		$criteria->compare('data_final',$this->data_final,true);
		
		//$criteria->compare('idcategoria',$this->nome); 


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

	public function afterFind()
	{
	    $newDate = DateTime::createFromFormat('Y-m-d', $this->data_inicial);

	    $this->data_inicial = $newDate->format('d/m/Y');

	    $newDate = DateTime::createFromFormat('Y-m-d', $this->data_final);

	    $this->data_final = $newDate->format('d/m/Y');

	    return parent::afterFind();
	}

	public function beforeSave()
	{
		if(strpos($this->data_inicial, '/') !== false){

	    $newDate = DateTime::createFromFormat('d/m/Y', $this->data_inicial);

	    $this->data_inicial = $newDate->format('Y-m-d');
		
		}
		if(strpos($this->data_final, '/') !== false){

	    $newDate = DateTime::createFromFormat('d/m/Y', $this->data_final);

	    $this->data_final = $newDate->format('Y-m-d');
		
		}

	    return parent::beforeSave();
	}


}
