<?php include 'db.php'?>
<?php include 'header.php'?>
<div class="jumbotron">
    <h2 class="text-center text-capitalize">User Info List</h2>
</div>
<div class="container-fluid">
    <table class="table table-striped">
        <thead>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email_Address</th>
        <th>Date of Birth</th>
        <th>Contact Number</th>
        <th>Designation</th>
        <th>Gender</th>
        <th>Hobbies</th>
        </thead>
        <tbody>

        <?php
        $sql = "SELECT * FROM user_info";
        $run_sql = mysqli_query($conn,$sql);
        while($rows = mysqli_fetch_array($run_sql)) {

            echo '<tr>
<td>'.$rows['firstname'] . '<br></td>
<td>'.$rows['lastname'] . '<br></td>
<td>'.$rows['email'] . '<br></td>
<td>'.$rows['dob'] . '<br></td>
<td>'.$rows['contact'] . '<br></td>
<td>'.$rows['designation'] . '<br></td>
<td>'.$rows['gender'] . '<br></td>
<td>'.$rows['hobbies'] . '<br></td>
</tr>';
        }
        ?>
        </tbody>
    </table>
</div>
<? php include 'footer.php';?>