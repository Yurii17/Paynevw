<?php

use Page\payne as page;
use \Facebook\WebDriver\WebDriverElement;

class homePageCest
{
    public $value = ['BMW', 'polo', 'volkswagen' => 'golf', 'gt', 'chevrolet', 'ford'];
    public $value1 = 'test@gmail.com';

    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->waitForElementNotVisible(page::$loader, 15);
    }

    public function _after(AcceptanceTester $I)
    {
    }

    public function tryToTypeValFromPublicArray(AcceptanceTester $I)
    {
        $I->seeElement(page::$search);
        $I->fillField(page::$search, $this->value[0]);
        $I->seeInField(page::$search, $this->value[0]);
    }

    public function tryToTypeValFromPublicArrayByIndex(AcceptanceTester $I)
    {
        $I->fillField(page::$search, $this->value[0]); //select 'polo' from array $value
    }

    public function test4(AcceptanceTester $I)
    {
        $I->wantTo('try to type each value from array');
        foreach ($this->value as $key){
            $I->fillField(page::$search, $key);
            $I->seeInField(page::$search, $key);
        }
    }

    public function testSearchFieldRandomValue(AcceptanceTester $I)
    {
        $I->wantTo('select random value from array and fill in into search field');
        $value2 = $this->value[array_rand($this->value, 1)]; //select random value from an array of data
        $I->fillField(page::$search, $value2);
        $I->seeInField(page::$search, $value2);
        var_dump($this->value); //output into console
    }
    /**
     * @param AcceptanceTester $I
     * @throws  Exception
     */
    public function SeeResultList(AcceptanceTester $I)
    {
        $I->wantToTest('See results list');
        $I->fillField(page::$search, 'Used, 2017 Chevrolet Cruze');
        $I->waitForElementVisible(page::$searchResult, 100);
    }

    /*
    public function CarousellTest(AcceptanceTester $I)
    {
        $I->wantToTest('Carousell autoplay');
        $I->seeElement(page::$carousell);
        $I->waitForElementChange(page::$carousell, function(\Facebook\WebDriver\WebDriverElement $el) {
            return $el->isDisplayed();
        }, 10);
    }
    */
    /**
     * @param AcceptanceTester $I
     * @throws Exception
     */
    public function SendEmailAndTestPage(AcceptanceTester $I)
    {
        $I->moveMouseOver(page::$NewCars);
        $I->waitForElementVisible(page::$mainmenuitem, 100);
        $I->seeElement(page:: $NewCarsdropdownlist);
        $I->moveMouseOver(page::$UsedCars);
        $I->waitForElementVisible(page::$UsedCarsdropdownlist, 100);
        $I->fillField(page::$footerEmail, $this->value1);
        $I->seeInField(page::$footerEmail, $this->value1);
        $I->click(page::$footerBtn);
        $I->wait(2);
        $I->seeElement(page::$successful);
        $I->waitForElementVisible(page::$SalesHours, 100);
        $I->seeElement(page::$ServiceHours);
    }

    public function LetUsNowSubmitForm(AcceptanceTester $I)
    {
        $I->click(page::$NewCars);
        $I->click(page::$letUsKnow);
        $form = [
            'first_name' => 'Lucio',
            'last_name' => 'Test',
            'email' => 'rems@gmail.com',
            'phone_cell' => '22222239',
            'phone_home' => '22221212',
            'year' => '2005',
            'price' => '2225',
            'mileage' => '113'
        ];
        $I->submitForm(page::$Submitform, $form);
    }

    public function FinanceTest(AcceptanceTester $I)
    {
        $I->click(page::$Finance);
        $I->fillField('contact_info[single][first_name]','Bosco');
        $I->fillField('contact_info[single][last_name]','Robin');
        $I->fillField('contact_info[single][social_number]','223223');
        $I->fillField('contact_info[single][email]','vv@mail.com');
        $I->fillField('contact_info[single][address_line_1]','In.str.Bryklyn');
        $I->fillField('contact_info[single][address_line_2]','In.str.Bryklyn 222');
        $I->fillField('contact_info[single][city]','Silicon Valley');
        $I->fillField('contact_info[single][zip]','2111');
        $I->fillField('contact_info[single][monthly_payment]','2111');
        $I->click(page::$ChatClose);
        $I->scrollTo(page::$Footer);
        $I->click(page::$buttonFormActive);

        $I->fillField('employment_info[single][employer_name]','Bryk');
        $I->fillField('employment_info[single][job_title]','Banking');
        $I->fillField('employment_info[single][monthly_income]','22222');
        $I->scrollTo(page::$Footer);
        $I->click(page::$buttonForm1Active);

        $I->fillField('purchase_info[year]', '2018');
        $I->fillField('purchase_info[make]','111');
        $I->fillField('purchase_info[model]','Bryk');
        $I->fillField('purchase_info[approximate_price]','1111');
        $I->fillField('purchase_info[load_amount]','333');
        $I->scrollTo(page::$Footer);
        $I->checkOption(page::$checkoption);

        $I->click(page::$buttonBack);
        $I->fillField('employment_info[single][job_title]','Banking Administrator');
        $I->scrollTo(page::$Footer);
        $I->click(page::$buttonForm1Active);

        $I->wait(3);
        $I->scrollTo(page::$Footer);
        $I->click(page::$buttonForm2Active);
        $I->wait(2);
        $I->seeElement(page::$error);
        /*
        $I->submitForm('#contact > div.p-5 > div > div.col-12.col-lg-6.leadForm_single', [
            'contact_info' => [
                'single' => [
                    'first_name' => 'Bosco',
                    'last_name' => 'Robin',
                    'social_number' => '223223',
                    'email' => 'vv@mail.com',
                    'address_line_1' => 'In.str.Bryklyn',
                    'address_line_2' => 'In.str.Bryklyn 222',
                    'city' => 'Silicon Valley',
                    'zip' => '2111',
                    'monthly_payment' => '2111'
                ]
            ]
        ]);
        $I->executeJS('$("#caoPopinNewBg").remove();');
        $I->scrollTo(page::$Footer);
        $I->click(page::$buttonFormActive);

        $I->submitForm('#employment > div.p-5 > div > div.col-12.col-lg-6.leadForm_single', [
            'employment_info' => [
                'single' => [
                    'employer_name' => 'Bryk',
                    'job_title' => 'Banking',
                    'monthly_income' => '223223'
                ]
            ]
        ]);
        $I->scrollTo(page::$Footer);
        $I->click(page::$buttonForm1Active);

        $I->submitForm('#employment > div.p-5 > div > div.col-12.col-lg-6.leadForm_single', [
            'purchase_info' => [
                    'year' => '2018',
                    'make' => '111',
                    'model' => 'Bryk',
                    'approximate_price' => '1111',
                    'load_amount' => '333'
            ]
        ]);

        $I->scrollTo(page::$Footer);
        $I->checkOption(page::$checkoption);

        $I->click(page::$buttonBack);
        $I->fillField('employment_info[single][job_title]','Banking Administrator');
        $I->scrollTo(page::$Footer);
        $I->click(page::$buttonForm1Active);

        $I->scrollTo(page::$Footer);
        $I->click(page::$buttonForm2Active);
        $I->wait(2);
        $I->seeElement(page::$error);
        */
    }

    public function SearchCarsOpenVerifyElement(AcceptanceTester $I)
    {
        $I->seeElement(page::$search);
        $I->fillField(page::$search, $this->value[0]);
        $I->seeInField(page::$search, $this->value[0]);
        $I->click(page::$searchbutton);
        $I->seeElement(page::$searchContent);
        $I->wait('2');
        $I->click(page::$clickbmw);
        $I->seeElement(page::$clickbmwresult);
        $I->seeElement(page::$CalculatorBlock);
        $I->seeElement(page::$CalculatorField[0]);
        $I->seeElement(page::$CalculatorField[1]);
        $I->seeElement(page::$CalculatorField[2]);
        $valuefirst = $I->grabValueFrom(page::$CalculatorVerifyField[0]);
        $valuesecond = $I->grabValueFrom(page::$CalculatorVerifyField[1]);
        $valuethird = $I->grabValueFrom(page::$CalculatorVerifyField[2]);
        $I->seeInField(page::$CalculatorVerifyField[0],$valuefirst);
        $I->seeInField(page::$CalculatorVerifyField[1],$valuesecond);
        $I->seeInField(page::$CalculatorVerifyField[2],$valuethird);
        $I->seeElement(page::$calcbutton);
        $I->seeElement(page::$tabswrap);
        $I->wait(3);
        $I->seeElement(page::$tabswrapdiv[0]);
        $I->click(page::$tabsbutton[0]);
        $I->seeElement(page::$tabswrapdiv[1]);
        $I->click(page::$tabsbutton[1]);
        $I->seeElement(page::$tabswrapdiv[2]);
        $I->seeElement(page::$share);
        $I->seeElement(page::$sharebuttons[0]);
        $I->seeElement(page::$sharebuttons[1]);
        $I->seeElement(page::$sharebuttons[2]);
        var_dump($valuefirst, $valuesecond, $valuethird);
    }

    public function NewCarsVolkswagenVerifyFilterElements(AcceptanceTester $I)
    {
        $I->MovemouseOver(page::$NewCars);
        $I->seeElement(page::$NewCarsdropdownlist);
        $I->click(page::$VolkswagenAtlasLink);
        $I->seeElement(page::$filterTypeOpen);
        $I->seeOptionIsSelected(page::$TypeCheckRadio[1],'New');
        $I->seeElement(page::$MakeOpen);
        $I->seeCheckboxIsChecked(page::$MakeCheckbox[9]);
        $I->seeElement(page::$Model);
        $I->seeCheckboxIsChecked(page::$ModelCheckOption);
    }

    public function UsedCarsDealsUnder15000(AcceptanceTester $I)
    {
        $I->MovemouseOver(page::$UsedCars);
        $I->click(page::$DealsUnder15000);
        $I->seeElement(page::$filterTypeOpen);
        $I->seeElement(page::$PriceOpen);
        $I->seeOptionIsSelected(page::$TypeCheckRadio[0],'Used');
        $value = $I->grabValueFrom(page::$PriceFieldMin);
        $I->seeInField(page::$PriceFieldMin, $value);
        $I->seeInField(page::$PriceFieldMax, '$15,000');
        $I->seeElement(page::$Breadcrumb);
        $I->seeElement(page::$BreadcrumbHome);
        $I->seeElement(page::$BreadcrumbDealsUnder15000);
        var_dump($value);
    }

    public function UsedCarsOver30MPG(AcceptanceTester $I)
    {
        $I->MovemouseOver(page::$UsedCars);
        $I->click(page::$Over30MPG);
        $I->seeElement(page::$filterTypeOpen);
        $I->seeOptionIsSelected(page::$TypeCheckRadio[0],'Used');
        $I->seeElement(page::$EpaCityOpen);
        $valuemin = $I->grabValueFrom(page::$EpaCityMin);
        $valuemax = $I->grabValueFrom(page::$EpaCityMax);
        $I->seeInField(page::$EpaCityMin, $valuemin);
        $I->wait('2');
        $I->seeInField(page::$EpaCityMax, $valuemax);
        var_dump($valuemin, $valuemax);
    }

    public function UsedCarsUsed4x4(AcceptanceTester $I)
    {
        $I->MovemouseOver(page::$UsedCars );
        $I->click(page::$Used4x4);
        $I->seeElement(page::$filterTypeOpen);
        $I->seeOptionIsSelected(page::$TypeCheckRadio[0],'Used');
        $I->seeElement(page::$DriveOpen);
        $I->seeCheckboxIsChecked(page::$DriveCheckboxIsChecked);
    }

    public function UsedCarsUsedTrucks(AcceptanceTester $I)
    {
        $I->MovemouseOver(page::$UsedCars );
        $I->click(page::$UsedTrucks);
        $I->seeElement(page::$filterTypeOpen);
        $I->seeOptionIsSelected(page::$TypeCheckRadio[0],'Used');
        $I->seeElement(page::$BodyStyle);
        $I->seeCheckboxIsChecked(page::$BodyStyleCheckboxIsChecked);
    }
     /* /**
     * @before UsedCarsDealsUnder15000
     * @before UsedCarsOver30MPG
     * @before UsedCarsUsed4x4
     * @before UsedCarsUsedTrucks
     */
    public function UsedLuxuryVehicles(AcceptanceTester $I)
    {
        $I->MovemouseOver(page::$UsedCars );
        $I->click(page::$UsedLuxuryVehicles);
        $I->seeElement(page::$filterTypeOpen);
        $I->seeElement(page::$MakeOpen);
        $I->seeElement(page::$Model);
        $I->seeOptionIsSelected(page::$TypeCheckRadio[0],'Used');
        $I->seeCheckboxIsChecked(page::$MakeCheckbox[0]);
        $I->seeCheckboxIsChecked(page::$MakeCheckbox[1]);
        $I->seeCheckboxIsChecked(page::$MakeCheckbox[2]);
        $I->seeCheckboxIsChecked(page::$MakeCheckbox[3]);
        $I->seeCheckboxIsChecked(page::$MakeCheckbox[6]);
        $I->seeCheckboxIsChecked(page::$MakeCheckbox[8]);
    }

    public function AboutUsOurTeam(AcceptanceTester $I)
    {
        $I->MovemouseOver(page::$AboutUs);
        $I->click(page::$OurTeam);
        $I->seeElement(page::$TextMeetOurTeam);
        $I->seeElement(page::$Questions);
        $I->seeElement(page::$Sales);
        $I->seeElement(page::$Service);
        $I->seeElement(page::$Hours);
        $I->click(page::$EmailSales);
        $I->fillField('input[name="first_name"][type="text"]', 'Marcus');
        $I->seeInField('input[name="first_name"][type="text"]', 'Marcus');
        $I->fillField('input[name="last_name"][type="text"]', 'Tom');
        $I->seeInField('input[name="last_name"][type="text"]', 'Tom');
        $I->fillField('input[name="email"][type="email"]', 'vv@mail.com');
        $I->seeInField('input[name="email"][type="email"]', 'vv@mail.com');
        $I->click(page::$EmailSalesButton);
        $I->waitForElementVisible(page::$EmailSalesSuccess);
    }
    /**
     * @param AcceptanceTester $I
     * @group main_1
     */
    public function SearchFor(AcceptanceTester $I)
    {
        $I->wantTo('select random value from array and fill into search field');
        var_dump($this->value);
        $value2 = $this->value[array_rand($this->value, 1)];
        $I->fillField(page::$search, $value2);
        $I->seeInField(page::$search, $value2);
        $I->click(page::$searchbutton);
        $I->seeElement(page::$SearchForOpen);
        $I->seeInField(page::$SearchForField, $value2);
    }

    public function VerifyFilterClearAll(AcceptanceTester $I)
    {
        $I->click(page::$NewCars);
        $I->seeElement(page::$SearchFor);
        $I->seeElement(page::$filterTypeOpen);
        $I->seeOptionIsSelected(page::$TypeCheckRadio[1],'New');
        $I->seeElement(page::$Make);
        $I->seeElement(page::$Transmission);
        $I->seeElement(page::$Drive);
        $I->click(page::$Make);
        $I->seeElement(page::$MakeOpen);
        $I->seeElement(page::$Model);
        $I->checkOption(page::$MakeVolkswagen);
        $I->click(page::$Transmission);
        $I->wait(4);
        $I->checkOption(page::$TransmissionAutomatic);
        $I->checkOption(page::$TransmissionManual);
        $I->seeCheckboxIsChecked(page::$MakeCheckbox[10]);
        $I->seeCheckboxIsChecked(page::$MakeCheckbox[11]);
        $I->click(page::$ClearAll);
        $I->seeElement(page::$SearchFor);
        $I->seeElement(page::$filterTypeOpen);
        $I->seeOptionIsSelected(page::$TypeCheckRadio[1],'New');
        $I->seeElement(page::$Make);
        $I->seeElement(page::$Transmission);
        $I->seeElement(page::$Drive);
        $I->seeElement(page::$Price);
    }

    public function SetVerifyBtnFilterElse(AcceptanceTester $I)
    {
        $links = [page::$NewCars, page::$UsedCars];
        $dropdownLinks = [page::$DealsUnder15000, page::$Over30MPG, page::$Used4x4, page::$UsedTrucks, page::$UsedLuxuryVehicles];
        $all_links = array_unique (array_merge($links, $dropdownLinks));
        foreach ($all_links as $link){
            $I->setOfActions($link, $dropdownLinks);
        }
    }

    public function TestAllLinksLogo(AcceptanceTester $I)
    {
        $menu_links =[
                     ['url' => '/', 'el' => page::$Home],
                     ['url' => '/new-cars-mcallen-tx', 'el' => page::$NewCars],
                     ['url' => '/used-cars-mcallen-tx', 'el' => page::$UsedCars],
                     ['url' => '/car-loans-in-mcallen-tx',  'el' => page::$Finance],
                     ['url' => '/service-and-parts', 'el' => page::$ServiceParts],
                     ['url' => '/about-payne-vw-in-mcallen-tx', 'el' => page::$AboutUs]
                     ];
        foreach ($menu_links as $link ){
            $I->setOfActions2($link);
        }
    }

    public function Slider(AcceptanceTester $I)
    {
        $I->seeElement(page::$Slider);
        $I->moveMouseOver(page::$SliderAll[0]);
        $I->moveMouseOver(page::$SliderAll[1]);
        $I->moveMouseOver(page::$SliderAll[2]);
        $I->moveMouseOver(page::$SliderAll[3]);
        $I->moveMouseOver(page::$SliderAll[4]);
    }
    /**
     * @param AcceptanceTester $I
     * @throws Exception
     */
    public function swipeSliderElement(AcceptanceTester $I)
    {
        $I->scrollTo(page::$sliderElement);
       $before = $I->grabTextFrom(page::$sliderGrabElement);
        $I->slide(page::$sliderSlide, -15000,0);
        $I->waitForElementChange(page::$sliderGrabElement, function(WebDriverElement $el) {
            return $el->isDisplayed();
        }, 100);
       $after = $I->grabTextFrom(page::$sliderGrabElement);
       $I->assertNotSame($before,$after);
    }
    /*
    /**
     * @param AcceptanceTester $I
     * @throws Exception

    public function Values(AcceptanceTester $I)
    {
        $I->fillField(page::$valuesFiled, '2015 Mercedes-Benz S-Class S 63 AMG');
        $I->wait(3);
        $I->click(page::$valuesFieldDrop);
        $I->wait(3);
        $I->seeElement(page::$valuesFieldId);
        $I->fillField(page::$valuesModalFirstName,'Huston');
        $I->fillField(page::$valuesModalLastName,'Lucio');
        $I->fillField(page::$valuesModalEmail,'lucio.hustom@mail.com');
        $I->fillField(page::$valuesModalPhone,'1231231231');
        $I->click(page::$valuesModalBtn);
        $I->wait(3);
        $I->click(page::$valuesModalCoupe);
        $value = $I->grabTextFrom(page::$valuesModalGrab);

        var_dump($value);
    }
    */




















}







