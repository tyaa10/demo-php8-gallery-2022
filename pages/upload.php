<h3>Upload Form</h3>
<?php
if (!isset($_POST['uppbtn'])) {
    ?>
    <form action="index.php?page=upload" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="myfile">Select file for upload:</label>
            <!--            <input type="hidden" name="MAX_FILE_SIZE" value="1024*1024*1024*3" />-->
            <input type="file" class="form-control" name="myfile" accept="image/*">
        </div>
        <button type="submit" class="btn btn-primary" name="uppbtn">Send File</button>
    </form>
    <?php
} else {
    if (isset($_POST['uppbtn'])) {
        // var_dump($_FILES['myfile']);

        //errors handling
        if ($_FILES['myfile']['error'] != 0) {
            echo "<h3/><span style='color:red;'>Upload error code: " . $_FILES['myfile']['error'] . "</span><h3/>";
            exit();
        }
        //does the file exist on server in temp folder?
        if (is_uploaded_file($_FILES['myfile']['tmp_name'])) {
            //remove the file from temp folder into images
            //folder with origin name
            $upload_filename = iconv('utf-8', 'cp1251', $_FILES['myfile']['name']);
            $result = move_uploaded_file($_FILES['myfile']['tmp_name']
                , str_replace( DIRECTORY_SEPARATOR . "pages", "", __DIR__)  . DIRECTORY_SEPARATOR . "frontend" .DIRECTORY_SEPARATOR  ."images". DIRECTORY_SEPARATOR . $upload_filename);
        }
        echo "<h3/><span style='color:green;'>File Uploaded Successfuly!</span><h3/>";
    }
}
?>