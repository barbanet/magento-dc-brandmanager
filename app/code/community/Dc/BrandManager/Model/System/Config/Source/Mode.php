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

class Dc_BrandManager_Model_System_Config_Source_Mode
{
    const MODE_GRID = '1';
    const MODE_LIST = '2';
    
    public function toOptionArray()
    {
        return array(
            array(
                'value' => self::MODE_GRID,
                'label' => Mage::helper('brandmanager')->__('Grid')
            ),
            array(
                'value' => self::MODE_LIST,
                'label' => Mage::helper('brandmanager')->__('Alphabetical List')
            )
        );
    }

}
