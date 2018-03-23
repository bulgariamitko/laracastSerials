<?php

class ThingController extends Controller
{
    public function handle()
    {
    	$tasks = [
    		DoThis::class,
    		DoThat::class,
    		RunSomething::class,
    		EraseSomethingElse::class,
    		AddFooToBar::class,
    	];

    	foreach ($tasks as $task) {
    		(new $task)->handle();
    	}
    }
}


class DoThis
{
	public function handle()
	{
		return true;
	}
}
class DoThat
{
	public function handle()
	{
		return true;
	}
}
class RunSomething
{
	public function handle()
	{
		return true;
	}
}
class EraseSomethingElse
{
	public function handle()
	{
		return true;
	}
}
class AddFooToBar
{
	public function handle()
	{
		return true;
	}
}