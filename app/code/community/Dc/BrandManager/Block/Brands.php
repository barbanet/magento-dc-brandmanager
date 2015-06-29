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
 * @copyright  Copyright (c) 2015 Damián Culotta. (http://www.damianculotta.com.ar/)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Dc_BrandManager_Block_Brands extends Mage_Core_Block_Template
{

    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }
    
    public function getBrands()
    {
        $collection = Mage::getModel('brandmanager/brands')->getBrands();
        return $collection;
    }
    
    public function getBrandsByLine()
    {
    	return Mage::app()->getStore()->getConfig('brandmanager/settings/brands_per_line');
    }
    
    public function getListMode()
    {
    	return Mage::app()->getStore()->getConfig('brandmanager/settings/list_mode');
    }

    public function getDisplayType()
    {
        return Mage::app()->getStore()->getConfig('brandmanager/settings/display_type');
    }
    
    public function getGroupByLetter()
    {
        return Mage::app()->getStore()->getConfig('brandmanager/settings/group_by_letter');
    }

    public function getImageUrl($image)
    {
        return Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA) . 'catalog' . DS . 'category' . DS . $image;
    }

}
