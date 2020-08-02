<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP Star Rating System by Using Ajax &amp; Jquery</title>

    <!-- Bootstap CSS File-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

    <!-- jQuery File-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- Bootstap Jquery File-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container" style="width:800px;">
        <h2 align="center" style="margin-bottom:30px;">PHP Star Rating System by Using Ajax &amp; Jquery</h2>
        <span id="product_list"></span>
    </div>
</body>

</html>
<script>
    $(document).ready(function() {

        load_data();

        // Create function load_data() which load data from the database and shows in the span tag above
        function load_data() {
            $.ajax({
                url: "fetch.php", // Create fetch.php file
                method: "POST",
                success: function(data) {
                    $("#product_list").html(data);
                }
            });
        }

        $(document).on('mouseenter', '.rating', function() {
            var index = $(this).data("index");
            var product_id = $(this).data("product_id");

            remove_background(product_id);

            for (var count = 1; count <= index; count++) {
                $('#' + product_id + '-' + count).css('color', '#ffcc00');
            }
        });

        // Create a function remove_background()
        function remove_background(product_id) {
            for (var count = 1; count <= 5; count++) {
                $('#' + product_id + '-' + count).css('color', '#ccc');
            }
        }

        $(document).on('mouseleave', '.rating', function() {
            var index = $(this).data("index");
            var product_id = $(this).data("product_id");
            var rating = $(this).data("rating");

            remove_background(product_id);

            for (var count = 1; count <= rating; count++) {
                $('#' + product_id + '-' + count).css('color', '#ffcc00');
            }
        });

        $(document).on('click', '.rating', function() {
            var index = $(this).data("index");
            var product_id = $(this).data("product_id");

            $.ajax({
                url: "insert_rating.php", // create an insert_rating.php file
                method: "POST",
                data: {
                    index: index,
                    product_id: product_id
                },

                success: function(data) {
                    if (data == 'done') {
                        load_data();
                        alert("You have rate " + index + " out of 5");
                    } else {
                        alert("There is some problem in rating system");
                    }
                }
            });
        });

    });

</script>
