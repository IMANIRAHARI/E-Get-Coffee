<?php
    session_start();
    include_once "config.php";
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $loc = mysqli_real_escape_string($conn, $_POST['loc']);
    $coffee = mysqli_real_escape_string($conn, $_POST['coffee']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $cups = mysqli_real_escape_string($conn, $_POST['cups']);
    if(!empty($username) && !empty($phone) && !empty($loc) && !empty($coffee) && !empty($email) && !empty($cups)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $sql = mysqli_query($conn, "SELECT * FROM client WHERE c_email = '{$email}'");
            $insert_query = mysqli_query($conn, "INSERT INTO client (c_name, c_email, c_location, c_telephone, c_coffee_name, c_cups)
            VALUES ('{$username}','{$email}', '{$loc}', '{$phone}', '{$coffee}', '{$cups}')");
            if($insert_query){
                $select_sql2 = mysqli_query($conn, "SELECT * FROM client WHERE c_telephone = '{$phone}'");
                if(mysqli_num_rows($select_sql2) > 0){
                    $result = mysqli_fetch_assoc($select_sql2);
                    $_SESSION['c_id'] = $result['c_id'];
                    echo "success";
                }else{
                    echo "This email address not Exist!";
                }
            }else{
                echo "Something went wrong. Please try again!";
            }

        }else{
            echo "$email is not a valid email!";
        }
    }else{
        echo "All input fields are required!";
    }
?>