<?php

class BAPREPORT {
    public $ID;
    public $studentsLO; 
   
    
/********************************************** Information load *****************************************************/  
   public static function loadFromInfomation($ID) {
         $records = getResultFromSQL('SELECT * FROM avaluo WHERE `ID`=?', [$ID]);        
       if (count($records) == 0) {
            return null;
      }

        $record = $records[0];
        $u = new User();

        $u->id = $ID;
        $u->studentsLO= $record['studentsLO'];
        $u->SLO = $record['SLO_INFORMATION'];


        return $u;
    }
/********************************************** Information load *****************************************************/      
}