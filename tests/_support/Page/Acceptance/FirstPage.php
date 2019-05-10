<?php
namespace Page\Acceptance;

class FirstPage
{
    /**
     * @var string
     */
    public static $URL = '/log-in?redirect_to=https%3A%2F%2Fwordpress.com%2F';
    /**
     * @var string
     */

    public static $Username = '(//input[@class="form-text-input"])[1]'; // userName moi dung

    /**
     * @param $param
     * @return string
     */
    public static $Password = '//input[@id="password"]';

    public static $Continue = '//button[@class="button form-button is-primary"]';

    public static $Loginbutton = '//button[@class="button form-button is-primary"]';



    public static function route($param)
    {
        return static::$URL.$param;
    }

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

}
