<?php
class User {    public $id = -1;    public $username;    public $password;    public $email;    public $roll;
    public $departament;
        public static function loadFromID($id) {            $records = getResultFromSQL('SELECT * FROM Login WHERE ID= ?', [$id]);                       if (count($records) == 0) {            return null;        }                $record = $records[0];        $u = new User();                $u->id = $id;        $u->username = $record['username'];        $u->password = $record['password'];        $u->email = $record['Email'];        $u->roll = $record['Roll'];
        $u->departament = $record['Departament'];
                return $u;    }        public static function loadFromUsername($username) {        $records = getResultFromSQL('SELECT * FROM Login WHERE username = ?', [$username]);                    if (count($records) == 0) {               return null;           }                      $record = $records[0];           $u = new User();                       $u->id = $record['ID'];            $u->username = $record['username'];            $u->password = $record['password'];            $u->email = $record['Email'];
            $u->roll = $record['Roll'];
            $u->departament= $record['Departament'];                      return $u;    }    
    public function save() {
        if ($this->id == -1) {
            $sql = "INSERT INTO `Login` (`ID`, `userName`, `password`, `Email`, `Roll`, `Departament`) VALUES (NULL, ?, ?, ? , ?, ?);";
            
            getResultFromSQL($sql, [$this->username, $this->Password, $this->Email, $this->Roll, $this->Departament]);
        }
    }        public function validatePassword($password) {        return ($password == $this->password);    }}?>