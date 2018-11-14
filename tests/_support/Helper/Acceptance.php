<?php
namespace Helper;

// here you can define custom actions
// all public methods declared in helper class will be available in $I


use Codeception\Lib\ModuleContainer;

class Acceptance extends \Codeception\Module
{
    public $module = 'WebDriver';

    public function checkOptionIsSet($selector, $option)
    {
        $module = $this->getModule($this->module);
        try {
            $module->seeOptionIsSelected($selector, $option);
            return true;
        } catch (\Exception $e){
            return false;
        }
    }




}


