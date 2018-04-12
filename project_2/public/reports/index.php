<?php
require_once("../../private/initialize.php");
require_login();
$page_title = "Reports Page";
$current = "report";
include(SHARED_PATH . '/public_header.php');

?>

<section id="boxes">
	<div class = "container">

		<br>
		<h2>Report Page</h2>

<?php

$sql = "SELECT paymentAmt FROM contract WHERE month(paymentDate) = 03;";

		$amount = Contract::find_by_sql($sql);

		foreach ($amount as $amt){
			$total = $amt->paymentAmt;
			$output += $total;
		}

echo "<p>1. How much $$$ did we spend on this month on advertising?	" .	 $output;

$sql ="SELECT blogName
		FROM blog
		WHERE blogid NOT IN (SELECT blogid FROM contract)
			ORDER BY qualityScore
			DESC LIMIT 1";

		$quality = Blog::find_by_sql($sql);

		foreach($quality as $qual) 

	 echo "<p>2. Who is the biggest blogger without a contract?	" . $qual->blogName;


$sql="SELECT blogName
		FROM blog
		INNER JOIN contract on contract.blogid=blog.blogid
		WHERE paymentDATE < NOW()
		ORDER BY paymentDate
		ASC LIMIT 0,30";


		$person = Blog::find_by_sql($sql);

		foreach($person as $pers) {
			$blogdate= $amt->paymentAmt;
			$blog+= $blogdate;
		}

		echo "<p>2. Who's contract has expired?	" . $pers ->blogName . "</p>";


?>
</div>
<section>
<?php

include(SHARED_PATH . '/public_footer.php');

?>