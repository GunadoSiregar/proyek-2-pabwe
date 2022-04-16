<x-app-layout>
    
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">

    @include("admin.admincss")
  </head>
  <body>    
    
    <div class="container-scroller">
    @include("admin.navbar")

    <div style="margin-left: 200px; margin-top:60px;">
    <form action="{{url('/updatefoodchef', $data->id)}}" method="post" enctype="multipart/form-data">

        @csrf
        
        <!-- <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div> -->

        <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Chef Name</span>
                <input type="text" class="form-control" name="name" value="{{$data->name}}" required>
        </div>

        <!-- <div>
            <label>Chef Name</label>
            <input style="color:blue;" type="text" name="name" value="{{$data->name}}">
        </div> -->

        <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Speciality</span>
                <input type="text" class="form-control" name="speciality" value="{{$data->speciality}}" required>
        </div>

        <!-- <div>
            <label>Speciality</label>
            <input style="color:blue;" type="text" name="speciality" value="{{$data->speciality}}">
        </div> -->


        <div class="mb-4">
            <label>Old Image</label>
            <img height="200" width="200" src="/chefimage/{{$data->image}}">
        </div>

        <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">New Image</span>
                <input type="file" class="form-control" name="image" required>
        </div>

        <!-- <div>
            <label>New image</label>
            <input type="file" required name="image">
        </div> -->

        <div>
            <input class="btn btn-primary" type="submit" value="Update">
        </div>
    </form>
    </div>
  </div>
  @include("admin.adminscript")
  </body>
</html>