set GOOGLE_APPLICATION_CREDENTIALS=AiportDatabase-5c76705617db.json

cloud_sql_proxy.exe -instances="aiportdatabase:us-east1:airportdatabase"=tcp:3306
PAUSE