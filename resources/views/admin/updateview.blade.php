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

    <div style="position: relative; top: 60px; right: -150px">
        <form action="{{url('/update', $data->id)}}" method="post" enctype="multipart/form-data">

            @csrf

            <!-- <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div> -->

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Title</span>
                <input type="text" name="title" class="form-control" value="{{$data->title}}" required>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Price</span>
                <input type="text" name="price" class="form-control" value="{{$data->price}}" required>
            </div>

            <!-- <div>
                <label for="">Title</label>
                <input style="color:blue;" type="text" name="title" value="{{$data->title}}" required>
            </div> -->

            <!-- <div>
                <label for="">Price</label>
                <input style="color:blue;" type="number" name="price" value="{{$data->price}}" required>
            </div> -->

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Description</span>
                <input type="text" name="description" class="form-control" value="{{$data->description}}" required>
            </div>

            <!-- <div>
                <label for="">Description</label>
                <input style="color:blue;" type="text" name="description" value="{{$data->description}}" required>
            </div> -->

            <div class="mb-4">
                <label for="">Old Image</label>
                <img height="200" width="200" src="/foodimage/{{$data->image}}">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">New Image</span>
                <input type="file" name="image" class="form-control" required>
            </div>

            <!-- <div>
                <label for="">New Image</label>
                <input type="file" name="image"required>
            </div> -->

            <div>
                <input class="btn btn-primary" style="color: white" type="submit" value="Save">
            </div>

        </form>

    </div>
    </div>


    @include("admin.adminscript")
  </body>
</html>