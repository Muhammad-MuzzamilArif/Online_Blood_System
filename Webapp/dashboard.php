<?php

require_once("config.php");
if (!isset($_SESSION["u_id"]) || $_SESSION["u_id"] == "") {
    // not logged in send to login page
    redirect("index.php");
}

// set page title
$title = "Dashboard";

// if the rights are not set then add them in the current session
if (!isset($_SESSION["access"])) {

    try {

        $sql = "SELECT mod_modulegroupcode, mod_modulegroupname FROM module "
                . " WHERE 1 GROUP BY `mod_modulegroupcode` "
                . " ORDER BY `mod_modulegrouporder` ASC, `mod_moduleorder` ASC  ";


        $stmt = $DB->prepare($sql);
        $stmt->execute();
        $commonModules = $stmt->fetchAll();

        $sql = "SELECT mod_modulegroupcode, mod_modulegroupname, mod_modulepagename,  mod_modulecode, mod_modulename FROM module "
                . " WHERE 1 "
                . " ORDER BY `mod_modulegrouporder` ASC, `mod_moduleorder` ASC  ";

        $stmt = $DB->prepare($sql);
        $stmt->execute();
        $allModules = $stmt->fetchAll();

        $sql = "SELECT modulecode, rr_create,  edit, rr_delete, view FROM role_rights "
                . " WHERE  rolecode = :rc "
                . " ORDER BY `modulecode` ASC  ";

        $stmt = $DB->prepare($sql);
        $stmt->bindValue(":rc", $_SESSION["rolecode"]);
        
        
        $stmt->execute();
        $userRights = $stmt->fetchAll();

        $_SESSION["access"] = set_rights($allModules, $userRights, $commonModules);

    } catch (Exception $ex) {

        echo $ex->getMessage();
    }
}




include 'header.php';
?>
<div class="row">
    <div class="col-lg-9">
        <h3>Menu</h3>
        <div class="well well-sm">
            <ul>
                <?php foreach ($_SESSION["access"] as $key => $access) { ?>
                    <li>
                        <?php echo $access["top_menu_name"]; ?>
                        <?php
                        echo '<ul>';
                        foreach ($access as $k => $val) {
                            if ($k != "top_menu_name") {
                                echo '<li><a href="' . ($val["page_name"]) . '">' . $val["menu_name"] . '</a></li>';
                                ?>
                                <?php
                            }
                        }
                        echo '</ul>';
                        ?>
                    </li>
                    <?php
                }
                ?>

            </ul>
        </div>

        
        <div style="height: 20px;">&nbsp;</div>
        <a href="logout.php"><button class="btn btn-md btn-success" type="button"><i class="fa fa-sign-out"></i>Logout</button></a>

    </div>
      <br>
<?php include 'footer.php'; ?>