<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
          margin: 0;
          font-family: Arial, sans-serif;
          background-image: url('your-background-image.jpg'); /* Replace with the path to your background image */
          background-size: cover; /* Adjust to cover the entire viewport */
          background-attachment: fixed; /* This is what makes the background fixed */
        }
    
        nav {
          background-color: #333;
          overflow: hidden;
        }
    
        nav a {
          float: left;
          display: block;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
        }
    
        nav a:hover {
          background-color: #ddd;
          color: black;
        }
      </style>
</head>
<body>
    @include('layouts.menu')
    @yield('content')
</body>
</html>