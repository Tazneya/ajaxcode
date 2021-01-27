<?php


$servername = "localhost";
$username = "root";
$password = "";
$db = "ajaxcrud";

$conn = mysqli_connect($servername, $username, $password,$db);
 extract($_POST);


//data readkore table e how korbe
 if(isset($_POST['readrecord'])){
          $data = '<table class="table table-hover table-dark">
          
            <tr>
              
              <th >No</th>
              <th >Email</th>
              <th >pass</th>
              <th >Mobile</th>
              <th >Edit action</th>
              <th >Delete action</th>
              
            </tr>';

         $query = "SELECT * FROM crudtable";
$tonni = mysqli_query($conn,$query);
if(mysqli_num_rows($tonni)>0){
    $number =1;
    while($row = mysqli_fetch_array($tonni)){

       $data.= '<tr>
         
          <td>.'$number'.</td>
          <td>.'$row['email'].' </td>
          <td>.'$row['pass'].' </td>
          <td>.'$row['mobile'].' </td>
          <td>.'$row['email'].' </td>
          
          <td>.<button onclick ="Getuserdetails('.$row['id'].')" class ="btn-warning">Edit</button> </td>
          <td>.<button onclick ="Deleteuser('.$row['id'].')" class ="btn-warning">delete</button> </td>
         
        </tr>';
        $number++;
    }
}
$data.='</table>';
echo $data;

}
          


 //data insert korteche 
 if(isset($_POST['insert']))
 {
   //test
     $email = $_POST['email'];
     $pass = $_POST['pass'];
     $mobile = $_POST['mobile'];
     //file_put_contents('tazneya.txt',$email." ".$pass." ".$mobile);
   $query = "INSERT INTO `crudtable`( `email`, `pass`, `mobile`) VALUES ('$email', '$pass', '$mobile' )";
    mysqli_query($conn,$query);
}

 
 
 
 ?>