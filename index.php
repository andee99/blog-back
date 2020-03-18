<?php 
include("app/database/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andee Rakotovao - The Youth blog</title>
    <meta name="description" content="Just a blog for educationnal purpose">
    <link rel="shortcut icon" type="image/ico" href="assets/images/favicon.ico">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" integrity="sha384-v8BU367qNbs/aIZIxuivaU55N5GPF89WBerHoGA4QTcbUjYiLQtKdrfXnqAcXyTv" crossorigin="anonymous">
    <!-- Custom Styling -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Candal&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
</head>
<body>
    <!-- include header here -->
    <?php include("app/includes/header.php"); ?>
    <?php include("app/includes/messages.php"); ?>

    

    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <!-- Post slider -->
        <div class="post-slider">
            <h1 class="slider-title">Trending posts</h1>
            <i class="fas fa-chevron-left prev"></i>
            <i class="fas fa-chevron-right next"></i>

            <div class="post-wrapper">
                <div class="post">
                    <img src="assets/images/shahadat-rahman-BfrQnKBulYQ-unsplash.jpg" alt="code line" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.php">Who want to be a web designer on 2020?</a></h4>
                        <i class="far fa-user">  Andee Rakotovao</i>
                        &nbsp;
                        <i class="far fa-calendar">  March 13, 2020</i>
                    </div>
                </div>
                <div class="post">
                    <img src="assets/images/shahadat-rahman-BfrQnKBulYQ-unsplash.jpg" alt="code line" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.php">Who want to be a web designer on 2020?</a></h4>
                        <i class="far fa-user">  Andee Rakotovao</i>
                        &nbsp;
                        <i class="far fa-calendar">  March 13, 2020</i>
                    </div>
                </div>
                <div class="post">
                    <img src="assets/images/shahadat-rahman-BfrQnKBulYQ-unsplash.jpg" alt="code line" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.php">Who want to be a web designer on 2020?</a></h4>
                        <i class="far fa-user">  Andee Rakotovao</i>
                        &nbsp;
                        <i class="far fa-calendar">  March 13, 2020</i>
                    </div>
                </div>
                <div class="post">
                    <img src="assets/images/shahadat-rahman-BfrQnKBulYQ-unsplash.jpg" alt="code line" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.php">Who want to be a web designer on 2020?</a></h4>
                        <i class="far fa-user">  Andee Rakotovao</i>
                        &nbsp;
                        <i class="far fa-calendar">  March 13, 2020</i>
                    </div>
                </div>
                <div class="post">
                    <img src="assets/images/shahadat-rahman-BfrQnKBulYQ-unsplash.jpg" alt="code line" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.php">Who want to be a web designer on 2020?</a></h4>
                        <i class="far fa-user">  Andee Rakotovao</i>
                        &nbsp;
                        <i class="far fa-calendar">  March 13, 2020</i>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Post slider -->

        <!-- Content section -->
        <div class="content clearfix">
            <!-- Main Content -->
            <div class="main-content">
                <h1 class="recent-post-title">Recent posts</h1>

                <div class="post clearfix">
                    <img src="assets/images/shahadat-rahman-BfrQnKBulYQ-unsplash.jpg" alt="" class="post-image">
                    <div class="post-preview">
                        <h2><a href="single.php"></a>The strongest and sweetest songs yet remain to be sung</h2>
                        <i class="far fa-user">&nbsp;Andee Rakotovao</i>
                        &nbsp;
                        <i class="far fa-calendar">&nbsp;June 24, 2019</i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem optio possimus a invetore maxime laborum.
                        </p>
                        <a href="single.php" class="btn read-more">Read more</a>
                    </div>
                </div>

                <div class="post clearfix">
                    <img src="assets/images/shahadat-rahman-BfrQnKBulYQ-unsplash.jpg" alt="" class="post-image">
                    <div class="post-preview">
                        <h2><a href="single.php"></a>The strongest and sweetest songs yet remain to be sung</h2>
                        <i class="far fa-user">&nbsp;Andee Rakotovao</i>
                        &nbsp;
                        <i class="far fa-calendar">&nbsp;June 24, 2019</i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem optio possimus a invetore maxime laborum.
                        </p>
                        <a href="single.php" class="btn read-more">Read more</a>
                    </div>
                </div>

                <div class="post clearfix">
                    <img src="assets/images/goran-ivos-idmvPhF8t4E-unsplash.jpg" alt="" class="post-image">
                    <div class="post-preview">
                        <h2><a href="single.php"></a>How is it to be an influencer?</h2>
                        <i class="far fa-user">&nbsp;Andee Rakotovao</i>
                        &nbsp;
                        <i class="far fa-calendar">&nbsp;June 24, 2019</i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem optio possimus a invetore maxime laborum.
                        </p>
                        <a href="single.php" class="btn read-more">Read more</a>
                    </div>
                </div>

            </div>
            <!-- End of main content -->

            <!-- Sidebar -->
            <div class="sidebar">
                <div class="section search">
                    <h2 class="section-title">Search</h2>
                    <form action="index.html" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="Search...">
                    </form>
                </div>

                <div class="section topics">
                    <h2 class="section-topics">Topics</h2>
                    <ul>
                        <li><a href="#">Poems</a></li>
                        <li><a href="#">Quotes</a></li>
                        <li><a href="#">Fiction</a></li>
                        <li><a href="#">Biography</a></li>
                        <li><a href="#">Motivation</a></li>
                        <li><a href="#">Inspiration</a></li>
                        <li><a href="#">Life Lessons</a></li>
                    </ul>
                </div>

            </div>
            <!-- End of sidebar -->

        </div>
        <!-- End of content section -->

    </div>
    <!-- End Of Page Wrapper -->

    <!-- include footer here -->
    <?php include("app/includes/footer.php"); ?>

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!-- Slick Caroussel -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Custom script -->
    <script src="assets/js/script.js"></script>

</body>
</html>