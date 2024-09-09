<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title> 

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">

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
            background-color: #f8f8f5;
        }

        .input-with-bg {
   
}

        /* Sidebar Styles */
        .sidebar {
            width: 250px;
            padding: 20px;
            background-color: #294788;
            border-right: 1px solid #ddd;
        }

        .brand {
            font-size: 20px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
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
            margin-top: 20px;
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
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 28px;
            color: #333;
        }

        /* Button styles */
        .inventory-btn {
            background-color: #153069;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            font-weight: bold;
            cursor: pointer;
        }

        /* Inventory Table */
        .inventory-table {
            background-color: #ffffff;
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .inventory-table th, .inventory-table td {
            border: 1px solid #333;
            padding: 12px 15px;
            text-align: center;
        }

        .inventory-table th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        .inventory-table td {
            font-size: 16px;
            color: #333;
        }

        .inventory-table .highlight {
            font-weight: bold;
            color: #949597;
        }

        .total-stocks {
            margin-top: 20px;
            text-align: right;
            font-weight: bold;
            font-size: 16px;
        }

        /* Table Styles */
        .table-inventory {
            max-width: 1000px;
            margin: 20px auto;
            overflow-x: auto;
            border: 1px solid #e3e0e0;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Table base styles */
        table {
            width: 100%;
            border-collapse: separate;
            overflow: hidden;
        }

        /* Header styles */
        th {
            padding: 12px 8px;
            text-align: left;
            font-weight: bold;
            font-size: 20px;
            font-family: 'Cambria', sans-serif; 
        }

        /* Body styles */
        td {
            padding: 10px 8px;
            border-bottom: 1px solid #ddd;
            font-weight: lighter;
            font-size: 20px;
            font-family: 'Cambria', sans-serif; 
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
        <a href="{{ route('homepage') }}" class="btn btn-primary">Home</a> 
        <a href="{{ route('shirt.index') }}" class="btn btn-primary">Inventory</a> 
        <a href="{{ route('category.index') }}" class="btn btn-primary">Category</a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
      
        @yield('content')
    </div>
</body>
</html>
