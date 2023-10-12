
<?php
include 'inc/header.php';
?>
<div class="card-heading">
    <h2 class="d-flex justify-content-between">Student data <a href="index.php">Add Student Data</a></h2>
   </div>
   <div class="penal-body">
    <form action="lib/process_student.php " method="post">
        <div class="form-grup">
            <label for="name">student name</label>
            <input type="text" class="form-control"name="name"id="name"required="1">
        </div>
        <div class="form-grup">
            <label for="email">student Email</label>
            <input type="text" class="form-control"name="email"id="name"required="1">
        </div>
        <div class="form-grup">
            <label for="phone">student phone</label>
            <input type="text" class="form-control"name="phone"id="name"required="1">
        </div>
        <div class="form-grup">
            <input type="hidden"name="action"value="add"/>
            <input type="submit class=btn btn"name="submit"value="Add student"/>


    </form>
   </div>
   <?php
include 'inc/footer.php';
?>