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
        return $this->db->GetArray("call UR_UserLogin(:LoginID);",$bindParms);
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
        $pass = password_hash($user->Password, PASSWORD_DEFAULT);
        $date = date_create($user->BirthDate);
        $bindParms = array(
            "LoginID"=>$user->LoginID,
            "UserTypeID"=>$user->TypeID,
            "FirstName"=>$user->FirstName,
            "LastName"=>$user->LastName,
            "BirthDate"=>date_format($date, "Y-m-d"),
            "Passcode"=>$pass,
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
            "Country"=>$user->Country,
            "PoBox"=>$user->PoBox,
            "PostalCode"=>$user->PostalCode);
        $this->db->InsertData("UR_Address", $bindParms);
    }
}