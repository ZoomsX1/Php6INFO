<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['user'])) {
        $user = trim($_POST['user']);
        $pass = trim($_POST['pass']);
    }
?>

<?php include('../header.php'); ?>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Gastenboek</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>" class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" name="user" placeholder="Smartschool ID" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" name="pass" placeholder="Smartschool Password" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Aanmelden</button>
            </form>
        </div><!--/.navbar-collapse -->
    </div>
</nav>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>Hello, Yern!</h1>
        <p>This is a testfile of Bootstrap</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more 'bout bootstrap &raquo;</a></p>
    </div>
</div>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-4">
            <h2>Testing the navbar</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
    </div>
</div> <!-- /container -->
<?php include('../footer.php'); ?>
