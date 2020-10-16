<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>News - YALE School of Art</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/styles.css" rel="stylesheet">
  </head>
  <body>
    <header>
      <div class="navbar navbar-light bg-light box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <strong>YALE SCHOOL OF ART</strong>
          </a>
            <div>
                <a href=".././about.php" onclick="stop()" >
                    <button class="btn btn-outline-dark">About</button>
                </a>
                <a href=".././history/index.html" onclick="stop()" >
                    <button class="btn btn-outline-dark">History</button>
                </a>
                <a href=".././apply.html" onclick="stop()" >
                    <button class="btn btn-outline-dark">Apply</button>
                </a>
                <a href=".././gallery.html" onclick="stop()" >
                    <button class="btn btn-outline-dark">Gallery</button>
                </a>
                <a href="index.php" onclick="stop()" >
                    <button class="btn btn-outline-dark active">News</button>
                </a>
            </div>
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center" style="background-image:url(images/background.jpg);margin-bottom: 0;">
        <div class="container">
          <div class="wrapper">
             <div class="block-1">
                <img src="./images/news.png" style="width: 516px">
             </div>
             <div class="block-2">
             <img src="./images/newsletter.png" style="width:200px;">
                <form>
                  <div class="form-group blocks">
                    <input type="email" class="form-control" id="inputEmail1" placeholder="Email Address" aria-describedby="emailHelp">
                    <button type="submit" id="newsBtn" class="btn btn-primary">Submit</button>
                  </form>
                 <div class="alert alert-success" role="alert">
                     A simple success alert—check it out!
                 </div>
                  </div>
             </div>
          </div>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <?php
            //SESSION START
            session_start();

            require 'database.php';
            global $newsList;
            foreach ($newsList as $news){
            echo "
            <div class='col-md-4'>
              <div class='card mb-4 box-shadow'><a href='topic.php?id=$news[id]'>
                <img class='card-img-top' src='./images/$news[image]' alt='Card image cap'>
                <div class='card-body'>
                  <p class='card-text'>$news[title]</p>
                  <div class='d-flex justify-content-between align-items-center'>
                    <div class='btn-group'>
                      <button type='button' class='btn btn-sm btn-outline-secondary'>View</button>
                      <button type='button' class='btn btn-sm btn-outline-secondary'>Edit</button>
                    </div>
                    <small class='text-muted'>$news[date]</small>
                  </div>
                </div>
              </div></a>
            </div>";} ?>
          </div>
        </div>
      </div>

    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="./js/vendor/popper.min.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/vendor/holder.min.js"></script>
  </body>
</html>