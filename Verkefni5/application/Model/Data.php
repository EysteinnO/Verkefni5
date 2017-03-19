<?php

namespace Mini\Model;

use Mini\Core\Model;

class Data extends Model
{

    public function getAllData()
    {
        $sql = "SELECT DataID, readCO, readAlc, readTemp, readHumid FROM arduino";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll()
    }

}