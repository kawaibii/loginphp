<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link type="text/css" href="/phpmvc/mvc/public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="/phpmvc/mvc/public/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="/phpmvc/mvc/public/css/theme.css" rel="stylesheet">
    <link type="text/css" href="/phpmvc/mvc/public/images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="module module-login span4 offset4">
                <form class="form-vertical" method="post" action="actionlogin.php">
                    <div class="module-head">
                        <h3>Sign In</h3>
                    </div>
                    <div class="module-body">
                        <div class="control-group">
                            <div class="controls row-fluid">
                                <input class="span12" type="email" id="inputEmail" placeholder="Email" name="email" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls row-fluid">
                                <input class="span12" type="password" id="inputPassword" placeholder="Password" name="password" required>
                            </div>
                        </div>
                    </div>
                    <div class="module-foot">
                        <div class="control-group">
                            <div class="controls clearfix">
                                <button type="submit" class="btn btn-primary pull-right">Login</button>
                                <label class="checkbox">
                                    <input type="checkbox" name ="remember"> Remember me
                                </label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><!--/.wrapper-->
</body>
