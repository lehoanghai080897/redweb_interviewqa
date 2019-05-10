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
     * creat new Categories
     */
    public function newCategories($name)
    {
        $I= $this;
        $I->amOnPage(hotel::$URL);
        $I->click(hotel::$categories);
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
        $I->click('hoanghai');
        $I->click(hotel::$saveArticles);



    }



}