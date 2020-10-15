<html>
<head>
<title>welcome</title>
<style type="text/css">
body{
    background: rgb(238,174,202);
background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
}
table  {

 border-collapse: collapse;
    width: 100%;
    color: #588c7e;
    font-family: monospace;
    font-size: 25px;
    text-align: left;
    width: 43%;
    margin-left: 0%;
    height: 43%;
    top: 23%;
    position: absolute;
    
}
th{
    background-color:darkviolet;
    color: white;
    border-radius: 10px;
}
tr:nth-child(even){
    background-color:#f2f2f2;
}
#container2{
    position: absolute;
    right: 26%;
    width: 26%;
    height: 31%;
    top: 26%;
    border-collapse: collapse;
    border-radius: 24px;
    box-shadow: 2px 5px 9px #5c5d7b;
}
#id{
    position: absolute;
    left: 39px;
    color: darkmagenta;
    font-family: monospace;
    font-size: 25px;
    top: 24%;
}
#idf{
    color: #588c7e;
    font-family: monospace;
    font-size: 18px;
    position: absolute;
    right: 77px;
    top: 24%;
    border: none;
    border-radius: 10px;
}
#name1{
    position: absolute;
    left: 39px;
    color: darkmagenta;
    font-family: monospace;
    font-size: 25px;
    top: 42%;
}
#name2{
    color: #588c7e;
    font-family: monospace;
    font-size: 18px;
    position: absolute;
    right: 77px;
    top: 42%;
    border: none;
    border-radius: 10px;
}
#h1{
    color: lightcyan;
    margin-left: -64%;
    margin-top: 2%;
}

#h2{
    color: lightcyan;
    margin-left: 20%;
    margin-top: -4%;
}
#sub{
    position: absolute;
    top: 64%;
    right: 40%;
    border: none;
    border-radius: 10px;
    padding: 5px 30px;
    color: whitesmoke;
    background-color: dodgerblue;
}
#userh{
    margin-left: 35%;
}
#logout{
    text-decoration: none;
    font-size: 22px;
    font-weight: bold;
    margin-left: 90%;
    box-shadow: 2px 5px 9px #5c5d7b;
    padding: 5px 12px;
    border-radius: 15px;
    color: whitesmoke;
}
</style>
</head>
<body>
<h1 id="userh">DASHBOARD</h1>
<a id="logout" href="logout.php">Logout</a>
<center>
<h1 id="h1">Products</h1>
<h1 id="h2">Add Products</h1>
<div class="continer">
<table>
<tr>
<th>ID</th>
<th>Product Name</th>
<br>
</div>

<div id="container2">
<form action="functions.php" method="post">
<lable id="id">ID:</lable>
<input id="idf" type="text" name="id"><br><br>

<lable id="name1">Name</lable>
<input id="name2" type="text" name="name"><br><br>
<input id="sub" type="submit" name="submit">
</form>

</div>
<?php
$connection = mysqli_connect("localhost","root","","havi");
if ($connection-> connect_error){
    die("connection failed:". $connection-> connect_error);
}
$sql = "SELECT * from product";
$result = $connection-> query($sql);
if($result-> num_rows > 0){
    while($row = $result-> fetch_assoc()){
    echo "<tr><td>". $row["id"]."</td><td>". $row["name"]. "</td></tr>";

    }
    echo"</table>";
     
}
else{
    echo "0 result";
}
$connection-> close();
?>


</table>
</body>
</html>

