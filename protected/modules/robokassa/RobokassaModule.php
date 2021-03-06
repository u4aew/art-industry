<?php

use yupe\components\WebModule;

/**
 * Class RobokassaModule
 */
class RobokassaModule extends WebModule
{
    /**
     *
     */
    const VERSION = '1.0';

    /**
     * @return array
     */
    public function getDependencies()
    {
        return ['payment'];
    }

    /**
     * @return array
     */
    public function getNavigation()
    {
        return [];
    }

    /**
     * @return bool
     */
    public function getAdminPageLink()
    {
        return false;
    }

    /**
     * @return bool
     */
    public function getIsShowInAdminMenu()
    {
        return false;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return self::VERSION;
    }

    /**
     * @return array
     */
    public function getEditableParams()
    {
        return [];
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return Yii::t('RobokassaModule.robokassa', 'Store');
    }

    /**
     * @return string
     */
    public function getName()
    {
        return Yii::t('RobokassaModule.robokassa', 'Robokassa');
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return Yii::t('RobokassaModule.robokassa', 'Robokassa payment module');
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
        return Yii::t('RobokassaModule.robokassa', 'Dark_Cs');
    }

    /**
     * @return string
     */
    public function getAuthorEmail()
    {
        return Yii::t('RobokassaModule.robokassa', 'darkcs2@gmail.com');
    }

    /**
     * @return string
     */
    public function getIcon()
    {
        return 'fa fa-rub';
    }

    /**
     *
     */
    public function init()
    {
        parent::init();
    }
}
