<?php
/*
 * ManagedApp.php
 *
 * Copyright (c) 2010 Jerry Ablan <jablan@pogostick.com>.
 * @link http://www.pogostick.com Pogostick, LLC.
 * @license http://www.pogostick.com/licensing
 *
 * This file is part of YiiPIS.
 *
 * We share the same open source ideals as does the jQuery team, and
 * we love them so much we like to quote their license statement:
 *
 * You may use our open source libraries under the terms of either the MIT
 * License or the Gnu General Public License (GPL) Version 2.
 *
 * The MIT License is recommended for most projects. It is simple and easy to
 * understand, and it places almost no restrictions on what you can do with
 * our code.
 *
 * If the GPL suits your project better, you are also free to use our code
 * under that license.
 *
 * You don’t have to do anything special to choose one license or the other,
 * and you don’t have to notify anyone which license you are using.
 */

//	Include Files
//	Constants
//	Global Settings

/**
 * @package 	yiipis
 * @subpackage	models
 * @author 		Jerry Ablan <jablan@pogostick.com>
 * @since 		v1.0.0
 * @filesource
 */
class ManagedApp extends BaseModel
{
	//********************************************************************************
	//* Public Methods
	//********************************************************************************
	
	/**
	* Returns the static model of the specified AR class.
	* @return CActiveRecord the static model class
	*/
	public static function model( $className = __CLASS__ )
	{
		return parent::model( $className );
	}
	
	/**
	* @return string the associated database table name
	*/
	public function tableName()
	{
		return self::getTablePrefix() . 'app_t';
	}

	/**
	* @return array validation rules for model attributes.
	*/
	public function rules()
	{
		return array(
			array( 'app_name_text', 'length', 'max' => 200 ),
			array( 'app_url_text', 'length', 'max' => 1024 ),
			array( 'dev_app_url_text', 'length', 'max' => 1024 ),
			array( 'app_name_text, app_url_text, create_date, lmod_date', 'required' ),
			array( 'server_id, dev_server_id', 'numerical', 'integerOnly' => true ),
		);
	}

	/**
	* @return array relational rules.
	*/
	public function relations()
	{
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'app_name_text' => 'Name',
			'app_url_text' => 'URL',
			'dev_app_url_text' => 'Development URL',
			'server_id' => 'Server',
			'dev_server_id' => 'Development Server',
			'last_push_date' => 'Last Push Date',
			'dev_last_push_date' => 'Dev Last Push Date',
			'create_date' => 'Create Date',
			'lmod_date' => 'Lmod Date',
		);
	}
}
