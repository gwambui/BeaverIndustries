<?php
/**
 * Created by PhpStorm.
 * User: wambu
 * Date: 2018-05-20
 * Time: 4:41 PM
 */
class ClientDA extends BaseDA
{
    private $db;

    public function __construct()
    {
        $this->db = getDBInstance();
    }

    public function AddClient(ClientAddDTO $client)
    {
       $data = array("UserID"=>$client->userID);
       $this->db->InsertData( "UR_Client", $data);

       return $this->db->GetLastInsertId();
    }

    public function GetClient($ID)
    {
        $parms = array("c_ID"=>$ID);
        return $this->db->GetArrayList("call UR_FindClient(:c_ID)",$parms);

    }
    public function GetClientByUserID($ID)
    {
        $parms = array("u_ID"=>$ID);
        return $this->db->GetArrayList("call UR_FindUser(:u_ID)",$parms);

    }
    public function GetClients()
    {
        $rows = $this->db->GetArrayList("Call UR_ReturnClients");
        return $rows;
    }

}