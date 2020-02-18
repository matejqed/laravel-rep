<!DOCTYPE html>
<html lang="en">

<head>
    <title>Static page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="stylesheet" type="text/css" href="CSS/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script defer src="JS/main.js"></script>
    <script defer src="JS/bootstrap-validate.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#homepage">Homepage</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#news">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/todos.index">My App</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="jumbotron jumbotron-fluid hero" id="homepage" data-target="#homepage">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12 text-center text-light my-auto">
                    <h1 class="display-4">Fluid jumbotron</h1>
                    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
                    <button id="modalBtn" type="button" class="btn btn-light">Click for Happy New Year!</button>


                </div>
            </div>
        </div>
    </div>

    <div class="padding" id="news" data-target="#news">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="images/slack.jpg" alt="slika">
                </div>
                <div class="col-sm-6 text-center my-auto">
                    <h2>This is the news title</h2>
                    <p>lorem ipsum dolor sit amet consectetur adipiscing elit. Sed interdum metus et ligula venantis, at rhoncus nisi molestie.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="fixed">

    </div>

    <div class="padding" id="about" data-target="#about">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <h4>About us heading 1</h4>
                    <p>content content content text content</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <img src="images/coffee.jpg" class="img-responsive">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <h4>About us heading 2</h4>
                    <p>content content content text content</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <img src="images/coffee.jpg" class="img-responsive">
                </div>
            </div>
        </div>
    </div>

    <footer class="container-fluid text-center">
        <div class="row">
            <div class="col-sm-4">
                <h3>Find us here</h3>
                <br>
                <h4>Zagreb, Croatia</h4>
                <h4>10 000 Zagreb</h4>

            </div>

            <div class="col-sm-4 text-left">
                <h3>Contact Us</h3>
                <div id="error"></div>
                <form id="form" action="/" method="GET">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="firstname">First Name:</label>
                                <input id="Fname" type="text" required name="firstname" class="form-control">
                            </div>
                        </div>
                        <div class="col ">
                            <div class="form-group ">
                                <label for="lastname">Last Name:</label>
                                <input id="Lname" type="text" required name="lastname" class="form-control">
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="options">Options</label>
                        <select name="options" id="options" class="form-control">
                    <option value="option1">option1</option>
                    <option value="option1">option2</option>
                    <option value="option1">option3</option>
                    </select>
                    </div>
                    <div class="form-group ">
                        <label for="Email">Your Email Adress:</label>
                        <input id="Email" type="email" required name="email" class="form-control">
                    </div>
                    <div class="form-group ">
                        <label for="Message">Your message:</label>
                        <textarea class="form-control" rows="5"></textarea>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="accept-terms" class="form-check-input">
                        <label class="form-check-label" for="accept-terms">Accept Terms &amp; Conditions</label>
                    </div>
                    <button type="submit" class="btn btn-light btn-block">SUBMIT</button>
                </form>

            </div>
            <div class="col-sm-4">
                <h3>Connect</h3>
                <i class="fab fa-facebook-square"></i>
                <i class="fab fa-twitter-square"></i>
                <i class="fab fa-google"></i>
                <i class="fab fa-linkedin"></i>
                <i class="fab fa-youtube-square"></i>
            </div>

        </div>
    </footer>

    <div class="bg-modal">
        <div class="modal-content">
            <div class="close">+</div>
            <img class="img-fluid small-img" src="images/happy2020.png" alt="modalpic">
            <blockquote class="blockquote text-center">
                <p class="mb-0">Happy New Year Lorem ipsum dolor sit amet!</p>
                <text class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></text>
            </blockquote>
        </div>
    </div>

</body>

</html>