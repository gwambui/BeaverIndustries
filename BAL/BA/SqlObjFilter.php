<?php
/**
 * Created by PhpStorm.
 * User: wambu
 * Date: 2018-04-23
 * Time: 2:12 PM
 */


class SqlObjFilter
{
    public $arr;
    public $filtered=array();
    public function __construct($input)
    {
        $this->arr  =$input;
    }

    /**
     * @param $filter
     * @return mixed
     */
    function FilterInput($filter)
    {
        if(!empty($filter["Price"])) {
            if ($filter["Price"] == "Asc") {
                usort($this->arr, array("SqlObjFilter", "Ascending"));
            } else {
                usort($this->arr, array("SqlObjFilter", "Descending"));

            }
        }

        if(!empty($filter["Details"]))
        {
            $this->ShowSelectedItems($filter);
        }else{$this->filtered = $this->arr;}


        return $this->filtered;
    }
    function Ascending($d, $f)
    {

        if($d['Price'] == $f['Price'])
        {
            return 0;
        }
        return($d['Price'] < $f['Price'] ? -1:1);
    }
    function Descending($d, $f)
    {

        if($d['Price'] == $f['Price'])
        {
            return 0;
        }
        return($d['Price'] > $f['Price'] ? -1:1);
    }

    /**
     * @param $filter
     */
    function ShowSelectedItems($filter)
    {
        foreach ($filter["Details"] as $item=>$value)
        {

            foreach($this->arr as $object=>$specs)
            {

                if(strcmp($value, $specs['Details'])  == 0 )
                {

                    $this->filtered[] = $specs;

                }

            }

        }

    }

    /******calculate order subtotals and total******/
    function OrderSubTotals(){

        for ($i =0; $i<count($this->arr); $i++)
        {
            $this->arr[$i]['SubTotal']= $this->arr[$i]['Price'] * $this->arr[$i]['Pieces'];
        }
        /*foreach ($this->arr as $item){

            $item["SubTotal"] = $item['Pieces'] * $item['Price'];
            //$myarr["Pieces"] = $_POST["pieces"];
            //echo $item['Price'].$item['Pieces']. $item['SubTotal'];
var_dump($this->arr);
        }*/

        return $this->arr;
    }
    function OrderTotal(){
        $total=0;
        foreach ($this->arr as $item){
            $total += $item['Pieces']*$item['Price'];
        }

        return $total;
    }
}




