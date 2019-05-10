<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 5/5/2019
 * Time: 10:19 AM
 */

use Step\Acceptance\HomeSteps as LoginStep;

class HomeCest
{
    /**
     * @var string
     */
    protected $name1;
    protected $name2;
    /**
     *
     */
    public function __construct()
    {
        $this->name1='lehoanghai2';
        $this->name2='hoanghai1';
    }

    /**
     * creat new Categories
     */
    public function newCategories( LoginStep $I)
    {
        $I->login("admin","123123");
        $I->newCategories($this->name1);
    }
    /**
     * creat new Article
     */
       public function newArticle(LoginStep $I)
    {
        $I->login("admin","123123");
        $I->newArticle($this->name2);
    }



}