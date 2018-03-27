<?php 

namespace Acme2;

Class AuthController implements RespondsToUserRegistration {
	public function __construct(RegisterUser $registration)
	{
		$this->registration = $registration;
	}

	public function register()
	{
		$this->registration->execute([], $this);
	}

	public function userRegisteredSuccessfully()
	{
		var_dump('created successfully, redirect some place');
	}

	public function userRegisteredFailed()
	{
		var_dump('created unsuccessfully, redirect back');
	}
}