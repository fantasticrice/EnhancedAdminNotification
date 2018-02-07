<?php

class Rice_EnhancedAdminNotification_Model_Resource_Inbox extends Mage_AdminNotification_Model_Resource_Inbox
{
	/**
	 * Perform actions before object save
	 *
	 * @param Mage_Core_Model_Abstract $object
	 * @return Mage_Core_Model_Resource_Db_Abstract
	 */
	protected function _beforeSave(Mage_Core_Model_Abstract $object)
	{
		$foo = 'bar';
		return parent::_beforeSave($object);
	}
}
