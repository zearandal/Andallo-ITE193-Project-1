<?php
  
  require('C:\xampp\htdocs\webtext\pbdb.php');

  if (isset($_POST['edit'])) {
    $editid = $_POST['editid'];
    $editname = $_POST['editname'];
    $edityearlevel = $_POST['edityearlevel'];
    $editcollege = $_POST['editcollege'];
    $editphonenumber = $_POST['editphonenumber'];
  }

   if (isset($_POST['update'])) {
    $updateid = $_POST['updateid'];
    $updatename = $_POST['updatename'];
    $updateyearlevel = $_POST['updateyearlevel'];
    $updatecollege = $_POST['updatecollege'];
    $updatephonenumber = $_POST['updatephonenumber'];

    $queryUpdate = "UPDATE contacts SET name = '$updatename', yearlevel = '$updateyearlevel', college = '$updatecollege', phonenumber = '$updatephonenumber' WHERE id = '$updateid'";
    $sqlUpdate = mysqli_query($connection, $queryUpdate);

    echo '<script>alert("Contact Updated! Press ok")</script>';
    echo '<script>window.location.href = "/webtext/phonebook.php"</script>';
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>UPDATE USER</title>

          <style type="text/css">
                      ::placeholder 
                      {
                        color: white;
                        opacity: 0.6;
                      }
                      form .form-control::-webkit-input-placeholder 
                      { 
                        color: white;
                        opacity: 0.6;
                      }
                      .ED { float:left; width:25%;}

          </style>

</head>

<body>

       <form class="update-main" action="\webtext\pbfunctions\pbupdate.php" method="post">
     <h3>UPDATE USER</h3>
      <div class="form-row align-items-center">
        <div class="col-sm-3 my-1 required">
          <input type="text" class="form-control text-white bg-dark" name="updatename" value="<?php echo $editname ?>" placeholder="Full Name" id="inlineFormInputName" required>
        </div>

  <div>
    <select name="updateyearlevel" value="<?php echo $edityearlevel ?>" class="form-control text-white bg-dark">
  <option><?php echo $edityearlevel ?></option>
  <option>1st Year</option>
  <option>2nd Year</option>
  <option>3rd Year</option>
  <option>4th Year</option>
  <option>5th Year</option>
    </select>
   </div>

    <div>
    <select name="updatecollege" value="<?php echo $editcollege ?>" class="form-control text-white bg-dark">
  <option><?php echo $editcollege ?></option>
  <option>CBA&A</option>
  <option>CNSM</option>
  <option>COA</option>
  <option>COEd</option>
  <option>COEng</option>
  <option>COF</option>
  <option>CSSH</option>
  <option>SHS</option>
    </select>
   </div>

    <div class="col-sm-3 my-1">
      <label class="sr-only" for="inlineFormInputGroupUsername"></label>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text text-white bg-dark">+63</div>
        </div>
       <input id="phonenum" class="text-white bg-dark" name="updatephonenumber" value="<?php echo $editphonenumber ?>" type="tel" placeholder="9*********" pattern="[9][0-9]{9}" required >
       <input type="submit" name="update" value="UPDATE" class="btn btn-success dropdown-toggle">
       <input type="hidden" name="updateid" value="<?php echo $editid ?>" class="btn btn-success dropdown-toggle">
      </div>
    </div>

  <div class="col-auto my-1">
   
  </div>

  </div>
</form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>