<?php
/**
 * Created by PhpStorm.
 * User: famoser
 * Date: 05/09/2017
 * Time: 08:16
 */

namespace Famoser\XKCD\Cache\Tests\ControllerTests;


use Famoser\XKCD\Cache\Tests\ControllerTests\Base\TestController;
use Famoser\XKCD\Cache\Tests\Utils\AssertHelper;

class FrameworkControllerTest extends TestController
{
    /**
     *  tests if all links return actual html, with no exceptions etc detectable
     */
    public function test404AndInvalidMethodNode()
    {
        $this->getTestHelper()->mockFullRequest("", "postData");
        $response = $this->getTestHelper()->getTestApp()->run();
        $responseStr = AssertHelper::checkForFailedResponse($this, $response, 404);
        static::assertContains("not find", $responseStr);

        $this->getTestHelper()->mockFullRequest("wrong_url");
        $response = $this->getTestHelper()->getTestApp()->run();
        $responseStr = AssertHelper::checkForFailedResponse($this, $response, 404);
        static::assertContains("not find", $responseStr);

        $this->getTestHelper()->mockFullRequest("wrong_url", "postData");
        $response = $this->getTestHelper()->getTestApp()->run();
        $responseStr = AssertHelper::checkForFailedResponse($this, $response, 404);
        static::assertContains("not find", $responseStr);
    }
}