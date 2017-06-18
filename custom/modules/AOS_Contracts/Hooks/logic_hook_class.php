<?php

class logic_hook_class 
{
	function beforeSaveMethod($bean, $event, $arguments)
	{
		$this->updateReminderDate($bean);
	}

	function updateReminderDate($bean)
	{
		if(!empty($bean->fetched_row['end_date']))
		{	
			$assigned_user_id = $bean->assigned_user_id;
			if($this->isInsuranceManagerUser($assigned_user_id))
			{
				//$userBean = BeanFactory::getBean('Users', $assigned_user_id);

				//get user defined duration
				$notification_duration = $bean->notification_duration;
				//default notification duration
				$subtractMonths = 'P5M'; 
				if(!empty($notification_duration))
				{
					$subtractMonths = 'P'.$notification_duration.'M';
				}
				$end_date = $bean->end_date;
				$new_renewal_reminder_date = new DateTime($end_date);
				$new_renewal_reminder_date->sub(new DateInterval($subtractMonths));
				$new_renewal_reminder_date = $new_renewal_reminder_date->format('Y-m-d h:i:s');
				$bean->renewal_reminder_date = $new_renewal_reminder_date;				
			}
		}
	}

	function isInsuranceManagerUser($userID)
	{
		global $db;
    	$query = 'select user_id from securitygroups_users where securitygroup_id = "7ad3658b-bb70-50e1-4e9d-58ff628b658c" and deleted = 0';
    	$users = $db->query($query);
    	while ($row = $db->fetchByAssoc($users)) {
    		if($userID == $row['user_id'])
    		{
    			return true;
    		}
    	}

    	return false;
	}
}
