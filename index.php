<!DOCTYPE html>
<html>
<head>
	<title>Mock Test</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/pagination1.0/library1.0.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">

</head>
<body>
    <center>
	<div class="container" style="width: 100%;">
        
        <div class="row">
                                                      
                            <div class="" id="main_div" style="width: 65%;">

                               <div class="" style="margin-top: 50px;">

                                    <table class="table table-bordered table-hover" id="Search_n_page">
                                        
                                        <thead>
                                            
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Gender</th>

                                        </thead>
                                        <tbody>
                                                    <?php
                                                        session_start();
                                                        $conn = mysqli_connect("localhost","root","","Mock_test_db");
                                                        $sql_Fech = "SELECT * FROM mock_test_tbl";
                                                        $result = $conn->query($sql_Fech);

                                                        if ($result->num_rows > 0) {

                                                                 while($row = $result->fetch_assoc()) {

                                                                    ?>
                                                                    <tr>
                                                                    <td><?php echo $row['Id']; ?></td>
                                                                    <td><?php echo $row['Name']; ?></td>
                                                                    <td><?php echo $row['Email']; ?></td>
                                                                    <td><?php echo $row['Phone']; ?></td>
                                                                    <td><?php echo $row['Gender']; ?></td>
                                                                    </tr>
                                                                    <?php

                                                                 }


                                                        }

                                                        ?>
                                      
                                            
                                        
									</tbody>

                                    </table>
                                    
                                </div>
                            </div>

                  

        </div>
    </div>

 </center>


 <script type="text/javascript">
    
    $(document).ready( function () {
    $('#Search_n_page').DataTable();
} );

</script>
    <script type="text/javascript" src="js/frontend.js"></script>
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>


</body>
</html>
