<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('broswertitle')</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/styles.css" type="text/css">
    
    @yield('css')
    
</head>
<body>
@include('topnav')

@yield('outsidecontainer')

  <div class="container">
    <div class="row">
        <br><br>
        @include('errormessage')
    </div>   
    @yield('content')
    
  </div>
    
    <div class="row footer-background">
        <div class="col-md-3 margin-left-5px">
           <div class="padding-left-8px">
                <h4>Contact Us</h4>
                123 Main St.<br>
                Cannon Beach, OR<br>
                32345<br>
                1.503.555.5555
            </div>
        </div>
        <div class="col-md-6">
            
        </div>
        <div class="col-md-3">
            <img src="/assets/map-small.png" class="pull-right" alt="map">
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    @yield('bottomjs')
   
</body>


</html>