<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training</title>
    <link rel="stylesheet" href="/node_modules/bulma/css/bulma.css">
    <style>
        input {
            margin-top: 1.5rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="columns">
            <div class="column is-one-fifth">
                <form action="login.php" method="POST">
                    <input type="text" id="name" name="name" class="input" placeholder="Enter name"> <br>
                    <input type="password" name="password" class="input" placeholder="Enter password"> <br>
                    <input type="submit" class="button is-primary">
                </form>
            </div>
        </div>
    </div>
</body>
</html>