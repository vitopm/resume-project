<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
            <h2>Personal</h2>
        </div>
        
        <form action="upload.php" method="post" enctype="multipart/form-data">
            Select file to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload File" name="submit">
        </form>
    </main>
    
    <footer>

    </footer>

</body>

</html>
