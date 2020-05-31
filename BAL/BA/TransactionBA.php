<?php
/**
 * Created by PhpStorm.
 * User: wambu
 * Date: 2018-06-21
 * Time: 12:06 PM
 */
class TransactionBA extends BaseBA{
    private $transda;
    public function __construct()
    {
        $this->transda = new TransactionDA();

    }

    /**
     * @return $rows
     */
    public function getTransactions()
    {
        $rows = $this->transda->GetTransactions();
        return $rows;
        // return $this->transda;
    }

}