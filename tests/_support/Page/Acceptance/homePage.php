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
     * login . xPath of username , password , loginbutton
     */
    public static $userName='//input[@id="mod-login-username"]';
    public static $passWord='//input[@id="mod-login-password"]';
    public static $loginButton='//form[@id="form-login"]/fieldset/div[4]/div/div';
    /**
     *
     */
    public static $URL='/';

    /**
     *  xpath of Articles
     */
    public static $articles= '(//span[@class="j-links-link"])[2]';
    /**
     * xpath of Categories
     */
    public static $categories = '(//span[@class="j-links-link"])[3]';
    /**
     * xpath of button new Categories
     */
    public static $newButtonCategories = '//*[@id="toolbar-new"]/button';
    /**
     * xpath new title of categories
     */
    public static $newTitleCategories = '//input[@id="jform_title"]';
    /**
     * xpath save Categories
     */
    public static $saveCategories='//div[@id="toolbar-apply"]';
    /**
     * xpath new Aritcles
     */
    public static $newArticles = '//div[@id="toolbar-new"]';
    /**
     * xpath title of Articles
     */
    public static $titleArticles = '//input[@id="jform_title"]';
    /**
     * xpath show Category
     */
    public static $showCategory='//div[@id="jform_catid_chzn"]';
    /**
     * xpath save Articles
     */
    public static $saveArticles='//div[@id="toolbar-apply"]/button';




}