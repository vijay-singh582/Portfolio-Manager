<!doctype html>
<?php
//error_reporting(E_ERROR|E_PARSE);
		$con = mysqli_connect('localhost','root','');
		if(!$con)
		{
			echo 'Not connected To Server';
		}
		if(!mysqli_select_db($con,'stock'))
		{
			echo 'Database Not Selected';
		}
		if(isset($_POST['insert']))
		{
		$email=$_POST['email'];
		$passw=$_POST['passw'];
		$query = mysqli_query($con,"SELECT * FROM register where Email='$email' AND Password='$passw' limit 1");
		if($query)
		{
				  if(mysqli_num_rows($query)==1)
				  {
					$row=mysqli_fetch_array($query);
					SESSION_start();
					$_SESSION['username']=$row['Name'];
					$_SESSION['id']=$row['S_no'];
					header("Location:http://localhost/learnPHP/index.php");
					//echo '<script type="text/javaScript">alert("login")</script>';
				  }
		         else
		         {echo '<script type="text/javaScript">alert("Email id and password not match")</script>';}
		}
		  else
		         {echo '<script type="text/javaScript">alert("mismatch")</script>';}
		}
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>login</title>
  </head>
  

    
  <body class="text-center" data-new-gr-c-s-check-loaded="14.983.0" oncontextmenu="return false">
      
    <div class="container">
        <form class="form-signin" pb-autologin="true" autocomplete="off" action="" method="POST">
      <img class="mb-4" src="logo1.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please Login</h1>
      <label for="inputEmail"  class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" name="email" pb-role="username">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="" name="passw" pb-role="password">
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="insert" pb-role="submit">Login <br></button>
      <br>
      <a href="signinto.php"> <button type="button" class="btn btn-primary btn-block btn-lg" >
      Sign up</button></a>
      <hr>
      <h6 style="text-align:center">Portfolio Manager Technologies Private Limited
            #51, 3rd Floor, Le Parc Richmonde,
            Richmond Road, Shanthala Nagar,
            Richmond Town, Bangalore - 560025</h6>
      <p class="mt-5 mb-3 text-muted">© 2017-2020 Portfolio Manager</p>
    <passwordboxicon pb-icon="username" icon-type="main" style="display: none; position: absolute; background: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAQCAYAAAAI0W+oAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDE0IDc5LjE1Njc5NywgMjAxNC8wOC8yMC0wOTo1MzowMiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NzU4NUJBRkU1QkVFMTFFNDkyRkVDMDk0Nzk5RDFBMDQiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NzU4NUJBRkQ1QkVFMTFFNDkyRkVDMDk0Nzk5RDFBMDQiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoTWFjaW50b3NoKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjA5M0ZFMjdERDI5NDExRTE5Njc0OTU4Rjk3NzgwODJEIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjA5M0ZFMjdFRDI5NDExRTE5Njc0OTU4Rjk3NzgwODJEIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+MHuEgAAAAWtJREFUeNq8VCFMxEAQ3DZ1RRdfSUBTcg6JwdfjeQsaJCXYDxZ03/+7BtD/BsMLDAFdXebu9r7bpnxLSZhkvr9719vu7uxRVVXUiUlxDUbCjo2vA/qMPvr0M17AI2En7BsFX3xxBIZi7Qk8FvYh+9z+sJHx4EBEMXiHlw+MlalP/M7E+ox9xHvu+Z1B8HT9PM+r+0B0CU5x6DP7FAcu2NYlPAOv4HtzPfpdIFcSIs2Sgy7Bd/DEHO7WMlVKMfRii+rOwVTYqfGNVF2wkbJUW6ZyPCNTwho5Z6j3n7I4HC76Egq4/l0bS5b0XMi75P05B7a46S9dsGXt0WQwKXbwfAVT7tEotFWnG637sDJfbUv0Be6Ba/jm7NsHb50ghojBb1wxdjZWXBo3pB/ggkvnyrbmmYvHDGxomuqC2Ox2zazYeYk3N0emHoTUB6HuUaaWrbWkceXY/7U4eFjHZEQdgRatSzb5kxj+A98CDADG3MBsPyzvawAAAABJRU5ErkJggg==&quot;) right center no-repeat; width: 30px; height: 46px; z-index: 2; visibility: hidden; top: 263.7px; left: 610.8px;"></passwordboxicon><passwordboxicon pb-icon="password" icon-type="main" style="display: none; position: absolute; background: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAQCAYAAAAI0W+oAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDE0IDc5LjE1Njc5NywgMjAxNC8wOC8yMC0wOTo1MzowMiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NzU4NUJBRkU1QkVFMTFFNDkyRkVDMDk0Nzk5RDFBMDQiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NzU4NUJBRkQ1QkVFMTFFNDkyRkVDMDk0Nzk5RDFBMDQiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoTWFjaW50b3NoKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjA5M0ZFMjdERDI5NDExRTE5Njc0OTU4Rjk3NzgwODJEIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjA5M0ZFMjdFRDI5NDExRTE5Njc0OTU4Rjk3NzgwODJEIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+MHuEgAAAAWtJREFUeNq8VCFMxEAQ3DZ1RRdfSUBTcg6JwdfjeQsaJCXYDxZ03/+7BtD/BsMLDAFdXebu9r7bpnxLSZhkvr9719vu7uxRVVXUiUlxDUbCjo2vA/qMPvr0M17AI2En7BsFX3xxBIZi7Qk8FvYh+9z+sJHx4EBEMXiHlw+MlalP/M7E+ox9xHvu+Z1B8HT9PM+r+0B0CU5x6DP7FAcu2NYlPAOv4HtzPfpdIFcSIs2Sgy7Bd/DEHO7WMlVKMfRii+rOwVTYqfGNVF2wkbJUW6ZyPCNTwho5Z6j3n7I4HC76Egq4/l0bS5b0XMi75P05B7a46S9dsGXt0WQwKXbwfAVT7tEotFWnG637sDJfbUv0Be6Ba/jm7NsHb50ghojBb1wxdjZWXBo3pB/ggkvnyrbmmYvHDGxomuqC2Ox2zazYeYk3N0emHoTUB6HuUaaWrbWkceXY/7U4eFjHZEQdgRatSzb5kxj+A98CDADG3MBsPyzvawAAAABJRU5ErkJggg==&quot;) right center no-repeat; width: 30px; height: 46px; z-index: 3; visibility: hidden; top: 308.7px; left: 610.8px;"></passwordboxicon></form>

</div>
   
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>
  
</html>
