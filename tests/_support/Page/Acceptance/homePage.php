<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 5/5/2019
 * Time: 9:44 AM
 */

namespace Page\Acceptance;


class homePage
{
    /**
     *
     */
    public static $URL='/';

    /**
     * @var string
     */
    public static $articles= '//*[@id="content"]/div/div/div[2]/div[1]/div/div/div/ul[1]/li[1]/a/span[2]';
    /**
     * @var string
     */
    public static $categories = '//*[@id="content"]/div/div/div[2]/div[1]/div/div/div/ul[1]/li[3]/a';
    /**
     *
     */
    public static $newButtonCategories = '//*[@id="toolbar-new"]/button';
    /**
     *
     */
    public static $newTitleCategories = '//input[@id="jform_title"]';
    /**
     *
     */
    public static $saveCategories='//div[@id="toolbar-apply"]';
    /**
     *
     */
    public static $newArticles = '//div[@id="toolbar-new"]';
    /**
     *
     */
    public static $titleArticles = '//input[@id="jform_title"]';
    /**
     *
     */
    public static $showCategory='//div[@id="jform_catid_chzn"]';
    /**
     *
     */
    public static $saveArticles='//div[@id="toolbar-apply"]/button';




}