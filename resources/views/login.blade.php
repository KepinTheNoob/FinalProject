<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- CSS -->
    <link rel="stylesheet" href="/css/login.css">

    <!-- GOOGLE FONTS -->
    <!-- POPPINS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- INTER -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
    <div id="login-page">
        <div id="login-title">
            <h1>Log In</h1>
            <span>Sign in using the information you provided when you registered.</span>
        </div>
        <div id="login-detail">
            <form action="{{route('login-user')}}" method="post" id="login-form">
                @csrf
                <!-- EMAIL -->
                <div class="form-email">
                    <div class="icon-email">
                        <img src="assets/Letter.png" alt="icon-email">
                        <label for="email">Email</label>
                    </div>
                    <input type="text" name="" id="email" placeholder="example@binus.ac.id">
                    <p id="error-email" class="error-message" value="{{old('email')}}"></p>
                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
                </div>

                <!-- PASSWORD -->
                <div class="form-password">
                    <div class="icon-password">
                        <img src="assets/Password Key.png" alt="icon-password">
                        <label for="password">Password</label>
                    </div>
                    <input type="password" name="" id="password" placeholder="at least 8 characters">
                    <p id="error-password" class="error-message"></p>
                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                </div>
            
                <!-- FORGOT PASSWORD -->
                <a href="" id="forgot-password">Forgot password?</a>

                <!-- LOGIN BUTTON -->
                <button id="login-btn" type="submit">Log In</button>
            </form>

            <!-- GOOGLE BUTTON -->
            <button id="google-btn" type="submit">
                <img src="assets/image 3.png" alt="google-icon">
                <span><a href="{{route('google-auth')}}">Log In with Google</a></span>
            </button>

            <!-- REGISTER -->
            <div id="register-pop">
                <span>Don't have an account?</span>
                <a href="RegisterGroup">Sign Up</a>
            </div>
        </div>
    </div>
</body>
</html>