<?php

use App\Validators\Spam;
use Tests\TestCase;
use Property\Argument; // not created - error

class SpamTest extends TestCase
{
    /** @test **/
    public function you_may_not_use_any_forbidden_keywords()
    {
        $this->seeValidationExceptionWithRequest('Title', 'HD Streaming Online');
    }

    /** @test **/
    public function you_may_not_type_korean()
    {
        $this->seeValidationExceptionWithRequest('somekorean', 'somekorean');
    }

    /** @test **/
    public function you_may_not_hold_a_key_down()
    {
        $this->seeValidationExceptionWithRequest('titleeeeeee');
    }

    /** @test **/
    public function you_must_click_the_captcha_checkbox()
    {
        $this->seeValidationExceptionWithRequest('Title', 'Body', $curlWasSuccessful = false);
    }

    /** @test **/
    public function you_may_not_call_jeffrey_stupid()
    {
        $this->seeValidationExceptionWithRequest('Jeffrey is stupid', null);
    }
    
    protected function seeValidationExceptionWithRequest($title = 'Title', $body = 'Body', $curlSuccess = true)
    {
        $curl = $this->mockCurlRequest($curlSuccess);
        $config = $this->prophesize('Illuminate\Config\Repository')->reveal();

        app()->instance('App\Utilities\Curl', $curl);
        app()->instance('Illuminate\Config\Repository', $config);

        $this->seeExpectedException('App\Validators\ValidationException');

        (new Spam)->search($this->request($title, $body));
    }

    protected function request($title, $body)
    {
        return Request::create(
            null, 'GET', compact('title', 'body')
        );
    }

    protected function mockCurlRequest($shouldSucceed = true)
    {
        $curl = $this->prophesize('App\Utilities\Curl');

        $curl->post(Argument::any(), Argument::any())
            ->willReturn(json_encode(['success' => $shouldSucceed]));

        return $curl->reveal();
    }
}
