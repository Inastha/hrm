<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
  *{

    margin-left:auto;
    margin-right:auto;
    text-align:center;
  }
  .fas{
   font-size: 60px;
    color: #005498;
    line-height: 140px;
    /*padding-left:25%;*/


  }
  p{

    font-size:60px;
    margin-bottom:4%;
  }

  /*.fa-mobile-alt{

    padding-left: 35%;
  }*/

  /*.fas:hover{
    background-color: white;
  }*/

  .icon{
    border:1px blue solid;
    border-radius: 50%;
    width:140px;
    height:140px;
    margin-bottom:10%;

  }

  .icon:hover{

    background-color:blue;
    color:white;

  }
</style>
</head>
<body>

  
<div class="container-fluid">
 <div class="row">
    <div class="col-md-12">
      <img class="img-fluid img-thumbnail" src="images/banner.jpeg" alt="banner"/>
    </div>
 </div>

 <div class="row">
   <div class="col-md-12">
     
     <p><div class="text-danger text-center" style="font-size: 50px;"> This is Our Home Page</div></p>
   </div>
 </div>
 <div class="row">
    <div class="col-md-4">
      <div class="icon">
        <i class="fas fa-desktop" >
          
        </i>
      </div>
    </div>

    <div class="col-md-4">
      <div class="icon">
        <i class="fas fa-code">
          
        </i>
      </div>
    </div>

    <div class="col-md-4">
      <div class="icon">
        <i class="fas fa-mobile-alt">
          
        </i>
      </div>
    </div>
 </div>

 <div class="row">
   <div class="col-md-4" style="font-size: 30px; margin-bottom:50px;">WEB DESIGN</div>

   <div class="col-md-4" style="font-size: 30px; margin-bottom:50px;">APP DEVELOPMENT</div>

   <div class="col-md-4" style="font-size: 30px; margin-bottom:50px;">WEB DEVELOPMENT</div>

 </div>

<div class="row">
   <div class="col-md-4 text-muted" style="font-size: 15px; margin-bottom:50px;">With the growing number of business websites in the online space, the significance of web design has critically increased.</div>

   <div class="col-md-4 text-muted" style="font-size: 15px;">We hold an expertise in creating custom CMS (Content Management System), through which the website can be easily managed for all its c</div>

   <div class="col-md-4 text-muted" style="font-size: 15px;">Analyzing the user expectations, We develop top-quality custom apps across all major platforms including iOS, Android and Windows.</div>

 </div>

 <div class="row">
   <div class="col-md-12" style="padding:50px; background-color: grey;">copyright &copy; 2018</div>

  

 </div>
</div>

</body>
</html>
