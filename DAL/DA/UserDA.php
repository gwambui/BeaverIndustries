<?php

class UserDA extends BaseDA
{
    private $db;

    function __construct()
    {
        $this->db = getDBInstance();
    }

    public function GetUser($username)
    {
        $bindParms = array('LoginID'=>$username);
        return $this->db->GetArray("select * from UR_User where LoginID = :LoginID;",$bindParms);
    }

    public function GetUserByID($id)
    {
        $bindParms = array('ID'=>$id);

        return $this->db->GetArray("select * from UR_User where UserID = :ID;",$bindParms);
    }

   public function GetUserType($userTypeCode)
    {
        $bindParms = array('ID' => $userTypeCode);
        return $this->db->GetScaler("call UR_UserType(:ID)", $bindParms);
    }

    public function AddUser(ClientAddDTO $user)
    {
        // Encrypt the password before saving it.
        //var_dump($user->Password);
        $pass = password_hash($user->Password, PASSWORD_ARGON2I);
        $date = date_create($user->BirthDate);
        //User table rows as in database
        $bindParms = array(
            "LoginID"=>$user->LoginID,
            "UserTypeID"=>$user->TypeID,
            "FirstName"=>$user->FirstName,
            "LastName"=>$user->LastName,
            "BirthDate"=>date_format($date, "Y-m-d"),
            "PassCode"=>$pass,
            "PhoneNumber"=>$user->PhoneNumber,
            "EmailAddress"=>$user->Email,
            "RecoveryQuest1"=>$user->Recovery1,
            "Answer1"=>$user->Ans1,
            "RecoveryQuest2"=>$user->Recovery2,
            "Answer2"=>$user->Ans2
            );

        $this->db->InsertData("UR_User" ,$bindParms);


        // Return the last updated ID.
        return $this->db->GetLastInsertId();
    }
    public function AddAddress(ClientAddDTO $user)
    {
        $bindParms = array("UserID"=>$user->userID,
            "Address"=>$user->Address,
            "City"=>$user->City,
            "Province"=>$user->Province,
            "Country"=>$user->Country,
            "PoBox"=>$user->PoBox,
            "PostalCode"=>$user->PostalCode);
        $this->db->InsertData("UR_Address", $bindParms);
    }
    public function GetAddress($ID)
    {
        $bindParms = array('ID' => $ID);
        return $this->db->GetArray("select * from UR_Address where UserID =:ID;", $bindParms);
    }
    public function UpdatePhone($newNum)
    {
        $ID = $_SESSION['user']['UserID'];
        //var_dump($ID);
        $bindParmsWhere = array('UserID'=>$ID);
        $bindParms = array("PhoneNumber" => $newNum);
        $this->db->UpdateData("UR_User",$bindParms,"UserID = ?",$bindParmsWhere);
        return $this->GetUserByID($ID);

    }
    public function UpdateAddress(array $address)
    {
        $ID = $_SESSION['user']['UserID'];
        //value for where clause
        $bindParmsWhere = array('UserID'=>$ID);
        //Table input values
        $bindParms = array("Address" => $address['Address'],
            "PoBox"=>$address['PoBox'],
            "City"=>$address['City'],
            "Province"=>$address['Province'],
            "PostalCode"=>$address['PostalCode'],
            "Country"=>$address['Country']
            );
        $this->db->UpdateData("UR_Address",$bindParms,"UserID = ?",$bindParmsWhere);

    }
}