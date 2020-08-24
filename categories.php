<?php
include 'header.php';
include 'adminfunction.php';
$getUserData = getCategoryData();
$getSubUserData = getSubCategoryData();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
</head>

<body>
    <div class="error-box">
        <span id="error"></span>    
    </div>
    <div id="imagePreview"></div>
    <div class="manageCategory">
        <form class="forms" name="insertCategory">
            <div class="box1">
                <h3>Manage Category</h3>
                <label>
                    <input type="hidden" name="cat_id" id="cat_id" value="">
                </label>
                <label>
                    <span>Category</span>
                    <input id="cat_name" class="inputbox" type="text" name="category_name" placeholder="Enter Category Name" value="<?php echo $data['category_name'];?>">
                </label>
                <label>
                    <span>Category Image(Image size should be less than 200kb)</span>
                    <input id="cat_img" type="file" name="category_img" />
                    <img name="cat_oldimg" id="cat_oldimg" hidden/>
                </label>
                <label>
                    <span>Slug*</span>
                    <input id="cat_slug" type="text" placeholder="Slug" name="slug" />
                </label>
                <label>
                    <span>Meta Title*</span>
                    <input id="cat_meta" type="text" placeholder="Enter Meta Title" name="meta_title" />
                </label>
                <label>
                    <span>Meta Desc*</span>
                    <input id="cat_desc" type="text" placeholder="Enter Meta Desc" name="meta_desc" />
                </label>
                <input type="submit" name="submit" class="primary-btn formbtn" value="submit" />
                <input type="submit" name="update" class="secondary-btn formbtn" value="update"/>
            </div>
            <div class="box1 tablerow">
                <!-- table of whole data -->
                <table>
                    <tr>
                        <th>Id</th>
                        <th>Category Name</th>
                        <th>Slug</th>
                        <th>Meta Title</th>
                        <th>Meta Description</th>
                        <th>Image</th>
                        <th>Edit Option</th>
                    </tr>
                    <?php

                    foreach ($getUserData as $userData) {
                    ?>

                        <tr>
                            <td><?php echo $userData['id'] ?></td>
                            <td><?php echo $userData['category_name'] ?></td>
                            <td><?php echo $userData['meta_title'] ?></td>
                            <td><?php echo $userData['slug'] ?></td>
                            <td><?php echo $userData['meta_desc'] ?></td>
                            <td><?php echo $userData['category_img'] ?></td>
                            <td><button class="primary-btn" onclick="return deleteData('<?php echo $userData['id']; ?>','<?php echo $userData['category_img']; ?>')">Delete</button></td>
                            <td><button class="primary-btn" onclick="return editData(<?php echo $userData['id'];?>)">Edit</button></td>
                        </tr> <?php
                            } ?>
                </table>
            </div>
        </form>
        
        <!---------------------------
         Insert Sub Category FOrm
        ---------------------------- -->
        <form class="forms" name="insertSubCategory">
            <div class="box1" >
                <h3>Manage Sub-Category</h3>
                <label>
                    <span>Select Category*</span>
                    <select class="custom-select" name="category_id">
                        <option value="">Select the Sub Category</option>
                        <?php
                        foreach ($getUserData as $userData) {
                        ?><option value="<?php echo $userData['id'] ?>"><?php echo $userData['category_name']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </label>
                <label>
                    <span>sub Category*</span>
                    <input class="inputbox" name="subCategory" type="text" placeholder="Enter Sub Category Name">
                </label>

                <label>
                    <span>Sub Category Image*</span>
                    <input type="file" name="sc_img">
                </label>
                <input type="submit" name="submit" class="primary-btn formbtn" value="submit" />
            </div>
            <div class="box1 tablerow">
                <!-- table of whole data -->
                <table>
                    <tr>
                        <th>Id</th>
                        <th>Category Name</th>
                        <th>Sub Category</th>
                        <th>Sub Category Image</th>
                        <th>Edit Option</th>
                    </tr>
                    <?php
                    foreach ($getSubUserData as $userData) {
                    ?>
                        <tr>
                            <td><?php echo $userData['id'] ?></td>
                            <td><?php echo $userData['category_name'] ?></td>
                            <td><?php echo $userData['sub_category_name'] ?></td>
                            <td><?php echo $userData['sub_category_img_name'] ?></td>
                            <td><button class="primary-btn" onclick="return deleteSd('<?php echo $userData['id']; ?>','<?php echo $userData['sub_category_img_name'];?>');">delete</button></td>
                        </tr> <?php
                            } ?>
                </table>
            </div>
        </form>
    </div>






</body>
<script src="res/main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="res/admin.js"></script>