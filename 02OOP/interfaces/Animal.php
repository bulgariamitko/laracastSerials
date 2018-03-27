<?php

#interface

interface Animal {
	public function communicate();
}

Class Dog implements Animal {
	public function communicate()
	{
		return 'bark';
	}
}

Class Cat implements Animal {
	public function communicate()
	{
		return 'meow';
	}
}
