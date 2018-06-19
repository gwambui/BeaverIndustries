<?php
/**
 * Created by PhpStorm.
 * User: wambu
 * Date: 2018-06-04
 * Time: 6:29 PM
 */

class RecoveryQDA
{
    private $db;

    public function __construct()
    {
        $this->db = getDBInstance();
    }
    public function GetRecQuestions()
    {
        return $this->db->GetArrayList("SELECT * FROM `beaveri1_beaver`.`UR_RecoveryQuestion`; ");
    }//call UR_RecoveryQuestions
}