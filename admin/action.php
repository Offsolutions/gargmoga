<?php

require_once("../conn.php");

class DataOperation extends Database
{

    // get data ==================================================================================
    // ===============================================================================

    function getData($table)
    {
        $record = array();
        $sql = "select * from $table";
        $result = $this->conn->prepare($sql);
        $result->execute();
        if ($result->rowCount() > 0) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $record[] =  $row;
            }
            return $record;
        } else {
            return $record = false;
        }
        $this->conn = null;
    }
    function getDataGallery($table)
    {
        $record = array();
        $sql = "select gallery.title as gt,gallery.img,gallery.id,gallery_category.title from $table left join gallery_category on gallery_category.id = gallery.cat_id";
        $result = $this->conn->prepare($sql);
        $result->execute();
        if ($result->rowCount() > 0) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $record[] =  $row;
            }
            return $record;
        } else {
            return $record = false;
        }
        $this->conn = null;
    }
    function getDatavideo($table)
    {
        $record = array();
        $sql = "select video.title as gt,video.link,video.id,gallery_category.title from $table left join gallery_category on gallery_category.id = video.cat_id";
        $result = $this->conn->prepare($sql);
        $result->execute();
        if ($result->rowCount() > 0) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $record[] =  $row;
            }
            return $record;
        } else {
            return $record = false;
        }
        $this->conn = null;
    }

    // insert data =========================================================================================
    // ======================================================================================

    function insertData($table, $fields)
    {
        $setval = "";
        foreach ($fields as $key => $value) {
            $setval .= "?,";
        }
        $setval = substr($setval, 0, -1);
        $sql = "insert into $table (" . implode(",", array_keys($fields)) . ") values ($setval)";
        $result = $this->conn->prepare($sql);
        $result->execute(array_values($fields));
        if ($result) {
            return true;
        } else {
            return false;
        }
        $this->conn = null;
    }
    // select data ========================================================================================================
    // ============================================================================================================
    function selectData($table, $where)
    {
        $sql = "";
        $record = array();
        $condition = "";
        foreach ($where as $key => $value) {
            $condition .= $key . "= ? and ";
        }
        $condition = substr($condition, 0, -5);
        $sql .= "select * from $table where $condition";
        $result = $this->conn->prepare($sql);
        $result->execute(array_values($where));
        if ($result->rowCount() > 0) {
            $row = $result->fetch(PDO::FETCH_ASSOC);
            return $row;
        } else {
            return false;
        }
        $this->conn = null;
    }
    function selectDataAll($table, $where)
    {
        $sql = "";
        $record = array();
        $condition = "";
        foreach ($where as $key => $value) {
            $condition .= $key . "= ? and ";
        }
        $condition = substr($condition, 0, -5);
        $sql .= "select * from $table where $condition";
        $result = $this->conn->prepare($sql);
        $result->execute(array_values($where));
        if ($result->rowCount() > 0) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $record[] =  $row;
            }
            return $record;
        } else {
            return false;
        }
        $this->conn = null;
    }
    function selectDataGallery($table, $where)
    {
        $sql = "";
        $record = array();
        $condition = "";
        foreach ($where as $key => $value) {
            $condition .= $key . "= ? and ";
        }
        $condition = substr($condition, 0, -5);
        $sql .= "select gallery.img,gallery.id,gallery_category.title,gallery.cat_id,gallery.title as t1 from $table  left join gallery_category on gallery_category.id = gallery.cat_id where gallery.id =?";
        $result = $this->conn->prepare($sql);
        $result->execute(array_values($where));
        if ($result->rowCount() > 0) {
            $row = $result->fetch(PDO::FETCH_ASSOC);
            return $row;
        } else {
            return false;
        }
        $this->conn = null;
    }
    function selectDatavideo($table, $where)
    {
        $sql = "";
        $record = array();
        $condition = "";
        foreach ($where as $key => $value) {
            $condition .= $key . "= ? and ";
        }
        $condition = substr($condition, 0, -5);
        $sql .= "select video.link,video.id,gallery_category.title,video.cat_id,video.title as t1 from $table  left join gallery_category on gallery_category.id = video.cat_id where video.id =?";
        $result = $this->conn->prepare($sql);
        $result->execute(array_values($where));
        if ($result->rowCount() > 0) {
            $row = $result->fetch(PDO::FETCH_ASSOC);
            return $row;
        } else {
            return false;
        }
        $this->conn = null;
    }


    // update data ==================================================================================
    // ============================================================================================================
    function updateData($table, $where, $fields)
    {
        $sql = "";
        $condition = "";
        $val = "";
        foreach ($where as $key => $value) {
            $condition .= "$key = ?";
        }
        foreach ($fields as $key => $value) {
            $val .= "$key = ? , ";
        }
        $val = substr($val, 0, -2);
        $sql .= "update $table set $val where $condition";
        // print_r($sql);
        // exit;
        $result = $this->conn->prepare($sql);
        $temp = array_merge(array_values($fields), array_values($where));
        if ($result->execute($temp)) {
            return true;
        } else {
            return false;
        }
        $this->conn = null;
    }
    // delete data =============================================================================================================
    // ============================================================================================================
    function deleteData($table, $where)
    {

        $sql = "";
        $condition = "";
        foreach ($where as $key => $val) {
            $condition .= "$key = ?";
        }
        $sql .= "delete from $table where $condition";
        $result = $this->conn->prepare($sql);
        if ($result->execute(array_values($where))) {
            return true;
        } else {
            return false;
        }
        $this->conn = null;
    }
    // get maximum id ================================================================================================
    // ============================================================================================================
    function getMaxId($table)
    {
        $sql = "select MAX(product_code) as max_code from $table";
        $result = $this->conn->prepare($sql);
        $result->execute();
        if ($result->rowCount() > 0) {
            return $result->fetch(PDO::FETCH_ASSOC);
        }
        $this->conn = null;
    }
    // image upload ===================================================================================================
    // ============================================================================================================

    function imageUploadThumb($temp_name, $type, $w, $h)
    {

        // $name = $_FILES["image_upload"]["name"];
        // $size = $_FILES["image_upload"]["size"];
        // $ext = end(explode(".", $_FILES["image_upload"]["name"]));
        $allowed_ext = array("png", "jpg", "jpeg");
        $random = rand(0, 999999999);
        $extension1 = explode(".", $type);
        $extension = end($extension1);
        $new_name = $random . "." . $extension;
        $new_image = '';
        // $new_name = md5(rand()) . '.' . $ext;
        $path = '../images/' . $new_name;
        list($width, $height) = getimagesize($temp_name);
        if ($extension == 'png') {
            $new_image = imagecreatefrompng($temp_name);
        }
        if ($extension == 'jpg' || $extension == 'jpeg') {
            $new_image = imagecreatefromjpeg($temp_name);
        }
        $new_width = $w;
        $new_height =  $h;
        // $new_height = ($height / $width) * 200;
        $tmp_image = imagecreatetruecolor(
            $new_width,
            $new_height
        );
        imagecopyresampled(
            $tmp_image,
            $new_image,
            0,
            0,
            0,
            0,
            $new_width,
            $new_height,
            $width,
            $height
        );
        imagejpeg($tmp_image, $path, 100);
        imagedestroy($new_image);
        imagedestroy($tmp_image);
        // $img1 = $image['image']['name'];
        // $type = $image['image']['type'];

        // $temp = $image['image']['tmp_name'];
        // if (move_uploaded_file($temp_name, "../images/$img")) {
        return $new_name;
        // } else {
        //     return false;
        // }
        $this->conn = null;
    }

    function imageUpload($temp_name, $type)
    {
        // $img1 = $image['image']['name'];
        // $type = $image['image']['type'];
        $random = rand(0, 999999999);
        // $img = $random . ".jpg";
        $extension1 = explode(".", $type);
        $extension = end($extension1);
        $img = $random . "." . $extension;
        // $temp = $image['image']['tmp_name'];
        if (move_uploaded_file($temp_name, "../images/$img")) {
            return $img;
        } else {
            return false;
        }
        $this->conn = null;
    }
}

// ==========================================================================================
//==============================================================================================

$obj = new DataOperation();

//
// ────────────────────────────────────────────────── I ──────────
//   :::::: L O G I N : :  :   :    :     :        :          :
// ────────────────────────────────────────────────────────────
//


if (isset($_POST["login"])) {
    if (!empty($_POST["admin_email"]) and !empty($_POST["admin_password"])) {
        // $_POST["admin_password"] = md5($_POST["admin_password"]);
        unset($_POST["login"]);

        $record = $obj->selectData("admin", $_POST);
        if ($record == false) {
            $_SESSION["msg"] = "Not Match";
            $_SESSION["status"] = "error";
        } else {

            $_SESSION["admin_email"] = $record["admin_email"];
            $_SESSION["admin_name"] = $record["admin_name"];
            $_SESSION["logo"] = $record["logo"];
            echo '<script>
            window.location.assign("dashboard.php");
            </script>';
        }
    } else {
        $_SESSION["msg"] = "FIll all details";
        $_SESSION["status"] = "error";
    }
    $page = "index.php";
    echo '<script>
    window.location.assign("' . $page . '");
    </script>';
}
//
// ──────────────────────────────────────────────────────────────── I ──────────
//   :::::: U P D A T E   A D M I N : :  :   :    :     :        :          :
// ──────────────────────────────────────────────────────────────────────────
//



if (isset($_POST["edit_admin"])) {

    if (!empty($_POST["admin_email"]) || !empty($_POST["admin_password"])) {
        if (isset($_FILES["logo"]["name"])) {
            $img = $obj->imageUpload($_FILES["logo"]["tmp_name"], $_FILES["logo"]["name"]);
            if ($img) {
                $_POST["logo"] = $img;
            }
        }
        if (isset($_FILES["flogo"]["name"])) {
            $img = $obj->imageUpload($_FILES["flogo"]["tmp_name"], $_FILES["flogo"]["name"]);
            if ($img) {
                $_POST["flogo"] = $img;
            }
        }
        $where = array(
            "id" => 1
        );
        unset($_POST["edit_admin"]);

        // $_POST["admin_password"] = md5($_POST["admin_password"]);
        $msg = $obj->updateData("admin", $where, $_POST);
        if ($msg) {
            $_SESSION["msg"] = "Update Successfully";
            $_SESSION["status"] = "success";
        } else {
            $_SESSION["msg"] = "Updation Failed!!!";
        }
    } else {
        $_SESSION["msg"] = "Fill All Fields !!!";
        $_SESSION["status"] = "error";
    }
    $page  = "admin_details.php";
    echo '<script>
    window.location.assign("' . $page . '");
    </script>';
}


// ====================================================================
//    PAGES
// ====================================================================


if (isset($_POST["add_page"])) {

    if (!empty($_POST["title"])) {

        if (!empty($_FILES["img"]["name"])) {
            $img = $obj->imageUpload($_FILES["img"]["tmp_name"], $_FILES["img"]["name"]);
            if ($img) {
                $_POST["img"] = $img;
            }
        }


        unset($_POST["add_page"]);

        // echo "<pre>";
        // print_r($_POST);
        // exit;

        if ($obj->insertData("pages", $_POST)) {
            $_SESSION["msg"] = "Inserted";
            $_SESSION["status"] = "success";
        }
    } else {
        $_SESSION["msg"] = "Fill all fields";
        $_SESSION["status"] = "error";
    }
    $page  = "pages.php";
    echo '<script>
    window.location.assign("' . $page . '");
    </script>';
}


// update page code ===================================================================
if (isset($_POST["edit_page"])) {

    if (!empty($_POST["title"])) {
        if (!empty($_FILES["img"]["name"])) {
            $img = $obj->imageUpload($_FILES["img"]["tmp_name"], $_FILES["img"]["name"]);
            if ($img) {
                $_POST["img"] = $img;
            }
        }

        $where = array(
            "id" => $_POST["id"]
        );
        unset($_POST["edit_page"]);
        unset($_POST["id"]);

        if ($obj->updateData("pages", $where, $_POST)) {
            $_SESSION["msg"] = "Update Sucessfully";
            $_SESSION["status"] = "success";
        }
    } else {
        $_SESSION["msg"] = "Fill All Fields !!!";
        $_SESSION["status"] = "error";
    }
    $page  = "pages.php";
    echo '<script>
    window.location.assign("' . $page . '");
    </script>';
}
// delete page code ===================================================================
if (isset($_GET["del_page"])) {

    $where = array(
        "id" => $_GET["del_page"]
    );

    if ($obj->deleteData("pages", $where)) {
        $_SESSION["msg"] = "Deleted";
        $_SESSION["status"] = "success";
    } else {
        $_SESSION["msg"] = "Unable to delete";
        $_SESSION["status"] = "error";
    }
    $page  = "pages.php";
    echo '<script>
window.location.assign("' . $page . '");
</script>';
}


//
// ────────────────────────────────────────────────────────────── I ──────────
//   :::::: A D D  G A L L E R Y  : :  :   :    :     :        :          :
// ────────────────────────────────────────────────────────────────────────
//


if (isset($_POST["add_gallery"])) {
    // echo "<pre>";
    // print_r($_POST);
    // exit;
    if (!empty($_POST["title"])) {
        if (isset($_FILES["img"]["name"])) {
            $img = $obj->imageUpload($_FILES["img"]["tmp_name"], $_FILES["img"]["name"]);
            if ($img) {
                $_POST["img"] = $img;
            }
        }
        unset($_POST["add_gallery"]);

        if ($obj->insertData("gallery", $_POST)) {
            $_SESSION["msg"] = "Inserted";
            $_SESSION["status"] = "success";
        }
    } else {
        $_SESSION["msg"] = "Fill all fields";
        $_SESSION["status"] = "error";
    }
    $page  = "gallery.php";
    echo '<script>
    window.location.assign("' . $page . '");
    </script>';
}
// update gallery code ===================================================================
if (isset($_POST["edit_gallery"])) {

    if (!empty($_POST["title"])) {
        if (isset($_FILES["img"]["name"])) {
            $img = $obj->imageUpload($_FILES["img"]["tmp_name"], $_FILES["img"]["name"]);
            if ($img) {
                $_POST["img"] = $img;
            }
        }
        $where = array(
            "id" => $_POST["id"]
        );
        unset($_POST["edit_gallery"]);
        unset($_POST["id"]);

        if ($obj->updateData("gallery", $where, $_POST)) {
            $_SESSION["msg"] = "Update Successfully";
            $_SESSION["status"] = "success";
        }
    } else {
        $_SESSION["msg"] = "Fill All Fields !!!";
        $_SESSION["status"] = "error";
    }
    $page  = "gallery.php";
    echo '<script>
    window.location.assign("' . $page . '");
    </script>';
}
// delete gallery code ===================================================================
if (isset($_GET["del_gallery"])) {

    $where = array(
        "id" => $_GET["del_gallery"]
    );
    if ($obj->deleteData("gallery", $where)) {

        $_SESSION["msg"] = "Deleted";
        $_SESSION["status"] = "success";
    } else {
        $_SESSION["msg"] = "Unable to delete";
        $_SESSION["status"] = "error";
    }
    $page  = "gallery.php";
    echo '<script>
window.location.assign("' . $page . '");
</script>';
}

//
// ────────────────────────────────────────────────────────────────────────── I ──────────
//   :::::: U P D A T E   A B O U T   C O D E : :  :   :    :     :        :          :
// ────────────────────────────────────────────────────────────────────────────────────
//


if (isset($_POST["edit_about"])) {

    if (!empty($_POST["about_desc"])) {
        if (isset($_FILES["about_img"]["name"])) {
            $img = $obj->imageUpload($_FILES["about_img"]["tmp_name"], $_FILES["about_img"]["name"]);
            if ($img) {
                $_POST["about_img"] = $img;
            }
        }

        $where = array(
            "id" => 1
        );
        unset($_POST["edit_about"]);


        if ($obj->updateData("about", $where, $_POST)) {
            $_SESSION["msg"] = "Update Successfully";
            $_SESSION["status"] = "success";
        }
    } else {
        $_SESSION["msg"] = "Fill All Fields !!!";
        $_SESSION["status"] = "error";
    }
    $page  = "about.php";
    echo '<script>
    window.location.assign("' . $page . '");
    </script>';
}


//
// ────────────────────────────────────────────────────────────── I ──────────
//   :::::: A D D  S E R V I C E : :  :   :    :     :        :          :
// ────────────────────────────────────────────────────────────────────────
//


if (isset($_POST["add_service"])) {

    if (!empty($_POST["title"])) {

        if (isset($_FILES["img"]["name"])) {
            $img = $obj->imageUpload($_FILES["img"]["tmp_name"], $_FILES["img"]["name"]);
            if ($img) {
                $_POST["img"] = $img;
            }
        }
        if (isset($_FILES["thumb_img"]["name"])) {
            $img = $obj->imageUpload($_FILES["thumb_img"]["tmp_name"], $_FILES["thumb_img"]["name"]);
            if ($img) {
                $_POST["thumb_img"] = $img;
            }
        }

        unset($_POST["add_service"]);

        // echo "<pre>";
        // print_r($_POST);
        // exit;

        if ($obj->insertData("services", $_POST)) {
            $_SESSION["msg"] = "Inserted";
            $_SESSION["status"] = "success";
        }
    } else {
        $_SESSION["msg"] = "Fill all fields";
        $_SESSION["status"] = "error";
    }
    $page  = "services.php";
    echo '<script>
    window.location.assign("' . $page . '");
    </script>';
}


// update service code ===================================================================
if (isset($_POST["edit_service"])) {

    if (!empty($_POST["title"])) {
        if (isset($_FILES["img"]["name"])) {
            $img = $obj->imageUpload($_FILES["img"]["tmp_name"], $_FILES["img"]["name"]);
            if ($img) {
                $_POST["img"] = $img;
            }
        }
        if (isset($_FILES["thumb_img"]["name"])) {
            $img = $obj->imageUpload($_FILES["thumb_img"]["tmp_name"], $_FILES["thumb_img"]["name"]);
            if ($img) {
                $_POST["thumb_img"] = $img;
            }
        }
        $where = array(
            "id" => $_POST["id"]
        );
        unset($_POST["edit_service"]);
        unset($_POST["id"]);

        if ($obj->updateData("services", $where, $_POST)) {
            $_SESSION["msg"] = "Update Sucessfully";
            $_SESSION["status"] = "success";
        }
    } else {
        $_SESSION["msg"] = "Fill All Fields !!!";
        $_SESSION["status"] = "error";
    }
    $page  = "services.php";
    echo '<script>
    window.location.assign("' . $page . '");
    </script>';
}
// delete Service code ===================================================================
if (isset($_GET["del_service"])) {

    $where = array(
        "id" => $_GET["del_service"]
    );

    if ($obj->deleteData("services", $where)) {
        $_SESSION["msg"] = "Deleted";
        $_SESSION["status"] = "success";
    } else {
        $_SESSION["msg"] = "Unable to delete";
        $_SESSION["status"] = "error";
    }
    $page  = "services.php";
    echo '<script>
window.location.assign("' . $page . '");
</script>';
}

//
// ──────────────────────────────────────────────────────────────── I ──────────
//   :::::: T E S T I M O N I A L S : :  :   :    :     :        :          :
// ──────────────────────────────────────────────────────────────────────────
//

if (isset($_POST["add_testimonials"])) {

    if (!empty($_POST["t_title"])) {

        if (isset($_FILES["t_img"]["name"])) {
            $img = $obj->imageUpload($_FILES["t_img"]["tmp_name"], $_FILES["t_img"]["name"]);
            if ($img) {
                $_POST["t_img"] = $img;
            }
        }


        unset($_POST["add_testimonials"]);

        // echo "<pre>";
        // print_r($_POST);
        // exit;

        if ($obj->insertData("testimonials", $_POST)) {
            $_SESSION["msg"] = "Inserted";
            $_SESSION["status"] = "success";
        }
    } else {
        $_SESSION["msg"] = "Fill all fields";
        $_SESSION["status"] = "error";
    }
    $page  = "testimonials.php";
    echo '<script>
    window.location.assign("' . $page . '");
    </script>';
}


// update testimonials code ===================================================================
if (isset($_POST["edit_testimonials"])) {

    if (!empty($_POST["t_title"])) {
        if (isset($_FILES["t_img"]["name"])) {
            $img = $obj->imageUpload($_FILES["t_img"]["tmp_name"], $_FILES["t_img"]["name"]);
            if ($img) {
                $_POST["t_img"] = $img;
            }
        }

        $where = array(
            "id" => $_POST["id"]
        );
        unset($_POST["edit_testimonials"]);
        unset($_POST["id"]);

        if ($obj->updateData("testimonials", $where, $_POST)) {
            $_SESSION["msg"] = "Update Sucessfully";
            $_SESSION["status"] = "success";
        }
    } else {
        $_SESSION["msg"] = "Fill All Fields !!!";
        $_SESSION["status"] = "error";
    }
    $page  = "testimonials.php";
    echo '<script>
    window.location.assign("' . $page . '");
    </script>';
}
// delete testimonials code ===================================================================
if (isset($_GET["del_testimonials"])) {

    $where = array(
        "id" => $_GET["del_testimonials"]
    );

    if ($obj->deleteData("testimonials", $where)) {
        $_SESSION["msg"] = "Deleted";
        $_SESSION["status"] = "success";
    } else {
        $_SESSION["msg"] = "Unable to delete";
        $_SESSION["status"] = "error";
    }
    $page  = "testimonials.php";
    echo '<script>
window.location.assign("' . $page . '");
</script>';
}

// Banners

if (isset($_POST["add_banners"])) {
    if (!empty($_POST["title"])) {
        if (!empty($_FILES["img"]["name"])) {
            $img = $obj->imageUploadThumb($_FILES["img"]["tmp_name"], $_FILES["img"]["name"], 1920, 800);
            if ($img) {
                $_POST["img"] = $img;
            }
        }
        unset($_POST["add_banners"]);

        if ($obj->insertData("banners", $_POST)) {
            $_SESSION["msg"] = "Inserted";
            $_SESSION["status"] = "success";
        }
    } else {
        $_SESSION["msg"] = "Fill all fields";
        $_SESSION["status"] = "error";
    }
    $page  = "banners.php";
    echo '<script>
    window.location.assign("' . $page . '");
    </script>';
}
// update banners code ===================================================================
if (isset($_POST["edit_banners"])) {

    if (!empty($_POST["title"])) {

        if (!empty($_FILES["img"]["name"])) {
            $img = $obj->imageUploadThumb($_FILES["img"]["tmp_name"], $_FILES["img"]["name"], 1920, 800);
            if ($img) {
                $_POST["img"] = $img;
            }
        }

        $where = array(
            "id" => $_POST["id"]
        );
        unset($_POST["edit_banners"]);
        unset($_POST["id"]);

        if ($obj->updateData("banners", $where, $_POST)) {
            $_SESSION["msg"] = "Update Successfully";
            $_SESSION["status"] = "success";
        }
    } else {
        $_SESSION["msg"] = "Fill All Fields !!!";
        $_SESSION["status"] = "error";
    }
    $page  = "banners.php";
    echo '<script>
    window.location.assign("' . $page . '");
    </script>';
}
// delete banners code ===================================================================
if (isset($_GET["del_banners"])) {

    $where = array(
        "id" => $_GET["del_banners"]
    );
    if ($obj->deleteData("banners", $where)) {

        $_SESSION["msg"] = "Deleted";
        $_SESSION["status"] = "success";
    } else {
        $_SESSION["msg"] = "Unable to delete";
        $_SESSION["status"] = "error";
    }
    $page  = "banners.php";
    echo '<script>
window.location.assign("' . $page . '");
</script>';
}

// team


if (isset($_POST["add_team"])) {
    if (!empty($_POST["name"])) {
        if (isset($_FILES["img"]["name"])) {
            $img = $obj->imageUpload($_FILES["img"]["tmp_name"], $_FILES["img"]["name"]);
            if ($img) {
                $_POST["img"] = $img;
            }
        }
        unset($_POST["add_team"]);

        unset($_POST["page"]);

        if ($obj->insertData("team", $_POST)) {
            $_SESSION["msg"] = "Inserted";
            $_SESSION["status"] = "success";
        }
    } else {
        $_SESSION["msg"] = "Fill all fields";
        $_SESSION["status"] = "error";
    }
    $page  = "team.php";
    echo '<script>
    window.location.assign("' . $page . '");
    </script>';
}
// update team code ===================================================================
if (isset($_POST["edit_team"])) {

    if (!empty($_POST["name"])) {

        if (isset($_FILES["img"]["name"])) {
            $img = $obj->imageUpload($_FILES["img"]["tmp_name"], $_FILES["img"]["name"]);
            if ($img) {
                $_POST["img"] = $img;
            }
        }
        $page = $_POST["page"];
        unset($_POST["page"]);
        $where = array(
            "id" => $_POST["id"]
        );
        unset($_POST["edit_team"]);
        unset($_POST["id"]);

        if ($obj->updateData("team", $where, $_POST)) {
            $_SESSION["msg"] = "Update Successfully";
            $_SESSION["status"] = "success";
        }
    } else {
        $_SESSION["msg"] = "Fill All Fields !!!";
        $_SESSION["status"] = "error";
    }
    // $page  = "team.php";
    echo '<script>
    window.location.assign("' . $page . '");
    </script>';
}
// delete team code ===================================================================
if (isset($_GET["del_team"])) {

    $where = array(
        "id" => $_GET["del_team"]
    );
    if ($obj->deleteData("team", $where)) {

        $_SESSION["msg"] = "Deleted";
        $_SESSION["status"] = "success";
    } else {
        $_SESSION["msg"] = "Unable to delete";
        $_SESSION["status"] = "error";
    }
    $page = $_GET["page"];
    unset($_GET["page"]);
    // $page  = "team.php";
    echo '<script>
window.location.assign("' . $page . '");
</script>';
}


// gallery_category

if (isset($_POST["add_gallery_category"])) {
    if (!empty($_POST["title"])) {

        unset($_POST["add_gallery_category"]);

        if ($obj->insertData("gallery_category", $_POST)) {
            $_SESSION["msg"] = "Inserted";
            $_SESSION["status"] = "success";
        }
    } else {
        $_SESSION["msg"] = "Fill all fields";
        $_SESSION["status"] = "error";
    }
    $page  = "gallery_cat.php";
    echo '<script>
    window.location.assign("' . $page . '");
    </script>';
}
// update gallery_category code ===================================================================
if (isset($_POST["edit_gallery_category"])) {

    if (!empty($_POST["title"])) {


        $where = array(
            "id" => $_POST["id"]
        );
        unset($_POST["edit_gallery_category"]);
        unset($_POST["id"]);

        if ($obj->updateData("gallery_category", $where, $_POST)) {
            $_SESSION["msg"] = "Update Successfully";
            $_SESSION["status"] = "success";
        }
    } else {
        $_SESSION["msg"] = "Fill All Fields !!!";
        $_SESSION["status"] = "error";
    }
    $page  = "gallery_cat.php";
    echo '<script>
    window.location.assign("' . $page . '");
    </script>';
}
// delete gallery_category code ===================================================================
if (isset($_GET["del_gallery_category"])) {

    $where = array(
        "id" => $_GET["del_gallery_category"]
    );
    if ($obj->deleteData("gallery_category", $where)) {

        $_SESSION["msg"] = "Deleted";
        $_SESSION["status"] = "success";
    } else {
        $_SESSION["msg"] = "Unable to delete";
        $_SESSION["status"] = "error";
    }
    $page  = "gallery_cat.php";
    echo '<script>
window.location.assign("' . $page . '");
</script>';
}
//
// ──────────────────────────────────────────────────────── I ──────────
//   :::::: F E A T U R E S : :  :   :    :     :        :          :
// ──────────────────────────────────────────────────────────────────
//

if (isset($_POST["add_features"])) {

    if (!empty($_POST["title"])) {

        if (isset($_FILES["img"]["name"])) {
            $img = $obj->imageUpload($_FILES["img"]["tmp_name"], $_FILES["img"]["name"]);
            if ($img) {
                $_POST["img"] = $img;
            }
        }

        unset($_POST["add_features"]);

        // echo "<pre>";
        // print_r($_POST);
        // exit;

        if ($obj->insertData("features", $_POST)) {
            $_SESSION["msg"] = "Inserted";
            $_SESSION["status"] = "success";
        }
    } else {
        $_SESSION["msg"] = "Fill all fields";
        $_SESSION["status"] = "error";
    }
    $page  = "features.php";
    echo '<script>
    window.location.assign("' . $page . '");
    </script>';
}


// update features code ===================================================================
if (isset($_POST["edit_features"])) {

    if (!empty($_POST["title"])) {
        if (isset($_FILES["img"]["name"])) {
            $img = $obj->imageUpload($_FILES["img"]["tmp_name"], $_FILES["img"]["name"]);
            if ($img) {
                $_POST["img"] = $img;
            }
        }

        $where = array(
            "id" => $_POST["id"]
        );
        unset($_POST["edit_features"]);
        unset($_POST["id"]);

        if ($obj->updateData("features", $where, $_POST)) {
            $_SESSION["msg"] = "Update Sucessfully";
            $_SESSION["status"] = "success";
        }
    } else {
        $_SESSION["msg"] = "Fill All Fields !!!";
        $_SESSION["status"] = "error";
    }
    $page  = "features.php";
    echo '<script>
    window.location.assign("' . $page . '");
    </script>';
}
// delete features code ===================================================================
if (isset($_GET["del_features"])) {

    $where = array(
        "id" => $_GET["del_features"]
    );

    if ($obj->deleteData("features", $where)) {
        $_SESSION["msg"] = "Deleted";
        $_SESSION["status"] = "success";
    } else {
        $_SESSION["msg"] = "Unable to delete";
        $_SESSION["status"] = "error";
    }
    $page  = "features.php";
    echo '<script>
window.location.assign("' . $page . '");
</script>';
}
//
// ────────────────────────────────────────────────────── I ──────────
//   :::::: W E L C O M E : :  :   :    :     :        :          :
// ────────────────────────────────────────────────────────────────
//

if (isset($_POST["edit_welcome"])) {

    if (!empty($_POST["w_desc"])) {
        if (isset($_FILES["img"]["name"])) {
            $img = $obj->imageUpload($_FILES["img"]["tmp_name"], $_FILES["img"]["name"]);
            if ($img) {
                $_POST["img"] = $img;
            }
        }

        $where = array(
            "id" => 1
        );
        unset($_POST["edit_welcome"]);


        if ($obj->updateData("welcome", $where, $_POST)) {
            $_SESSION["msg"] = "Update Successfully";
            $_SESSION["status"] = "success";
        }
    } else {
        $_SESSION["msg"] = "Fill All Fields !!!";
        $_SESSION["status"] = "error";
    }
    $page  = "welcome.php";
    echo '<script>
    window.location.assign("' . $page . '");
    </script>';
}
//
// ────────────────────────────────────────────────── I ──────────
//   :::::: C O U N T : :  :   :    :     :        :          :
// ────────────────────────────────────────────────────────────
//

if (isset($_POST["edit_count"])) {

    if (!empty($_POST["title"])) {

        $where = array(
            "id" => 1
        );
        unset($_POST["edit_count"]);
        $msg = $obj->updateData("count", $where, $_POST);
        if ($msg) {
            $_SESSION["msg"] = "Update Successfully";
            $_SESSION["status"] = "success";
        } else {
            $_SESSION["msg"] = "Updation Failed!!!";
        }
    } else {
        $_SESSION["msg"] = "Fill All Fields !!!";
        $_SESSION["status"] = "error";
    }
    $page  = "count.php";
    echo '<script>
    window.location.assign("' . $page . '");
    </script>';
}

// pricing


if (isset($_POST["add_pricing"])) {

    if (!empty($_POST["title"])) {



        unset($_POST["add_pricing"]);

        // echo "<pre>";
        // print_r($_POST);
        // exit;

        if ($obj->insertData("pricing", $_POST)) {
            $_SESSION["msg"] = "Inserted";
            $_SESSION["status"] = "success";
        }
    } else {
        $_SESSION["msg"] = "Fill all fields";
        $_SESSION["status"] = "error";
    }
    $page  = "pricing.php";
    echo '<script>
    window.location.assign("' . $page . '");
    </script>';
}


// update pricing code ===================================================================
if (isset($_POST["edit_pricing"])) {

    if (!empty($_POST["title"])) {


        $where = array(
            "id" => $_POST["id"]
        );
        unset($_POST["edit_pricing"]);
        unset($_POST["id"]);

        if ($obj->updateData("pricing", $where, $_POST)) {
            $_SESSION["msg"] = "Update Sucessfully";
            $_SESSION["status"] = "success";
        }
    } else {
        $_SESSION["msg"] = "Fill All Fields !!!";
        $_SESSION["status"] = "error";
    }
    $page  = "pricing.php";
    echo '<script>
    window.location.assign("' . $page . '");
    </script>';
}
// delete pricing code ===================================================================
if (isset($_GET["del_pricing"])) {

    $where = array(
        "id" => $_GET["del_pricing"]
    );

    if ($obj->deleteData("pricing", $where)) {
        $_SESSION["msg"] = "Deleted";
        $_SESSION["status"] = "success";
    } else {
        $_SESSION["msg"] = "Unable to delete";
        $_SESSION["status"] = "error";
    }
    $page  = "pricing.php";
    echo '<script>
window.location.assign("' . $page . '");
</script>';
}


// clients

if (isset($_POST["add_clients"])) {
    if (!empty($_POST["title"])) {
        if (isset($_FILES["img"]["name"])) {
            $img = $obj->imageUploadThumb($_FILES["img"]["tmp_name"], $_FILES["img"]["name"], 300, 300);
            if ($img) {
                $_POST["img"] = $img;
            }
        }
        unset($_POST["add_clients"]);

        if ($obj->insertData("clients", $_POST)) {
            $_SESSION["msg"] = "Inserted";
            $_SESSION["status"] = "success";
        }
    } else {
        $_SESSION["msg"] = "Fill all fields";
        $_SESSION["status"] = "error";
    }
    $page  = "clients.php";
    echo '<script>
    window.location.assign("' . $page . '");
    </script>';
}
// update clients code ===================================================================
if (isset($_POST["edit_clients"])) {

    if (!empty($_POST["title"])) {

        if (isset($_FILES["img"]["name"])) {
            $img = $obj->imageUploadThumb($_FILES["img"]["tmp_name"], $_FILES["img"]["name"], 300, 300);
            if ($img) {
                $_POST["img"] = $img;
            }
        }

        $where = array(
            "id" => $_POST["id"]
        );
        unset($_POST["edit_clients"]);
        unset($_POST["id"]);

        if ($obj->updateData("clients", $where, $_POST)) {
            $_SESSION["msg"] = "Update Successfully";
            $_SESSION["status"] = "success";
        }
    } else {
        $_SESSION["msg"] = "Fill All Fields !!!";
        $_SESSION["status"] = "error";
    }
    $page  = "clients.php";
    echo '<script>
    window.location.assign("' . $page . '");
    </script>';
}
// delete clients code ===================================================================
if (isset($_GET["del_clients"])) {

    $where = array(
        "id" => $_GET["del_clients"]
    );
    if ($obj->deleteData("clients", $where)) {

        $_SESSION["msg"] = "Deleted";
        $_SESSION["status"] = "success";
    } else {
        $_SESSION["msg"] = "Unable to delete";
        $_SESSION["status"] = "error";
    }
    $page  = "clients.php";
    echo '<script>
window.location.assign("' . $page . '");
</script>';
}

// top


if (isset($_POST["add_top"])) {

    if (!empty($_POST["title"])) {

        if (isset($_FILES["img"]["name"])) {
            $img = $obj->imageUpload($_FILES["img"]["tmp_name"], $_FILES["img"]["name"]);
            if ($img) {
                $_POST["img"] = $img;
            }
        }
        if (isset($_FILES["thumb_img"]["name"])) {
            $img = $obj->imageUpload($_FILES["thumb_img"]["tmp_name"], $_FILES["thumb_img"]["name"]);
            if ($img) {
                $_POST["thumb_img"] = $img;
            }
        }

        unset($_POST["add_top"]);

        // echo "<pre>";
        // print_r($_POST);
        // exit;

        if ($obj->insertData("top", $_POST)) {
            $_SESSION["msg"] = "Inserted";
            $_SESSION["status"] = "success";
        }
    } else {
        $_SESSION["msg"] = "Fill all fields";
        $_SESSION["status"] = "error";
    }
    $page  = "top.php";
    echo '<script>
    window.location.assign("' . $page . '");
    </script>';
}


// update top code ===================================================================
if (isset($_POST["edit_top"])) {

    if (!empty($_POST["title"])) {
        if (isset($_FILES["img"]["name"])) {
            $img = $obj->imageUpload($_FILES["img"]["tmp_name"], $_FILES["img"]["name"]);
            if ($img) {
                $_POST["img"] = $img;
            }
        }
        if (isset($_FILES["thumb_img"]["name"])) {
            $img = $obj->imageUpload($_FILES["thumb_img"]["tmp_name"], $_FILES["thumb_img"]["name"]);
            if ($img) {
                $_POST["thumb_img"] = $img;
            }
        }
        $where = array(
            "id" => $_POST["id"]
        );
        unset($_POST["edit_top"]);
        unset($_POST["id"]);

        if ($obj->updateData("top", $where, $_POST)) {
            $_SESSION["msg"] = "Update Sucessfully";
            $_SESSION["status"] = "success";
        }
    } else {
        $_SESSION["msg"] = "Fill All Fields !!!";
        $_SESSION["status"] = "error";
    }
    $page  = "add_top.php";
    echo '<script>
    window.location.assign("' . $page . '");
    </script>';
}
// delete top code ===================================================================
if (isset($_GET["del_top"])) {

    $where = array(
        "id" => $_GET["del_top"]
    );

    if ($obj->deleteData("top", $where)) {
        $_SESSION["msg"] = "Deleted";
        $_SESSION["status"] = "success";
    } else {
        $_SESSION["msg"] = "Unable to delete";
        $_SESSION["status"] = "error";
    }
    $page  = "top.php";
    echo '<script>
window.location.assign("' . $page . '");
</script>';
}
// app


if (isset($_POST["add_app"])) {

    if (!empty($_POST["title"])) {

        if (isset($_FILES["img"]["name"])) {
            $img = $obj->imageUpload($_FILES["img"]["tmp_name"], $_FILES["img"]["name"]);
            if ($img) {
                $_POST["img"] = $img;
            }
        }
        if (isset($_FILES["thumb_img"]["name"])) {
            $img = $obj->imageUpload($_FILES["thumb_img"]["tmp_name"], $_FILES["thumb_img"]["name"]);
            if ($img) {
                $_POST["thumb_img"] = $img;
            }
        }

        unset($_POST["add_app"]);

        // echo "<pre>";
        // print_r($_POST);
        // exit;

        if ($obj->insertData("app", $_POST)) {
            $_SESSION["msg"] = "Inserted";
            $_SESSION["status"] = "success";
        }
    } else {
        $_SESSION["msg"] = "Fill all fields";
        $_SESSION["status"] = "error";
    }
    $page  = "app.php";
    echo '<script>
    window.location.assign("' . $page . '");
    </script>';
}


// update app code ===================================================================
if (isset($_POST["edit_app"])) {

    if (!empty($_POST["title"])) {
        if (isset($_FILES["img"]["name"])) {
            $img = $obj->imageUpload($_FILES["img"]["tmp_name"], $_FILES["img"]["name"]);
            if ($img) {
                $_POST["img"] = $img;
            }
        }
        if (isset($_FILES["thumb_img"]["name"])) {
            $img = $obj->imageUpload($_FILES["thumb_img"]["tmp_name"], $_FILES["thumb_img"]["name"]);
            if ($img) {
                $_POST["thumb_img"] = $img;
            }
        }
        $where = array(
            "id" => $_POST["id"]
        );
        unset($_POST["edit_app"]);
        unset($_POST["id"]);

        if ($obj->updateData("app", $where, $_POST)) {
            $_SESSION["msg"] = "Update Sucessfully";
            $_SESSION["status"] = "success";
        }
    } else {
        $_SESSION["msg"] = "Fill All Fields !!!";
        $_SESSION["status"] = "error";
    }
    $page  = "add_app.php";
    echo '<script>
    window.location.assign("' . $page . '");
    </script>';
}
// delete app code ===================================================================
if (isset($_GET["del_app"])) {

    $where = array(
        "id" => $_GET["del_app"]
    );

    if ($obj->deleteData("app", $where)) {
        $_SESSION["msg"] = "Deleted";
        $_SESSION["status"] = "success";
    } else {
        $_SESSION["msg"] = "Unable to delete";
        $_SESSION["status"] = "error";
    }
    $page  = "app.php";
    echo '<script>
window.location.assign("' . $page . '");
</script>';
}


if (isset($_POST["add_social"])) {

    if (!empty($_POST["title"])) {

        if (isset($_FILES["img"]["name"])) {
            $img = $obj->imageUpload($_FILES["img"]["tmp_name"], $_FILES["img"]["name"]);
            if ($img) {
                $_POST["img"] = $img;
            }
        }
        if (isset($_FILES["thumb_img"]["name"])) {
            $img = $obj->imageUpload($_FILES["thumb_img"]["tmp_name"], $_FILES["thumb_img"]["name"]);
            if ($img) {
                $_POST["thumb_img"] = $img;
            }
        }

        unset($_POST["add_social"]);

        // echo "<pre>";
        // print_r($_POST);
        // exit;

        if ($obj->insertData("social", $_POST)) {
            $_SESSION["msg"] = "Inserted";
            $_SESSION["status"] = "success";
        }
    } else {
        $_SESSION["msg"] = "Fill all fields";
        $_SESSION["status"] = "error";
    }
    $page  = "social.php";
    echo '<script>
    window.location.assign("' . $page . '");
    </script>';
}


// update social code ===================================================================
if (isset($_POST["edit_social"])) {

    if (!empty($_POST["title"])) {
        if (isset($_FILES["img"]["name"])) {
            $img = $obj->imageUpload($_FILES["img"]["tmp_name"], $_FILES["img"]["name"]);
            if ($img) {
                $_POST["img"] = $img;
            }
        }
        if (isset($_FILES["thumb_img"]["name"])) {
            $img = $obj->imageUpload($_FILES["thumb_img"]["tmp_name"], $_FILES["thumb_img"]["name"]);
            if ($img) {
                $_POST["thumb_img"] = $img;
            }
        }
        $where = array(
            "id" => $_POST["id"]
        );
        unset($_POST["edit_social"]);
        unset($_POST["id"]);

        if ($obj->updateData("social", $where, $_POST)) {
            $_SESSION["msg"] = "Update Sucessfully";
            $_SESSION["status"] = "success";
        }
    } else {
        $_SESSION["msg"] = "Fill All Fields !!!";
        $_SESSION["status"] = "error";
    }
    $page  = "add_social.php";
    echo '<script>
    window.location.assign("' . $page . '");
    </script>';
}
// delete social code ===================================================================
if (isset($_GET["del_social"])) {

    $where = array(
        "id" => $_GET["del_social"]
    );

    if ($obj->deleteData("social", $where)) {
        $_SESSION["msg"] = "Deleted";
        $_SESSION["status"] = "success";
    } else {
        $_SESSION["msg"] = "Unable to delete";
        $_SESSION["status"] = "error";
    }
    $page  = "social.php";
    echo '<script>
window.location.assign("' . $page . '");
</script>';
}

// =============VIDEO======================
// ========================================

if (isset($_POST["add_video"])) {
    // echo "<pre>";
    // print_r($_POST);
    // exit;

    if (isset($_POST["link"])) {
        unset($_POST["add_video"]);
        // $_POST["link"] = str_replace("watch?v=", "embed/", $_POST['link']);
        if ($obj->insertData("video", $_POST)) {
            $_SESSION["msg"] = "Inserted";
            $_SESSION["status"] = "success";
        }
    } else {
        $_SESSION["msg"] = "Fill all fields";
        $_SESSION["status"] = "error";
    }

    $page  = "video.php";
    echo '<script>
    window.location.assign("' . $page . '");
    </script>';
}
// update video code ===================================================================
if (isset($_POST["edit_video"])) {


    if (isset($_POST["link"])) {

        $where = array(
            "id" => $_POST["id"]
        );
        unset($_POST["edit_video"]);
        unset($_POST["id"]);
        // $_POST["link"] = str_replace("watch?v=", "embed/", $_POST['link']);
        if ($obj->updateData("video", $where, $_POST)) {
            $_SESSION["msg"] = "Update Successfully";
            $_SESSION["status"] = "success";
        }
    } else {
        $_SESSION["msg"] = "Fill All Fields !!!";
        $_SESSION["status"] = "error";
    }
    $page  = "video.php";
    echo '<script>
    window.location.assign("' . $page . '");
    </script>';
}
// delete video code ===================================================================
if (isset($_GET["del_video"])) {

    $where = array(
        "id" => $_GET["del_video"]
    );
    if ($obj->deleteData("video", $where)) {

        $_SESSION["msg"] = "Deleted";
        $_SESSION["status"] = "success";
    } else {
        $_SESSION["msg"] = "Unable to delete";
        $_SESSION["status"] = "error";
    }
    $page  = "video.php";
    echo '<script>
window.location.assign("' . $page . '");
</script>';
}
