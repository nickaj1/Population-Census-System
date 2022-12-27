<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration List</title>

    <link rel="stylesheet" type="text/css" href="css/montserrat-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
  <link rel="shortcut icon" href="./GSS.png" type="image/x-icon">

    <link rel="stylesheet" href="css/style.css"/>
    <style>
      #myTable{
  border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
td:nth-of-type(even) {
    background-color: rgba(41, 21, 2, 0.515);
}
td {
  background-color:green;
    color: #ffffff;
     text-align: center;
      height: 40px;
  vertical-align: center;
}
td .active-row {
    font-weight: bold;
    color: #ffffff;
}
.hidden { display:none; }

      table, th, td {
  border: 1px solid black;
}
table {
  border-collapse: collapse;
  width: 80%;
}
        html {
  scroll-behavior: smooth;
}
.btn {
	background: rgb(46, 12, 172);
	border-radius: 25px;
	-o-border-radius: 25px;
	-ms-border-radius: 25px;
	-moz-border-radius: 25px;
	-webkit-border-radius: 25px;
	box-shadow: 0px 6px 17px 0px rgba(0, 0, 0, 0.15);
	-o-box-shadow: 0px 6px 17px 0px rgba(0, 0, 0, 0.15);
	-ms-box-shadow: 0px 6px 17px 0px rgba(0, 0, 0, 0.15);
	-moz-box-shadow: 0px 6px 17px 0px rgba(0, 0, 0, 0.15);
	-webkit-box-shadow: 0px 6px 17px 0px rgba(0, 0, 0, 0.15);
	width: 180px;
	border: none;
	margin: 6px 0 50px 0px;
	cursor: pointer;
	color: rgb(46, 12, 172);
	font-weight: 700;
	font-size: 15px;
}
.btn:hover{
    color: #fff;
}
    </style>
</head>
<body class="form-v10">
	<a href="index.php"><img src="GSS.png" alt=""> </a>

	<div class="page-content">
		<div class="form-v10-content">
        <form class="form-detail" action="#" method="post" id="myform">
				<div class="form-left">
  <center>                <H1 >Verify your Registration</H1></center>
        <div class="form-group">
						<div class="form-row form-row-1">
            <input type="text" name="ghcard" placeholder="Enter your Ghana Card"> <br>
</div>
            <div class="form-group">
						<div class="form-row form-row-1">
            <input type="submit" name="search" value="Search" class="btn"  >
                    </div>
        </form>

		</div>
	</div>
  <?php
     include('config.php');

     if(isset($_POST['search'])){
         $ghcard=$_POST['ghcard'];

         $query="SELECT * FROM reg where ghcard='$ghcard' ";
         $query_run = mysqli_query ($con,$query);
         
        if ($res = mysqli_fetch_assoc($query_run)){
             ?>
  <section id="section-1">
    <center><h1 style="color:green">[Registered]</h1></center>
<center>
    <p><table id="myTable">
       <tr class="header">
        <th>First Name</th>
        <th>Last Name</th>
        <th>Date of Birth</th>
        <th>Gender</th>
        <th>Region</th>
        
        <th>GPS Location</th>
        <th>Ghana card</th>
      </tr>
     
       <tr >
        
          <td><?php echo $res['first_name']; ?></td>
          <td><?php echo $res['last_name']; ?></td>
          <td><?php echo $res['date']; ?></td>
          <td><?php echo $res['gender']; ?></td>
          <td><?php echo $res['region']; ?></td>
          <td><?php echo $res['gps']; ?></td>
          <td><?php echo $res['ghcard']; ?></td>
          
      
        </tr>
        <?php
            }else{
                echo'<script>alert("Data not found in the database");</script>';
            }
        }

        ?>
					
    </Table></p>
    <hr>
    </center>
  </section>
 
</body>
</html>