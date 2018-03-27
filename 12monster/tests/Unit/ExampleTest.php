<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->visit('/')->see('foo');
    }

    public function visit()
    {
    	// perform an action
    	$this->response = $this->call();
    	return this;
    }

    public function see($text)
    {
    	// perform an action
    	$this->assertContains($text, $this->response);
    	return $this;
    }
}
