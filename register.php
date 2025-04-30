<?php



    $name = $_POST['name'];
    $mobile = $_POST['mobile'];

    $password = $_POST['password'];

    $cnfpassword = $_POST['cnfpassword'];
    $address = $_POST['address'];
    $role = $_POST['role'];
    
     $image = $_FILES['photo']['name'];
    
   $tmp_name = $_FILES['photo']['tmp_name'];
      $role = $_POST['role'];
    


    
    if ($password == $cnfpassword) {
    move_uploaded_file(tmp_name,"../upload/$image");

        // Prepare SQL insert query
        $insert = mysqli_query($connect, "INSERT INTO user (name, mobile, password, address, photo, role, status, votes) 
            VALUES ('$name', '$mobile', '$password', '$address', '$image', '$role', 0, 0)");

        // Check if the insert was successful
        if ($insert) {
            echo '<script>
            alert("Registration successful");
            window.location="../";
            </script>';
        }
     else {
            echo '<script>
            alert("There was an issue with registration. Please try again.");
            window.location="../register.html";
            </script>';
        }
    }
     else {
        // Password mismatch
        echo '<script>
        alert("Passwords do not match.");
        window.location="../apiregister.html";
        </script>';
    }

?>
