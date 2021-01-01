<?php

require_once("conn.php");

class DataOperation extends Database
{
    // get data =========================================================================================
    // ============================================================================================================
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
    function getDataLimit($table, $limit)
    {
        $record = array();
        $sql = "select * from $table LIMIT $limit";
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
    function getData2($table, $offset, $limit)
    {
        $record = array();
        $sql = "select * from $table LIMIT  $offset,$limit";
        $result = $this->conn->prepare($sql);
        $result->execute(array("1"));
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

    function getPage($table)
    {
        $record = array();
        $sql = "select * from $table";
        $result = $this->conn->prepare($sql);
        $result->execute();
        if ($result->rowCount() > 0) {

            $record = $result->rowCount();
            return $record;
        } else {
            return $record = false;
        }
        $this->conn = null;
    }
    function getPageSerWhere($table, $search)
    {
        $sql = "";
        $record = array();
        // $condition = "";
        // foreach ($where as $key => $value) {
        //     $condition .= $key . "= ? and ";
        // }
        // $condition = substr($condition, 0, -5);
        $sql .= "select * from $table where team_name like ?";
        $result = $this->conn->prepare($sql);
        $result->execute(array("%$search%"));
        if ($result->rowCount() > 0) {

            $record = $result->rowCount();
            return $record;
        } else {
            return $record = false;
        }
        $this->conn = null;
    }
    function selectSearch($table, $search, $offset, $limit)
    {
        $record = array();
        $sql = "SELECT * from $table   WHERE team_name LIKE ? and status = ? LIMIT  $offset,$limit";
        // $sql = "select $table.*,images.image,category.category_name,product_table.quantity from $table LEFT JOIN images  ON images.product_code = $table.product_code left join category on category.id=$table.category_id left join product_table on product_table.product_code=$table.product_code GROUP BY $table.product_code where $table.product_name like ?";
        $result = $this->conn->prepare($sql);
        $result->execute(array("%$search%", "1"));
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
    function selectDataLimit($table)
    {
        $record = array();
        $sql = "select * from $table  ORDER BY RAND() LIMIT 1";
        $result = $this->conn->prepare($sql);
        $result->execute();
        if ($result->rowCount() > 0) {
            $row = $result->fetch(PDO::FETCH_ASSOC);
            return $row;
        } else {
            return $record = false;
        }
        $this->conn = null;
    }
    // insert data ============================================================================================================
    // ============================================================================================================
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

    function selectDataStateAll($table, $where)
    {
        $sql = "";
        $record = array();
        $condition = "";
        foreach ($where as $key => $value) {
            $condition .= $key . "= ? and ";
        }
        $condition = substr($condition, 0, -5);
        $sql .= "select * from $table left join country on country.cid = $table.country_id where $condition";
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


    function selectDataState($table, $where)
    {
        $sql = "";
        $record = array();
        $condition = "";
        foreach ($where as $key => $value) {
            $condition .= $key . "= ? and ";
        }
        $condition = substr($condition, 0, -5);
        $sql .= "select * from $table left join country on country.cid = $table.country_id where $condition";
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
        if (move_uploaded_file($temp_name, "images/$img")) {
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


if (isset($_POST["login"])) {
    if (!empty($_POST["email"]) and !empty($_POST["pass"])) {
        // $_POST["password"] = md5($_POST["password"]);
        unset($_POST["login"]);
        $_POST["status"] = 1;
        $record = $obj->selectData("team", $_POST);
        if ($record == false) {
            $_SESSION["msg"] = "Not Match";
            $_SESSION["status"] = "error";
        } else {

            $_SESSION["email"] = $record["email"];
            $_SESSION["id"] = $record["id"];
            echo '<script>
            window.location.assign("user.php");
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

if (isset($_POST["add_team"])) {
    if (!empty($_POST["team_name"])) {
        if (isset($_FILES["team_img"]["name"])) {
            $img = $obj->imageUpload($_FILES["team_img"]["tmp_name"], $_FILES["team_img"]["name"]);
            if ($img) {
                $_POST["team_img"] = $img;
            }
        }
        $_POST["status"]  = 0;
        unset($_POST["add_team"]);

        if ($obj->insertData("team", $_POST)) {
            $_SESSION["msg"] = "Registered";
            $_SESSION["status"] = "success";
        }
    } else {
        $_SESSION["msg"] = "Fill all fields";
        $_SESSION["status"] = "error";
    }
    $page  = "index.php";
    echo '<script>
    window.location.assign("' . $page . '");
    </script>';
}
// update team code ===================================================================
if (isset($_POST["edit_team"])) {

    // echo "<pre>";
    // print_r($_POST);
    // exit;
    if (!empty($_POST["team_name"])) {

        if (isset($_FILES["team_img"]["name"])) {
            $img = $obj->imageUpload($_FILES["team_img"]["tmp_name"], $_FILES["team_img"]["name"]);
            if ($img) {
                $_POST["team_img"] = $img;
            }
        }

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
    $page  = "user.php";
    echo '<script>
    window.location.assign("' . $page . '");
    </script>';
}


//
// ────────────────────────────────────────────────── I ──────────
//   :::::: L O G I N : :  :   :    :     :        :          :
// ────────────────────────────────────────────────────────────
//


if (isset($_POST["slogin"])) {
    if (!empty($_POST["sname"]) and !empty($_POST["rollno"])) {
        // $_POST["admin_password"] = md5($_POST["admin_password"]);
        unset($_POST["slogin"]);
        $_POST["status"] = 1;
        $record = $obj->selectData("students", $_POST);
        if ($record == false) {
            $_SESSION["msg"] = "Not Match";
            $_SESSION["status"] = "error";
        } else {

            $_SESSION["sname"] = $record["sname"];
            $_SESSION["rollno"] = $record["rollno"];
            $_SESSION["id"] = $record["id"];
            echo '<script>
            window.location.assign("account.php");
            </script>';
        }
    } else {
        $_SESSION["msg"] = "FIll all details";
        $_SESSION["status"] = "error";
    }
    $page = "verification.php";
    echo '<script>
    window.location.assign("' . $page . '");
    </script>';
}
