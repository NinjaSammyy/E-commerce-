<?php
include './header.php';
include './adminfunction.php';

$getQueryData = getQueryData();
// print_r($getQueryData);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Queries</title>
</head>

<body>
    <div class="msg_underoverlay">
        <div class="popup">
            <h3 class="popup_head">Message!</h3>
            <span class="popup_msg">hi there</span>
        </div>
    </div>
    <div class="box1 tablerow">
        <!-- table of whole data -->
        <table>
            <tr>
                <th>Id</th>
                <th>Customer Name</th>
                <th>Customer Email</th>
                <th>Customer Message</th>
                <th>Operation</th>
            </tr>
            <?php
            foreach ($getQueryData as $data) {
            ?>
                <tr>
                    <td><?php echo $data['id']; ?></td>
                    <td><?php echo $data['cus_name']; ?></td>
                    <td><?php echo $data['cus_email']; ?></td>
                    <td><?php echo $data['cus_msg']; ?></td>
                    <td><button class="primary-btn" onclick="return approvedQuery('<?php echo $data['id']; ?>','<?php echo $data['cus_email'] ?>','<?php echo $data['cus_name']; ?>];?>')">Approved</button></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>

    <!-- Scripts -->

    <script src="../res/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../res/admin.js"></script>
</body>

</html>