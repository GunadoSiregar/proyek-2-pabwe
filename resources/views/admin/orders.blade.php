<x-app-layout>
    
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")

    <style>
        .border {
            border: 1px solid black;
        }
    </style>
  </head>
  <body>    
    
    <div class="container-scroller">
    @include("admin.navbar")

<div class="container" style="position: relative; top: 60px; right: -90px">

    <h1>Customers Orders</h1>


    <form action="{{url('/search')}}" method="get" >

    @csrf
        <input type="text" name="search" style="color:blue;">
        <input type="submit" value="Search" class="btn btn-success">
    </form>

    
    <table class="mt-5">

        <tr bgcolor="grey" align="center">
            <td class="border" style="padding: 30px;">Name</td>
            <td class="border" style="padding: 30px;">Phone</td>
            <td class="border" style="padding: 30px;">Address</td>
            <td class="border" style="padding: 30px;">Foodname</td>
            <td class="border" style="padding: 30px;">Price</td>
            <td class="border" style="padding: 30px;">Quantity</td>
            <td class="border" style="padding: 30px;">Total Price</td>
        </tr>

        @foreach($data as $data)
        <tr bgcolor="white" align="center" style="color:black">

            <td class="border">{{$data->name}}</td>
            <td class="border">{{$data->phone}}</td>
            <td class="border">{{$data->address}}</td>
            <td class="border">{{$data->foodname}}</td>
            <td class="border">{{$data->price}}$</td>
            <td class="border">{{$data->quantity}}</td>
            <td class="border">{{$data->price * $data->quantity}}$</td>

        </tr>
        @endforeach

    </table>

</div>
  </div>
  @include("admin.adminscript")
  </body>
</html>