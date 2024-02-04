<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/register-group.css')}}">

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div id="navbar">
        <img src="assets/IMG_4836-removebg-preview 2.png" alt="logo" width="160px">

        <div id="navlinks">
            <a href="">Home</a>
            <a href="">Champion Prizes</a>
            <a href="">Mentor & Jury</a>
            <a href="">About</a>
            <a href="">FAQ</a>
            <a href="">Timeline</a>
            <a href="">Login</a>
        </div>
    </div>

    <div id="information">
        <div id="register-form">
            <div class="step">
                <a href="">Group Information</a>
                <span></span>
                <a href="">Leader Information</a>
            </div>
            <div class="fill-form">
                <form id="group-form" action="">
                    <!-- NAME -->
                    <div class="form-group">
                        <div class="icon-group">
                            <img src="assets/Badge.png" alt="icon">
                            <label for="groupname">Group Name</label>
                        </div>
                        <input type="text" name="" id="groupname" placeholder="Exp. happycode">
                        
                    </div>

                    <!-- PASSWORD -->
                    <div class="form-password">
                        <div class="icon-password">
                            <img src="assets/Password Key.png" alt="icon">
                            <label for="password">Password</label>
                        </div>
                        <input type="password" name="" id="password" placeholder="Exp. b!Nu$20033">
                        <p id="error-password" class="error-message"></p>

                        <div class="password-requirements">
                            <span>*Minimum Length 8 characters</span>
                            <span>*Must have Uppercase Letter</span>
                            <span>*Must have Lowercase Letter</span>
                            <span>*Must have Numbers</span>
                            <span>*Must have Special characters</span>
                        </div>
                    </div>


                    <!-- CONFIRM PASSWORD -->
                    <div class="form-confirm-password">
                        <div class="icon-password">
                            <img src="assets/Password Key.png" alt="icon">
                            <label for="confirm-password">Confirm Password</label>
                        </div>
                        <input type="password" name="" id="confirm-password" placeholder="Exp. b!Nu$20033">
                        <p id="error-confirm-password" class="error-message"></p>
                    </div>

                    <!-- CONFIRM BINUSIAN -->
                    <div class="form-radio">
                        <div class="icon-radio">
                            <img src="assets/MySpace.png" alt="icon">
                            <label for="confirm-binusian">Binusian or non Binusian</label>
                        </div>
                        <div class="radio-btn">
                            <div>
                                <input type="radio" name="radio-btn">
                                <span>Binusian</span>
                            </div>
                            <div>
                                <input type="radio" name="radio-btn">
                                <span>Non - Binusian</span>
                            </div>
                        </div>
                        <p id="error-confirm-binusian" class="error-message"></p>
                    </div>

                    <!-- NEXT -->
                    <button id="next-btn-1" type="submit">Next</button>
                </form>
            </div>
        </div>
    </div>

    <hr id="line-footer">
    <div id="footer">
        <div id="logo-footer">
            <span>Powered by Organized by</span>
            <img src="assets/bncc-black-bg 2.png" alt="logo">
        </div>
        <div id="icons-footer">
            <a href="">
                <img src="assets/hack-instagram 2.svg" alt="icon">
            </a>
            <a href="">
                <img src="assets/Vector.svg" alt="icon">
            </a>
            <a href="">
                <img src="assets/Mask group.svg" alt="icon">
            </a>
            <a href="">
                <img src="assets/hack-facebook 2.svg" alt="icon">
            </a>
            <a href="">
                <img src="assets/hack-linkedin 2.svg" alt="icon">
            </a>
        </div>
    </div>
    
</body>
</html>