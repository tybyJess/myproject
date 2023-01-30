<html>
<head>
    <style>
        table{
            width:100% ;
            text-align: center;
            border:  1px solid;
        }
        thead{
            background-color: gray;
            color: white;
        }
        td{
            border: 1px solid;
        }
        h1{
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Company 'A' Employees</h1>
    <table>
        <thead>
             <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Birthday</th>
                <th>Position</th>
                <th>Action</th>  

            </tr>
                </thead>
                <tbody>
                    @if(count($employees)>0)
                    @foreach ($employees as $key => $employees)
                    <tr>                             
                        <td>{{$employees->FirstName}}</td>
                        <td>{{$employees->LastName}}</td>
                        <td>{{$employees->Gender}}</td>
                        <td>{{$employees->Birthday}}</td>
                        <td>{{$employees->Position}}</td>
                        <td><a href="/Home/{{$employees->id}}/edit"><button style="background: skyblue; color: white;">Edit</button></a>
                        <form action={{url('/remove/'.$employees->id)}} method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="model" value="REMOVE"> 
                        <input style="background: red;" type="submit" value="Delete">
                </form>


                    </tr>
                    @endforeach
                    @endif
                </tbody>
                
    </table>
    <tr>
         <td><a style="padding-left: 90%;" href="/Login"><button style="background: gray; color: white;">Logout</button></a></td>

    </tr>
</body>                  

</html>
  