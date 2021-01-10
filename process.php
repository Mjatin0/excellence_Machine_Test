<?php include 'db.php';?>
<?php include 'header.php';?>
<?php  
if (isset($_POST['submit'])){
    $fname=strip_tags($_POST['first_name']);
    $lname=strip_tags($_POST['last_name']);
    $email=strip_tags($_POST['email']);
    $dob = ($_POST['dob']);
    $contact =($_POST['contact_number']);
     $designation=strip_tags($_POST['designation']);
    $gender=($_POST['gender']);
    $hobbies=($_POST['hobbies']);

    $ins_sql = "INSERT INTO `user_info`(firstname ,lastname ,email ,dob ,contact, designation ,gender ,hobbies) VALUES('$fname' ,'$lname' ,'$email' ,'$dob' ,'$contact' ,' $designation','$gender' ,'$hobbies')";

    $run_sql=mysqli_query($conn, $ins_sql) or die("Query Failed...");

    echo '<script>alert("Data Saved Successfully")</script>';
     header("location: list.php");
}else {
    echo "Please Check the details you have entered";
}?>
<? include 'footer.php';?>