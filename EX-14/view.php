<html>
		<style>       
hr.new1 {
  border: 1px solid black;
}
</style>

	<title>MPTI</title>
	
</head>

<body>
<body style="background-color:#ffffd5;">


	<center>
		
		<h1 style=>Muthayammal Polytechnic Institution</h1>
		<hr class="new1">
		<hr class="new1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		</center>
						&nbsp;
				&nbsp;
					&nbsp;
		<font face="cinzel" size="3">
		<hr>
		<a href="insert.php">insert</a>
		
		
		</font>
		<center>
		<hr>
</body>

</html>
<?php
mysql_select_db('staff',mysql_connect('localhost','root',''));
?>
<html>
<body>
<table border="1">
<?php
$books_query=mysql_query("select * from college");
while($books_rows=mysql_fetch_array($books_query)){
?>
<table border=1px>
  <tr>
    <th>First name</th>
    <th>Last name</th>
    <th> Gender</th>
    <th>Event name</th>
    <th>College name</th>
    <th>Phone number</th>
    <th>Address</th>
    <th>Email Id</th>
  </tr>
<tr>
<td><?php echo $books_rows['first_name'] ; ?></td>
<td><?php echo $books_rows['last_name'] ; ?></td>
<td><?php echo $books_rows['gender'] ; ?></td>
<td><?php echo $books_rows['cname'] ; ?></td>
<td><?php echo $books_rows['ename'] ; ?></td>
<td><?php echo $books_rows['pnum'] ; ?></td>
<td><?php echo $books_rows['address'] ; ?></td>
<td><?php echo $books_rows['email'] ; ?></td>
<td><a href="delete.php">Delete</td>
</tr>
<?php }?>
</table> 
</body>
</html>