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
    <div style="position: relative; top: 60px; right: -150px">
        <form class="mb-5" action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">

            @csrf
            <!-- <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div> -->

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Title</span>
                <input class="form-control" type="text" name="title" placeholder="Write a title" required>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Price</span>
                <input class="form-control" type="number" name="price" placeholder="Price" required>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Image</span>
                <input class="form-control" type="file" name="image" required>
            </div>

            <!-- <div>
                <label for="">Price</label>
                <input style="color:blue;" type="number" name="price" placeholder="price" required>
            </div> -->

            <!-- <div>
                <label for="">Image</label>
                <input type="file" name="image"required>
            </div> -->

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Description</span>
                <input class="form-control" type="text" name="description" placeholder="Description" required>
            </div>

            <!-- <div>
                <label for="">Description</label>
                <input style="color:blue;" type="text" name="description" placeholder="Description" required>
            </div> -->

            <div>
                <input class="btn btn-primary" style="color: black" type="submit" value="Save">
            </div>

        </form>

        <div>
            <table bgcolor="black">

                <tr align="center" style="background-color:grey">
                    <th class="border" style="padding: 30px;">Food Name</th>
                    <th class="border" style="padding: 30px">Price</th>
                    <th class="border" style="padding: 30px">Description</th>
                    <th class="border" style="padding: 30px">Image</th>
                    <th class="border" style="padding: 30px">Action</th>
                    <th class="border" style="padding: 30px">Action</th>
                </tr>   

                @foreach($data as $data)

                <tr style="background-color: white; color:black" align="center">
                    <td class="border">{{$data->title}}</td>
                    <td class="border">{{$data->price}}</td>
                    <td class="border">{{$data->description}}</td>
                    <td class="border"><img height="200px" width="200px" src="/foodimage/{{$data->image}}"></td>
                    <td class="border"><a href="{{url('/deletemenu', $data->id)}}">Delete</a></td>
                    <td class="border"><a href="{{url('/updateview', $data->id)}}">Update</a></td>
                </tr>

                @endforeach

            </table>

        </div>

    </div>
        
    </div>
    @include("admin.adminscript")
  </body>
</html>