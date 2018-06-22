<?php
/**
 * User Class*/


 class UserBA extends BaseBA
 {
     /*User DA variable*/
     private $uda;
     public function __construct()
     {
         $this->uda = new UserDA();
     }
     /**
      * @param $userID
      * @return array
      */

     public function GetUser($UserID)
     {
         try{
             return $this->uda->GetUser($UserID);
         }
         catch (PDOException $pex)
         {
             throw new PDOException($pex);
         }
     }
     public function GetUserByID($ID)
     {
         try
         {
             return $this->uda->GetUserByID($ID);
         }
         catch (PDOException $pex)
         {
             throw new PDOException($pex);
         }
     }
     public function GetAddress($ID)
     {
         try
         {
             return $this->uda->GetAddress($ID);
         }
         catch (PDOException $pex)
         {
             throw new PDOException($pex);
         }
     }
     public function UpdatePhone($newNum)
     {
        $user = $this->uda->UpdatePhone($newNum);
        unset($_SESSION['user']);
        $_SESSION['user']= $user;
     }
     public function UpdateAddress(array $address)
     {
         $this->uda->UpdateAddress($address);
     }


 }