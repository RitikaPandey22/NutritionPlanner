<html>
<head>
    <title>User Log</title>
   <style>
    body{
        background-image: url('https://images.unsplash.com/photo-1517856497829-3047e3fffae1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1169&q=80');
}
table, td, th {  
  border: 2px solid #ddd;
  border-color:#7F8487;
  
  text-align: left;
  font-size: 16px;
}

table {
  border-collapse: collapse;
 
  width: 1100px;
}

th, td {
  padding: 15px;
}
.btn{
    width: 10%;
    height: 5%;
    font-size: 22px;
    padding: 0px;
}

input::placeholder {
    font: 15px/3 sans-serif;
}

input[type=text] {
  width: 200PX;
  padding: 6px 8px;
  margin: 8px 0;
  box-sizing: border-box;
}
h1 {
  margin-top: 100px;
  margin-right: 100px;
  margin-left: 100px;
  
}

.btn {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
   </style>
</head>
<body>
    <center>
     <h1>USER LOG</h1>
     <h2>Nutrition Plan</h2>
     
     <div class="container">
       
        <table>
                        <tr>
                            <th>ID </th>
                            <th>Name  </th>
                            <th>Email  </th>
                            <th>Password   </th>
                            <th>Status </th>
                             
                        </tr> <br>
                    <?php
                    $connection = mysqli_connect("localhost","root","");
                    $db= mysqli_select_db($connection,'nutrition_db');
                    
                    
                    {
                        
                        $query= "SELECT * FROM `log` ";
                        $query_run=mysqli_query($connection,$query);


                        while($row = mysqli_fetch_array($query_run))
                        {
                            ?>
                            <tr>
                                <td> <?php echo  $row['id']; ?> </td>
                                <td> <?php echo  $row['name']; ?> </td>
                                <td> <?php echo  $row['email']; ?> </td>
                                <td> <?php echo  $row['password']; ?> </td>
                                <td> <?php echo  $row['status']; ?> </td>
                            </tr>

                            <?php
                        }
                    }
                    ?>
                  
        </table>
     </div>
    </center>
</body>    
</html>