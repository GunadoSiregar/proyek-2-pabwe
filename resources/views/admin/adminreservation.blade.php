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

    <di style="position: relative; top: 70px; right: -150px">

        <table align="center"  bgcolor="grey" border="1px">

        <tr bgcolor="grey">
            <th class="border" style="padding:30px;">Name</th>
            <th class="border" style="padding:30px;">Email</th>
            <th class="border" style="padding:30px;">Phone</th>
            <th class="border" style="padding:30px;">Date</th>
            <th class="border" style="padding:30px;">Time</th>
            <th class="border" style="padding:30px;">Message</th>

        </tr>

        @foreach($data as $data)

        <tr bgcolor="white" align="center" style="color: black;">
            
            <td class="border">{{$data->name}}</td>
            <td class="border">{{$data->email}}</td>
            <td class="border">{{$data->phone}}</td>
            <td class="border">{{$data->date}}</td>
            <td class="border">{{$data->time}}</td>
            <td class="border">{{$data->message}}</td>

        </tr>

        @endforeach


        </table>

    </di>
    </div>
    @include("admin.adminscript")
  </body>
</html>