CREATE OR REPLACE VIEW user_event_friends AS
SELECT
	User_Friends_User_ISN			AS User_Event_Friends_User_ISN,
	User_Events_Event_ISN			AS User_Event_Friends_Event_ISN,
	User_Friends_Friend_ISN			AS User_Event_Friends_Friend_ISN,
	(User_Type = "D")				AS User_Event_Friends_Friend_Entertainer,
	User_Events_User_Entertaining	AS User_Event_Friends_Friend_Entertaining
FROM	users
JOIN	user_events ON (User_Events_User_ISN = User_ISN)
JOIN	user_friends ON (User_Friends_Friend_ISN = User_ISN)
