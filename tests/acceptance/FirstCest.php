<?php
use Step\Acceptance\FirstStep as number1;

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    /**
     * checkUserNameExist on login page
     */
    public function checkUserNameExist(number1 $I)
    {

        $I ->checkUserNameExist();


    }
}
