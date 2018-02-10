<?php

class Rice_EnhancedAdminNotification_Block_Adminhtml_Notification_Window extends Mage_Adminhtml_Block_Notification_Window
{
	/**
	 * Can we show notification window
	 * Overridden to check the preference of which modal notifications are allowed.
	 * @return bool
	 */
	public function canShow()
	{
		$status = parent::canShow();
		$severity = $this->getLastNotice()->getSeverity();
		$allowed = explode(',', Mage::getStoreConfig('system/adminnotification/allow_modal'));
		$status &= in_array($severity, $allowed);
		return $status;
	}
}
