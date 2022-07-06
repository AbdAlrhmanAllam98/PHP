<?php

  $allowed_ext = ['png', 'jpg', 'jpeg', 'gif'];
 if(isset($_POST['submit'])) {
   // Check if file was uploaded
   if(!empty($_FILES['upload'])) {  //in this array [error,tmp_name,size,name,full_path,type] 
    $file_name = $_FILES['upload']['name'];
    $file_size = $_FILES['upload']['size'];
    $file_tmp = $_FILES['upload']['tmp_name'];
    $target_dir = "uploads/${file_name}";
    // Get file extension
    $file_ext = explode('.', $file_name);
    $file_ext = strtolower( end($file_ext) ); //end -> return the last element in array
    // Validate file type/extension
    if(in_array($file_ext, $allowed_ext))
    {
      // Validate file size
      if($file_size <= 1_000_000) { // 1000000 bytes = 1MB
        // Upload file
        move_uploaded_file($file_tmp, $target_dir);
        echo '<p style="color: green;">File uploaded!</p>';
      }
       else {
        echo '<p style="color: red;">File too large!</p>';
      }
    }
     else {
      $message = '<p style="color: red;">Invalid file type!</p>';
    }
   } else {
     $message = '<p style="color: red;">Please choose a file</p>';
   }
 }
  ?>
  
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
  </head>
  <body>
    <?= $message ?? null; ?>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
    Select image to upload:
    <br>
  <input type="file" name="upload" accept="image/*">
  <br>
  <input type="submit" value="Submit" name="submit">
</form>
  </body>
  </html>