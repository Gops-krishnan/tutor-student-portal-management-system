<?php
// $sql = "SELECT payment_details FROM MyGuests";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }


?>
<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
  </head>
    <style>
      body {
        text-align: center;
        padding: 125px 0;
        background: #EBF0F5;
      }
        h1 {
          color: #88B04B;
          font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
      .button{
        width: auto;
        background: transparent;
        border: none;
        background: red;
        cursor: pointer;
        color: #fff;
        padding: 15px;
        border-radius: 10px;
        font-size: 16pt;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        transition: all 0.35s ease;
  }
    </style>
    <body>
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div>
        <h1>Successfully Paid</h1>
        <!-- <h3>Transaction Number is : </h3> -->
        <input type="submit" name="back_page" onclick = "back_page()" class="button" value="Back" > 
        
      </div>
<script>  
  function back_page() {  
  window.location.assign("http://localhost/tutor/index.php")  
}   
</script> 
    </body>
</html>