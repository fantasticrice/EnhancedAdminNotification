<?php

class Rice_EnhancedAdminNotification_Model_Resource_Inbox extends Mage_AdminNotification_Model_Resource_Inbox
{
	/**
	 * Overridden to automatically mark incoming notices as read if needed.
	 * It does not seem like Magento writes to this table using the ORM, but just in case...
	 * @param Mage_Core_Model_Abstract $object
	 * @return Mage_Core_Model_Resource_Db_Abstract
	 */
	protected function _beforeSave(Mage_Core_Model_Abstract $object)
	{
		if (Mage::getStoreConfigFlag('system/adminnotification/hide_notices')) {
			$object->setData('is_read', 1);
		}
		return parent::_beforeSave($object);
	}

	/**
	 * Overridden to automatically mark incoming notices as read if needed.
	 * @param Mage_AdminNotification_Model_Inbox $object
	 * @param array $data
	 */
	public function parse(Mage_AdminNotification_Model_Inbox $object, array $data)
	{
		if (Mage::getStoreConfigFlag('system/adminnotification/hide_notices')) {
			foreach ($data as $key => $item) {
				if (isset($item['severity']) && $item['severity'] == Mage_AdminNotification_Model_Inbox::SEVERITY_NOTICE) {
					$data[$key]['is_read'] = 1;
				}
			}
		}
		parent::parse($object, $data);
	}
}
