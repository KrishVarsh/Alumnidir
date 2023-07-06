<?php

$con = mysqli_connect('localhost', 'id19075547_localhost', 'Jh/NuIPn+Ds}4\o4', 'id19075547_mp');

if ($_POST['action'] == 'insert') {
  mysqli_query($con, "INSERT INTO alumnidir (`name`, `rno`, `gender`, `dept`, `bt`, `yoj`, `yog`, `phoneno`, `email`, `cgpa`, `noo`, `cior`, `cor`, `cd`, `cpow`) VALUES('$_POST[NAME]','$_POST[RNO]','$_POST[GENDER]','$_POST[dept]','$_POST[bt]','$_POST[yoj]','$_POST[yog]','$_POST[PHONENO]','$_POST[MAILID]','$_POST[CGPA]','$_POST[no]','$_POST[cior]','$_POST[cor]','$_POST[cd]','$_POST[cp]')");
  echo "
    <!DOCTYPE html>
    <html>
      <head>
        <title>Contact Records Inserted</title>
        <style>
          body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
          }
          .container {
            max-width: 600px;
            margin: 0 auto;
            padding-top: 50px;
          }
          h1, p {
            text-align: center;
          }
          .button-container {
            display: flex;
            justify-content: center;
            margin-top: 30px;
          }
          button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
          }
          button:hover {
            background-color: #3e8e41;
          }
        </style>
      </head>
      <body>
        <div class='container'>
          <h1>Contact Records Inserted</h1>
          <p>Thank you for submitting your information.</p>
          <div class='button-container'>
            <button onclick='window.location.href=\"index.html\"'>Back to Home</button>
          </div>
        </div>
      </body>
    </html>
  ";
}

?>
