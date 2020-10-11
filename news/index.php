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
      <div class="collapse bg-light" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">YALE SCHOOL OF ART</h4>
              <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Follow on Twitter</a></li>
                <li><a href="#" class="text-white">Like on Facebook</a></li>
                <li><a href="#" class="text-white">Email me</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-light bg-light box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <strong>YALE SCHOOL OF ART</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center" style="background-image:url(images/background.jpg)">
        <div class="container">
          <div class="wrapper">
             <div class="block-1">
                <img src="./images/news.png" style="width: 360px">
             </div>
             <div class="block-2">
             <img src="./images/newsletter.png" style="width:200px;">
                <form>
                  <div class="form-group blocks">
                    <input type="email" class="form-control" id="inputEmail1" placeholder="Email Address" style="max-width:300px" aria-describedby="emailHelp">
                    <button type="submit" id="newsBtn" class="btn btn-primary">Submit</button>
                  </form>
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
