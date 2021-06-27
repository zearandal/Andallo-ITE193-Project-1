<?php 
require('C:\xampp\htdocs\webtext\pbdb.php');
require('./pbfunctions/pbread.php');

if( isset($_POST['id']) && is_array($_POST['id']) ) {

foreach($_POST['id'] as $id) {

  $querySubmit = "SELECT phonenumber FROM contacts WHERE id = '$id'";
  $sqlSubmit = mysqli_query($connection, $querySubmit);

while ($results =  mysqli_fetch_array($sqlSubmit)){
   
            $ch = curl_init();
            $parameters = array(
                'apikey' => 'a2d7a4124b070b3f2cddff15d1f67e57', //Your API KEY
                'number' => '+63'.$results['phonenumber'],
                'message' => $_POST['message'],
                'sendername' => 'SEMAPHORE'
            );
            curl_setopt( $ch, CURLOPT_URL,'https://semaphore.co/api/v4/messages' );
            curl_setopt( $ch, CURLOPT_POST, 100);

            //Send the parameters set above with the request
            curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $parameters ) );

            // Receive response from server
            curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
            $output = curl_exec( $ch );
            curl_close ($ch);

            //Show the server response
           echo $output;
            } } }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>Bulk SMS</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="\webtext\contactquery\checkbox.js"></script>

      <style type="text/css">

          body{
            background-color: dimgrey;
            background-size: 160%;
            background-position: center left -350px;
            background-attachment: fixed;
          }

          #ui{
            background-color: #292929;
            padding: 30px;
            margin-top: 30px;
            border-radius: 10px;
            opacity: 0.9;
          }

          #ui label, h1{
            color: #fff;
          }

          .u-web,
            {
                font-family:    CSS Font Fallbacks;
            }

            .form-group1 {
                          text-align:center;
                          background-color: #1c1c1c;
                          border: 5px; border-style: double; border-color: black;
                        }

            .form-group1 input{
                          margin: 0 5px 0 10px;
                        }
            .form-group1 label{
                          margin: 0px 9px 0px -8px;
                        }
            .form-control {color: black;}

            .error{color: #FF5733; font-size: 14px; display: none;}

          label[for="inputReceiver"] {

          }

            label[for="college"] {
              font-size: 16px;
          }

      </style>

  </head>

<body>

  <form id="form1" action="" method="post">
      
          <div class="row">
              <div class="col-lg-6 mx-auto">
                  <div id="ui">

                    <h1 class="u-web text-center">SMS Broadcasting Alert</h1>
                    <br>

            <div class="form-group1 text-center">
                <label for="inputReceiver">Recipient:</label>

              <br>

  <table class="table table-dark" style="font-size: 15px;">
  <thead>
    <tr>
      <th scope="col">Check</th>
      <th scope="col">Name</th>
      <th scope="col">Year Level</th>
      <th scope="col">College</th>
      <th scope="col">Phone Number</th>
    </tr>
  </thead>
  <tbody>
     <?php while ($results =  mysqli_fetch_array($sqlAccounts)) { ?>
    <tr>
      <th><input type="checkbox" name="id[]" value="<?php echo $results['id'] ?>" scope="row"></th>
      <td><?php echo $results['name'] ?></td>
      <td><?php echo $results['yearlevel'] ?></td>
      <td><?php echo $results['college'] ?></td>
      <td>+63<?php echo $results['phonenumber'] ?></td>
    </tr>  <?php  } ?>
  </tbody>
  </table>

            </div>

              <br>

            <div class="form-group text-center">
                <label for="inputMessage">Compose Text Message</label>
                <textarea class="form-control" name="message" placeholder="Type Message" style="margin-top: 0px; margin-bottom: 0px; height: 134px; background-color: #363636; color: white; border: 10px; border-style: double; border-color: black;" contenteditable required></textarea>
            </div>    

       <div class="col-md-12 text-center">

          <input type="submit" name="submit" value="SUBMIT" class="btn btn-secondary dropdown-toggle">

       </div>
                  </div>
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