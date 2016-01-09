<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FatherModel extends Model {
	//public $timestamps = true;
	//返回当前的毫秒时间戳
	// function msectime() {
	//     list($tmp1, $tmp2) = explode(' ', microtime());
	//     return (floatval($tmp1) + floatval($tmp2)) * 1000;
	// }


// 	/**
// 	 * 避免转换时间戳为时间字符串
// 	 *
// 	 * @param DateTime|int $value
// 	 * @return DateTime|int
// 	 */
// 	public function fromDateTime($value) {
// 		return $value;
// 	}

// 	*
// 	 * select的时候避免转换时间为Carbon
// 	 *
// 	 * @param mixed $value
// 	 * @return mixed
	 
// //  protected function asDateTime($value) {
// //	  return $value;
// //  }
	/**
	 * 从数据库获取的为获取时间戳格式
	 *
	 * @return string
	 */
	public function getDateFormat() {
		return 'U';
	}

}