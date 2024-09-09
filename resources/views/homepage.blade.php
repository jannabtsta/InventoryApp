@extends('layouts.home') <!-- Extends the app layout -->

@section('title', 'Inventory') <!-- Sets the title section -->

@section('content') <!-- Defines the content section -->

<style>

h1{
    color: #000000;
      font-size: 60px;
      font-family: 'Georgia', sans-serif;   
}


h2{
    color: #03247f;
      font-size: 35px;
      font-family: 'Georgia', sans-serif;   
      font-style: italic;
}

.desc {
    color: #000000;
      font-size: 15px;
      font-family: 'Courier New', sans-serif;   
}

.text
{
    flex: 2; /* Adjust the size of each box */
    padding: 20px;
    border: 1px solid #ccc;
    background-color: #f4f4f4;
}

.container {
    display: flex; /* Use flexbox for horizontal layout */
  justify-content: space-between; /* Space elements evenly */
}
.homeimg {
   
}

    </style>

<div class="main-content">
<div class="container">
    <div class="text"> 
    <h1> Angel's Clothing </h1>
    <br>
    <h2> Elevate Your Everyday </h2>
    <p class="desc"> Angel's Clothing is a fashion brand that embodies timeless elegance and comfort. 
        Our designs are inspired by the ethereal beauty of angels, capturing a sense of grace, 
        purity, and serenity. We believe that clothing should not only look good but also feel
        good, and our pieces are crafted from high-quality materials to ensure both style and 
        comfort. </p>
    </div>
    <div class="homeimg">  <img src="images/homeimg.jpg" alt="Image description">
    </div>
</div>
</div>



@endsection