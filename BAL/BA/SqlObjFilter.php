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
//                var_dump($specs);
                if(strcmp($value, $specs["Details"])  == 0 )
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
//var_dump($this->arr);
        return $this->arr;
    }
    /*********************Calculate total of each order*/
    function OrderTotal(){
        $total=0;
        foreach ($this->arr as $item){
            $total += $item['Pieces']*$item['Price'];
        }

        return $total;
    }
    /*************Add Item to cart***********/
    function AddToCart(){

        If (!isset($_SESSION["cart"])) {

            $_SESSION["cart"][] = $this->arr;

        }elseif($this->ProductInCart()){
            //echo "Item has been added to Shopping Cart";
        }
        else{
            $_SESSION["cart"][] = $this->arr;
        }


    }
    function ProductInCart(){
        $test = true;
        for ($i = 0; $i < count($_SESSION["cart"]); $i++)
        {
            //($_SESSION["cart"] as $item => $value){

            if($this->arr["ProductID"] === $_SESSION["cart"][$i]["ProductID"])
            {
                $_SESSION["cart"][$i]["Pieces"] += $this->arr["Pieces"];
                $test = true;
                break;
            }
            else
            {
               $test= false;
            }
        }
        return $test;
    }
    function RemoveFromCart(){

        for ($i = 0; $i < count($_SESSION["cart"]); $i++) {
            //($_SESSION["cart"] as $item => $value){

            if ($this->arr["ProductID"] === $_SESSION["cart"][$i]["ProductID"]) {
                $_SESSION["cart"][$i]["Pieces"] --;
               if($_SESSION["cart"][$i]["Pieces"] == 0){
                   unset($_SESSION["cart"][$i]);
                   $_SESSION["cart"] = array_values($_SESSION["cart"]);
               }
                break;
            }
        }
    }





}




