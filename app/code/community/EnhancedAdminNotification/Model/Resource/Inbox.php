<?php

class Rice_EnhancedAdminNotification_Model_Resource_Inbox extends Mage_AdminNotification_Model_Resource_Inbox
{
	/**
	 * Perform actions before object save
	 * Overridden to automatically mark incoming notices as read if desired.
	 * @param Mage_Core_Model_Abstract $object
	 * @return Mage_Core_Model_Resource_Db_Abstract
	 */
	protected function _beforeSave(Mage_Core_Model_Abstract $object)
	{
		// TODO send a fake incoming message with notice level severity
		if ($isNoticeSuppressed = Mage::getStoreConfigFlag('system/adminnotification/hide_notices')) {
			$object->setData('is_read', 1);
		}
		return parent::_beforeSave($object);
	}
}
