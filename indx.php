<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class ="container">
  <h1 class='text-primary text-center text-uppercase'>AJAX CRUD OPERATION</h1>
    <div class='d-flex justify-content-end'>
      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">Open modal</button>
    </div>
    <div>
    <h1 class='text-warm'>
    All Record 
    </h1>
    <div class="form-group">
        <label >Email address</label>
        <input type="email" class="form-control" id="Email" placeholder="Enter email">
   
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="email" class="form-control" id="pass" placeholder="Enter pass">
   
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">mobile</label>
        <input type="mobile" class="form-control" id="mobile" placeholder="Enter mobile">
   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" onclick ='addRecord()'>Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      <div class = "">
     

</div>
    <div id='records_contant'>

    </div>
    
    </div>
    <!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">AJAX CRUD OPERATION</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
   
    
      <div class="modal-body">
      <div class="form-group">
        <label >Email address</label>
        <input type="email" class="form-control" id="Email" placeholder="Enter email">
   
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="email" class="form-control" id="pass" placeholder="Enter pass">
   
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">mobile</label>
        <input type="mobile" class="form-control" id="mobile" placeholder="Enter mobile">
   
      </div>
      </div>
   <!-- Modal footer -->
   <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" onclick ='addRecord()'>Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
  
      </div>
    
      
    </div>
  </div>
</div>
  
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type ="text/javascript">

    //Pageload script start

    $(function() {

        readRecord();
      });
    //pageload script end

//total number rows

// function fetch_data(){
//   $.ajax({
//     url: "backend.php",
//     method: "POST",
//     success: function(data) {
//       var rowCount = $('#menu_table_data').html(data).find('tr').length;
//     }
//   });
// }


//total number rows end

   function readRecord(){
     

    var readrecord = "readrecord";
    $.ajax({
         url:"backend.php",
         type:'POST',
         data:{ readrecord : readrecord
        },
        success:function(data){
           $('#records_contant').html(data);
        }
         });
   }
    function addRecord(){
     
      var email2 =$('#Email').val();
      var pass2 =$('#pass').val();
      var mobile2 =$('#mobile').val();
      var insert = "insert";

       $.ajax({
         url:"backend.php",
         type:'POST',
         data:{ email : email2,
          pass : pass2,
          mobile : mobile2,
          insert : insert
          

         },
         success:function(data,status){
           readRecord();
         }
       }
         
       )


    }
    </script>

    </body>
</html>

