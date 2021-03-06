<?php
namespace Page;

use Faker\Factory as fake;


class payne
{
    // include url of current page
    public static $URL = '';
    public static $URL2 = '/';

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    // Logo Paynevw
    public static $Logo = 'div.col-6.col-sm-4.col-md-5.col-xl-3.order-2.order-sm-1.d-flex.align-items-center.justify-content-center.justify-content-sm-start.mb-3.mb-xl-0';

    //Header Footer
    public static $call = 'div.col-12.col-xl-2.py-3.px-4.bd-xl-x';
    public static $social = 'div:nth-child(3)';
    public static $socialbuttons = [
        'li:nth-child(1)',
        'li:nth-child(2)',
        'li:nth-child(3)',
        'li:nth-child(4)',
        'li:nth-child(5)'];
    public static $Footer = 'body > footer > div > div';


    // Slider Mini
    public static $Slider = 'div.bg-romb.pt-5.pb-4';
    public static $SliderAll = [
        'body > div.bg-romb.pt-5.pb-4 > div > div > div:nth-child(1)',
        'body > div.bg-romb.pt-5.pb-4 > div > div > div:nth-child(2)',
        'body > div.bg-romb.pt-5.pb-4 > div > div > div:nth-child(3)',
        'body > div.bg-romb.pt-5.pb-4 > div > div > div:nth-child(4)',
        'body > div.bg-romb.pt-5.pb-4 > div > div > div:nth-child(5)'];



    // Slider Cars Big
    public static $element = 'body > section:nth-child(7) > div > div.swiper-products-container.swiper-container-horizontal';
    public static $sliderGrabElement = 'section div.swiper-slide.swiper-slide-next > div.img-box > h4';
    public static $sliderSlide = 'div.swiper-slide.text-center.item.d-flex.align-items-start.justify-content-between.flex-column.swiper-slide-active';



    // Filter
    public static $ClearAll = '#clear-filters';
    public static $Transmission = '#filters_form > div.filter-item.filter-item-transmission';
    public static $TransmissionAutomatic = '#filters_form > div.filter-item.filter-item-transmission.open > div > label:nth-child(1)';
    public static $TransmissionManual = '#filters_form > div.filter-item.filter-item-transmission.open > div > label:nth-child(2)';
    public static $TypeCheckRadio = [
        'input[type="radio"][name="type"][value="Used"]',
        'input[type="radio"][name="type"][value="New"]',
        'input[type="radio"][name="type"][value="Certified Used"]',
    ];
    public static $SearchFor = 'div.filter-item.filter-item-cond';
    public static $SearchForOpen = 'div.filter-item.filter-item-cond.open';
    public static $SearchForField = '#cond';
    public static $filterType = 'div.filter-item.filter-item-type';
    public static $filterTypeOpen = 'div.filter-item.filter-item-type.open';
    public static $filterNew_cars = 'div.filter-item.filter-item-type.open > div';
    public static $Year = 'div.filter-item.filter-item-year';
    public static $YearFieldMin = '#filters_form > div.filter-item.filter-item-year.open > div > div.price-range-controls.d-flex.justify-content-between.align-items-center.mt-3 > input.price-range-value.price-range-value-min';
    public static $YearFilterMax = '#filters_form > div.filter-item.filter-item-year.open > div > div.price-range-controls.d-flex.justify-content-between.align-items-center.mt-3 > input.price-range-value.price-range-value-max';
    public static $Price = 'div.filter-item.filter-item-selling_price';
    public static $PriceOpen = 'div.filter-item.filter-item-selling_price.open';
    public static $PriceFieldMin = '#filters_form > div.filter-item.filter-item-selling_price.open > div > div.price-range-controls.d-flex.justify-content-between.align-items-center.mt-3 > input.price-range-value.price-range-value-min';
    public static $PriceFieldMax = '#filters_form > div.filter-item.filter-item-selling_price.open > div > div.price-range-controls.d-flex.justify-content-between.align-items-center.mt-3 > input.price-range-value.price-range-value-max';
    public static $EpaCity = 'div.filter-item.filter-item-epa_city';
    public static $EpaCityOpen = 'div.filter-item.filter-item-epa_city.open';
    public static $EpaCityMin  = '#filters_form > div.filter-item.filter-item-epa_city.open > div > div.price-range-controls.d-flex.justify-content-between.align-items-center.mt-3 > input.price-range-value.price-range-value-min';
    public static $EpaCityMax = '#filters_form > div.filter-item.filter-item-epa_city.open > div > div.price-range-controls.d-flex.justify-content-between.align-items-center.mt-3 > input.price-range-value.price-range-value-max';
    public static $Drive = 'div.filter-item.filter-item-drivetrain';
    public static $DriveOpen = 'div.filter-item.filter-item-drivetrain.open';
    public static $DriveCheckboxIsChecked = 'input[type="checkbox"][name="drivetrain"][value="Four Wheel Drive"]';
    public static $BodyStyle = 'div.filter-item.filter-item-body.open';
    public static $BodyStyleCheckboxIsChecked = 'input[type="checkbox"][name="body"][value="Pickup Truck"]';
    public static $Make = 'div.filter-item.filter-item-make';
    public static $MakeVolkswagen = '#filters_form > div.filter-item.filter-item-make.open > div';
    public static $MakeOpen = 'div.filter-item.filter-item-make.open';
    public static $Model = 'div.filter-item.filter-item-make.open';
    public static $MakeCheckbox = [
        'input[type="checkbox"][name="make"][value="Acura"]', //////////////////// 0
        'input[type="checkbox"][name="make"][value="Alfa Romeo"]', /////////////// 1
        'input[type="checkbox"][name="make"][value="Audi"]', ///////////////////// 2
        'input[type="checkbox"][name="make"][value="BMW"]', ////////////////////// 3
        'input[type="checkbox"][name="make"][value="Buick"]', //////////////////// 4
        'input[type="checkbox"][name="make"][value="Cadillac"]', ///////////////// 5
        'input[type="checkbox"][name="make"][value="Chevrolet"]', //////////////// 6
        'input[type="checkbox"][name="make"][value="Chrysler"]', ///////////////// 7
        'input[type="checkbox"][name="make"][value="Dodge"]', //////////////////// 8
        'input[type="checkbox"][name="make"][value="Ford"]', ///////////////////// 9
        'input[type="checkbox"][name="make"][value="GMC"]', ////////////////////// 10
        'input[type="checkbox"][name="make"][value="Honda"]', //////////////////// 11
        'input[type="checkbox"][name="make"][value="Hyundai"]', ////////////////// 12
        'input[type="checkbox"][name="make"][value="Jeep"]', ///////////////////// 13
        'input[type="checkbox"][name="make"][value="Kia"]', ////////////////////// 14
        'input[type="checkbox"][name="make"][value="Lincoln"]', ////////////////// 15
        'input[type="checkbox"][name="make"][value="Mazda"]', //////////////////// 16
        'input[type="checkbox"][name="make"][value="Mercedes-Benz"]', //////////// 17
        'input[type="checkbox"][name="make"][value="Mitsubishi"]', /////////////// 18
        'input[type="checkbox"][name="make"][value="Nissan"]', /////////////////// 19
        'input[type="checkbox"][name="make"][value="Ram"]', ////////////////////// 20
        'input[type="checkbox"][name="make"][value="Scion"]', //////////////////// 21
        'input[type="checkbox"][name="make"][value="Suzuki"]', /////////////////// 22
        'input[type="checkbox"][name="make"][value="Toyota"]', /////////////////// 23
        'input[type="checkbox"][name="make"][value="Volkswagen"]', /////////////// 24 Для Мейків
        'input[type="checkbox"][name="transmission"][value="Automatic"]', //////// 25
        'input[type="checkbox"][name="transmission"][value="Manual"]', /////////// 26
        'input[type="checkbox"][name="model"][value="Atlas"]' //////////////////// 27 Для Модел
    ];


    // Price DropDown
    public static $priceDrop = 'div.col-xs-12.mb-3.mb-lg-0.col-lg-4.d-flex.justify-content-center.justify-content-lg-end.top-filter-navigation.filters-icons > div:nth-child(2) > span';
    public static $priceCarsGrab = '#content > div > div.d-flex.align-content-start.flex-wrap.w-100.filtered-content.grid-display > div:nth-child(1) > div > div.txt.text-left > table > tbody > tr > td.text-right.px-0';
    public static $priceDropLow = '#order_by_selector > option:nth-child(2)';
    public static $priceDropHigh = '#order_by_selector > option:nth-child(3)';



    // Home
    public static $Home = '#main-menu > li:nth-child(1) > span > a';
    public static $search = '#search_field';
    public static $loader = 'div.page-loader';
    public static $searchResult = 'div.search-result.dropdown-menu.w-100.my-0.border-top-0.show';
    public static $carousell = 'body > section.full-width.d- > div > div.swiper-wrapper';
    public static $footerEmail = '#footer_email';
    public static $footerBtn = 'div.col-12.col-xl-6.py-3.py-xl-5.pl-xl-5 > div > div > button';
    public static $successful = '#custom-message-dialog > div > div > div.modal-header';
    public static $searchbutton = 'div > form > div > div > div.input-group-append > button';
    public static $searchContent = '#content';
    public static $clickbmw = '#content > div > div.d-flex.align-content-start.flex-wrap.w-100.filtered-content.grid-display > div:nth-child(1) > div > div.txt.text-left > h6 > a';
    public static $clickbmwresult = 'body > div.bg-common > section.border-bottom.background-white > div > ol > li.breadcrumb-item.active';
    public static $ToTop = '#toTopBtn';
    public static $SalesHours = 'body > section:nth-child(11) > div.container > div > div > div.row > div:nth-child(1)';
    public static $SalesHoursClosed = '#show-hours-modal > div > div > div.modal-header > button';
    public static $SalesHoursDiv = '#show-hours-modal';
    public static $ServiceHours = 'body > section:nth-child(11) > div.container > div > div > div.row > div:nth-child(2)';


    // New Cars
    public static $NewCars = '#menu_item-60';
    public static $NewVolkswagen = '#footer > div.bg-primary.text-white.py-4 > div > div > div:nth-child(1) > ul > li:nth-child(2) > a';
    public static $NewMitsubishi = '#footer > div.bg-primary.text-white.py-4 > div > div > div:nth-child(1) > ul > li:nth-child(3) > a';
    public static $UsedTrucksLink = '#footer > div.bg-primary.text-white.py-4 > div > div > div:nth-child(2) > ul > li:nth-child(2) > a';
    public static $UsedLuxury = '#footer > div.bg-primary.text-white.py-4 > div > div > div:nth-child(2) > ul > li:nth-child(4) > a';
    public static $ScheduleService = '#footer > div.bg-primary.text-white.py-4 > div > div > div:nth-child(3) > ul > li:nth-child(1) > a';
    public static $OurTeamLink = '#footer > div.bg-primary.text-white.py-4 > div > div > div:nth-child(4) > ul > li:nth-child(1) > a';
    public static $InsuranceQuote = '#footer > div.bg-primary.text-white.py-4 > div > div > div:nth-child(4) > ul > li:nth-child(2) > a';
    public static $NewCarsdropdownlist = 'div.drp.d-none.d-xl-block';
    public static $mainmenuitem = 'div.container.d-none.d-xl-block > div > div > ul';
    public static $VolkswagenAtlasLink = 'div.swiper-slide-img > a';
    public static $VolkswagenGolfLink = '#main-menu > li:nth-child(2) > div > section > div > div.swiper-wrapper > div > div:nth-child(2) > div:nth-child(1) > div.txt.text-left > h4 > a';
    public static $VolkswagenGolfRLink = '#main-menu > li:nth-child(2) > div > section > div > div.swiper-wrapper > div > div:nth-child(3) > div:nth-child(1) > div.txt.text-left > h4 > a';
    public static $letUsKnow = '#letUsKnow';
    public static $Submitform = '#letUsKnowModal > div > div > div.modal-body > div > form';


    // Used Cars
    public static $UsedCars = '#menu_item-66';
    public static $UsedCarsdropdownlist ='#main-menu > li:nth-child(3) > div';


    // Used Cars => DealsUnder15000
    public static $DealsUnder15000 = '#main-menu > li:nth-child(3) > div > section > div > ul > li:nth-child(3) > a';
    public static $Breadcrumb = 'div.col-xs-12.col-lg-4.text-center.text-lg-left.filters-breadcrumb > ol';
    public static $BreadcrumbHome = 'div.col-xs-12.col-lg-4.text-center.text-lg-left.filters-breadcrumb > ol > li:nth-child(1) > a';
    public static $BreadcrumbDealsUnder15000 = 'div.col-xs-12.col-lg-4.text-center.text-lg-left.filters-breadcrumb > ol > li.breadcrumb-item.active';


    // Used Cars => Over30MPG
    public static $Over30MPG = '#main-menu > li:nth-child(3) > div > section > div > ul > li:nth-child(4) > a';


    //Used Cars => Used4x4
    public static $Used4x4 = '#main-menu > li:nth-child(3) > div > section > div > ul > li:nth-child(5) > a';


    // Used Cars => Used Trucks
    public static $UsedTrucks = '#main-menu > li:nth-child(3) > div > section > div > ul > li:nth-child(6) > a';


    // Used Cars => Used Luxury Vehicles
    public static $UsedLuxuryVehicles = '#main-menu > li:nth-child(3) > div > section > div > ul > li:nth-child(7) > a';


    // Finance
    public static $Finance = '#main-menu > li:nth-child(4) > span > a';
    public static $checkoption = '#purchase > div.p-5 > div:nth-child(4) > div';
    public static $buttonFormActive = '#contact > div.px-5.py-2.bg-white.form-footer > div > div > button';
    public static $buttonForm1Active = '#employment > div.px-5.py-2.bg-white.form-footer > div > div > button.btn.btn-success.finance-step-switcher.finance-step-switcher-next';
    public static $buttonForm2Active = '#purchase > div.px-5.py-2.bg-white.form-footer > div > div > button.btn.btn-primary.text-center';
    public static $buttonBack = '#purchase > div.px-5.py-2.bg-white.form-footer > div > div > button.btn.btn-outline-secondary.border-0.d-flex.align-items-center.justify-content-between.finance-step-switcher.finance-step-switcher-back';
    public static $error = '#custom-message-dialog > div > div';

    // Service&Parts
    public static $ServiceParts = '#main-menu > li:nth-child(5) > span > a';

    // AboutUs => Our Team
    public static $AboutUs = '#menu_item-49';
    public static $AboutUsdropdownlist = '#main-menu > li:nth-child(3) > div';
    public static $OurTeam = '#main-menu > li:nth-child(6) > div > section > div > ul > li:nth-child(1) > a';
    public static $TextMeetOurTeam = 'div.col-lg-9.col.description-wrap';
    public static $Questions = 'div.card-header';
    public static $Sales = 'div.font-weight-bold.pb-2';
    public static $Service = 'div.card-body';
    public static $EmailSales = 'body > section.content-wrap.border-bottom > div > div.row.pb-60 > aside > div > div.card-header > div.links-divided > a:nth-child(1)';
    public static $EmailSalesButton = '#emailSalesModal > div > div > div.modal-body > div > form > div.form-group.text-right > button';
    public static $EmailSalesSuccess = '#custom-message-dialog > div > div > div.modal-body';
    public static $Hours = 'div.links-divided > a:nth-child(3)';

    // Calculator
    public static $CalculatorBlock = '#payment-calculator';
    public static $CalculatorField = [
        'div:nth-child(2)',
        'div:nth-child(3)',
        'div:nth-child(4)'
    ];
    public static $CalculatorVerifyField = [
        'input[type="text"][class="form-control form-control-sm price"]',
        'input[type="text"][class="form-control form-control-sm term"]',
        'input[type="text"][class="form-control form-control-sm rate"]',
    ];
    public static $calcbutton = '#payment-calculator > div.p-2.text-uppercase > button';
    public static $modaldialog = '#calculator-modal';
    public static $modalinfo = '#calculator-modal > div > div > div.modal-body';
    public static $closemodal = '#calculator-modal > div > div > div.modal-header > button';

    // Tabs
    public static $tabswrap = 'div.tabs-wrap.tabs-bordered.my-5';
    public static $tabsbutton = ['#myTab > li:nth-child(2)', '#myTab > li:nth-child(3)'];
    public static $tabswrapdiv = ['#first-tab', '#second-tab', '#third-tab'];

    // Share with your friends:
    public static $share = 'div.subscribe-form';
    public static $sharebuttons = [
        '#st-1 > div.st-btn.st-first',
        '#st-1 > div:nth-child(2)',
        '#st-1 > div.st-btn.st-last'
    ];

    // ButtonFilterGroup
    public static $BtnFilterGroup = 'div.btn-group.filtered-view.mr-3.d-none.d-md-inline-flex';
    public static $BtnFilterFirst = 'div.btn-group.filtered-view.mr-3.d-none.d-md-inline-flex > button.btn.btn-outline-white.filtered-view-grid';
    public static $BtnFilterFirstActive = 'button.btn.btn-outline-white.filtered-view-grid.active';
    public static $BtnFilterSecond = 'div.btn-group.filtered-view.mr-3.d-none.d-md-inline-flex > button.btn.btn-outline-white.filtered-view-list';
    public static $BtnFilterSecondActive = 'div.btn-group.filtered-view.mr-3.d-none.d-md-inline-flex > button.btn.btn-outline-white.filtered-view-list.active';
    public static $BtnFilterFirstActiveResult = '#content > div > div.d-flex.align-content-start.flex-wrap.w-100.filtered-content.grid-display';
    public static $BtnFilterSecondActiveResult = '#content > div > div.d-flex.align-content-start.flex-wrap.w-100.filtered-content.list-display';

    // Chat with Us
    public static $ChatClose = '#caoBusinessCardMinimizeArea';


    // Values
    public static $valuesFiled = '#tradepending-vehicle-typeahead';
    public static $valuesFieldDrop = '#tradepending-input > span > span > div';
    public static $valuesModalForm = '#contact_form';
    public static $valuesModalFirstName = 'input id="first_name"';
    public static $valuesModalLastName = '#last_name';
    public static $valuesModalEmail = '#email';
    public static $valuesModalPhone = '#phone';
    public static $valuesModalBtn = 'div:nth-child(3) > div > input';
    public static $valuesModalCoupe = 'div.select-container > div:nth-child(1) > a';
    public static $valuesModalGrab = 'div.container-fluid.main > h2';






    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }
}
