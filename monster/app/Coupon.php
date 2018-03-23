<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
  //   public function worksWithPlan($plan)
  //   {
  //   	// $this->coupon
  //   }

  //   public function scopeHavingCode($query, $code)
  //   {
  //   	return $query->where('code', $code)->first();
  //   }

  //   public static function validateForPlan($code, $plan)
  //   {
  //   	$coupon = static::havingCode('code', $code);

		// if (!$coupon || !$coupon->worksWithPlan($plan)) {
		// 	return false;
		// }

		// return $coupon->code;
  //   }

	public static function normalize($code)
	{
		$coupon =  static::where('code', $code)->first();

		return $coupon ?: new static;
	}

	public function against($plan)
	{
		if (!$this->worksWithPlan($plan)) {
			return false;
		}

		return $this->code;
	}

	protected function worksWithPlan($plan)
	{
		// do something
		return true;
	}
}
