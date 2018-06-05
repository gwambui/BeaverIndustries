<?php
/**
 * User Class*/


 class UserBA extends BaseBA
 {
     public function __construct()
     {
         $this->uda = new UserDA();
     }


     /*User DA variable*/
     private $uda;
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

 }