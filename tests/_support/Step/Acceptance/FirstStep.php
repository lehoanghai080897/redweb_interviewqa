<?php
namespace Step\Acceptance;
use Page\Acceptance\FirstPage as firstPage;
class FirstStep extends \AcceptanceTester
{
    /**
     * check Username field exist on login page
     */
    public function checkUserNameExist()
    {
        $I = $this;
        $I->wantToTest("I want to check username exist on login page");
        $I->amOnPage(firstPage::$URL);
        $I->wantToTest('i want');
        $I->waitForElementVisible(firstPage::$Username, 3);// thời gian chờ tối đa là 3s . sau 3s k thấy là failds
//        $I->waitForElement(firstPage::$Username, 30)// có những elemen k hiển thị , sau khi nhập đúng 1 cái j đo mới hiện button đăng nhập
//        $I->fillField(firstPage::$Username);

    }

    /**
     * login
     */
    public function loginEmail($name ,$password)
    {
        $I = $this;
        $I->wantToTest('i want to login ');
        $I-> amOnPage(firstPage::$URL);
        $I->fillField(firstPage::$Username, $name);
        $I->click(firstPage::$Continue);
        $I->waitForElementVisible(firstPage::$Password, 3);
        $I->fillField(firstPage::$Password, $password);
        $I->click(firstPage::$Loginbutton);
        $I->comment('login success');

    }

    /**
     * login by user name
     */
    public function loginUsename($name ,$password)
    {
        {
            $I = $this;
            $I->wantToTest('i want to login ');
            $I-> amOnPage(firstPage::$URL);
            $I->fillField(firstPage::$Username, $name);
            $I->click(firstPage::$Continue);
            $I->waitForElementVisible(firstPage::$Password, 3);
            $I->fillField(firstPage::$Password, $password);
            $I->click(firstPage::$Loginbutton);
            $I->comment('login success');

        }
    }
    /**
     * login by invalid password
     */
    public  function  loginpassinvalid($name , $password)
    {
        $I = $this;
        $I->wantToTest('i want to login ');
        $I-> amOnPage(firstPage::$URL);
        $I->fillField(firstPage::$Username, $name);
        $I->click(firstPage::$Continue);
        $I->waitForElementVisible(firstPage::$Password, 3);
        $I->fillField(firstPage::$Password, $password);
        $I->click(firstPage::$Loginbutton);
        $I->waitForText('Oops, that\'s not the right password. Please try again!');
        $I->comment('login fail');

    }
    /**
     * login don't enter password
     */
    public function logindontpass ($name )
    {
        $I = $this;
        $I->wantToTest('i want to login ');
        $I-> amOnPage(firstPage::$URL);
        $I->fillField(firstPage::$Username, $name);
        $I->click(firstPage::$Continue);
        $I->waitForElementVisible(firstPage::$Password, 3);

        $I->click(firstPage::$Loginbutton);
        $I->waitForText('Don\'t forget to enter your password.');
        $I->comment('login fail');
    }
    /**
     * click and don't enter email or password and click continue button
     */
    public function donteteremail()
    {
        $I = $this;
        $I->wantToTest('i want to login ');
        $I-> amOnPage(firstPage::$URL);
        $I->click(firstPage::$Username);
        $I->click(firstPage::$Continue);
        $I->waitForText('Please enter a username or email address.');
        $I->comment('login fail');

    }
    /**
     * dont't clcik don't enter email and click button continue
     */
    public function donteteremailnotclick()
    {
        $I = $this;
        $I->wantToTest('i want to login ');
        $I-> amOnPage(firstPage::$URL);
        $I->click(firstPage::$Continue);
        $I->waitForText('Please enter a username or email address.');
        $I->comment('login fail');

    }
    /**
     *  log in with a invalid Email Address
     */
    public function invalidemail($name)
    {
        $I = $this;
        $I->wantToTest('i want to login ');
        $I-> amOnPage(firstPage::$URL);
        $I->fillField(firstPage::$Username, $name);
        $I->click(firstPage::$Continue);
        $I->waitForText('User does not exist.');
        $I->comment('login fail');
    }
    /**
     *  log in with a invalid Email Address
     */
    public function invaliduser($name)
    {
        $I = $this;
        $I->wantToTest('i want to login ');
        $I-> amOnPage(firstPage::$URL);
        $I->fillField(firstPage::$Username, $name);
        $I->click(firstPage::$Continue);
        $I->waitForText('User does not exist.');
        $I->comment('login fail');
    }
    /**
     * log in with a incorrect Password have space between
     */
    public function spacepass($name,$password)
    {
        $I = $this;
        $I->wantToTest('i want to login ');
        $I-> amOnPage(firstPage::$URL);
        $I->fillField(firstPage::$Username, $name);
        $I->click(firstPage::$Continue);
        $I->waitForElementVisible(firstPage::$Password, 3);
        $I->fillField(firstPage::$Password, $password);
        $I->click(firstPage::$Loginbutton);
        $I->waitForText('Oops, that\'s not the right password. Please try again!');
        $I->comment('login fail');

    }
    /**
     * login by key enter
     */
    public function enterkey($name,$password)
    {
        $I = $this;
        $I->wantToTest('i want to login ');
        $I-> amOnPage(firstPage::$URL);
        $I->fillField(firstPage::$Username, $name);
        $I->pressKey(firstPage::$Continue,\Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->waitForElementVisible(firstPage::$Password, 3);
        $I->fillField(firstPage::$Password, $password);
        $I->pressKey(firstPage::$Loginbutton,\Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->comment('login success');


    }
    /**
     *
     */
    public function hyperlink()
    {
        $I = $this;
        $I->wantToTest('i want to click hyperlink ');
        $I-> amOnPage(firstPage::$URL);
        $I->click('Create a new account');
        $I->waitForText('Welcome to the best place for your WordPress website.');
        $I->comment('pass');
    }
    public function hyperlink1()
    {
        $I = $this;
        $I->wantToTest('i want to click hyperlink ');
        $I-> amOnPage(firstPage::$URL);
        $I->click('Email me a login link');
        $I->waitForText('Email me a login link.');
        $I->comment('pass');
    }
    public function hyperlink2()
    {
        $I = $this;
        $I->wantToTest('i want to click hyperlink  ');
        $I-> amOnPage(firstPage::$URL);
        $I->click('Lost your password?');
        $I->waitForText('Lost Password');
        $I->comment('pass');
    }
    public function hyperlink3()
    {
        $I = $this;
        $I->wantToTest('i want to click hyperlink  ');
        $I-> amOnPage(firstPage::$URL);
        $I->click('Back to WordPress.com');
        $I->waitForText('Log In');
        $I->comment('pass');
    }
    public function hyperlink4()
    {
        $I = $this;
        $I->wantToTest('i want to click hyperlink  ');
        $I-> amOnPage(firstPage::$URL);
        $I->click('Terms of Service');
        $I->waitForText('Terms of Service');
        $I->comment('pass');
    }

    /**
     * lúc chạy thì k có hyperlink này còn mở bthuong vẫn được
     */
//    public function hyperlink5()
//    {
//        $I = $this;
//        $I->wantToTest('i want to click hyperlink ');
//        $I-> amOnPage(firstPage::$URL);
//        $I->click('Vietnamese');
//        $I->seeInCurrentUrl('https://translate.wordpress.com/projects/wpcom/vi/default/');
//        $I->comment('pass');
//    }

    /**
     * verify save id and passs
     */
    public function saveid($name,$password)
    {

        $I = $this;
        $I->openNewTab();
        $I->wantToTest('i want to login ');
        $I-> amOnPage(firstPage::$URL);
        $I->fillField(firstPage::$Username, $name);
        $I->click(firstPage::$Continue);
        $I->waitForElementVisible(firstPage::$Password, 3);
        $I->fillField(firstPage::$Password, $password);
        $I->click(firstPage::$Loginbutton);
        $I->waitForText('Streams');
        $I->closeTab();
        $I-> amOnPage('/');
        $I->waitForText('Streams');
        $I->comment('have save');
    }
    /**
     * login in 2 tab on 1 browser
     */
    public function login2tab($name,$password)
    {
        $I = $this;
        $I->openNewTab();
        $I->wantToTest('i want to login ');
        $I-> amOnPage(firstPage::$URL);
        $I->fillField(firstPage::$Username, $name);
        $I->click(firstPage::$Continue);
        $I->waitForElementVisible(firstPage::$Password, 3);
        $I->fillField(firstPage::$Password, $password);
        $I->click(firstPage::$Loginbutton);
        $I->waitForText('Streams');
        $I->closeTab();
        $I-> amOnPage(firstPage::$URL);
        $I->fillField(firstPage::$Username, $name);
        $I->click(firstPage::$Continue);
        $I->waitForElementVisible(firstPage::$Password, 3);
        $I->fillField(firstPage::$Password, $password);
        $I->click(firstPage::$Loginbutton);
        $I->waitForText('Write');
        $I->comment('passs');
    }
    /**
     * check mess not enter email or user name
     */
    public function checkmess1()
    {
        $I = $this;
        $I->wantToTest('i want to login ');
        $I-> amOnPage(firstPage::$URL);
        $I->click(firstPage::$Continue);
        $I->waitForText('Please enter a username or email address.');
        $I->comment('pass');

    }

    /**
     * check mess enter email or user name invalid
     */
    public function checkmess2($name)
    {
        $I = $this;
        $I->wantToTest('i want to login ');
        $I-> amOnPage(firstPage::$URL);
        $I->fillField(firstPage::$Username, $name);
        $I->click(firstPage::$Continue);
        $I->waitForText('User does not exist.');
        $I->comment('login fail');
    }

    /**
     * check mess with pass invalid
     */
    public  function  checkmess3($name , $password)
    {
        $I = $this;
        $I->wantToTest('i want to login ');
        $I-> amOnPage(firstPage::$URL);
        $I->fillField(firstPage::$Username, $name);
        $I->click(firstPage::$Continue);
        $I->waitForElementVisible(firstPage::$Password, 3);
        $I->fillField(firstPage::$Password, $password);
        $I->click(firstPage::$Loginbutton);
        $I->waitForText('Oops, that\'s not the right password. Please try again!');
        $I->comment('login fail');

    }

    /**
     * check mess with don't enter pass
     */
    public function checkmess4 ($name )
    {
        $I = $this;
        $I->wantToTest('i want to login ');
        $I-> amOnPage(firstPage::$URL);
        $I->fillField(firstPage::$Username, $name);
        $I->click(firstPage::$Continue);
        $I->waitForElementVisible(firstPage::$Password, 3);
        $I->click(firstPage::$Loginbutton);
        $I->waitForText('Don\'t forget to enter your password.');
        $I->comment('login fail');
    }

    /**
     * don't login with old pass
     */
    public  function  loginoldpass($name , $password)
    {
        $I = $this;
        $I->wantToTest('i want to login ');
        $I-> amOnPage(firstPage::$URL);
        $I->fillField(firstPage::$Username, $name);
        $I->click(firstPage::$Continue);
        $I->waitForElementVisible(firstPage::$Password, 3);
        $I->fillField(firstPage::$Password, $password);
        $I->click(firstPage::$Loginbutton);
        $I->waitForText('Oops, that\'s not the right password. Please try again!');
        $I->comment('login fail');

    }






}
