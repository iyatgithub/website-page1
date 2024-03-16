<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Programming Website</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Custom styles */
        body {
            background-color: #f8f9fa; /* Gray background color */
            font-family: Arial, sans-serif; /* Font family for text */
        }
        .container {
            margin-top: 50px; /* Add space from the top */
            padding-bottom: 50px; /* Add space at the bottom */
        }
        .image-container {
            float: left; /* Align image to the left */
            margin-right: 20px; /* Add some space between image and text */
        }
        .title {
            color: #007bff; /* Blue color for title */
            font-size: 24px; /* Larger font size for title */
        }
        .description {
            font-size: 16px; /* Font size for description */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 image-container">
                <!-- Image with Bootstrap classes -->
                <img src="image.jpg" class="img-fluid" alt="Description of the image">
            </div>
            <div class="col-md-6">
                <h1 class="title">Welcome to My Programming Website</h1>
                <p class="description">This is a simple webpage created to showcase programming projects and tutorials. Feel free to explore the content and learn something new!</p>
                <p class="description">You can add more projects, tutorials, or any other content you want to share. Customize the layout and styling to make it your own.</p>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS (optional) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
