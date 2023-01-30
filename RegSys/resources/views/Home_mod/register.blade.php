<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
        <form action="{{route('Home.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="padding-top: 10px;">
                    <input style="width: 500px; height: 30px; font-size: 25px;" placeholder="First Name" type="text" name="FirstName">
            </div>
            <div style="padding-top: 10px;">
                    <input style="width: 500px; height: 30px; font-size: 25px;" placeholder="Last Name" type="text" name="LastName">
            </div>
            <div style="padding-top: 10px;">
                    <input style="width: 500px; height: 30px; font-size: 25px;" placeholder="Gender" type="text" name="Gender">
            </div>
            <div style="padding-top: 10px;">
                    <input style="width: 500px; height: 30px; font-size: 25px;" placeholder="Birthday" type="text" name="Birthday">
            </div>
            <div style="padding-top: 10px;">
                    <input style="width: 500px; height: 30px; font-size: 25px;" placeholder="Position" type="text" name="Position">
            </div>


            <div style="padding-top: 10px; padding-left: 420px;">
                <button style="width: 80px; height: 50px; background-color: green; font-size: 20px; color: gray;">Submit</button>
            </div>

    </body>

</body>
</html>