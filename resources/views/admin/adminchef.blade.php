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
    <div style="position: relative; top: 60px; right: -230px">
    <div >
                <form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data">

            @csrf

            <!-- <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div> -->

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Name</span>
                <input type="text" class="form-control" name="name" placeholder="Enter Name" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Speciality</span>
                <input type="text" class="form-control" name="speciality" placeholder="Enter Speciality" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>
            <!-- <div>
                <label for="">Name</label>
                <input style="color: blue;" type="text" name="name" required placeholder="Enter name">

            </div> -->
            <!-- <div>
                <label for="">Speciality</label>
                <input style="color: blue;" type="text" name="speciality" required placeholder="Enter name">

            </div> -->

            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Image</span>
                <input type="file" class="form-control" name="image" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>
            <!-- <div>
                <input type="file" name="image" required>

            </div> -->
            <div>
                <input class="btn btn-primary" style="" type="submit" value="Save">

            </div>
            </form>
    </div>
    <div class="mt-5">
    <table bgcolor="black">
        <tr style="background-color: grey;">
            <th class="border" style="padding:30px;">Chef Name</th>
            <th class="border"  style="padding:30px;">Speciality</th>
            <th class="border" style="padding:30px;">Image</th>
            <th class="border" style="padding:30px;">Action</th>
            <th class="border" style="padding:30px;">Action2</th>
        </tr>
        @foreach($data as $data)
        <tr bgcolor="white" style="color: black;" align="center">
            <td class="border">{{$data->name}}</td>
            <td class="border">{{$data->speciality}}</td>
            <td class="border"><img height="100" width="100" src="/chefimage/{{$data->image}}"></td>
            <td class="border"><a href="{{url('/updatechef', $data->id)}}">Update</a></td>
            <td class="border"><a href="{{url('/deletechef', $data->id)}}">Delete</a></td>
        </tr>

        @endforeach
    </table>
</div>
</div>
    
</div>
@include("admin.adminscript")
  </body>
</html>