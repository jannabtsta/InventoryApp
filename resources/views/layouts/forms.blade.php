<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title> 
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            min-height: 100vh;
         
           /*  background-image: url("images/bg.png");
            background-size: cover;  Adjust to fit your needs 
            background-position: center;  Adjust to fit your needs   */
        }


        .brand {
            font-size: 20px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;

        }
        
        /* Sidebar Styles */
        .sidebar {
            width: 250px;
            padding: 20px;
            background-color: #294788; /* Sidebar background */
            border-right: 1px solid #ddd;
            
        }

        .sidebar h2 {
            font-size: 20px;
            margin-bottom: 40px;
            text-align: left;
            font-family: 'Cambria', sans-serif; 
        }

        .sidebar a {
            display: block;
            font-size: 18px;
            margin-bottom: 20px;
            color: #ffffff;
            text-decoration: none;
            padding: 8px 0;
            font-family: 'Cambria', sans-serif; 
        }

        .sidebar a.active {
            font-weight: bold;
            color: #ffffff; 
            font-family: 'Cambria', sans-serif; 
            
        }

        /* Main Content */
        .main-content {
            flex: 1;
            padding: 40px;

        }


        .header {
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 28px;
            color: #333;
            margin-bottom: 20px;
        }

        /* Form Styles */
        .form-container {
            background-color: #fff;
            padding: 30px;
            border: 1px solid #ddd;
            border-radius: 8px;
            max-width: 600px;
            margin: 0 auto;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);

           
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            outline: none;
        }

        .form-group input:focus,
        .form-group select:focus {
            border-color: #294788;; /* Focus border color */
        }

        .btn-submit {
            background-color: #294788;;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 4px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-submit:hover {
            background-color: #294788;; /* Darker shade on hover */
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="inline-logo">
            <img src="{{ asset('images/clothinglogo.png') }}" alt="Logo" style="vertical-align: middle; width: 30px;">
            <span class="brand ps-20" style="vertical-align: middle;">Angel's Clothing</span>
        </div>

        <a href="{{ route('homepage') }}" class="btn btn-primary">Home </a> 
        <a href="{{ route('shirt.index') }}" class="btn btn-primary">Inventory</a> 
       <a href="{{ route('category.index') }}" class="btn btn-primary">Category</a>
   </div>

    <!-- Main Content -->
    <div class="main-content">

        @yield('content')
    </div>
</body>
</html>
