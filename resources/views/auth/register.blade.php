<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- CSS -->
    <link rel="stylesheet" href="user-login/register.css">

    <!-- GOOGLE FONTS -->
    <!-- POPPINS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div id="register-page">
        <div id="register-title">
            <h1>Sign Up</h1>
        </div>
        <div id="register-detail">
            <form action="{{route('register-user')}}" method="post" id="register-form">
                {{-- @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif --}}
                @csrf
                <!-- NAME -->
                <div class="form-name">
                    <div class="icon-name">
                        <img src="user-login/assets/Badge.png" alt="">
                        <label for="name">Name</label>
                    </div>
                    <input type="text" name="" id="name" placeholder="example">
                    <p id="error-name" class="error-message" value="{{old('name')}}"></p>
                    <span class="text-danger">@error('name') {{$message}} @enderror</span>
                </div>

                <!-- EMAIL -->
                <div class="form-email">
                    <div class="icon-email">
                        <img src="user-login/assets/Letter.png" alt="">
                        <label for="email">Email</label>
                    </div>
                    <input type="text" name="" id="email" placeholder="example@binus.ac.id">
                    <p id="error-email" class="error-message" value="{{'email'}}"></p>
                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
                </div>

                <!-- PASSWORD -->
                <div class="form-password">
                    <div class="icon-password">
                        <img src="user-login/assets/Password Key.png" alt="">
                        <label for="password">Password</label>
                    </div>
                    <input type="password" name="" id="password" placeholder="at least 8 characters">
                    <p id="error-password" class="error-message"></p>
                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                </div>

                <!-- CONFIRM PASSWORD -->
                {{-- <div class="form-confirm-password">
                    <div class="icon-password">
                        <img src="user-login/assets/Password Key.png" alt="">
                        <label for="confirm-password">Confirm Password</label>
                    </div>
                    <input type="password" name="" id="confirm-password" placeholder="at least 8 characters">
                    <p id="error-confirm-password" class="error-message"></p>
                </div> --}}
            
                <!-- REGISTER BUTTON -->
                <button id="register-btn" type="submit">Sign Up</button>
            </form>

            <!-- LOGIN -->
            <div id="login-pop">
                <span>Already have an account?</span>
                <a href="">Sign Up</a>
            </div>
        </div>
    </div>
    
</body>
</html>