<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 5/5/2019
 * Time: 10:19 AM
 */

use Step\Acceptance\HomeSteps as LoginStep;

class loginGithupCest
{
    protected $name1;
    protected $name2;
    /**
     *
     */
    public function __construct()
    {
        $this->name1='hoanghai';
        $this->name2='haixu';
    }
    /**
     * creat new Categories
     */
    public function newCategories( LoginStep $I)
    {
        $I->newCategories($this->name1);
    }
    /**
     * creat new Article
     */
    public function newArticle(LoginStep $I)
    {
        $I->newArticle($this->name2);
    }



}