<html>
<head>
    <style>
        body{
            Font: Georgia;
            text-align: center;
            color:rgb(28, 110, 164);
            font-size: large;
        }
    </style>
</head>
<body>

User’s name: <?php echo $_POST["name"]; ?><br>
User’s email address: <?php echo $_POST["email"]; ?><br>
User’s issue: <?php echo filter_input(INPUT_POST, 'issue', FILTER_SANITIZE_STRING); ?><br>
User’s comment: <?php echo $_POST["comments"]; ?><br>
</body>
</html>