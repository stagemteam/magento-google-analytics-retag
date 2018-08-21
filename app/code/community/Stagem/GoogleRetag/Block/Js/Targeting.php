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

class Stagem_GoogleRetag_Block_Js_Targeting extends Mage_Core_Block_Template
{
    public function matchFullAction($target)
    {
        return $target['page_handler'] == Mage::app()->getFrontController()->getAction()->getFullActionName();
    }

    public function getTargets()
    {
        $targeting = Mage::getStoreConfig('stagem_googleRetag/settings/targeting');
        if ($targeting) {
            $targeting = unserialize($targeting);
            if (is_array($targeting)) {
                /*foreach ($targeting as $shippingCostsRow) {
                    $fromPrice = $shippingCostsRow['from_price'];
                    $cost = $shippingCostsRow['cost'];
                }*/
                //return $targeting;
            } else {
                // handle unserializing errors here
                Mage::throwException('Targeting config cannot be unserialize');
            }
        }

        return $targeting;
    }
}