<?php

class Records_Model extends CI_Model{

    public function getRecordsFromDB(){
        $sSQL = "SELECT * FROM records";
        $aRecords = $this->db->query($sSQL)->result();
        return $aRecords;
    }

}