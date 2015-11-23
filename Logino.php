<!DOCTYPE html>
<html>

  <head>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Maven+Pro' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="stylelogino.css">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  </head>

  <body>
    <!--This is hidden/shown automatically after Durandal loads. -->
    <div class="container" style="display: none;">
      <div class="overlay loading">
        <i class="fa fa-spinner fa-5x fa-spin"></i><br/>
        <h1>Loading...</h1>
      </div>
    </div>
    
    <div class="container1">
      <div class="overlay">
        <h1 class="header">
          <span class="fa-stack">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-fighter-jet fa-stack-1x fa-inverse rotate-45-left"></i>
          </span>
          Abonent
        </h1>
    
          <form class="form-signin" action=CheckLogin.php >
          <h3 class="form-signin-heading">Zaloguj się</h3>
    
          <div class="input-group margin-bottom-sm">
            <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
            <input class="form-control" name="login" type="text" placeholder="Login" required autofocus>
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-unlock-alt fa-fw"></i></span>
            <input class="form-control" type="password" name="haslo" placeholder="haslo" required>
          </div>
          <p></p>
           <!--<div>
            <label class="checkbox" title="Check this to have your username saved for the next time you sign in.">
             <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div>-->
           <input class="btn btn-lg btn-primary btn-block" type="submit" value="Logowanie">
         <!-- <button class="btn btn-lg btn-primary btn-block" type="submit">Logowanie</button>-->
        </form>
         
        <div class="footer">
            <p>&nbsp;</p>
          <span class="pull-right">&copy; 2014 <a href="http://www.google.com" target="_blank" title="Company">Darek Bury Programming</a></span>
        </div>
      </div>
    </div> <!-- /container -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  </body>
</html>