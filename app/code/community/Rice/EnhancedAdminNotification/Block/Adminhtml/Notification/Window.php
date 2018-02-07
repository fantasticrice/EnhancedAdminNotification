<?php

class Rice_EnhancedAdminNotification_Block_Adminhtml_Notification_Window extends Mage_Adminhtml_Block_Notification_Window
{
	/**
	 * Can we show notification window
	 *
	 * @return bool
	 */
	public function canShow()
	{
		$foo = 'bar';
		return parent::canShow();
	}
}
