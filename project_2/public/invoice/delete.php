<?php
// DO NOT CHANGE THIS PAGE!!!

require_once("../../private/initialize.php");
require_login();
$page_title = "Delete Invoice";
include(SHARED_PATH . '/public_header.php');


// if form has been submitted get variables and calculate numbers then
// set them to the array.
$invoiceid = $_GET['invoiceid'];

// find the user info based on passed id
$invoice = Invoice::find_by_id($invoiceid);

//KEEP OR DELETE??********************************************
// set new variables to
//$blogName = $blog->blogName;

if(is_post_request()) {
    //get id from form
    $invoiceid = $_POST['invoiceid'];

    //send array back to construct
    $args = [];
    $args['invoiceid'] = $invoiceid;

    //instantiate and call delete function.
    $invoiceid = new Invoice($args);
    $invoiceid->delete($invoiceid);

    //after saving redirect back to home page.
    header('Location: index.php');

}

?>

 <section id="boxes">
      <div class="container">
          <form action="delete.php" method="post">
            <fieldset>
              <legend>Are you sure you want to delete the invoice <?php echo $invoiceid; ?>?</legend>
              <input name="invoiceid" type="hidden" value="<?php echo $invoiceid;?>">
              <button type="submit" value="Submit">Yes, Please Delete</button>
              <button type="button" onclick="location='index.php'">No, Don't Delete</button>
            </fieldset>
          </form>

         <br>
      </div>
   </section>


<?php include(SHARED_PATH . '/public_footer.php'); ?>
