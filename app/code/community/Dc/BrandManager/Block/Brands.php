<?php
/**
 * Dc_BrandManager
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category   Dc
 * @package    Dc_BrandManager
 * @copyright  Copyright (c) 2012-2015 Damián Culotta. (http://www.damianculotta.com.ar/)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Dc_BrandManager_Block_Brands extends Mage_Core_Block_Template
{

    /**
     * Get list of categories used as brands.
     *
     * @return mixed
     */
    public function getBrands()
    {
        return Mage::getModel('brandmanager/brands')->getBrands();
    }

    /**
     * Number of brands per line.
     *
     * @return null|string
     */
    public function getBrandsByLine()
    {
    	return Mage::app()->getStore()->getConfig('brandmanager/settings/brands_per_line');
    }

    /**
     * Get list mode.
     *
     * @return null|string
     */
    public function getListMode()
    {
    	return Mage::app()->getStore()->getConfig('brandmanager/settings/list_mode');
    }

    /**
     * Get display type (text or image).
     *
     * @return null|string
     */
    public function getDisplayType()
    {
        return Mage::app()->getStore()->getConfig('brandmanager/settings/display_type');
    }

    /**
     * Group brands using the first letter of the name.
     *
     * @return null|string
     */
    public function getGroupByLetter()
    {
        return Mage::app()->getStore()->getConfig('brandmanager/settings/group_by_letter');
    }

    /**
     * Get brand icon.
     *
     * @param $image
     * @return string
     */
    public function getImageUrl($image)
    {
        return Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA) . 'catalog' . DS . 'category' . DS . $image;
    }

}
