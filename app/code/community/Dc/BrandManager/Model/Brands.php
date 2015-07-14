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

class Dc_BrandManager_Model_Brands extends Mage_Core_Model_Abstract
{

    public function getBrands()
    {
        $brands_category = Mage::app()->getStore()->getConfig('brandmanager/settings/category');
        $collection = Mage::getResourceModel('catalog/category_collection');
        $collection->addAttributeToSelect(array('name', 'brand_icon'))
            ->addFieldToFilter('level', array('eq' => '3'))
            ->addFieldToFilter('parent_id', array('eq' => $brands_category))
            ->setOrder('name', 'asc')
            ->load();
        return $collection;
    }

}
