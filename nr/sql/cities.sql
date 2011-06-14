CREATE OR REPLACE VIEW cities AS
SELECT
	ZIP_City			AS City_Name,
	ZIP_State			AS City_State,
	AVG(ZIP_Latitude)	AS City_Latitude,
	AVG(ZIP_Longitude)	AS City_Longitude
FROM
	zips
GROUP BY
	ZIP_City,
	ZIP_State
