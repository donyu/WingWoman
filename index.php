<?php
# This function reads your DATABASE_URL configuration automatically set by Heroku
# the return value is a string that will work with pg_connect
function pg_connection_string() {
  return "dbname=d5i9e3acard5rg host=ec2-184-73-254-144.compute-1.amazonaws.com port=5432 user=vhlzhvlsfdwpgs password=zcPoY-dQkESLE2lBR52gBFHHIV sslmode=require";
}
 
# Establish db connection
$db = pg_connect(pg_connection_string());
if (!$db) {
   echo "Database connection error."
   exit;
}
 
$result = pg_query($db, "SELECT statement goes here");
?>
