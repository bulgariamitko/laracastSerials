<?php

namespace App\UseCases;

Class PurchasePodcast extends UseCases
{
	public function handle()
	{
		$this->preparePurchase()
			->sendEmail();
	}

	private function preparePurchase()
	{
		echo "<pre>";
		print_r('prepering the purchase');
		echo "</pre>";

		return $this;
	}

	private function sendEmail()
	{
		echo "<pre>";
		print_r('send an email with their invoice');
		echo "</pre>";

		return $this;
	}
}