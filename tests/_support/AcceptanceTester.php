<?php
use Faker\Factory as fake;
use Page\payne as page;

/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = NULL)
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

    public function setOfActions($menu_link, $dropdownLinks)
    {
        $I = $this;
        $TypecheckRadio[0] = '';
        $TypecheckRadio[1] = '';

        if (in_array($menu_link, $dropdownLinks) || ($TypecheckRadio[0] == true)) {
            $I->moveMouseOver(page::$UsedCars);
        }
        $I->click($menu_link);
        $I->seeElement(page::$BtnFilterGroup);
        $I->seeElement(page::$BtnFilterFirstActive);
        $I->seeElement(page::$BtnFilterSecond);
        $I->seeElement(page::$BtnFilterFirstActiveResult);
        $I->wait(3);
        $I->click(page::$BtnFilterSecond);
        $I->seeElement(page::$BtnFilterFirst);
        $I->seeElement(page::$BtnFilterSecondActive);
        $I->seeElement(page::$BtnFilterSecondActiveResult);
        $I->seeElement(page::$call);
        $I->seeElement(page::$social);
        $I->seeElement(page::$socialbuttons[0]);
        $I->seeElement(page::$socialbuttons[1]);
        $I->seeElement(page::$socialbuttons[2]);
        $I->seeElement(page::$socialbuttons[3]);
        $I->seeElement(page::$socialbuttons[4]);
        $I->scrollTo(page::$Footer);
        $I->seeElement(page::$ToTop);
        $I->click(page::$Year);

        $valueYearmin = $I->grabValueFrom(page::$YearFieldMin);
        $valueYearmax = $I->grabValueFrom(page::$YearFilterMax);
        $I->seeInField(page::$YearFieldMin, $valueYearmin);
        $I->seeInField(page::$YearFilterMax, $valueYearmax);
        $I->click(page::$Price);
        $valuePricemin = $I->grabValueFrom(page::$PriceFieldMin);
        $valuePricemax = $I->grabValueFrom(page::$PriceFieldMax);
        $I->seeInField(page::$PriceFieldMin, $valuePricemin);
        $I->seeInField(page::$PriceFieldMax, $valuePricemax);
        $I->click(page::$EpaCity);
        $valuemin = $I->grabValueFrom(page::$EpaCityMin);
        $valuemax = $I->grabValueFrom(page::$EpaCityMax);
        $I->seeInField(page::$EpaCityMin, $valuemin);
        $I->seeInField(page::$EpaCityMax, $valuemax);
        var_dump($valuemin, $valuemax, $valuePricemin, $valuePricemax, $valueYearmin, $valueYearmax);

        $I->checkOptionIsSet(page::$TypeCheckRadio[0], 'Used') == true ?
            $I->seeOptionIsSelected(page::$TypeCheckRadio[0], 'Used') :
            $I->seeOptionIsSelected(page::$TypeCheckRadio[1], 'New');
    }

    public function setOfActions2($link)
    {
        $I = $this;
        $I->click($link['el']);
        $I->seeInCurrentUrl($link['url']);
        $I->seeElement(page::$Logo);
        $I->click(page::$Logo);
    }

    public function SetMake($I)
    {
        $I = $this;
        $I->seeCheckboxIsChecked(page::$MakeCheckbox[0]);
        $I->seeCheckboxIsChecked(page::$MakeCheckbox[2]);
        $I->seeCheckboxIsChecked(page::$MakeCheckbox[3]);
        $I->seeCheckboxIsChecked(page::$MakeCheckbox[15]);
        $I->seeCheckboxIsChecked(page::$MakeCheckbox[17]);
    }















}
