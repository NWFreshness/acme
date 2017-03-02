@extends('base')

@section('browsertitle')Acme: Register
@stop

  
  @section('content')
   <h1>Register</h1>
   
   <?php
    if(isset($_SESSION['msg'])){
        ?>
        <div class="alert alert-danger" role="alert">
            <ul>
                <?php
                    foreach($_SESSION['msg'] as $name => $value){
                        ?>
                        <li><?php echo $value; ?></li>
                    <?php } ?>


            </ul>
        </div>
        <?php
        unset($_SESSION['msg']);
    }
    ?>

   <hr>
    <form class="form-horizontal" id="registerform" name="registerform" action="/register" method="post" novalidate>
     <div class="form-group">
        <label for="first_name" class="col-sm-2 control-label">First Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control required" id="first_name" name="first_name" placeholder="First name">
        </div>
      </div>
      <div class="form-group">
        <label for="last_name" class="col-sm-2 control-label">Last Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control required" id="last_name" name="last_name" placeholder="Last name">
        </div>
      </div>
      <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control required email" id="email" name="email" placeholder="user@example.com">
        </div>
      </div>
      <div class="form-group">
        <label for="verify_email" class="col-sm-2 control-label">Verify Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="verify_email" name="verify_email" placeholder="user@example.com">
        </div>
      </div>
      <div class="form-group">
        <label for="password" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <label for="verify_password" class="col-sm-2 control-label">Verify Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="verify_password" name="verify_password" placeholder="Password">
        </div>
      </div>
      <hr>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-primary">Register</button>
        </div>
      </div>
    </form>
    
 @stop
 
@section('bottomjs')
<script>
    $(document).ready(function(){
        
        $("#registerform").validate({
            rules:{
                verify_email: {
                    required: true,
                    email: true,
                    equalTo: "#email"
                },
                verify_password: {
                    required: true, 
                    equalTo: "#password"
                }
            }
        });
    });

</script>
@stop