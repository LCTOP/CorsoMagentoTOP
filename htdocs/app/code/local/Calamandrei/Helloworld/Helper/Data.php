<?php
/**
 * Hello World
 */

/**
 * Hello World
 *
 * Main Helper
 * @author Lorenzo Calamandrei <lorenzo.calamandrei@thinkopen.it>
 * @package Frontend
 * @version 0.1.0
 *
 */

class Calamandrei_Helloworld_Helper_Data extends Mage_Core_Helper_Abstract
{

    /**
     * getConfig
     *
     * @param $config
     * @return mixed
     */
    public function getConfig($config)
    {
        return Mage::getStoreConfig('calamandrei_helloworld/' . $config);
    }

    /**
     * isEnabled
     *
     * Return true if the module is enabled.
     * @return bool
     */
    public function isEnabled()
    {
        return $this->getConfig('configuration/enabled');
    }

    /**
     * getMessage
     *
     * Return the custom message of module
     * @param $config
     * @return mixed
     */
    public function getMessage($config)
    {
        return $this->getConfig($config);
    }

}
