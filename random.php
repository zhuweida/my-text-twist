<?php

   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('scrabble.sqlite');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "";
   }


   $sql =<<<EOF
      SELECT rack from racks order by random() limit 1;
EOF;
$ret = $db->query($sql);
while($row = $ret->fetchArray(SQLITE3_ASSOC)){
   

echo $row['rack'];}//echo the whole array








?>
