<?php

$registration = new Acme2\RegisterUser;
$authController = new Acme2\AuthController($registration);

$authController->register();