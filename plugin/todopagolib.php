<?php
/**
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later.
 */
 
defined('_JEXEC') or die;
 
/**
 * Mylib plugin class.
 *
 * @package     Joomla.plugin
 * @subpackage  System.mylib
 */
class plgSystemTodoPagoLib extends JPlugin
{
    /**
     * Method to register custom library.
     *
     * return  void
     */
    public function onAfterInitialise()
    {
        JLoader::registerPrefix('TodoPago', JPATH_LIBRARIES . '/todopago/lib');
    }
}