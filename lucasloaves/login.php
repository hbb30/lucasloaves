
<!-- dfksdfs -->

<?php
    session_start();
    include("conn.php");
    // $error = '';

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if(isset($_POST['submit']))
    {
        $uname = $_POST['uname'];
        $pword = $_POST['pword'];

        $sql = "SELECT * FROM tbl_user WHERE uname='$uname' AND pword='$pword'";

        if ($result = mysqli_query($conn, $sql)) {
            $rowcount = mysqli_num_rows($result);

            if ($rowcount == 1) {

                $rows = mysqli_fetch_assoc($result);

                    // if($rows->utype == 'admin'){
                    if ($rows['utype'] == 'admin'){
                        header("location: admin/admin-page.php");
                        exit;
                    } else {
                        header("location: non-admin/non-admin-page.php");
                        exit;
                    }
            } else {
                echo "<script>alert('Invalid User!'); window.location='index.php';</script>";
            }
        } else {
            die("Error in SQL query: " . mysqli_error($conn));
        }
    }
?>