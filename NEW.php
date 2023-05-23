<!DOCTYPE html>
<html>
<head>
  <title>UNI-LOBBY</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../R & I/new.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  
</head>
<body>

  <div class="topnav">
    <div class="topnav" id="myNavbar">
      <div class="logo">
        <a href="NEW.html" class="logo" >UNI LOBBY</a>
      </div>
        <!-- Right-sided navbar links -->
        <div class="links">
          <a href="http://localhost/Update.php" class="link1">PROFILE</a>
          <a href="#row" class="link2"> ABOUT</a>
          <a href="#contact" class="link2">CONTACT</a>
        </div>
    </div>
</div>

<div class="header" id="home">
  <div class="header2">
    <h1>WELCOME TO YOUR UNI LOBBY DASHBOARD</h1>
    <p>We Are Here To Help.</p>
    <a href="#start"><button class="button3">Get Started</button></a>
  </div>
</div>

<div class="search_card" id="start">
  <h2>Search For Course</h2>
  <div class="searchbar">
    <form action="/search" method="GET">
      <input class="input1" type="text" name="q" placeholder="Enter search term">
      <input class="input1" type="number" id="tuition" name="tuition" min="0" placeholder="Maximum tuition fees in BWP:">
      <input class="input1" type="number" id="duration" name="duration" min="0" placeholder="Course duration:">
      <input class="input1" type="number" id="career" name="career" min="0" max="10" placeholder="Career outcomes:">
      <input class="button2" type="submit" value="Search">
    </form>
  </div>
</div>

<div class="row">
  <div class="leftcolumn">

    <div class="news_card">
      <h2>Latest Developments In Education and Admissions.</h2>
      <h5>April 24, 2023</h5>

        <div class="news1">
          <h6>UB</h6>
          <p>Application for undergraduate admission in August 2023 closes</p>
          <a href="https://www.ub.bw/study/undergraduate/how-apply-admission"><button class="button5">More>></button></a>
        </div>
        <div class="news2">
          <h6>BAC: How to Apply</h6>
          <p>You can come in person to collect application forms from the College front desk, admissions office or Apply Online through the ThitoAcademics website</p>
          <a href="https://thitoacademics.bac.ac.bw"><button class="button5">More>></button></a>
        </div>
        <div class="news3">
          <h6>BIUST</h6>
          <p>BIUST offers qualifications which are designed to help you launch your career, where upon graduating, you will have the requisite skills to be globally competitive and contribute to Botswana’s economy through employment or entrepreneurship.</p>
          <a href="https://www.biust.ac.bw/why-biust/"><button class="button5">More>></button></a>
        </div>

    </div>
  </div>

  <div class="rightcolumn">
      <div class="profile_card">
        <h4>PROFILE</h4>
        <div class="profile">User<br>Information<br><img src="../R & I/avatar3.png" class="avatar"><br>
          <a href="http://localhost/Update.php"><button class="button">Update Info</button></a>
        </div>
      </div>
      <div class="feed_card">
        <h3>FEEDBACK</h3>
        <div class="form">
          <form action="/action_page.php" target="_blank">
            <div class="container" >
              <div class="input">
                <input class="input2" type="text" placeholder="Name" required name="Name">
              </div>
              <div class="input">
                <input class="input2" type="text" placeholder="Email" required name="Email">
              </div>
              <div class="input">
                <input class="input2" type="text" placeholder="Message" required name="Message">
              </div>
              <button class="button2" type="submit">SEND</button>
            </div>
          </form>
        </div>
      </div>
  </div>
</div>

<div class="Footer" id="contact">
  <div class="row1">
    <div class="info">
      <i class="fa fa-map-marker" style="width:30px"></i>Unilobby<br>
      <i class="fa fa-phone" style="width:30px"></i> Phone: +267 151515<br>
      <i class="fa fa-envelope" style="width:30px"> </i> Email: unilobby@gmail.com<br>
    </div>
  </div>
  <div class="row2">
    <p>Give Us A Follow</p>
    <div class="social">
        <a href="#"><i class="fab fa-youtube"></i></a>
        <a href="#"><i class="fa-brands fa-tiktok"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-codepen"></i></a>
    </div>
  </div>
</div>

</body>
</html>


