<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
    <h1>Upload a File and Enter Your Email</h1>
    <form action="fileupload.php" method="post" enctype="multipart/form-data">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="file">Upload a JPEG or PNG file:</label>
        <input type="file" id="file" name="file" accept=".jpeg,.png" required>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>