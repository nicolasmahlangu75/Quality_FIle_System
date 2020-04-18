<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>user list</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="viewlecturer.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel = "stylesheet" href = "https:cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        .bs-example{
            margin: 100px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>
<body>
    <div class = "animated bounceInRight" style = "animation-delay 20s">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class = "animated bounceInRight" style = "animation-delay 20s">LECTURES</h2>
                    </div>
                    <?php
                    include_once 'connection.php';
                    $result = mysqli_query($conn,"SELECT * FROM users");
                    ?>

                    <?php
                    if (mysqli_num_rows($result) > 0) {
                    ?>
                      <table class='table table-bordered table-striped' name="columns">

                      <tr>
                        <td>user_id</td>
                        <td>first_name</td>
                        <td>last_name</td>
                        <td>id_number</td>
                        <td>email_address</td>
                        <td>gender</td>
                        <td>phone_number</td>
                        <td>job_title</td>
                        <td>faculty</td>
                      </tr>
                    <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row["user_id"]; ?></td>
                        <td><?php echo $row["first_name"]; ?></td>
                        <td><?php echo $row["last_name"]; ?></td>
                        <td><?php echo $row["id_number"]; ?></td>
                        <td><?php echo $row["email_address"]; ?></td>
                        <td><?php echo $row["gender"]; ?></td>
                        <td><?php echo $row["phone_number"]; ?></td>
                        <td><?php echo $row["job_title"]; ?></td>
                        <td><?php echo $row["faculty"]; ?></td>
                    </tr>
                    <?php
                    $i++;
                    }
                    ?>
                    </table>
                     <?php
                    }
                    else{
                        echo "No result found";
                    }
                    ?>


                </div>
            </div>
        </div>
    </div>

</body>
</html>
