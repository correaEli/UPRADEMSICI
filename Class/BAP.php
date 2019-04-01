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
        return $u;    }
    
    public static function loadFromDATA($studentsLO) {         $records = getResultFromSQL('SELECT `ID`,`studentsLO`,`SLO_INFORMATION` FROM `avaluo`WHERE `studentsLO`=?', [$studentsLO]);           if (count($records) == 0) {
            return null;
        }
        $record = $records[0];
        $u = new User();
        $u->id = $record['ID'];
        $u->studentsLO= $record['studentsLO'];
        $u->SLO = $record['SLO_INFORMATION'];
        return $u;
    }
}
?>