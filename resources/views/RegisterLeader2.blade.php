<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/register-leader-2.css')}}">

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
                <form id="group-form" action="/register-leader2" method = "POST" enctype="multipart/form-data">
                    @csrf
                    <!-- CV -->
                    <div class="form-cv">
                        <div class="icon-cv">
                            <img src="assets/Resume.png" alt="icon">
                            <label for="cv">Upload CV</label>
                        </div>
                        <input type="file" name="cv" id="cv" value="{{old('cv')}}">
                        @error('cv')
                            <p>{{$message}}</p>
                        @enderror
                        <label for="cv" class="form-upload">Add Attachment
                            <img src="assets/Upload.png" alt="icon">
                        </label>

                    </div>

                    <!-- ID CARD -->
                    <div class="form-id-card">
                        <div class="icon-id-card">
                            <img src="assets/Identity Theft.png" alt="icon">
                            <label for="id-card">Upload FlazzCard(Binusian Only) or ID Card(Non - Binusian)</label>
                        </div>
                        <input type="file" name="id_card" id="id_card" value="{{old('id_card')}}">
                        @error('id_card')
                            <p>{{$message}}</p>
                        @enderror
                        <label for="id-card" class="form-upload">Add Attachment
                            <img src="assets/Upload.png" alt="icon">
                        </label>
                    </div>

                    <!-- NEXT -->
                    <button id="next-btn-1" type="submit">Submit</button>

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