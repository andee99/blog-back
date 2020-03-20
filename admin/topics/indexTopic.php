<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="shortcut icon" type="image/ico" href="../../assets/images/favicon.ico">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" integrity="sha384-v8BU367qNbs/aIZIxuivaU55N5GPF89WBerHoGA4QTcbUjYiLQtKdrfXnqAcXyTv" crossorigin="anonymous">
    
    <!-- Custom Styling -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    
    <!-- Custom Styling -->
    <link rel="stylesheet" href="../../assets/css/admin.css">
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Candal&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

    <title>Admin Section - Manage Topics</title>

</head>
    <body>
        <!-- header of admin page -->
        <?php include("../../app/includes/adminHeader.php"); ?>
        <!-- Admin Page Wrapper -->
        <div class="admin-wrapper">
            <!-- Left sidebar -->
            <?php include("../../app/includes/adminSidebar.php"); ?>
            <!-- End of the left sidebar -->

            <!-- admin content -->
            <div class="admin-content">
                <div class="button-group">
                    <a href="createTopics.php" class="btn btn-big">Add topic</a>
                    <a href="indexTopic.php" class="btn btn-big">Manage topics</a>
                </div>

                <div class="content">
                    <h2 class="page-title">Manage Topic</h2>

                    <table>
                        <thead>
                            <th>N°</th>
                            <th>Name</th>
                            <th>Author</th>
                            <th colspan="2">Action</th>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Music</td>
                                <td><a href="<?php echo 'editTopic.php'; ?>" class="edit">Edit</a></td>
                                <td><a href="#" class="delete">Delete</a></td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Web develompent</td>
                                <td><a href="<?php echo 'editTopic.php'; ?>" class="edit">Edit</a></td>
                                <td><a href="#" class="delete">Delete</a></td>
                            </tr>
                        </tbody>

                    </table>



                </div>

            </div>
            <!-- end of admin content -->

        </div>
        <!-- End Of Admin Page Wrapper -->

        <!-- JQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <!-- CKeditor -->
        <script src="https://cdn.ckeditor.com/ckeditor5/17.0.0/classic/ckeditor.js"></script>

        <!-- Custom script -->
        <script src="../../assets/js/script.js"></script>

    </body>
</html>