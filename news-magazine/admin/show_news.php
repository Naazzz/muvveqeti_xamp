<?php 
include("database.php");
$sql="select * from news";
$query=mysqli_query($connect,$sql);
 ?>
 <html>
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	
<table border="1" style="width:100%">
  <tr>
    	<td>id</td>
	    <td>title</td>
	    <td>date</td>
	    <td>body</td> 
  </tr>

<?php  while ($row=mysqli_fetch_assoc($query)){ ?>
  <tr>

		<td><?php  echo $row["id"]?></td>
		<td><?php  echo $row["title"]?></td>
		<td><?php  echo $row["date"]?></td>
		<td><?php  echo $row["body"]?></td>
		<td><a href="edit.php?id=<?php echo $row['id'] ?>"> edit </a> </td>
		<td><a href="delete.php?id=<?php echo $row["id"] ?>">delete </a></td>

  </tr>
  <?php } ?>
</table>

 </body>
 </html>