<?php
error_reporting(0);
if ($_REQUEST["data"] == "insertCategory") {
    include '../db/db.inc.php';

    $cat_name = $_REQUEST['category_name'];
    $sql_query = "SELECT * FROM `tbl_categories` WHERE `category_name` = '$cat_name'";
    $result = mysqli_query($conn, $sql_query);
    if (mysqli_num_rows($result) > 0) {
        echo 1000;
    } else {
        $meta_title = $_REQUEST['meta_title'];
        $meta_desc  = $_REQUEST['meta_desc'];
        $slug       = $_REQUEST['slug'];

        $random1 = substr(number_format(time() * rand(), 0, '', ''), 0, 10);
        $target_folder = "products/category/";
        $file_name = $target_folder . $random1 . basename($_FILES["category_img"]['name']);
        $uploadStatus  = 1;
        $imageFileType = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["category_img"]["tmp_name"]);
        if (!$check) {
            echo 900;
            $uploadStatus = 0;
        } else if (file_exists($file_name)) {
            echo 901;
            $uploadStatus = 0;
        } else if ($_FILES["category_img"]["size"] > 50000000) {
            echo 902;
            $uploadStatus = 0;
        } else if ($uploadStatus == 0) {
            echo 903;
        } else if (move_uploaded_file($_FILES["category_img"]["tmp_name"], $file_name)) {
            $sql = "INSERT INTO `tbl_categories`(`category_name`,`category_img`, `slug`, `meta_title`, `meta_desc`) VALUES ('$cat_name','$file_name','$slug','$meta_title','$meta_desc')";
            mysqli_query($conn, $sql);
            echo 1001;
        } else {
            echo 905;
        }
    }
}

//---------------------------
//Insert Sub Category FOrm
//---------------------------- --//

if ($_REQUEST["data"] == "insertSubCategory") {

    include '../db/db.inc.php';

    $subCatName = $_REQUEST['subCategory'];
    $sql = "SELECT * FROM `tbl_subcategories` WHERE `sub_category_name` = '$subCatName'";
    $result =  mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo 1000;
    } else {
        $categoryId = $_REQUEST['category_id'];
        $random1 = substr(number_format(time() * rand(), 0, '', ''), 0, 10);
        $target_folder = "products/subCategory/";
        $file_name = $target_folder . $random1 . basename($_FILES["sc_img"]['name']);
        $uploadStatus  = 1;
        $imageFileType = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["sc_img"]["tmp_name"]);
        if (!$check) {
            echo 900;
            $uploadStatus = 0;
        } else if (file_exists($file_name)) {
            echo 901;
            $uploadStatus = 0;
        } else if ($_FILES["sc_img"]["size"] > 50000000) {
            echo 902;
            $uploadStatus = 0;
        } else if ($uploadStatus == 0) {
            echo 903;
        } else if (move_uploaded_file($_FILES["sc_img"]["tmp_name"], $file_name)) {
            $sql = "INSERT INTO `tbl_subcategories` (`sub_category_name`,`sub_category_img_name`,`categoryId` ) VALUES ('$subCatName','$file_name','$categoryId')";
            mysqli_query($conn, $sql);
            echo 1001;
        } else {
            echo 905;
        }
    }
}

if ($_REQUEST["data"] == "login") {
    include '../db/db.inc.php';
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['password'];

    if (empty($email) || empty($pass)) {
        echo 403;
    } else {
        $sql = "SELECT * FROM `userDetails` WHERE `email` = '$email'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $sql = "SELECT * FROM `userDetails` WHERE `password` = $pass";
            $response = mysqli_query($conn, $sql);
            if (mysqli_num_rows($response) > 0) {
                echo 402;
            } else {
                echo 404;
            }
        } else {
            echo 401;
        }
    }
}

// Delete Data
if ($_REQUEST['action'] == "deleteData") {
    include '../db/db.inc.php';
    $id = $_REQUEST['id'];
    $image = $_REQUEST['image'];

    $sql = "DELETE FROM `tbl_categories` WHERE `id` = '$id'";

    $query = mysqli_query($conn, $sql);
    if ($query) {
        // echo $image;
        unlink($image);
        echo 401;
    } else {
        echo 402;
    }
}

if ($_REQUEST['action'] == "deleteSd") {
    include '../db/db.inc.php';
    $id = $_REQUEST['id'];
    $image = $_REQUEST['image'];
    $sql = "DELETE FROM `tbl_subcategories` WHERE `id` = '$id'";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        // echo $image;
        unlink($image);
        echo 401;
    } else {
        echo 402;
    }
}

if ($_REQUEST['action'] == "editData") {
    include '../db/db.inc.php';
    $id = $_REQUEST['id'];

    $sql = "SELECT * FROM `tbl_categories` WHERE `id` = '$id'";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        $arr1 = array();
        while ($row = mysqli_fetch_array($query)) {
            $data['id'] = $row['id'];
            $data['category_name']  = $row['category_name'];
            $data['slug'] = $row['slug'];
            $data['meta_title'] = $row['meta_title'];
            $data['meta_desc'] = $row['meta_desc'];
            $data['category_img'] = $row['category_img'];
            array_push($arr1, $data);
            echo json_encode($arr1);
        }
    } else {
        echo 402;
    }
}


if ($_REQUEST['data'] == "updateCategory") {
    include '../db/db.inc.php';
    $id = $_REQUEST['cat_id'];

    $sql = "SELECT * FROM `tbl_categories` WHERE `id` = '$id'";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        $cat_name = $_REQUEST['category_name'];
        $meta_title = $_REQUEST['meta_title'];
        $meta_desc  = $_REQUEST['meta_desc'];
        $slug       = $_REQUEST['slug'];
        $sql = "UPDATE `tbl_categories` SET `category_name`='$cat_name', `slug`='$slug', `meta_title` = '$meta_title', `meta_desc` = '$meta_desc' WHERE `id` = '$id'";
        mysqli_query($conn, $sql);
        echo 1001;
        // //check if file is being attached or not
        // if ($cat_img = $_REQUEST['category_img']) {
        //     // Old file name
        //     $old_filename = $_REQUEST['cat_oldimg'];
        //     // assigning random number to the images so, that the image won''t get matched
        //     $random1 = substr(number_format(time() * rand(), 0, '', ''), 0, 10);
        //     $target_folder = "products/category/";
        //     $file_name = $target_folder . $random1 . basename($_FILES["category_img"]['name']);
        //     $uploadStatus  = 1;
        //     $imageFileType = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        //     $check = getimagesize($_FILES["category_img"]["tmp_name"]);
        //     if (!$check) {
        //         echo 900;
        //         $uploadStatus = 0;
        //     } else if (file_exists($file_name)) {
        //         echo 901;
        //         $uploadStatus = 0;
        //     } else if ($_FILES["category_img"]["size"] > 50000000) {
        //         echo 902;
        //         $uploadStatus = 0;
        //     } else if ($uploadStatus == 0) {
        //         echo 903;
        //     } else if (move_uploaded_file($_FILES["category_img"]["tmp_name"], $file_name)) {
        //         unlink($old_filename);

        //     } else {
        //         echo 905;
        //     }
        // } 
    } else {
        echo 1002;
    }
}
// Contact us

if ($_REQUEST['data'] == "contactUs") {
    include '../db/db.inc.php';
    $cus_name   =   $_REQUEST['cus_name'];
    $cus_email  =   $_REQUEST['cus_email'];
    $cus_msg    =   $_REQUEST['cus_msg'];

    $sql = "INSERT INTO `tbl_query` (`cus_name`,`cus_email`,`cus_msg`) VALUES ('$cus_name','$cus_email','$cus_msg')";
    if (mysqli_query($conn, $sql)) {
        echo 1001;
    } else {
        echo 1000;
    }
}
// Approved Query with mailing

if ($_REQUEST['action'] == "approvedQuery") {
    include '../db/db.inc.php';

    // Predefined Message for the mail
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM `tbl_query` WHERE `id` = '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        // $cus_name = $_REQUEST['cus_name'];
        // $pre_msg = "hi there";
        // $pre_msg = wordwrap($pre_msg, 70);
        // $pre_msg = "Hi"."<br><br>"."Dear".$cus_email.","."<br>"."We really appreciate your help, and I know it’s stressful when you’ve got work to do and you’re stuck like this. As your concern has been raised here, Our Team has resolved your issue. I do hope that you won't be facing this problem again."."<br><br>"."Regards,"."<br>"."Sourabh";
        // mail("semaltysourabh@gmail.com", "Concern Resolved", $pre_msg);
        $sql1 = "DELETE FROM `tbl_query` WHERE `id` = '$id'";
        $result1 = mysqli_query($conn, $sql1);
        if ($result1) {
            echo 1000;
        } else {
            echo 1001;
        }
    } else {
        echo 1002;
    }
}

function getCategoryData()
{
    include '../db/db.inc.php';

    $sql = "SELECT * FROM `tbl_categories`";

    $result = mysqli_query($conn, $sql);
    $arr = array();
    while ($row = mysqli_fetch_array($result)) {
        $data['id'] = $row['id'];
        $data['category_name']  = $row['category_name'];
        $data['slug'] = $row['slug'];
        $data['meta_title'] = $row['meta_title'];
        $data['meta_desc'] = $row['meta_desc'];
        $data['category_img'] = $row['category_img'];
        array_push($arr, $data);
    }
    return $arr;
}


function getSubCategoryData()
{
    include '../db/db.inc.php';
    $sql = "SELECT tbl_categories.category_name, tbl_subcategories.sub_category_name, tbl_subcategories.id, tbl_subcategories.sub_category_img_name FROM tbl_categories INNER JOIN tbl_subcategories ON tbl_subcategories.categoryId = tbl_categories.id";

    $result = mysqli_query($conn, $sql);
    $arr1 = array();
    while ($row = mysqli_fetch_array($result)) {
        $data1['id'] = $row['id'];
        $data1['sub_category_name']  = $row['sub_category_name'];
        $data1['category_name']  = $row['category_name'];
        $data1['sub_category_img_name'] = $row['sub_category_img_name'];
        array_push($arr1, $data1);
    }
    return $arr1;
}
function getQueryData()
{
    include '../db/db.inc.php';
    $sql = "SELECT * FROM `tbl_query`";

    $result = mysqli_query($conn, $sql);
    $arr1 = array();
    while ($row = mysqli_fetch_array($result)) {
        $data1['id'] = $row['id'];
        $data1['cus_name']  = $row['cus_name'];
        $data1['cus_email']  = $row['cus_email'];
        $data1['cus_msg'] = $row['cus_msg'];
        array_push($arr1, $data1);
    }
    return $arr1;
}
