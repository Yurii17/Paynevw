<?php

use \Codeception\Util\HttpCode as response;


class SearchCest
{
    public $route = '/vehicles';
    public $route1= '/form/lead';
    public $route2= '/menu';


    public function _before(ApiTester $I)
    {
        $I->haveHttpHeader('Content-type', 'application/json');
    }

    public function _after(ApiTester $I)
    {
    }

    // tests
    public function tryToTest(ApiTester $I)
    {
        $I->sendGET($this->route, [
            "limit" => 21,
            "offset" => 0,
            "criteria[cond]" => "2016 Ford F-150 XLT"
        ]);
        $I->seeResponseCodeIs(response::OK);
    }

    public function SendEmail(ApiTester $I)
    {
        $I->haveHttpHeader('Content-type' ,'application/x-www-form-urlencoded');
        $I->haveHttpHeader('cookie', md5('random'));
        $I->sendPOST($this->route1, [
            "website_id" => 13,
            "lead_form_id" => 86,
            "first_name" => "footer",
            "email" => "test@gmail.com",
            "visitorCode" => 1,
            "phone_cell" => 23434432,
            "phone_home" => 34242342,
            "type" => "new",
            "year" => "2000",
            "make" => "test",
            "model" => "Jetta Sedan",
            "trim" => "footer",
            "price" => "12312",
            "mileage" => "footer",
            "source" => "footer"
        ]);
        $I->seeResponseCodeIs(response::CREATED);
    }
}



