<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resources/css/style.css">
    <title>Resume Parser</title>
</head>
<body>
    <header>
        <div class="heading">
            <a href="index.php">
                <h1>Resume Parser</h1>
            </a>
        </div>
    </header>

    <main>
        <div class="subheading">
            <h2>Business</h2>
        </div>
        <form action="multi_file_upload.php" method="POST"
            enctype="multipart/form-data">
            Select one or more files to upload:
             
            <!-- name of the input fields are going to
                be used in our php script-->
            <input type="file" name="files[]" multiple>
            <input type="submit" name="submit" value="Upload" >
        </form>

        

    </main>

    <footer>

    </footer>

</body>

</html>
