CREATE OR REPLACE VIEW event_entertainers AS
SELECT
	User_Events_Event_ISN										AS Event_Entertainers_Event_ISN,
	GROUP_CONCAT(DJ_Name ORDER BY DJ_Name ASC SEPARATOR ', ')	AS Event_Entertainers_DJs
FROM
	user_events
JOIN
	users ON (User_ISN = User_Events_User_ISN)
JOIN
	djs ON (DJ_ISN = User_ISN)
GROUP BY
	User_Events_Event_ISN
HAVING
	User_Events_User_Entertaining = 1