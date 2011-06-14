CREATE OR REPLACE VIEW sql_cl_front AS
SELECT		Clubber_ISN,
			IF(Event_Featured,"event featured","event") AS Event_Type,
			CONCAT("photos/clubs/",Club_ISN,".jpg") AS Event_Image_Final,
			IF(ISNULL(Event_Main_DJ_ISN),"band.jpg",CONCAT("photos/djs/",DJ_ISN,".jpg")) AS DJ_Image_Final,
			IF(ISNULL(Event_Main_DJ_ISN),"",CONCAT("DJ(s): ",DJ_Name,IF(ISNULL(Event_DJs_View_DJ_Names),"",CONCAT(", ",Event_DJs_View_DJ_Names)),"<br>")) AS DJ_Names_Final,
			IF(ISNULL(Event_Bands_View_Band_Names),"",CONCAT("Band(s): ",Event_Bands_View_Band_Names,"<br>")) AS Band_Names_Final,
			Club_Name,
			Event_Date,
			Event_Start_Time,
			Event_End_Time,
			Event_Name,
			IF(ISNULL(Event_Friends_Count),"<br>",CONCAT(Event_Friends_Count," of your friends will be at this event!<br>")) AS Event_Friends,
			Event_Smoking,
			Event_Gay,
			IF(TRIM(Event_Description)="","",CONCAT(TRIM(Event_Description),"<br>")) AS Event_Description_Final,
			IF(TRIM(Event_Entry_Fees)="","",CONCAT("Entry Fees: ",TRIM(Event_Entry_Fees),"<br>")) AS Entry_Fees_Final,
			IF(TRIM(Event_Specials)="","",CONCAT("Specials: ",TRIM(Event_Specials))) AS Event_Specials_Final,
			CONCAT("Music: ",CONCAT_WS(", ",
				IF(Event_Genres_Top40,"Top 40",NULL),
				IF(Event_Genres_Pop,"Pop",NULL),
				IF(Event_Genres_Dance,"Dance",NULL),
				IF(Event_Genres_House,"House",NULL),
				IF(Event_Genres_Electro,"Electro",NULL),
				IF(Event_Genres_HipHopRap,"Hip-hop/Rap",NULL),
				IF(Event_Genres_Reggae,"Reggae",NULL),
				IF(Event_Genres_Reggaeton,"Reggaeton",NULL),
				IF(Event_Genres_RandB,"R&B",NULL),
				IF(Event_Genres_OldSchool,"Old School",NULL),
				IF(Event_Genres_Country,"Country",NULL),
				IF(Event_Genres_Motown,"Motown",NULL),
				IF(Event_Genres_70s,"'70s",NULL),
				IF(Event_Genres_80s,"'80s",NULL),
				IF(Event_Genres_90s,"'90s",NULL),
				IF(Event_Genres_Rock,"Rock",NULL),
				IF(Event_Genres_AlternativeRock,"Alternative Rock",NULL),
				IF(Event_Genres_Metal,"Metal",NULL),
				IF(Event_Genres_ClassicRock,"Classic Rock",NULL),
				IF(Event_Genres_Accoustic,"Accoustic",NULL)),"<br>") AS Event_Genres_Final,
			ROUND(SQRT
			(
				( 1 / 8 )
				*
				(
					100 - ABS( clubs.Club_Atmosphere_Lighting - clubbers.Clubber_Atmosphere_Lighting ) +
					100 - ABS( clubs.Club_Atmosphere_Volume - clubbers.Clubber_Atmosphere_Volume ) +
					100 - ABS( clubs.Club_Atmosphere_Space - clubbers.Clubber_Atmosphere_Space ) +
					50 + clubs.Club_FX_Lasers * ( clubbers.Clubber_FX_Lasers - 50 ) +
					50 + clubs.Club_FX_Videoscreens * ( clubbers.Clubber_FX_Videoscreens - 50 )  +
					50 + clubs.Club_FX_Smoke * ( clubbers.Clubber_FX_Smoke - 50 )  +
					50 + clubs.Club_FX_Cryogenics * ( clubbers.Clubber_FX_Cryogenics - 50 )  +
					50 + clubs.Club_FX_Flairing * ( clubbers.Clubber_FX_Flairing - 50 ) 
				) 
				*
				(
					events.Event_Genres_Top40 * clubbers.Clubber_Genre_Top40 +
					events.Event_Genres_Pop * clubbers.Clubber_Genre_Pop +
					events.Event_Genres_Dance * clubbers.Clubber_Genre_Dance +
					events.Event_Genres_House * clubbers.Clubber_Genre_House +
					events.Event_Genres_Electro * clubbers.Clubber_Genre_Electro +
					events.Event_Genres_HipHopRap * clubbers.Clubber_Genre_HipHopRap +
					events.Event_Genres_Reggae * clubbers.Clubber_Genre_Reggae +
					events.Event_Genres_Reggaeton * clubbers.Clubber_Genre_Reggaeton +
					events.Event_Genres_RandB * clubbers.Clubber_Genre_RandB +
					events.Event_Genres_OldSchool * clubbers.Clubber_Genre_OldSchool +
					events.Event_Genres_Country * clubbers.Clubber_Genre_Country +
					events.Event_Genres_Motown * clubbers.Clubber_Genre_Motown +
					events.Event_Genres_70s * clubbers.Clubber_Genre_70s +
					events.Event_Genres_80s * clubbers.Clubber_Genre_80s +
					events.Event_Genres_90s * clubbers.Clubber_Genre_90s +
					events.Event_Genres_Rock * clubbers.Clubber_Genre_Rock +
					events.Event_Genres_AlternativeRock * clubbers.Clubber_Genre_AlternativeRock +
					events.Event_Genres_Metal * clubbers.Clubber_Genre_Metal +
					events.Event_Genres_ClassicRock * clubbers.Clubber_Genre_ClassicRock +
					events.Event_Genres_Accoustic * clubbers.Clubber_Genre_Accoustic
				)
				/
				(
					events.Event_Genres_Top40 +
					events.Event_Genres_Pop +
					events.Event_Genres_Dance +
					events.Event_Genres_House +
					events.Event_Genres_Electro +
					events.Event_Genres_HipHopRap +
					events.Event_Genres_Reggae +
					events.Event_Genres_Reggaeton +
					events.Event_Genres_RandB +
					events.Event_Genres_OldSchool +
					events.Event_Genres_Country +
					events.Event_Genres_Motown +
					events.Event_Genres_70s +
					events.Event_Genres_80s +
					events.Event_Genres_90s +
					events.Event_Genres_Rock +
					events.Event_Genres_AlternativeRock +
					events.Event_Genres_Metal +
					events.Event_Genres_ClassicRock +
					events.Event_Genres_Accoustic
				)
			)) AS Event_Score,
			City_Name,
			City_State,
			ZIP_City AS Club_City,
			ZIP_State AS Club_State,
			distance(City_Latitude,City_Longitude,ZIP_Latitude,ZIP_Longitude) AS Event_Distance
FROM		events
INNER JOIN	clubs ON ( Event_Club_ISN = Club_ISN )
INNER JOIN	zips ON ( ZIP_Code = Club_ZIP )
INNER JOIN	clubbers ON ((ISNULL(Clubber_Smoking_Preference) OR Clubber_Smoking_Preference=Event_Smoking) AND (ISNULL(Clubber_Gay_Preference) OR Clubber_Gay_Preference=Event_Gay))
INNER JOIN	cities
LEFT JOIN	djs ON ( Event_Main_DJ_ISN = DJ_ISN )
LEFT JOIN	event_djs_view ON ( Event_DJs_View_Event_ISN = Event_ISN )
LEFT JOIN	event_bands_view ON ( Event_Bands_View_Event_ISN = Event_ISN )
LEFT JOIN	Event_Friends ON ( Event_Friends_Clubber_ISN = Clubber_ISN AND Event_Friends_Event_ISN = Event_ISN )
ORDER BY	Event_Featured DESC,
			Event_Score DESC
