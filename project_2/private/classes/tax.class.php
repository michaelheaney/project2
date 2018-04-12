<?php

class Tax extends DatabaseObject {

static protected $table_name = 'tax';
static protected $db_columns = ['id', 'userName', 'totalWages', 'taxableIncome', 'withholdings', 'taxes', 'owe', 'refund'];

public $id;
public $userName;
public $totalWages;
public $taxableIncome;
public $withholdings;
public $taxes;
public $owe;
public $refund;

// construct method
public function __construct($args=[]) {
  $this->id = $args['id'] ?? NULL;
  $this->userName = $args['userName'] ?? '';
  $this->totalWages = $args['totalWages'] ?? '';
  $this->taxableIncome = $args['taxableIncome'] ?? '';
  $this->withholdings = $args['withholdings'] ?? '';
  $this->taxes = $args['taxes'] ?? '';
  $this->owe = $args['owe'] ?? '';
  $this->refund = $args['refund'] ?? '';
}


// add your function here that calculates your taxes.
// remember to return out a value since this is a function.
static public function taxation($taxableIncome)
  {
    if($taxableIncome < 9325){

    } elseif($taxableIncome < 32000) {


    } else {


    }
    Return $taxes;

  }


}
?>
