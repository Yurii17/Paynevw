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
    public function First(ApiTester $I)
    {
        $I->sendGET($this->route, [
            "limit" => 21,
            "offset" => 0,
            "criteria[cond]" => "2016 Ford F-150 XLT"
        ]);
        $I->seeResponseCodeIs(response::OK);
    }

    public function Second(ApiTester $I)
    {
        $I->sendGET($this->route, [
        "limit" => 21,
        "offset" => 0,
        "criteria[cond]" => "Golf GTI"
        ]);
        $I->seeResponseCodeIs(response::OK);
    }

    public function Third(ApiTester $I)
    {
        $I->sendGET($this->route, [
            "limit" => 21,
            "offset" => 0,
            "criteria[cond]" => "new-mitsubishi-eclipse-cross-mission-tx",
            "used-cars-all-mcallen-tx",
            "used-cars-under-15000-mcallen-tx?criteria%5Bselling_price%5D%5Bmin%5D=1&criteria%5Bselling_price%5D%5Bmax%5D=15000",
            "used-fuel-efficient-cars-mcallen-tx?criteria%5Bepa_city%5D%5Bmin%5D=30&criteria%5Bepa_city%5D%5Bmax%5D=100",
            "used-cars-4x4-mcallen-tx?criteria%5Bdrivetrain%5D%5B%5D=Four%20Wheel%20Drive",
            "used-cars-trucks-mcallen-tx",
            "used-cars-luxury-mcallen-tx"

        ]);
        $I->seeResponseCodeIs(response::OK);
    }



    /*
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
    */





}



