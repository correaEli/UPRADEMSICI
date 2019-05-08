<?php
class BAP {
    public $id = -1;    public $studentsLO; 
    public $SLO;
    public $curses1;
    public $curses2;
    public $year1;
    public $year2;
    public $CPC;
    public $instruments;
    public $dirOind;
    public $intOext;
    Public $Success;
    Public $BYmayor;
    public $Departament;
    public $D;


    
   public static function loadFromInfomation($studentsLO) {
         $records = getResultFromSQL('SELECT * FROM avaluo WHERE `studentsLO`=?', [$studentsLO]);        
       if (count($records) == 0) {
            return null;
        }
        
        $record = $records[0];
        $u = new User();
        $u->id = $id;
        $u->studentsLO= $record['studentsLO'];
        $u->SLO = $record['SLO_INFORMATION'];
        $u->curses1 = $record['Curses1'];
        $u->curses2 = $record['Curses2'];
        $u->year1 = $record['year1'];
        $u->year2 = $record['year2'];
        $u->CPC = $record['CPC/GLG'];
        $u->intruments = $record['Assessments_Instruments'];
        $u->dirOind = $record['Direct/Indirect'];
        $u->intOext = $record['External/Internal'];
        $u->Success = $record['Success_Indicator'];
        $u->BYmayor = $record['BYmayor'];
        $u->Departament = $record['Departament'];
        return $u;    }
    
    public static function loadFromDATA($studentsLO) {         $records = getResultFromSQL('SELECT `studentsLO`,`SLO_INFORMATION` FROM `avaluo` WHERE `studentsLO`=?',[$studentsLO],'and BYmayor is NULL');         if (count($records) == 0) {
            return null;
        }
        $record = $records[0];
        $u = new User();
        $u->studentsLO= $record['studentsLO'];
        $u->SLO = $record['SLO_INFORMATION'];

        return $u;
    }
    
    public static function loadFromMARKETING($studentsLO) {
         $records = getResultFromSQL('SELECT `studentsLO`,`SLO_INFORMATION` FROM `avaluo` WHERE `CPL/GLG`= "Marketing" and `studentsLO`=?',[$studentsLO]);
       if (count($records) == 0) {
            return null;
        }

        $record = $records[0];
        $u = new User();

        $u->studentsLO= $record['studentsLO'];
        $u->SLO = $record['SLO_INFORMATION'];

        return $u;
    }public static function loadFromACCOUNTING($studentsLO) {
         $records = getResultFromSQL('SELECT `studentsLO`,`SLO_INFORMATION` FROM `avaluo` WHERE `CPL/GLG`= "Accounting" and `studentsLO`=?',[$studentsLO]);
       if (count($records) == 0) {
            return null;
        }

        $record = $records[0];
        $u = new User();

        $u->studentsLO= $record['studentsLO'];
        $u->SLO = $record['SLO_INFORMATION'];

        return $u;
    }
    public static function loadFromMANAGEMENTS($studentsLO) {
         $records = getResultFromSQL('SELECT `studentsLO`,`SLO_INFORMATION` FROM `avaluo` WHERE `CPL/GLG`= "Management" and `studentsLO`=?',[$studentsLO]);
       if (count($records) == 0) {
            return null;
        }

        $record = $records[0];
        $u = new User();

        $u->studentsLO= $record['studentsLO'];
        $u->SLO = $record['SLO_INFORMATION'];

        return $u;
    }
    public static function loadFromFINANCIE($studentsLO) {
         $records = getResultFromSQL('SELECT `studentsLO`,`SLO_INFORMATION` FROM `avaluo` WHERE `CPL/GLG`= "Financie" and `studentsLO`=?',[$studentsLO]);
       if (count($records) == 0) {
            return null;
        }

        $record = $records[0];
        $u = new User();

        $u->studentsLO= $record['studentsLO'];
        $u->SLO = $record['SLO_INFORMATION'];

        return $u;
    }
}
?>