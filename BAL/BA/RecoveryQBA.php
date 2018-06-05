<?php
/**
 * Created by PhpStorm.
 * User: wambu
 * Date: 2018-06-04
 * Time: 6:25 PM
 */

class RecoveryQBA extends BaseBA
{
    private $rqda;
    public function __construct()
    {
        $this->rqda = new RecoveryQDA();
    }
    public function GetRecQuestions()
    {
        $rows = $this->rqda->GetRecQuestions();
        //var_dump($rows);
        return $rows;
    }
}