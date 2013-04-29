<?php

class DBcontroller {

    public $user = "root";
    public $pass = "1234";
    public $db = "res_club";
    public $con;

    public function connect() {
        try {
            $this->con = mysql_connect("localhost", $this->user, $this->pass);
            if (!$this->con) {
                die('Could not connect: ' . mysql_error());
            }
            mysql_select_db($this->db, $this->con);
            mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'", $this->con);
            // echo 'get connection';
            return $this->con;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function query($sql) {
        $rs = mysql_query($sql) or die(mysql_error());
        $list = array();
        while ($row = mysql_fetch_array($rs)) {
            $list[] = $row;
        }
        return $list;
    }

    public function exec($sql) {
        $rs = mysql_query($sql);
        return $rs;
    }

    public function close() {
        mysql_close($this->con);
    }

}

?> 