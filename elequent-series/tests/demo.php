<?php

class Foo {
	// normal static method
  	public static function bar() {
    	print_r('Foo' . PHP_EOL);
    }
}

class FooBar {
	// it runs if no method was found with the name written in the code in this case 'bar'
  	public static function __callStatic($method, $parameters) {
    	print_r('FooBar' . PHP_EOL);
    }
}

class Foo2 {
	public static function bar()
	{
    	print_r('Foo2Normal' . PHP_EOL);
	}
	// for all the statis methods that have been not defined
  	public static function __callStatic($method, $parameters) {
    	print_r('Foo2CallStack' . PHP_EOL);
    }
    // for all the methods that have been not defined
  	public static function __call($method, $parameters) {
    	print_r('Foo2CallStackNormal' . PHP_EOL);
    }
}

Foo::bar();
FooBar::bar();
Foo2::bar();