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

//Static block
$content = "{{block type=\"brandmanager/brands\" block_id=\"brands\" template=\"dc/brandmanager/brands.phtml\"}}";
$block = array(
    'title'         => 'Brands',
    'identifier'    => 'brands',
    'content'       => $content,
    'is_active'     => 1,
    'stores'        => 0
);
Mage::getModel('cms/block')->setData($block)->save();
