<?php
/**
 * Created by PhpStorm.
 * User: wambu
 * Date: 2018-06-21
 * Time: 12:14 PM
 */
class TransactionDA extends BaseDA
{
    private $db;
    public function __construct()
    {
        $this->db = getDBInstance();
    }
    public function GetTransactions()
    {
        $ID = $_SESSION['user']['UserID'];
        $bindParms = array("ID" => $ID);
        $rows = $this->db->GetArrayList("call Transactions(:ID);", $bindParms);
        return $rows;
    }

}