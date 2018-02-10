<?php

class Rice_EnhancedAdminNotification_Model_System_Config_Source_Notification_Severity
{
	public function toOptionArray()
	{
		$options = [
			[
				'value' => Mage_AdminNotification_Model_Inbox::SEVERITY_CRITICAL,
				'label' => Mage::helper('adminhtml')->__('Critical')
			],[
				'value' => Mage_AdminNotification_Model_Inbox::SEVERITY_MAJOR,
				'label' => Mage::helper('adminhtml')->__('Major')
			],[
				'value' => Mage_AdminNotification_Model_Inbox::SEVERITY_MINOR,
				'label' => Mage::helper('adminhtml')->__('Minor')
			],[
				'value' => Mage_AdminNotification_Model_Inbox::SEVERITY_NOTICE,
				'label' => Mage::helper('adminhtml')->__('Notice')
			]
		];
		return $options;
	}
}
