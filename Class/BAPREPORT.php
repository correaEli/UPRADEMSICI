<?php

class BAPREPORT {
    public $ID;
    public $IDFROMAVALUO;
    public $Ayear;
    public $Byear;
    public $Semester;
    public $Result;
    public $Section;
    public $Students;
    public $Analysis;
    public $Submitted;
    public $Date;
   
    
/**************************************** Information load FROM ID **************************************************/
   public static function loadFromInfomation($ID) {
         $records = getResultFromSQL('SELECT * FROM result WHERE `ID`=?', [$ID]);        
       if (count($records) == 0) {
            return null;
      }
         $record = $records[0];
         $u = new User();

         $u->ID = $ID;
         $u->IDFROMAVALUO= $record['IDFROMAVALUO'];
         $u->Ayear = $record['AYEAR'];
         $u->Byear = $record['BYEAR'];
         $u->Semester = $record['Semester'];
         $u->Result = $record['Result'];
         $u->Section = $record['Section'];
         $u->Students = $record['# of students'];
         $u->Analysis = $record['Analysis and actions'];
         $u->Submitted = $record['Submitted By'];
         $u->Date = $record['Date'];

        return $u;
    }
/**************************************** Information load FROM ID **************************************************/      
/********************************** Information load FROM ID FROM AVALUO ********************************************/

    public static function loadFromDATA($IDfromAVALUO) {
      $records = getResultFromSQL('SELECT * FROM `result` WHERE `IDFROMAVALUO`=? ORDER BY `AYEAR` DESC', [$IDfromAVALUO]);  
         if (count($records) == 0) {
              return null;
            }

        $record = $records[0];
         $u = new User();
            foreach ($records as $rec){
               $u->ID[] = $rec['ID'];
               $u->IDFROMAVALUO[]= $rec['IDFROMAVALUO'];
               $u->Ayear[] = $rec['AYEAR'];
               $u->Byear[] = $rec['BYEAR'];
               $u->Semester[] = $rec['Semester'];
               $u->Result[] = $rec['Result'];
               $u->Section[] = $rec['Section'];
               $u->Students[] = $rec['# of students'];
               $u->Analysis[] = $rec['Analysis and actions'];
               $u->Submitted[] = $rec['Submitted By'];
               $u->Date[] = $rec['Date'];
            }
            return $u;
      }
/************************************* Information load FROM ID FROM AVALUO *****************************************/
  
}