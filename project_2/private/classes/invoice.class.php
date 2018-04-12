<?php

class Blog extends DatabaseObject {

static protected $table_name = 'invoice';
static protected $db_columns = ['invoiceid', 'recDate', 'manufacturer', 'refNum', 'invoiceAmt'];

public $invoiceid;
public $recDate;
public $manufacturer;
public $refNum;
public $invoiceAmt;

// construct method
public function __construct($args=[]) {
  $this->invoiceid = $args['invoiceid'] ?? NULL;
  $this->blogName = $args['blogName'] ?? '';
  $this->recDate = $args['recDate'] ?? '';
  $this->$manufacturer = $args['manufacturer'] ?? '';
  $this->refNum = $args['refNum'] ?? '';
  $this->invoiceAmt = $args['invoiceAmt'] ?? '';
}

// remember to return out a value since this is a function.

//static public function qualScore($mozDA, $sponsors, $fqshop, $gfairy, $mstar){
	//if($fqshop == 1){$fq = 10;}else{$fq = 0;}
	//if($gfairy == 1){$gf = 10;}else{$gf = 0;}
	//if($mstar == 1){$ms = 10;}else{$ms = 0;}

	//$qualScore = $fq + $gf + $ms + $mozDA + $sponsors;

	//return $qualScore;
//}

}
?>
