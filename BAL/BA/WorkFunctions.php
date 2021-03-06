<?php
/**
 * Created by PhpStorm.
 * User: wambu
 * Date: 2018-06-05
 * Time: 1:01 PM
 */

class WorkFunctions
{
    public $arr;
    public $verified = false;
    public $Errlog = array();


    public function __construct($input,$emails)
    {
        $this->arr = $input;
        $this->allemails = $emails;
    }

    public function IsEmpty($item, $value)
    {
        if(empty($value)){
            array_push($this->Errlog,$item." cannot be void");

        }
        elseif (!preg_match("/^[0-9a-zA-Z ]*$/",$value)){
            array_push($this->Errlog,"Only letters and white space allowed in ". $item );

        }

    }
    public function TestInput()
    {
//        var_dump($this->arr);
        foreach ( $this->arr as $item=>$value){


            if($item == 'email'){
                if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                    array_push($this->Errlog, "Invalid email format") ;
                }
                foreach ($this->allemails as $em => $ad) {

                    //var_dump($em);
//                    var_dump($ad['EmailAddress']);
//                    var_dump($value);
                    if ($value == $ad['EmailAddress']) {
                        array_push($this->Errlog, $item .' '. $value . " already in use");
                    }
                }
            }
            else if($item =='birthdate') {
                if(empty($item)){
                    array_push($this->Errlog,$item." cannot be void" ) ;
                }
            }
            else{
                $this->IsEmpty($item, $value);
            }

        }
//        var_dump($this->Errlog);
        if(sizeof($this->Errlog)>0){
            return $this->Errlog;
        }else{return $this->verified;}
    }
}