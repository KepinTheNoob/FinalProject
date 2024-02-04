<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset ('css/style.css')}}">

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div id="navbar">
        <h1>HACKTHON</h1>
        <div id="navlinks">
            <a href="#dashboard">Dashboard</a>
            <a href="#timeline">Timeline</a>
            <a href="logout">Sign Out</a>
        </div>
    </div>

    <hr id="line-nav">

    <div id="dashboard">
        <div id="detail-informations">
            <div id="leader-informations">
                <h2>Happy Kiyowo</h2>
                <div id="leader-details">
                    <h3>Leader Informations</h3>
                    @foreach ($leader as $item)
                        <div>
                            <span class="sub-header">Name</span>
                            <span class="sub-detail">{{ $item->fullname }}</span>
                        </div>
                        <div>
                            <span class="sub-header">Place and Date of Birth</span>
                            <span class="sub-detail">{{ $item->place }}, {{ $item->date }}</span>
                        </div>
                        <div>
                            <span class="sub-header">Email</span>
                            <span class="sub-detail">{{ $item->email }}</span>
                        </div>
                        <div>
                            <span class="sub-header">Whatsapp Number</span>
                            <span class="sub-detail">{{ $item->number }}</span>
                        </div>
                        <div>
                            <span class="sub-header">Id Line</span>
                            <span class="sub-detail">{{ $item->id_line }}</span>
                        </div>
                        <div>
                            <span class="sub-header">Github ID</span>
                            <a href="{{ $item->github }}" class="sub-link">{{ $item->github }}</a>
                        </div>
                        <div>
                            <span class="sub-header">CV</span>
                            <a href="{{ $item->cv }}" class="sub-link">{{ $item->cv }}</a>
                        </div>
                        <div>
                            <span class="sub-header">Flazz / ID Card</span>
                            <a href="{{ $item->id_card }}" class="sub-link">{{ $item->id_card }}</a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div id="participant-informations">
                <section>
                    <h2>Zahira Malik</h2>
                    <h3>Participant</h3>
                </section>
                <div>
                    <span class="sub-header">Place and Date of Birth</span>
                    <span class="sub-detail">Jakarta, 10 January 2004</span>
                </div>
                <div>
                    <span class="sub-header">Email</span>
                    <span class="sub-detail">zahira.malik@binus.ac.id</span>
                </div>
                <div>
                    <span class="sub-header">Whatsapp Number</span>
                    <span class="sub-detail">+62 8123 4567 890</span>
                </div>
                <div>
                    <span class="sub-header">CV</span>
                    <a href="" class="sub-link">curriculumvitae_ViraYessica</a>
                </div>
                <div>
                    <span class="sub-header">Flazz / ID Card</span>
                    <a href="" class="sub-link">FlazzCard_ViraYessica</a>
                </div>
                <button id="edit-profile" type="submit">
                    <img src="assets/Create.png" alt="logo">
                    <span>Edit Profile</span>
                </button>
            </div>
        </div>
        <div id="timeline">
            <div id="header-timeline">
                <span></span>
                <h1>TIMELINE</h1>
                <span></span>
            </div>
            <div id="container-box">
                <div id="container-timeline">
                    <div class="content-timeline">
                        <div class="content-circle"></div>
                        <div class="content-box">
                            <h3 class="sub-header-timeline">OPEN REGISRATION</h3>
                            <span class="separator-box"></span>
                            <h4 class="sub-date">xx-xx-20xx</h4>
                        </div>
                    </div>    
                    <div class="content-timeline">
                        <div class="content-circle"></div>
                        <div class="content-box">
                            <h3 class="sub-header-timeline">CLOSE REGISRATION</h3>
                            <span class="separator-box"></span>
                            <h4 class="sub-date">xx-xx-20xx</h4>
                        </div>
                    </div>
                    <div class="content-timeline">
                        <div class="content-circle"></div>
                        <div class="content-box">
                            <h3 class="sub-header-timeline">TECHNICAL MEETING</h3>
                            <span class="separator-box"></span>
                            <h4 class="sub-date">xx-xx-20xx</h4>
                        </div>
                    </div>
                    <div class="content-timeline">
                        <div class="content-circle"></div>
                        <div class="content-box">
                            <h3 class="sub-header-timeline">COMPETITION DAY</h3>
                            <span class="separator-box"></span>
                            <h4 class="sub-date">xx-xx-20xx</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="" id="back-btn">
        <img src="assets/Left.png" alt="svg">
        <span>Back to Home</span>
    </a>
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