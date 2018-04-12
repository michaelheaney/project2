<?php
require_once("../../private/initialize.php");
require_login();
$page_title = "Add an Invoice";
$current = "blog";
include(SHARED_PATH . '/public_header.php');

// if form has been submitted get variables and calculate numbers then
// set them to the array.

if(is_post_request()) {
    // get post variables
    $refNum = $_POST['refNum'];
    $manufacturer = $_POST['manufacturer'];
    $dateRec = $_POST['dateRec'];
    $invoiceAmt = $_POST['invoiceAmt'];

    //$qualityScore = Blog::qualScore($mozDA, $sponsors, $fqshop, $gfairy, $mstar);

    //create an array called args to be used with __construct
    $args = [];
    $args['refNum'] = $refNum;
    $args['manufacturer'] = $manufacturer;
    $args['dateRec'] = $dateRec;
    $args['invoiceAmt'] = $invoiceAmt;


    //instantiate a new object and use the save function to create.
    $invoice = new Invoice ($args);
    $invoice->save($invoiceid);

    header('Location: index.php');
}

?>

 <section id="boxes">
      <div class="container">
          <form action="create.php" method="post">
            <fieldset>
              <legend>New Blog Information</legend>
              <p>Blog Name: <input type="text" name="blogName"></p>
              <p>URL: <input type="text" name="url"></p>
              <p>Email: <input type="text" name="email"></p>
              <p>First Name: <input type="text" name="contactFName"></p>
              <p>Last Name: <input type="text" name="contactLName"></p>
              <br><br><strong>Quality Score Calculation</strong>
              <p>MOZ Domain Authority: <input type="number" name="mozDA" min="1" max="100"> (max = 100)</p>
              <p>Number of Sponsors: <input type="number" name="sponsors" min="1" max="25"> (max = 25)</p>
              <p>Fat Quarter Shop: <input type="checkbox" name="fqshop" value=1></p>
              <p>Green Fairy Shop: <input type="checkbox" name="gfairy" value=1></p>
              <p>Missouri Star Shop: <input type="checkbox" name="mstar" value=1></p>
              <button type="submit" value="Submit">Submit</button>
              <button type="reset" value="Reset">Reset</button>
            </fieldset>
          </form>
      </div>
   </section>
<?php
include(SHARED_PATH . '/public_footer.php');
?>
