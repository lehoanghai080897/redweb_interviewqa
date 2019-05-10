<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 5/5/2019
 * Time: 10:48 AM
 */

namespace Step\Acceptance;


use Page\Acceptance\homePage as hotel;

class HomeSteps extends \AcceptanceTester
{
    /**
     * login
     */
    public function login($name , $pass)
    {
        $I= $this;
        $I->amOnPage(hotel::$URL);
        $I->fillField(hotel::$userName, $name);
        $I->fillField(hotel::$passWord, $pass);
        $I->click(hotel::$loginButton);
    }
    /**
     * creat new Categories
     */
    public function newCategories($name)
    {
        $I= $this;
        $I->amOnPage(hotel::$URL);
        $I->click(hotel::$categories);
        $I->click(hotel::$newButtonCategories);
        $I->fillField(hotel::$newTitleCategories , $name);
        $I->click(hotel::$saveCategories);
    }

    /**
     * creat new Article
     */
    public function newArticle($name)
    {
        $I= $this;
        $I->amOnPage(hotel::$URL);
        $I->click(hotel::$articles);
        $I->click(hotel::$newArticles);
        $I->fillField(hotel::$titleArticles, $name);
        $I->click(hotel::$showCategory);
        $I->click('lehoanghai2');
        $I->click(hotel::$saveArticles);
    }



}