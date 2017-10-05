<?php
/**
 * IndexController
 */

/**
 * IndexController
 *
 * Hello World Index Controller
 * @author Lorenzo Calamandrei <lorenzo.calamandrei@thinkopen.it>
 * @package
 * @version 0.1.0
 *
 */

class Calamandrei_HelloWorld_IndexController extends Mage_Core_Controller_Front_Action
{

    /**
     * indexController
     *
     * Show the content of the custom message of this module in a blank page
     */
    public function indexAction()
    {
        echo "False Test 2 for testing ssh config with Git";
        die();
        /*
        $helper = new Calamandrei_HelloWorld_Helper_Data();
        die($helper->getMessage());
        */
    }

}
