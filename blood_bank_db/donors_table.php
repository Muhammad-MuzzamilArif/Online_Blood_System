<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>


	 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
 
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
 
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
 
   <script type="text/javascript" language="javascript">
 
   $(document).ready(function() {
 
     $("#subscribeModal").modal('show');
 
   });
 
   </script>   
 
</head>
 
<body>
 
<div>
 
<h1 class="text-center" > Donor's Registration Data </h1>
 
<!-- Modal -->
 
<div id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 
  <div class="modal-dialog">
 
    <div class="modal-content">
 
      <div class="modal-header">
 
        <button type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
 
        <h4 class="modal-title" id="myModalLabel"> Fill The Required Data</h4>
 
      </div>
 
      <div class="modal-body">
 
      <form class="form-horizontal" role="form">
 
      <div class="form-group">
 
        <label for="name1">Name:</label>
 
        <input type="text" id="name1" autofocus placeholder="Enter Name ">
 
      </div>

<div>
 
 
 
      <div class="form-group">
 
        <label for="email1">Email:</label>
 
        <div class="col-sm-5">
 
          <input type="email" id="email1" placeholder="Enter  Email">
 
        </div>
 
      </div>
 
      <div class="form-group">
 
        <label for="gender1">Gender:</label>
 
        <div class="col-sm-2">
 
        <select class="form-control" id="gender1">
 
          <option value="male">Male</option>
 
          <option value="female">Female</option>
 
        </select>         
 
        </div>
 
      </div>     
 
      <div class="form-group">
 
        <label for=""></label>
 
        <div class="col-sm-5">
 
          <input type="" id="" placeholder="">
 
        </div>
 
      </div>
 
      <div class="form-group">
 
        <label for="password1">Password</label>
 
        <div class="col-sm-5">
 
          <input type="password" id="password1" placeholder="Password">
 
        </div>
 
      </div>
 
      <div>
 
        <label for="address1">Address</label>
 
        <div class="col-sm-5">
 
          <input type="" id="address1" placeholder="Address">
 
        </div>
 
      </div>            
 
      
      <div class="form-group">
 
        <div class="col-sm-offset-2 col-sm-10">
 
          <button type="submit">Register</button>
 
        </div>
 
      </div>



 
    </form>
 
      </div>
 
      <div class="modal-footer">
 
        <button type="button" data-dismiss="modal">Close</button>
 
        <button type="button">Subscribe</button>
 
      </div>
 
    </div>
 
  </div>
 
</div>
 
</div>
 

</body>
</html>