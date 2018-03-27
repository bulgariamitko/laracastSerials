<?php 

namespace Acme2;

Class RegisterUser {
	public function execute(array $data, RespondsToUserRegistration $listener)
	{
		var_dump('Registering the user');

		$listener->userRegisteredSuccessfully();
	}
}