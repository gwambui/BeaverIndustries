<?php
/**
 * Created by PhpStorm.
 * User: wambu
 * Date: 2018-05-20
 * Time: 4:43 PM
 *
 * class ClientAddDTO
 */

class ClientAddDTO
{
    var $ClientID;
    var $UserID;
    var $TypeID;
    var $LoginID ;
    var $FirstName ;
    var $LastName ;
    var $BirthDate;
    var $Email ;
    var $Password;
    var $PhoneNumber ;
    var $Address ;
    var $City ;
    var $Country ;
    var $PoBox;
    var $PostalCode;
    var $Recovery1;
    var $Ans1;
    var $Recovery2;
    var $Ans2;



/*
 * ClientAddDTO constructor
 * @param ClientID
 * @param UserID
 * @param LoginID
 * @param FirstName
 * @param LastName
 * @param Email
 * @param password
 * @param PhoneNumber
 * @param Address
 * @param City
 * @param Country
 * @param TypeID
 */
    public function __construct($ID, $userID, $TypeID, $LoginID, $firstName, $lastName, $birthDate,
                                $email, $password, $phoneNumber, $address, $city,
                                $country, $PoBox, $PostalCode, $Recovery1, $Ans1, $Recovery2, $Ans2)
    {
        $this->clientID = $ID;
        $this->userID = $userID;
        $this->TypeID = $TypeID;
        $this->LoginID = $LoginID;
        $this->FirstName = $firstName;
        $this->LastName = $lastName;
        $this->BirthDate = $birthDate;

        $this->Email = $email;
        $this->Password = $password;
        $this->PhoneNumber = $phoneNumber;
        $this->Address = $address;
        $this->City = $city;
        $this->Country = $country;
        $this->PoBox = $PoBox;
        $this->PostalCode = $PostalCode;
        $this->Recovery1 = $Recovery1;
        $this->Ans1 = $Ans1;
        $this->Recovery2 = $Recovery2;
        $this->Ans2 = $Ans2;
    }
}