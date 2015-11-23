<!DOCTYPE html>
<html>

  <head>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Maven+Pro' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="style.css">
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
    
    <div class="container">
      <div class="overlay">
        <h1 class="header">
          <span class="fa-stack">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-fighter-jet fa-stack-1x fa-inverse rotate-45-left"></i>
          </span>
          Darek Bury 
        </h1>
    
        <form class="form-signin" role="form">
          <h3 class="form-signin-heading">Please sign in</h3>
    
          <div class="input-group margin-bottom-sm">
            <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
            <input class="form-control" type="text" placeholder="Username" required autofocus>
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-unlock-alt fa-fw"></i></span>
            <input class="form-control" type="password" placeholder="Password" required>
          </div>
    
          <div>
            <label class="checkbox" title="Check this to have your username saved for the next time you sign in.">
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>
    
        <div class="footer">
          <strong>Version: </strong>0.0.1.1245<em> (<abbr title="This version may have bugs or unfinished features.">&beta;eta</abbr>)</em>
          <span class="pull-right">&copy; 2014 <a href="http://www.google.com" target="_blank" title="Company">Company</a></span>
        </div>
      </div>
    </div> <!-- /container -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  </body>
</html>