<?php
// DO NOT CHANGE THIS PAGE!!!

require_once("../../private/initialize.php");
require_login();
$page_title = "Update Blogs";
include(SHARED_PATH . '/public_header.php');

//get the persons id - id
$blogid = $_GET['blogid'] ?? false;

// find the user info based on passed id
$blog = Blog::find_by_id($blogid);

// set new variables to
$blogName = $blog->blogName;
$url = $blog->url;
$email = $blog->email;
$contactFname = $blog->contactFname;
$contactLname = $blog->contactLname;
$qualityScore = $blog->qualityScore;
$mozDA = $blog->mozDA;
$fqshop = $blog->fqshop;
$gfairy = $blog->gfairy;
$mstar = $blog->mstar;




if($fqshop == 0) {
    // get post variables
    $fq = "unchecked";
  } else {
    $fq = "checked"; 
  }

if($gfairy == 0) {
    // get post variables
    $gf = "unchecked";
  } else {
    $gf = "checked"; 
  }

if($mstar == 0) {
    // get post variables
    $ms = "unchecked";
  } else {
    $ms = "checked"; 
  }

if(is_post_request()) {
    // get post variables
    $blogid  = $_POST['blogid'];
    $blogName = $_POST['blogName'];
    $url = $_POST['url'];
    $email = $_POST['email'];
    $contactFname = $_POST['contactFname'];
    $contactLname = $_POST['contactLname'];
    $qualityScore = $_POST['qualityScore'];
    $mozDA = $_POST['mozDA'];
    $fqshop = $_POST['fqshop'];
    $gfairy = $_POST['gfairy'];
    $mstar = $_POST['mstar'];






    //create an array called args to be used with __construct
    $args = [];
    $args['id'] = $id;
    $args['blogName'] = $blogName;
    $args['url'] = $url;
    $args['email'] = $email;
    $args['contactFname'] = $contactFname;
    $args['contactLname'] = $contactLname;
    $args['qualityScore'] = $qualityScore;
    $args['mozDA'] = $mozDA;
    $args['fqshop'] = $fqshop;
    $args['gfairy'] = $gfairy;
    $args['mstar'] = $mstar;

    //instantiate a new object and use the merge attributes and save to update.
    $blog = new Blog;
    $blog->merge_attributes($args);
    $blog->update($blogid);

    //after saving redirect back to home page.
    header('Location: index.php');

}

?>

 <section id="boxes">
      <div class="container">
          <form action="update.php" method="post">
            <fieldset>
              <legend>Updated Blog Information</legend>
              <input name="blogid" type="hidden" value="<?php echo $blogid;?>">
              <p>Blog Name: <input type="text" name="blogName" size="40" value="<?php echo $blogName; ?>"></p>
              <p>url: <input type="text" name="url" size="40" value="<?php echo $url; ?>"></p>
              <p>email: <input type="text" name="email" size="40" value="<?php echo $email; ?>"></p>
              <p>Contact First Name: <input type="text" name="contactFname  " size="40" value="<?php echo $contactFname; ?>"></p>
              <p>Contact Last Name: <input type="text" name="contactLname " value="<?php echo $contactLname ; ?>"></p>
              <p>Quality Score: <input type="number" name="qualityScore" value="<?php echo $qualityScore; ?>"></p>

              <p>MOZ Domain Authority: <input type="text" name="mozDA" value="<?php echo $mozDA; ?>"></p>
              <p># of Sponsors: <input type="text" name="sponsors" value="<?php echo $sponsors; ?>"></p>

              <input type="hidden" name="fqshop" value=0>
              <p>Fat Quarter Shop: <input type="checkbox" name="fqshop" value="<?php echo $fqshop; ?>"></p>

              <input type="hidden" name="gfairy" value=0>
              <p>Green Fairy: <input type="checkbox" name="gfairy" value="<?php echo $gfairy; ?>"></p>

              <input type="hidden" name="mstar" value=0>
              <p>Missouri Star: <input type="checkbox" name="mstar" value="<?php echo $mstar; ?>"></p>


              <p>Contact Last Name: <input type="text" name="withholdings" value="<?php echo $withholdings; ?>"></p>


              <button type="submit" value="Submit">Update</button>
              <button type="button" onclick="location='index.php'">Cancel Update</button>
            </fieldset>
          </form>

      </div>
   </section>
<?php


include(SHARED_PATH . '/public_footer.php');
?>