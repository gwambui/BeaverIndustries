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


    public function __construct($input)
    {
        $this->arr = $input;
    }

    public function IsEmpty($item)
    {
        if(empty($item)){
            $this->Errlog= $item." cannot be void";

        }
        elseif (!preg_match("/^[a-zA-Z0-9]*$/",$item)){
            $this->Errlog= "Only letters and white space allowed in ". $item;

        }

    }
    public function TestInput()
    {
        //var_dump($this->arr);
        foreach ( $this->arr as $item=>$value){


            if($item == 'email'){
                if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                    $this->Errlog= "Invalid email format";

                }
            }
            else if($item =='birthdate') {
                if(empty($item)){
                    $this->Errlog= $item." cannot be void";

                }
            }
            else{$this->IsEmpty($value);}

        }
        /*var_dump($this->Errlog);*/
        if(sizeof($this->Errlog)>0){
            return $this->Errlog;
        }else{return $this->verified;}
    }
}