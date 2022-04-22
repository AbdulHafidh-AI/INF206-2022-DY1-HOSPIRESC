### INF206-2022-DY1-HOSPIRESC
<hr>

<p align="center"><img src="public\assets\icon\Logo.png" width=500></p>

<h4> About HOSPIRESC </h4>
<p><em>HOSPIRESC</em> adalah sebuah aplikasi yang bertujuan agar sesama rumah sakit dapat saling menolong untuk berbagi dan membagi alat medis sederhana. Dengan adanya aplikasi ini
rumah sakit dapat dengan mudah untuk meminta pertolonganan alat-alat medis sederhana saat dibutuhkan.</p>
<hr>

### HOW TO RUN THIS WEB APPLICATION ???

<h4>pre-requisite</h4>
<ul>
  <li>Install aplikasi XAMPP untuk menghidupkan web server dan db server</li>
  <li>Install Composer terlebih dahulu</ll>
  </ul>

 <h4>Berikut cara menjalankanya:</h4>
1. Clone repositori ini terlebih dahulu di dalam folder htdocs
  <pre><code>git clone https://github.com/AbdulHafidh-AI/INF206-2022-DY1-HOSPIRESC.git</code></pre>
2. Masuk ke dalam folder
   <pre><code>cd INF206-2022-DY1-HOSPIRESC</code></pre>
3. Jalankan Composer Install
   <pre><code>composer install</code></pre>
4. Hidupkan key generate
   <pre><code>php artisan key:generate</code></pre>
5. Copy file .env.example menjadi .env <br>
6. Di dalam file .env ubahlah nama database menjadi hospiresc <br>
7. Sebelum Melakukan migrasi, Buatlah terlebih dahulu database hospiresc dengan menggunakan aplikasi RDBMS yang anda punya
    <pre><code>create database hospiresc;</code></pre>
8. Untuk Mengisi tabel beserta data-datanya (Migrasi database) jalankan perintah berikut:
   <pre><code>php artisan migrate --seed </pre></code>
9. Lalu hidupkan server aplikasinya dengan cara sebagai berikut:
   <pre><code>php artisan serve</code></pre> 
   <hr>

  
### Team Member 🥇
  
  | Name        | NPM           | Role |
| ------------- |:-------------:| -----:|
| <em>Abdul Hafidh</em> 👨‍🚀      | 2008107010056 | Fullstack Developer and UI Design |
| <em>Rahmi Najla</em> 💁‍♀️| 2008107010014      |   Frontend Developer and UI Design |
| <em>Faiz Dzakirullail 👨 </em>      | 2008107010091      |  Frontend Developer and UI Design |
| <em> Ulfa Rahmah </em>  🏄‍♀️  |  2008107010073       |  Database Manager     |
| <em> Cut Nadilla Maretna 👩‍🔧  </em>         |   2008107010003          |  Backend Developer         |
<hr>

### PROGRAMMING LANGUAGE AND TOOLS
<p align="left"><a href="https://www.w3.org/html/" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original-wordmark.svg" alt="html5" width="40" height="40"/> </a> <a href="https://www.w3schools.com/css/" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original-wordmark.svg" alt="css3" width="40" height="40"/> </a> 
<a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-original.svg" alt="javascript" width="40" height="40"/> <a href="https://www.php.net" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" alt="php" width="40" height="40"/> </a> <a href="https://laravel.com/" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/laravel/laravel-plain-wordmark.svg" alt="laravel" width="40" height="40"/> </a> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mysql/mysql-original-wordmark.svg" alt="mysql" width="40" height="40"/> <img src="https://icons.getbootstrap.com/assets/img/icons-hero.png" width="40", height="40">
 <hr>
