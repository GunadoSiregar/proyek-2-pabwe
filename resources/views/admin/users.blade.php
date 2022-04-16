<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<x-app-layout>
    
    </x-app-layout>
    
    
    <!DOCTYPE html>
    <html lang="en">
      <head>
        @include("admin.admincss")
      </head>
      <body>
        <div class="container-scroller">
        @include("admin.navbar")
        
        <div style="position: relative; top: 80px; right: -300px ">
            <table style=""  border="3px">
                <tr bgcolor="grey" align="center">
                    <th style="padding: 30px; border: 1px solid black;">Name</th>
                    <th style="padding: 30px; border: 1px solid black;">Email</th>
                    <th style="padding: 30px; border: 1px solid black;">Action</th>
                </tr>

                @foreach($data as $data)
                <tr style="color: black;" bgcolor="white" align="center">
                    <td style="padding: 30px; border: 1px solid black;">{{$data->name}}</td>
                    <td style="padding: 30px; border: 1px solid black;">{{$data->email}}</td>

                    @if($data->usertype == "0")
                    <td style="padding: 30px; border: 1px solid black;"><a href="{{url('/deleteuser', $data->id)}}">Delete</a></td>
                    @else
                    <td style="padding: 30px; border: 1px solid black;"><a>Not Allowed</a></td>
                    @endif
                </tr>

                @endforeach


            </table>
        </div>

        </div>
        @include("admin.adminscript")
      </body>
    </html>
</body>
</html>