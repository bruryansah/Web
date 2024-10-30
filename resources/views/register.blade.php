<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="XUA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>
<br>
<br>
<body>
    <br>
    <br>
    <div class="container"><br>
        <div class="col-md-6 col-md-offset-3">
            <h2 class="text-center">REGISTER</h3>
            <br>
            <h5 align="center">untuk masuk ke dalam situs</h5>
                <hr>
                @if(session('message'))
                    <div class="alert alert-success"> {{session('message')}} </div>
                @endif
                <form action="{{route('actionregister')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label><i class="fa fa-envelope"></i> Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" required="">
                    </div>
                    <div class="form-group"> <label><i class="fa fa-user"></i> Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username" required="">
                    </div>
                    <div class="form-group"> <label><i class="fa fa-key"></i> Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required="">
                    </div>
                    <div class="form-group">
                        <label><i class="fa fa-address-book"></i> Role</label><br>
                        <div>
                            <input type="radio" id="admin" name="role" value="Admin" checked>
                            <label for="admin">Admin (can't be used yet)</label>
                        </div>
                        <div>
                            <input type="radio" id="guest" name="role" value="Guest">
                            <label for="guest">Guest</label>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary btn-block">
                        <i class="fa fa-user"></i> Register</button>
                    <hr>
                    <p class="text-center">Sudah punya akun silahkan <a href="/">Login Disini!</a></p>
                </form>
        </div>
    </div>
</body>

</html>