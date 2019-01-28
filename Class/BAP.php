<?php
class BAP {
    public $id = -1;
    public $identificator;
    public $studentsLO;
    public $curses;
    public $curses2;
    public $Year;
    public $Year2;
    public $CPC;
    public $instruments;
    public $Dir
    public $internal
    Public $Success
    
    
    public static function loadFromInfomation($id) {
            $records = getResultFromSQL('SELECT * FROM Login WHERE id = ?', [$id]);        
        
       if (count($records) == 0) {
            return null;
        }
        
        $record = $records[0];
        $u = new User();
        
        $u->id = $id;
        $u->identificator = $record['identificator'];
        $u->studentsLO= $record['StudentsLO'];
        $u->curses = $record['Courses'];
        $u->curses2 = $record['Courses2'];
        $u->year = $record['Year'];
        $u->year2 = $record['year2'];
        $u->CPC = $record['CPC/GLG'];
        $u->intruments = $record['Assessments_Instruments'];
        $u->directs = $record['Direct/Indirect'];
        $u->internal = $record['Internal/External'];
        $u->Success = $record['Success Indicator'];
        
        
        return $u;
    }
    
    public static function loadFromDATA() {
            $records = getResultFromSQL('SELECT `ID`,`indentificator`,`StudentsLO` FROM `BAPAP/Schedule`');        
        
       if (count($records) == 0) {
            return null;
        }
        
        $record = $records[0];
        $u = new User();
        
        $u->id = $record['ID'];
        $u->identificator = $record['identificator'];
        $u->studentsLO= $record['StudentsLO'];
        
        return $u;
    }

?>