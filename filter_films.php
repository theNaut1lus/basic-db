<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="form-div">
        <form action="show_filter_films.php" method="post">
            <fieldset>
                <label for="made_after">Years made after: </label>
                <input type="text" name="made_after">
            </fieldset>
            <fieldset>
                <label for="made_before">Years made before: </label>
                <input type="text" name="made_before">
            </fieldset>
            <fieldset>
                <input type="submit" value="Submit">
            </fieldset>
        </form>
    </div>
</body>
</html>