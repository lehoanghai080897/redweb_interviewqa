<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 5/5/2019
 * Time: 10:05 AM
 */


namespace Step\Acceptance;

use Page\Acceptance\loginGithupPage as Login;



class loginGithupSteps extends \AcceptanceTester
{
    public function clickNewReservation()
    {
        $I = $this;
        $I->amOnPage(Login::$URL);
        $I->waitForElementClickable(Login::$newReservation);
        $I->click(Login::$newReservation);
        $I->see('Table Booking Form');
        $I->comment('pass');
    }

    public function notEnterInput ()
    {

    }

    public function enterValidInput()
    {

    }


}