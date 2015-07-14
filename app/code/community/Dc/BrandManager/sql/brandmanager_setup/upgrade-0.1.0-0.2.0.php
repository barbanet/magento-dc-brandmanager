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

$installer = $this;

$installer->startSetup();

$setup = new Mage_Eav_Model_Entity_Setup('core_setup');
$setup->addAttributeGroup(Mage_Catalog_Model_Category::ENTITY, 'Default', 'Extra Options', 10);
$_attribute_set_id = $setup->getDefaultAttributeSetId(Mage_Catalog_Model_Category::ENTITY);
$_attribute_group_id = $setup->getAttributeGroupId(Mage_Catalog_Model_Category::ENTITY, $_attribute_set_id, 'Extra Options');

$setup->addAttribute('catalog_category', 'brand_icon', array(
    'type'              => 'varchar',
    'backend'           => 'catalog/category_attribute_backend_image',
    'frontend'          => '',
    'label'             => 'Brand Icon',
    'input'             => 'image',
    'class'             => '',
    'source'            => '',
    'global'            => 0,
    'visible'           => 1,
    'required'          => 0,
    'user_defined'      => 1,
    'default'           => 0,
    'searchable'        => 0,
    'filterable'        => 0,
    'comparable'        => 0,
    'visible_on_front'  => 1,
    'unique'            => 0,
    'position'          => 1,
));
$setup->addAttributeToGroup(
    Mage_Catalog_Model_Category::ENTITY,
    $_attribute_set_id,
    $_attribute_group_id,
    'brand_icon',
    '10'
);

$installer->endSetup();