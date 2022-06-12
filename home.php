<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Fileshare | Log in</title>
</head>
<body>
    <nav>
            <h1>Fileshare</h1>
        </nav>
        
        <div class="wrapper">
          <form class="file-form" action="#" method="post" enctype="multipart/form-data">
              <h2>Upload files :</h2>
              <input class="file-input" type="file" name="fileInput">
              <button class="upload-btn" type="submit" name="submit" id="files-post">Upload</button>
          </form>
          
          <table class="file-table">
              <thead>
                <tr>
                  <th>Index</th>
                  <th>File name</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                
              </tbody>
          </table>
        </div>
        
        
        
        
        
    <button class="logout-btn">LOG OUT</button>
    <footer class="attribution">
        <p>
          Challenge by 
          <a href="https://github.com/vanguardkras" target="_blank">Max</a>
        &nbsp;
          Coded by 
          <a href="https://www.frontendmentor.io/profile/Mick-2097">Mick</a>
        </p>
      </footer>
    <script src="script.js"></script>
</body>
</html>