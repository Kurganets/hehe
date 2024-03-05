<!DOCTYPE html>
<html lang="en">
<head>
  <title>JADWAL PELAJARAN XII TKJ 1</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="HTML5 website template">
  <meta name="keywords" content="global, template, html, sass, jquery">
  <meta name="author" content="Bucky Maler">
  <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<!-- notification for small viewports and landscape oriented smartphones -->
<div class="device-notification">
  <a class="device-notification--logo" href="#0">
    <img src="assets/img/logo.png" alt="Jadwal Pelajaran">
    <p>Jadwal Pelajaran</p>
  </a>
  <p class="device-notification--message">Jadwal Pelajaran untuk kelas XII TKJ 1.</p>
</div>

<div class="perspective effect-rotate-left">
  <div class="container"><div class="outer-nav--return"></div>
    <div id="viewport" class="l-viewport">
      <div class="l-wrapper">
        <header class="header">
          <a class="header--logo" href="#0">
            <img src="assets/img/logo.png" alt="Global">
            <p>SMK "SORE" Tulungagung</p>
          </a>
          <button class="header--cta cta"></button>
          <div class="header--nav-toggle">
            <span></span>
          </div>
        </header>
        <nav class="l-side-nav">
          <ul class="side-nav">
            <li class="is-active"><span>Home</span></li>
            <li><span>Jadwal</span></li>
            <li><span>Notes Tugas</span></li>
            <li><span>Kalender</span></li>
            <li><span>To-do List</span></li>
          </ul>
        </nav>
        <ul class="l-main-content main-content">
          <li class="l-section section section--is-active">
            <div class="intro">
              <div class="intro--banner">
                <h1>Jadwal<br>Pelajaran<br>XII TKJ 1<br>Tahun<br>2023/2024</h1>
                  <span class="btn-background"></span>
                </button>
                <img src="assets/img/banner.png" alt="Welcome">
              </div>
              <div class="intro--options">
                <a href="#0">
                  <h3>Jadwal</h3>
                  <p>Jadwal Pelajaran dan Alokasi Waktu Untuk Kelas XII TKj 1</p>
                </a>
                <a href="#0">
                  <h3>Notes Tugas</h3>
                  <p>Sebagai Pengingat Jika Ada Tugas</p>
                </a>
                <a href="#0">
                  <h3>Kalender</h3>
                  <p>Lihat Kalender</p>
                </a>
              </div>
            </div>
          </li>
          <li class="l-section section">
            <div section="page 1"></div>
            <div style = "position:absolute; left:238px; top:80px; font-size: larger; font-weight: 600; ">
              JADWAL PELAJARAN
           </div>

           <div style = "position:absolute; left:755px; top:80px; font-size: larger; font-weight: 600; ">
            ALOKASI WAKTU
         </div>
            
            <div style="position: relative;">
              <img src="assets/img/pelajaran.PNG" style="position: absolute; left: 100px; top: 120px;"
              width="450"
              height="450">

              <div style="position: relative;">
                <img src="assets/img/jam.png" style="position: absolute; left: 600px; top: 120px;"
                width="450"
                height="450">
           </div>
          <li class="l-section section">
            <div class="contain">
              <h1><img src="assets/img/notes.png">Notes Tugas</h1>
              <button class="btn"><img src="assets/img/edit.png">Create Notes</button>
              <div class="notes-container">
              <!-- <p class="input-box">
               <img src="assets/img/delete.png" contenteditable="false">
              </p> -->
              </div> 
          <li class="l-section section">
             <!-- (A) PERIOD SELECTOR -->
    <div id="calPeriod">
      <input id="calBack" type="button" value="&lt;">
      <select id="calMonth"></select>
      <input type="number" id="calYear">
      <input id="calNext" type="button" value="&gt;">
    </div>

    <!-- (B) CALENDAR -->
    <div id="calWrap"></div>

    <!-- (C) EVENT FORM -->
    <dialog id="calForm"><form method="dialog">
      <div id="evtClose">X</div>
      <h2>KEGIATAN HARI INI</h2>
      <label>TANGGAL</label>
      <input type="text" id="evtDate" readonly>
      <label>Detail</label>
      <textarea id="evtTxt" required></textarea>

      <input id="evtDel" type="button" value="Delete">
      <input id="evtSave" type="submit" value="Save">
    </form></dialog>
    
          <li class="l-section section">
            <div class="hire">
              <h2></h2>
              <!-- checkout formspree.io for easy form setup -->
              <form class="work-request">
                <div class="work-request--options">
                  <span class="options-a">
                    <input id="opt-1" type="checkbox" value="app design">
                    <label for="opt-1">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                      PPKn:
                      Presentasi Hasil Diskusi
                    </label>
                    <input id="opt-2" type="checkbox" value="graphic design">
                    <label for="opt-2">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                      B. Indonesia:
                      Membuat Cerpen
                    </label>
                    <input id="opt-3" type="checkbox" value="motion design">
                    <label for="opt-3">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                      AIJ:
                      Membuat Topologi Desain Lab Komputer
                    </label>
                  </span>
                  <span class="options-b">
                    <input id="opt-4" type="checkbox" value="ux design">
                    <label for="opt-4">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                      Matematika:
                      Halaman 100 dan 102 Perbaikan
                    </label>
                    <input id="opt-5" type="checkbox" value="webdesign">
                    <label for="opt-5">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                      ASJ:
                      Tugas Akhir Tutorial Debian
                    </label>
                    <input id="opt-6" type="checkbox" value="marketing">
                    <label for="opt-6">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                      Pemrograman Web:
                      Tugas Akhir Website
                    </label>
                  </span>
                </div>
                
                  </div>
                </div>
                <input type="submit" value="Send Request">
              </form>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <ul class="outer-nav">
    <li class="is-active">Home</li>
    <li>Jadwal</li>
    <li>Notes Tugas</li>
    <li>Kalender</li>
    <li>to-do List</li>
  </ul>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-2.2.4.min.js"><\/script>')</script>
<script src="assets/js/functions-min.js"></script>
</body>
</html>
