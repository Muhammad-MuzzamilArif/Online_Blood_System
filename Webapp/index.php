<?php
/*
 * @author Muzzamil Arif
 * @website http://www.thesoftwareguy.in
 * @facebbok https://www.facebook.com/muzzamilarif12@yahoo.com
 * @twitter https://twitter.com/
 * @googleplus https://plus.google.com/+thesoftwareguyIn
 */
require_once("config.php");
//include("../db_connection.php");

if (isset($_SESSION["u_id"]) && $_SESSION["u_id"] != "") {
    // if logged in send to dashboard page
    redirect("dashboard.php");
}

$title = "Login";
$mode = $_REQUEST["mode"];
if ($mode == "login") {
    $username = trim($_POST['email']);
    $pass = trim($_POST['password']);

    if ($username == "" || $pass == "") {

        $_SESSION["errorType"] = "danger";
        $_SESSION["errorMsg"] = "Enter manadatory fields";
    } else {
        $sql = "SELECT * FROM register WHERE email= :email and password= :password";

        try {
            $stmt = $DB->prepare($sql);

            // bind the values
            $stmt->bindValue(":email", $username);
            $stmt->bindValue(":password", $pass);

            // execute Query
            $stmt->execute();
            $results = $stmt->fetchAll();

            if (count($results) > 0) {
                $_SESSION["errorType"] = "success";
                $_SESSION["errorMsg"] = "You have successfully logged in.";

                $_SESSION["u_id"] = $results[0]["u_id"];
                $_SESSION["rolecode"] = $results[0]["role"];
                $_SESSION["email"] = $results[0]["email"];

                 header('location:dashboard.php');
               // redirect("dashboard.php");
                //exit;
            } else {
                $_SESSION["errorType"] = "info";
                $_SESSION["errorMsg"] = "username or password does not exist.";
            }
        } catch (Exception $ex) {

            $_SESSION["errorType"] = "danger";
            $_SESSION["errorMsg"] = $ex->getMessage();
        }
    }
    redirect("index.php");
}
include 'header.php';
?>
<div class="row">
    <div class="col-lg-9">
        <form class="form-horizontal" name="contact_form" id="contact_form" method="post" action="">
            <input type="hidden" name="mode" value="login" >

            <fieldset>
                <div class="form-group">
                    <label class="col-lg-2 control-label" for="email"><span class="required">*</span>Email:</label>
                    <div class="col-lg-6">
                        <input type="text" value="" placeholder="Email" id="email" class="form-control" name="email" required="" >
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-2 control-label" for="user_password"><span class="required">*</span>Password:</label>
                    <div class="col-lg-6">
                        <input type="password" value="" placeholder="Password" id="user_password" class="form-control" name="password" required="" >
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-lg-6 col-lg-offset-2">
                        <button class="btn btn-primary" type="submit">Submit</button> 
                    </div>
                </div>
                
                <div style="height: 10px;">&nbsp;</div>
                <div class="form-group">
                    <div class="col-lg-6 col-lg-offset-2">
                       <div class="help-block">
                    <strong>Role == username/password</strong><br>
            <!--      Superadmin == shahrukh/123456<br>
                    Admin == ronaldo/ronaldo<br> -->
                    Superadmin == Muhammad Muzzamil/moni <br>
                    Admin == Ramsha Tahir/misha
                </div>
                    </div>
                </div>
                
                
                
				
            </fieldset>
        </form>
    </div>

    <div class="col-lg-3">
        <?php //include 'sidebar.php'; ?>
    </div>
</div>
<?php include 'footer.php'; ?>