<?php

namespace App\Http\Controllers;

use App\Coupon;
use Illuminate\Http\Request;

// 1. Identify a point of flexibility.
	// 1. Forum Account
    // 2. Regular Subscriber
    // 3. Team Member Access
    // 4. Forever Account

// 2. Extract each strategy into its own class.
	// 4 classes - App\Strategy\Registers*.php

// 3. Ensure that each of those strategies adheres to a common contract/interface.
	// create handle method for all the classes

// 4. Determine the proper strategy, and let it handle the task
	// 

class SubscriptionsController extends Controller
{
    public function store()
    {
    	$this->getRegistrationStrategy()->handle($request);
    }

    protected function getRegistrationStrategy()
    {
    	if ($this->request->plan == 'forever') {
    		return new RegistersLifetimeMember;
    	}

    	if ($this->request->invitation) {
    		return new RegistersTeamMember;
    	}

    	return new RegistersSubscriber;
    }

    // next lesson
    public function update(Request $request)
    {
        $code = $request->coupon;
        $plan = $request->plan;

        $coupon = Coupon::normalize($code)->against($plan);

        $this->user
            ->subscription()
            // ->usingCoupon($this->normalizeCoupon($code, $plan)) // 1 way
            // ->usingCoupon(Coupon::validateForPlan($code, $plan)) // 2 way
            ->usingCoupon($coupon) // 3 way
            ->swap($plan);
    }

    // protected function normalizeCoupon($code, $plan)
    // {
    //  // NORMALIZE
    //  $coupon = Coupon::havingCode($code);

    //  if (!$coupon || !$coupon->worksWithPlan($plan)) {
    //      return false;
    //  }

    //  return $code;
    // }
}
