<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit</title>
</head>
<body>
    <h1>Edit Account</h1>
        <form action={{url('/Home/'.$employees->id)}} method="POST">
            @csrf
            <div style="padding-top: 10px;">
                    <input style="width: 500px; height: 30px; font-size: 25px;" placeholder="First Name" type="text" name="FirstName" value="{{$employees->FirstName}}">
            </div>
            <div style="padding-top: 10px;">
                    <input style="width: 500px; height: 30px; font-size: 25px;" placeholder="Last Name" type="text" name="LastName" value="{{$employees->LastName}}">
            </div>
            <div style="padding-top: 10px;">
                    <input style="width: 500px; height: 30px; font-size: 25px;" placeholder="Gender" type="text" name="Gender" value="{{$employees->Gender}}">
            </div>
            <div style="padding-top: 10px;">
                    <input style="width: 500px; height: 30px; font-size: 25px;" placeholder="Birthday" type="text" name="Birthday" value="{{$employees->Birthday}}">
            </div>
            <div style="padding-top: 10px;">
                    <input style="width: 500px; height: 30px; font-size: 25px;" placeholder="Position" type="text" name="Position" value="{{$employees->Position}}">
            </div>


            <div style="padding-top: 10px; padding-left: 420px;">
                <button style="width: 80px; height: 50px; background-color: green; font-size: 20px; color: gray;">Submit</button>
            </div>
            <input type="hidden" name="_method" value="PUT">
        </form>

</body>
</html>