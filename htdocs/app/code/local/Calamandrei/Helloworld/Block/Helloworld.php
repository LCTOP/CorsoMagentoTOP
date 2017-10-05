<?php
/**
 * Hello World
 */

/**
 * Hello World
 *
 * Block
 * @author Lorenzo Calamandrei <lorenzo.calamandrei@thinkopen.it>
 * @package Block
 * @version 0.1.0
 *
 */

class Calamandrei_Helloworld_Block_Helloworld extends Mage_Core_Block_Template
{

    /**
     * isEnabled
     * @return mixed
     */
    public function isEnabled()
    {
        return Mage::helper('calamandrei_helloworld')->isEnabled();
    }

    /**
     * getMessage
     * @return mixed
     */
    public function getMessage()
    {
        return Mage::helper('calamandrei_helloworld')->getConfig('configuration/message');
    }

}

