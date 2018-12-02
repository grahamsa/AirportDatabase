set GOOGLE_APPLICATION_CREDENTIALS=AiportDatabase-d1e8b21916a5.json

cloud_sql_proxy.exe -instances="aiportdatabase:us-east1:airportdatabase"=tcp:3306
PAUSE