<!DOCTYPE html>
<html>
     <head>
        <title>HTMLku</title>
     </head>
     <style>
table, th, td {
  border: 1px solid blue;
  padding: 15px;
}
td {
    text-align: center
}  
    </style>
     <body>
     <a href="Tugas11.php" target="_self"><input type="button" name="+" value="+"></a>
    <table border="1">
	<tr>
	    <th rowspan="2">kode</th>
        <th rowspan="2">nama barang</th>
	    <th rowspan="2">satuan</th>
	     <th colspan="2">harga</th>	   
	    <th rowspan="2">Action</th>	
	</tr>

	<tr>             
	    
	     <td style="width:20%">beli</td>
	     <td style="width:20%">jual</td>

	<tr>
	     <td>M01</td>
         <td>cpu</td>
	     <td>pcs</td>
	     <td>200</td>
	     <td>350</td>
	     <td>
           
		    <a href="Tugas12.php" target="_self"><input type="button" name="E" value="E"></a>
           
	     </td>		
	</tr>

    <tr>
	     <td>M02</td>
         <td>ram</td>
	     <td>pcs</td>
	     <td>300</td>
	     <td>400</td>
	     <td>
         <a href="Tugas12.php" target="_self"><input type="button" name="E" value="E"></a>
	     </td>		
	</tr>

    <tr>
	     <td>M03</td>
         <td>vga</td>
	     <td>pcs</td>
	     <td>400</td>
	     <td>500</td>
	     <td>
         <a href="Tugas12.php" target="_self"><input type="button" name="E" value="E"></a>
	     </td>		
	</tr>
    </table>
     </body>
</html>
