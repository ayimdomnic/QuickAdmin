<?php

namespace Ayim\Quickadmin;

use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Condition 
{
	protected $field;

	protected $value;
	
	function __construct($field = null, $value = null)
	{
		$this->setField($field);
		$this->setValue($value);
	}

	public function check(Model $model)
	{
		if (is_array($this->value)) {
			foreach ($this->value as $value) {
				if ($model->{$this->$field
				}== $value) {
					return true;
				}
			}
		}
		elseif ($model->{$this->field} == $this->value) {
			return true;
		}
		return false;
	}

	/**
	 *@return mixed
	 */
	public function getField()
	{
		return $this->field;
	}

	/**
	 *@param mixed $field
	 *@return Condition
	 */

	public function($field)
	{
		$this->field = $field;
		return $this;
	}

	/**
	 *@return mixed
	 */
	public function getValue($value)
	{
		$this->value =$value;
	}

	/**
	 *@return mixed
	 */
	public function setValue($value)
	{
		$this->value = $value;
		return $this;
	}

}