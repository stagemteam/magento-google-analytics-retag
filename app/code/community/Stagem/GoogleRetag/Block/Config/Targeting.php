<?php
/**
 * The MIT License (MIT)
 * Copyright (c) 2018 Stagem Team
 * This source file is subject to The MIT License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/MIT
 *
 * @category Stagem
 * @package Stagem_GoogleRetag
 * @author Serhii Popov <popow.serhii@gmail.com>
 * @license https://opensource.org/licenses/MIT The MIT License (MIT)
 */

class Stagem_GoogleRetag_Block_Config_Targeting extends Mage_Adminhtml_Block_System_Config_Form_Field_Array_Abstract
{
    public function _prepareToRender()
    {
        $this->addColumn('full_action_name', [
            'label' => Mage::helper('stagem_googleRetag')->__('Full Action Name'),
            'style' => 'width:200px',
        ]);

        $this->addColumn('selector', [
            'label' => Mage::helper('stagem_googleRetag')->__('Selector'),
            'style' => 'width:200px',
        ]);

        $this->addColumn('code', [
            'label' => Mage::helper('stagem_googleRetag')->__('Execute Code'),
            'style' => 'width:200px',
        ]);

        $this->_addAfter = false;
        $this->_addButtonLabel = Mage::helper('stagem_googleRetag')->__('Add');
    }
}