<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/register-leader-1.css')}}">
    
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
                <form id="group-form" method="POST" action="/register-leader1" enctype="multipart/form-data">>
                    @csrf
                    <!-- NAME -->
                    <div class="form-fullname">
                        <div class="icon-fullname">
                            <img src="assets/Badge.png" alt="icon">
                            <label for="fullname">Group Name</label>
                        </div>
                        <input type="text" name="fullname" id="fullname" placeholder="Exp. Vira yesica" value="{{old('fullname')}}">
                        @error('fullname')
                            <p>{{$message}}</p>
                        @enderror
                    </div>

                    <!-- EMAIL -->
                    <div class="form-email">
                        <div class="icon-email">
                            <img src="assets/Letter.png" alt="icon">
                            <label for="email">Email</label>
                        </div>
                        <input type="text" name="email" id="email" placeholder="Exp. vira.yesica@binus.ac.id" value="{{ old('email')}}">
                        @error('email')
                            <p>{{$message}}</p>
                        @enderror
                    </div>

                    <!-- NUMBER -->
                    <div class="form-number">
                        <div class="icon-number">
                            <img src="assets/WhatsApp.png" alt="icon">
                            <label for="number">WhatsApp Number</label>
                        </div>
                        <input type="number" name="number" id="number" placeholder="Exp. +62 8123 4567 389" value="{{old('number')}}">
                        @error('number')
                            <p>{{$message}}</p>
                        @enderror
                    </div>

                    <!-- ID LINE -->
                    <div class="form-id-line">
                        <div class="icon-id-line">
                            <img src="assets/LINE.png" alt="icon">
                            <label for="id-line">Line ID</label>
                        </div>
                        <input type="text" name="id_line" id="id_line" placeholder="Exp. lallalala" value="{{old('id_line')}}">
                        @error('id_line')
                            <p>{{$message}}</p>
                        @enderror
                    </div>

                    <!-- GITHUB -->
                    <div class="form-github">
                        <div class="icon-github">
                            <img src="assets/Octocat.png" alt="icon">
                            <label for="github">Github/Gitlab ID</label>
                        </div>
                        <input type="text" name="github" id="github" placeholder="Exp. b!Nu$20033" value="{{old('github')}}">
                        @error('github')
                            <p>{{$message}}</p>
                        @enderror
                    </div>

                    <!-- BIRTH PLACE -->
                    <div class="form-place">
                        <div class="icon-place">
                            <img src="assets/Map Pin.png" alt="icon">
                            <label for="place">Birth Place</label>
                        </div>
                        <input type="text" name="place" id="place" placeholder="Exp. b!Nu$20033" value="{{old('place')}}">
                        @error('place')
                            <p>{{$message}}</p>
                        @enderror
                    </div>

                    <!-- BIRTH DATE -->
                    <div class="form-date">
                        <div class="icon-date">
                            <img src="assets/Calendar.png" alt="icon">
                            <label for="date">Birth Date</label>
                        </div>
                        <input type="date" name="date" id="date" placeholder="Exp. b!Nu$20033" value="{{old('date')}}">
                        @error('date')
                            <p>{{$message}}</p>
                        @enderror
                    </div>

                    <!-- NEXT -->
                    <button id="next-btn-1" type="submit">Next (1/2)</button>
                    
                    <!-- BACK -->
                    <button id="back-btn-1" type="button">Back</button>
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