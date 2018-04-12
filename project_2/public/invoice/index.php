<?php
require_once("../../private/initialize.php");
require_login();
$page_title = "Blog Page";
$current = "blog";
include(SHARED_PATH . '/public_header.php');

?>

 <section id="boxes">
      <div class="container">

         <br>
         <h2>Blogs</h2>
         <button type="button" onclick = "location= 'create.php'"> Create a Blog</button>

         <table>
            <tr>
              <th>Receive Date</th>
              <th>Manufacturer</th>
               <th>Reference Number</th>
                <th>Amount</th>
                <th>Update</th>
                <th>Delete</th>

            </tr>


<?php

      $invoices = Invoice::find_all();
      //echo var_dump($taxs);
      foreach($invoices as $invoice)
      {
      echo "<tr><td>" .  $invoice->$invoiceid . "</td>";
      echo "<td><a href='http://" .  $invoice->manufacturer . "' target='blank'>" . $invoice->manufacturer . "</a></td>";
      echo "<td>" . $invoice->recDate . "</td>";
      echo "<td>" . $invoice->manufacturer . " " . $invoice->contactLName . "</td>";
      echo "<td>" . $invoice->qualityScore . "</td>";
      echo "<td><a href='../contract/index.php?blogid=" . $invoice->blogid . "'>Detail</a></td>";
      echo "<td><a href='update.php?blogid=" . $invoice->invoiceid . "'>Update</a></td>";
      echo "<td><a href='delete.php?blogid=" . $invoice->invoiceid . "'>Delete</a></td></tr>";
      }

?>
      </table>
      </div>
   </section>
<?php


include(SHARED_PATH . '/public_footer.php');
?>
