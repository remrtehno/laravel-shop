<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
	 protected $fillable = ['user_id', 'meta','shop_id', 'tovar_price', 'tovar_name', 'status'];


	 public function getMeta($field) {
	 	if($this->meta)
	 	return unserialize($this->meta)[$field];
	 }
	
	public function getStatus() {
		if($this->status == 'Ожидает') {
			return $this->status;
		}
		if($this->status) {
			return 'Отправлено';
		} else {
			return 'Возвращен';
		}
	}
	
	public function getShop() {
	 	return Shops::find($this->shop_id);
	}

	public function typeBill() {
		$money = $this->getMeta('money');
		if($money == 'on') {
		  return 'Наличными';
		}
	
	}
}
