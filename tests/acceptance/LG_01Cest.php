<?php
use Step\Acceptance\FirstStep as number2;
use Faker\Factory;

class LG_01Cest
{
    /**
     * @var string
     */
    protected $email;
    protected $pass;
    protected $user;
    protected $value;
    protected $pass1;

    /**
     * LG_01Cest constructort
     * khai bao email vs pass
     */
    public function __construct()
    {
        $this->faker        = Faker\Factory::create();

        $this->email = 'hoanghai.cntt88@gmail.com';
        $this->pass = 'Aa25251325';
        $this->pass1 = 'a25251325';
        $this->user = 'o967692988';

        $this->value = $this->faker->randomNumber(1,1000);



    }

    /**
     * Login by email
     */

    public function LG_01(Step\Acceptance\FirstStep $I, $scenario)
    {
        $I = new number2($scenario);
        $I->loginEmail($this->email, $this->pass);

    }

    /**
     * login by user name
     */
    public function LG_02(Step\Acceptance\FirstStep $I, $scenario)
    {
        $I = new number2($scenario);
        $I->loginUs+-ename($this->user, $this->pass);

    }

    /**
     * login by email and password invalid
     */
    public function  LG_03 (Step\Acceptance\FirstStep $I, $scenario)
    {
        $I = new number2($scenario);
        $I->loginpassinvalid($this->email, $this->pass1);

    }

    /**
     * login by user name and password invalid
     */
    public function  LG_04 (Step\Acceptance\FirstStep $I, $scenario)
    {
        $I = new number2($scenario);
        $I->loginpassinvalid('o967692988' , 'a25251325');

    }

    /**
     * click and don't enter email or password and click continue button
     */
    public function LG_05(Step\Acceptance\FirstStep $I)
    {
        $I->donteteremail();
    }

    /**
     * don't click & enter email and click button continue
     */
    public function LG_06(Step\Acceptance\FirstStep $I)
    {
        $I->donteteremailnotclick();
    }

    /**
     * login with email invalid
     */
    public function LG_07(Step\Acceptance\FirstStep $I, $scenario)
    {
        $I = new number2($scenario);
        $I->invalidemail('hoanghai.cntt88@gmailcom' );
    }

    /**
     * login with user invalid
     */
    public function LG_08(Step\Acceptance\FirstStep $I, $scenario)
    {
        $I = new number2($scenario);
        $I->invaliduser('o.967692988' );
    }

    /**
     * login by email don't enter pass
     */
    public function LG_09(\Step\Acceptance\FirstStep $I,$scenario)
    {
        $I = new number2($scenario);
        $I->logindontpass('hoanghai.cntt88@gmail.com');
    }

    /**
     * login by user name don't enter pass
     */
    public function LG_10(\Step\Acceptance\FirstStep $I,$scenario)
    {
        $I = new number2($scenario);
        $I->logindontpass('o967692988');
    }

    /**
     * log in with a incorrect Password have space between
     */
    public function LG_11(\Step\Acceptance\FirstStep $I,$scenario)
    {
        $I = new number2($scenario);
        $I->spacepass('hoanghai.cntt88@gmail.com' , 'A a25251325');
    }

    /**
     * hyperlink
     */
    public function LG_13(\Step\Acceptance\FirstStep $I,$scenario)
    {
        $I = new number2($scenario);
        $I->enterkey('hoanghai.cntt88@gmail.com' , 'Aa25251325');
    }
    public function LG_17(\Step\Acceptance\FirstStep $I)
    {
        $I->hyperlink();
    }
    public function LG_18(\Step\Acceptance\FirstStep $I)
    {
        $I->hyperlink1();
    }
    public function LG_19(\Step\Acceptance\FirstStep $I)
    {
        $I->hyperlink2();
    }
    public function LG_20(\Step\Acceptance\FirstStep $I)
    {
        $I->hyperlink3();
    }
    public function LG_29(\Step\Acceptance\FirstStep $I)
    {
        $I->hyperlink4();
    }
//    public function LG_30(\Step\Acceptance\FirstStep $I)
//    {
//        $I->hyperlink5();
//    }

    /**
     * check save id login
     */
    public function LG_21(Step\Acceptance\FirstStep $I, $scenario)
    {
        $I = new number2($scenario);
        $I->saveid('hoanghai.cntt88@gmail.com' , 'Aa25251325');
    }
    public function LG_22(Step\Acceptance\FirstStep $I, $scenario)
    {
        {
            $I = new number2($scenario);
            $I->login2tab('hoanghai.cntt88@gmail.com' , 'Aa25251325');
        }
    }

    /**
     * check mess not enter email or user name
     */
    public function  LG_45 (Step\Acceptance\FirstStep $I)
    {
        $I->checkmess1();
    }

    /**
     * check mess enter email or user name invalid
     */
    public function LG_46(Step\Acceptance\FirstStep $I, $scenario)
    {
        $I = new number2($scenario);
        $I->checkmess2('hoanghai.cntt88@gmailcom' );
    }

    /**
     * check mess with pass invalid
     */
    public function LG_47(Step\Acceptance\FirstStep $I, $scenario)
    {
        $I = new number2($scenario);
        $I->checkmess3('hoanghai.cntt88@gmailcom','a25251325' );
    }

    /**
     * check mess with don't enter pass
     */
    public function LG_48(Step\Acceptance\FirstStep $I, $scenario)
    {
        $I = new number2($scenario);
        $I->checkmess4('hoanghai.cntt88@gmailcom' );
    }

    /**
     * don't login with old pass
     */
    public function LG_53(Step\Acceptance\FirstStep $I, $scenario)
    {
        $I = new number2($scenario);
        $I->loginoldpass('hoanghai.cntt88@gmail.com','123123' );
    }


}
