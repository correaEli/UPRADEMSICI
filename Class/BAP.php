<?php
class BAP {
    public $id = -1;
    public $ID;    public $studentsLO; 
    public $SLO;
    public $curses1;
    public $curses2;
    public $year1;
    public $year2;
    public $CPC;
    public $instruments;
    public $direct;
    public $indirec;
    public $external;
    public $internal;
    Public $Success;
    Public $BYmayor;
    public $Departament;
    
/********************************************** Information load *****************************************************/  
   public static function loadFromInfomation($ID) {
         $records = getResultFromSQL('SELECT * FROM avaluo WHERE `ID`=?', [$ID]);        
       if (count($records) == 0) {
            return null;
      }
        $record = $records[0];
        $u = new User();
        $u->ID = $ID;
        $u->studentsLO= $record['studentsLO'];
        $u->SLO = $record['SLO_INFORMATION'];
        $u->curses1 = $record['Curses1'];
        $u->curses2 = $record['Curses2'];
        $u->year1 = $record['year1'];
        $u->year2 = $record['year2'];
        $u->CPC = $record['CPL/GLG'];
        $u->intruments = $record['Assesments_Instruments'];
        $u->direct = $record['Direct'];
        $u->indirec = $record['Indirect'];
        $u->external = $record['External'];
        $u->internal = $record['Internal'];
        $u->Success = $record['Success_Indicator'];
        $u->BYmayor = $record['BYmayor'];
        $u->Departament = $record['Departament'];
        return $u;    }/********************************************** data collapse 1 *****************************************************/

    public static function loadFromDATA() {
      $records = getResultFromSQL('SELECT `ID`,`studentsLO`,`SLO_INFORMATION` FROM `avaluo` WHERE `BYmayor` is NULL ORDER BY `studentsLO`');  
         if (count($records) == 0) {
              return null;
            }

        $record = $records[0];         $u = new User();
            foreach ($records as $rec){
               $u->ID[] = $rec['ID'];
               $u->studentsLO[] = $rec['studentsLO'];
               $u->SLO[] =$rec['SLO_INFORMATION'];
            }
            return $u;
      }
/********************************************** data collapse 1 *****************************************************/

/********************************************** data collapse 2 *****************************************************/

    public static function loadFromBYMayor() {
      $records = getResultFromSQL('SELECT `ID`,`studentsLO`,`SLO_INFORMATION`,`CPL/GLG` FROM `avaluo` WHERE `BYmayor` is NOT NULL ORDER BY `CPL/GLG`,`studentsLO`');  
         if (count($records) == 0) {
              return null;
          }

        $record = $records[0];
         $u = new User();
            foreach ($records as $rec){
               $u->ID[] = $rec['ID'];
               $u->studentsLO[] = $rec['studentsLO'];
               $u->SLO[] =$rec['SLO_INFORMATION'];
               $u->CPC[] =$rec['CPL/GLG'];
            }
         return $u;
      }
/********************************************** data collapse 2 *****************************************************/
}
?>