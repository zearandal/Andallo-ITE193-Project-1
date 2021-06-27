<?php
  
  require('./pbfunctions/pbread.php');
  require('./pbfunctions/pbcreate.php');
  require('./pbfunctions/pbdelete.php');

  require('C:\xampp\htdocs\webtext\pbdb.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>University PhoneBook</title>

          <style type="text/css">

          body {background-color: dimgrey;}
          
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

     <form class="create-main" action="./pbfunctions/pbcreate.php" method="post">
     
      <div class="form-row align-items-center">
        <div class="col-sm-3 my-1 required">
          <input type="text" class="form-control text-white bg-dark" name="name" placeholder="Full Name" id="inlineFormInputName" required>
        </div>

  <div>
    <select name="yearlevel" class="form-control text-white bg-dark">
  <option>1st Year</option>
  <option>2nd Year</option>
  <option>3rd Year</option>
  <option>4th Year</option>
  <option>5th Year</option>
    </select>
   </div>

    <div>
    <select name="college" class="form-control text-white bg-dark">
  <option>CoA</option>
  <option>CBA&A</option>
  <option>CoEd</option>
  <option>CoEng</option>
  <option>CoF</option>
  <option>CNSM</option>
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
       <input id="phonenum" class="text-white bg-dark" name="phonenumber" type="tel" placeholder="9*********" pattern="[9][0-9]{9}" required >
       <input type="submit" name="create" value="CREATE" class="btn btn-success dropdown-toggle">
      </div>
    </div>

  <div class="col-auto my-1">
   
  </div>

  </div>
</form>

<br>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Year Level</th>
      <th scope="col">College</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($results =  mysqli_fetch_array($sqlAccounts)) { ?>
    <tr>
      <th scope="row"><?php echo $results['id'] ?></th>
      <td><?php echo $results['name'] ?></td>
      <td><?php echo $results['yearlevel'] ?></td>
      <td><?php echo $results['college'] ?></td>
      <td>+63<?php echo $results['phonenumber'] ?></td>
      <td>
        <form class="ED" action="./pbfunctions/pbupdate.php" method="post">
          <input type="submit" name="edit" value="EDIT" class="btn btn-info dropdown-toggle">
           <input type="hidden" name="editid" value="<?php echo $results['id'] ?>" class="btn btn-danger dropdown-toggle">
           <input type="hidden" name="editname" value="<?php echo $results['name'] ?>" class="btn btn-danger dropdown-toggle">
           <input type="hidden" name="edityearlevel" value="<?php echo $results['yearlevel'] ?>" class="btn btn-danger dropdown-toggle">
           <input type="hidden" name="editcollege" value="<?php echo $results['college'] ?>" class="btn btn-danger dropdown-toggle">
           <input type="hidden" name="editphonenumber" value="<?php echo $results['phonenumber'] ?>" class="btn btn-danger dropdown-toggle">
          </form>
          <form class="ED" action="./pbfunctions/pbdelete.php" method="post">
          <input type="submit" name="delete" value="DELETE" class="btn btn-danger dropdown-toggle">
          <input type="hidden" name="deleteid" value="<?php echo $results['id'] ?>" class="btn btn-danger dropdown-toggle">
        </form>
      </td>
    </tr> 
  <?php  } ?>
  </tbody>
  </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>