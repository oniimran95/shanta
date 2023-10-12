
<?php
include 'inc/header.php';
?>



  <div class="card-body">
   <div class="card-heading">
    <h2 class="d-flex justify-content-between">Student data <a href="addstudent.php">Add Student Data</a></h2>
   </div>
   <div class="penal-body">
   <table class="table table-striped">
      <tr>
        <th>Serial</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Action</th>
      </tr>
      <tr>
        <td>01</td>
        <td>Ariful Islam</td>
        <td>ariful@gmail.com</td>
        <td>0555-5899999</td>
        <td>
           <a class="btn btn-default" href="editstudent.php?id=1">Edit</a>
           <a class="btn btn-danger" href="deletestudent.php?id=1" onclick="return confirm('Are you sure to Delete?')">Delete</a>
        </td>
      </tr>
      <tr>
        <td>02</td>
        <td>Delowar j Imran</td>
        <td>imran@gmail.com</td>
        <td>0555-5899999</td>
        <td>
        <a class="btn btn-default" href="editstudent.php?id=1">Edit</a>
           <a class="btn btn-danger" href="deletestudent.php?id=1" onclick="return confirm('Are you sure to Delete?')">Delete</a>
        </td>
      </tr>
      <tr>
        <td>03</td>
        <td>Mohammad Kawser</td>
        <td>kawser@gmail.com</td>
        <td>0555-5899999</td>
        <td>
        <a class="btn btn-default" href="editstudent.php?id=1">Edit</a>
           <a class="btn btn-danger" href="deletestudent.php?id=1" onclick="return confirm('Are you sure to Delete?')">Delete</a>
        </td>
      </tr>
   </table>
  </div>
           
   <?php
include 'inc/footer.php';
?>