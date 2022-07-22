<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <style>
        body
        {
            background-color: lightgray;
        }
        .content 
        {
            width: 100%;
            height: auto;
            margin: auto;
            padding: 5px;
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
     <div class="content">

        <center>
      <h1>Customer Enquiry Form Details</h1>
      <hr style="border: 2px solid yellow; width:50%">
    
        <img src="https://cdn.dribbble.com/users/1746237/screenshots/11273605/gif-3.gif" style="width: 50%; height: 250px; margin: auto; padding: 2px;">

       <p><b>Customer FirstName :</b> {{ $data["firstname"] }} </p>
       <p><b>Customer LastName :</b> {{ $data["lastname"] }} </p>
       <p><b>Customer Name : </b> {{ $data["name"] }} </p>
       <p><b>Customer Email : </b> {{ $data["email"] }} </p>
       <p><b>Customer Phone : </b> {{ $data["phone"] }} </p>
       <p style="padding: 5px; font-size: 18px;"><b>Customer  Message : </b> <mark> {{ $data["message"] }} </mark></p>
    

       <p><b>For More Info. Call Us </b> Taxi Cab 24x7 </p>
       <p><b>Email us </b> <a href="mailto:bkpandey.pandey@gmail.com">info@taxicar.com</a> </p>

       
       <p><b>Office Address : </b> 3481 Jack Street Beverly Jack<br> Hills 90210 Block, Rajkot  </p>
       
    

       </center>
    </div>
    

</body>
</html>