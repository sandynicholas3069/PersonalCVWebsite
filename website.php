<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="website.css" />
    <title>Website CV (HTML CSS JS PHP)</title>
  </head>
  <body>
    <nav>
      <div class="nav__content">
        <div class="logo"><a href="#">Sandy Nicholas</a></div>
        <ul>
          <li><a href="#home">HOME</a></li>
          <li><a href="#transcript">TRANSCRIPT</a></li>
          <li class="dropdown">
            <a href="#" class="dropbtn">CURRICULUM VITAE</a>
            <div class="dropdown-content">
              <a href="#programming-skills">Programming Skills</a>
              <a href="#organizational-history">Organizational History</a>
              <a href="#educational-background">Educational Background</a>
              <a href="#achievement-history">Achievement History</a>
            </div>
          </li>
          <li><a href="#portfolio">PORTFOLIO</a></li>
          <li><a href="#contact">CONTACT ME</a></li>
        </ul>
      </div>
    </nav>
    <section id="home" class="section">
      <div class="section__container">
        <div class="content" id="home-content">
          <p style="color: #ffffff">Welcome to My Personal CV Website!</p>
          <h1 class="title">
            Hello guys! My name is <span>Sandy Nicholas</span>, i'm a
            <span>Full-Stack Website Developer Enthusiast</span>
          </h1>
          <p class="description">
            I'm an undergraduate student from UPN Veteran Jawa Timur. I am still
            in my 4th semester as an informatics student, and I'm really
            passionate about Website Development. My Career Goal is to become a
            Full-Stack Website Developer. I'm learning to create some beautiful,
            responsive, and user-friendly websites that can connect to the
            database. Feel free to contact me!
          </p>
        </div>
        <div id="popup" class="popup">
          <div class="popup-content">
            <span class="close">&times;</span>
            <h2>Personal Information</h2>
            <p>Name: Sandy Nicholas</p>
            <p>Place and Date of Birth: Surabaya, 12 Januari 2004</p>
            <p>Gender: Male</p>
            <p>Religion: Christian</p>
            <p>Blood Type: B+</p>
            <p>Height: +/- 175cm</p>
            <p>Weight: +/- 75kg</p>
            <p>Marital Status: Single</p>
            <p>Nationality: Indonesian</p>
            <p>Hobby: Watching Movie, Playing Drum, Singing, Traveling, Etc</p>
          </div>
        </div>
        <div class="image" id="home-image">
          <img id="profile-pic" src="profile.png" alt="profile" />
        </div>
      </div>
    </section>
    <section id="transcript" class="section transcript-section">
      <div class="section__container">
        <div class="content">
          <h2 style="color: #ffa500">Transcript Score Sandy Nicholas</h2>
          <div class="transcript-table">
            <table>
              <thead>
                <tr>
                  <th>Number</th>
                  <th>Course Name</th>
                  <th>Semesters</th>
                  <th>Predicate</th>
                  <th>Credit Score</th>
                  <th>Predicate Score</th>
                  <th>Transcript Score</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $transcript_data = array(
                    array("01", "Arsitektur Komputer", "1", "A", "3", "4", "12"),
                    array("02", "Sistem dan Teknologi Informasi", "1", "A", "3", "4", "12"),
                    array("03", "Etika dan Kompetensi Informatika", "1", "A", "3", "4", "12"),
                    array("04", "Matematika Komputasi", "1", "A", "3", "4", "12"),
                    array("05", "Bahasa Indonesia", "1", "A", "2", "4", "8"),
                    array("06", "Pancasila", "1", "A", "2", "4", "8"),
                    array("07", "Bahasa Inggris", "1", "A", "3", "4", "12"),
                    array("08", "Agama Kristen", "2", "A", "2", "4", "8"),
                    array("09", "Kewarganegaraan", "2", "A", "2", "4", "8"),
                    array("10", "Basis Data", "2", "A", "3", "4", "12"),
                    array("11", "Algoritma dan Pemrograman", "2", "A", "3", "4", "12"),
                    array("12", "Aljabar Linier dan Matrik", "2", "A", "3", "4", "12"),
                    array("13", "Sistem Digital", "2", "A", "3", "4", "12"),
                    array("14", "Matematika Diskrit", "2", "A", "3", "4", "12"),
                    array("15", "Statistik Komputasi", "3", "A", "3", "4", "12"),
                    array("16", "Bela Negara", "3", "A", "3", "4", "12"),
                    array("17", "Kepemimpinan", "3", "A", "2", "4", "8"),
                    array("18", "Sistem Operasi", "3", "A", "3", "4", "12"),
                    array("19", "Metode Numerik", "3", "A-", "3", "3.75", "11.25"),
                    array("20", "Basis Data Lanjut", "3", "A", "3", "4", "12"),
                    array("21", "Struktur Data", "3", "A", "3", "4", "12"),
                    array("22", "Pemrograman Lanjut", "3", "A-", "3", "3.75", "11.25"),
                  );

                  // Menampilkan data dalam tabel
                  foreach ($transcript_data as $data) {
                    $predicate = $data[3];

                    $background_color = "";
                      if ($predicate == "A") {
                        $background_color = "springgreen";
                      } elseif ($predicate == "A-") {
                        $background_color = "yellow";
                      }

                    echo "<tr>";
                      foreach ($data as $index => $value) {
                        if ($index == 1 || $index == 4) {
                          $credit_score = $data[4];
                            if ($credit_score == 3) {
                              echo "<td style='background-color: lightblue;'>$value</td>";
                            } elseif ($credit_score == 2) {
                              echo "<td style='background-color: pink;'>$value</td>";
                            }
                        } elseif ($index == 0 || $index == 2) {
                          $semesters = $data[2];
                            if ($semesters == "1") {
                              echo "<td style='background-color: greenyellow;'>$value</td>";
                            } elseif ($semesters == "2") {
                              echo "<td style='background-color: turquoise;'>$value</td>";
                            } elseif ($semesters == "3") {
                              echo "<td style='background-color: salmon;'>$value</td>";
                            }
                        } else {
                            if ($index == 3 || $index == 5 ||$index == 6) { 
                              echo "<td style='background-color: $background_color;'>$value</td>";
                            }
                        }    
                      }
                      echo "</tr>";
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
    <section id="cv" class="section cv-section">
      <div class="section__container">
        <div class="content">
          <h2 style="color: #ffa500">Curriculum Vitae</h2>
          <div class="cv-details">
            <h3 id="programming-skills">Programming Skills</h3>
            <p class="programming-skills">
              I have learned about many programming languages and i'm still
              learning to the advanced skills with those programming languages.
              Example : C, C++, Java, Python, JavaScript, PHP, HTML, CSS,
              Node.Js, Next.Js, Tailwind CSS, MySQL, SQLyog, etc.
            </p>
            <h3 id="organizational-history">Organizational History</h3>
            <p class="organizational-history">
              Member Of Creative Ministry At UKKK UPN Jatim Easter Event April
              2023<br />
              Class President In 2nd Semester of Digital System Course 2023<br />
              Member Of Creative Ministry At UKKK UPN Jatim Christmas Event
              December 2022<br />
              Class President In 1st Semester of English Course 2022<br />
              Deputy Chairman Of The Extracurricular English Club At SMA Negeri
              3 Surabaya August 2019-June 2021<br />
              Management Of Music, Event, and Prayer Division in Christian
              Spiritual Extracurricular At SMP Negeri 19 Surabaya August
              2018-June 2019<br />
              Class President In 8th Grade At SMP Negeri 19 Surabaya August
              2017-June 2018
            </p>
            <h3 id="educational-background">Educational Background</h3>
            <p class="educational-background">
              Informatics student at UPN Veteran Jawa Timur 2022-Present<br />
              Science student at SMA Negeri 3 Surabaya 2019-2022<br />
              Student at SMP Negeri 19 Surabaya 2016-2019<br />
              Student at SD Negeri Medokan Ayu 2 Surabaya 2010-2016
            </p>
            <h3 id="achievement-history">Achievement History</h3>
            <p class="achievement-history">
              2nd Eligible Of Science Class 2021/2022<br />
              8th Place Of Physics Olimpiad September 2021
            </p>
          </div>
        </div>
      </div>
    </section>
    <section id="portfolio" class="section portfolio-section">
      <div class="section__container">
        <div class="content">
          <h2 style="color: #ffa500">Portfolio</h2>
          <div class="portfolio-items">
            <div class="portfolio-item">
              <strong>Website Database Toko Buku IMS</strong>
              <p>
                A web application developed using PHP and MySQL for managing an
                IMS book store's inventory and their database transaction
                history.
              </p>
            </div>
            <div class="portfolio-item">
              <strong>Website Landing Page Toko Buku IMS</strong>
              <p>
                A landing page developed using Next.js and Tailwind CSS for the
                same book store project (On Progress Still Learning).
              </p>
            </div>
            <div class="portfolio-item">
              <strong>Personal Website</strong>
              <p>
                My personal website that include home page, portfolio page,
                curriculum vitae page, and contact page that developed using
                HTML and CSS.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="contact" class="section">
      <div class="section__container">
        <div class="content">
          <h2 style="color: #ffa500">Contact Me</h2>
          <h3 style="color: #ffffff">Feel Free To Contact Me At :</h3>
          <p style="color: #ffffff">
            Email : sandynicholas1201@gmail.com<br />
            Phone: 0822-2912-1208<br />
            Location: Surabaya, East Java, Indonesia
          </p>
        </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="website.js"></script>
  </body>
</html>
