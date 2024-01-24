
<!DOCTYPE html>
<html>
    
<head>
    <title>Laravel 9 Drag and Drop File Upload with Dropzone JS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>
    <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />
</head>

<style>
    
    .wrapper {
        
    margin-right: auto;
    margin-left: auto;
   width:400px;
   height: 400px;
   margin-top: 200px;
   border-radius: 30px;
    padding-top: 10px;
    padding-right: 20px;
    padding-left: 20px;
    padding-bottom: 10px;
    background-color: transparent;
    border: 0.2px solid black;
    backdrop-filter:blur(10px);
    box-shadow:0 0 10px rgba(0,0,0,.2);
        
  }
  .wrapper input {
    margin-top: 100px;
    width: 360px;
    background-color:transparent;
    border: 1px solid black;
    color: black;
    
  }
/* body{
    background: url('images/pee.webp') no-repeat;
    background-size:cover;
    background-position:center;
  }*/
  
</style>

    
   

<!--<form action="upload.php" method="post" enctype="multipart/form-data" id="image-upload" class="dropzone">
                
                <script type="text/javascript">
  
                    var dropzone = new Dropzone('#image-upload', {
                        thumbnailWidth: 200,
                        maxFilesize: 1,
                        acceptedFiles: ".jpeg,.jpg,.png,.gif",
                    });
                  
                </script> -->
              <center>
              <p class="fw-bolder"style="color:black; font-size:50px">Upload Your DIYs Below!</p>
               
                <div  class="wrapper" style="border-radius: 10px; width = 200px;"><form action="upload.php" method="post" enctype="multipart/form-data" style="border-radius: 10px; width = 200px;">
                

<input  style="border-radius: 10px; width = 200;" type="file" name="fileToUpload" id="fileToUpload" >
<br>
<input  style="border-radius: 10px; width = 200px; height: 50px;"type="submit" value="Upload to the Internet!⇧" name="submit">
</form></div>
                </center>
                

                
                

<!--div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Drag and Drop with Dropzone JS - CamoTutorial.com</h3>
            <h4>Upload Multiple Images</h4>
            <form action="{{ route('dropzone.store') }}" method="post" enctype="multipart/form-data" id="image-upload" class="dropzone">
                @csrf
            </form><!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Drag and Drop File Upload with Dropzone JS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>
    <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />
</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Drag and Drop with Dropzone JS - CamoTutorial.com</h3>
            <h4>Upload Multiple Images</h4>
            <form action="images/" method="post" enctype="multipart/form-data" id="image-upload" class="dropzone">
                @csrf
                <script type="text/javascript">
  
                    var dropzone = new Dropzone('images/', {
                        thumbnailWidth: 200,
                        maxFilesize: 1,
                        acceptedFiles: ".jpeg,.jpg,.png,.gif",
                    });
                  
                </script> 
            </form>
        </div>
    </div>
</div>
    
 
</body>
</html>
        </div>
    </div>
</div>
    
<script type="text/javascript">
  
    var dropzone = new Dropzone('#image-upload', {
        thumbnailWidth: 200,
        maxFilesize: 1,
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
    });
  
</script>  -->


</body>
</html>