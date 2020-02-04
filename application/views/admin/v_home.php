    <marquee direction="right" align="center"><div style="text-align:right;"><div align="center" style="color: black;" class="halaman" >
        <h2>Dapatkan Harga Tiket Pesawat Murah ke
    Destinasi Favorit Anda</h2>
    </div></marquee>

    <div align="left" style="color: blue;" class="halaman">
        <h3>Kebutuhan tiket pesawat murah selalu dicari oleh siapa pun yang ingin melakukan penerbangan dengan nyaman, termasuk oleh Anda. Terlebih, saat ini transportasi dengan menggunakan pesawat terbang sudah banyak dipilih lantaran kenyamanan dan kecepatan waktu tempuhnya. Jika Anda adalah salah satu calon penumpang yang sedang mencari tiket pesawat murah atau tiket pesawat promo, sangat tepat bagi Anda untuk membeli tiket pesawat murah melalui kami.</h3>
    </div>

    <div align="left" style="color: blue;" class="halaman">
        <h3>Segera tentukan destinasi penerbangan yang Anda inginkan dan booking tiket pesawat dengan maskapai favorit Anda.</h3>
    </div>

    <body style="background:url(template/tampilan/images/605.png) no-repeat; background-size: cover; opacity: 0.7;"></body>
    <!-- <textarea style="resize:none;width:300px;height:100px;"></textarea> -->
    <!-- <p ><img src=”template/tampilan/images/team_1.jpg” style=”float:left;” />tulis teks disini</p> -->

    <!DOCTYPE html>
    <html>
    <head>
        <title>Selamat Datang</title>

        <script type="text/javascript">
            function showTime(){
                var a_p = "";
                var today = new Date();
                var curr_hour = today.getHours();
                var curr_minute = today.getMinutes();
                var curr_second = today.getSeconds();

                if (curr_hour<12) {
                    a_p = "AM";
                }else {
                    a_p = "PM";
                }

                if (curr_hour == 0) {
                    curr_hour=12;
                }
                if (curr_hour == 12) {
                    curr_hour=curr_hour-12;
                }
                curr_hour = checkTime(curr_hour);
                curr_minute = checkTime(curr_minute);
                curr_second = checkTime(curr_second);

                document.getElementById('time').innerHTML= curr_hour+":"+curr_minute+":"+curr_second+" "+a_p;
            }

            function checkTime(i){
                if (i<10) {
                    i = "0"+i;
                }
                return i;
            }
            setInterval(showTime,500);
        </script>
    </head>
    <body>
        <marquee direction="down" scrollamount="2" align="center"><div style="text-align:right;">
            <h3>Selamat Datang</h3>
            <h4 id="time" style="color:red"></h4>
            <h4 id="date" style="color:blue"></h4></marquee>
        </div>

        <script>
            var months = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
            var date = new Date();
            var day = date.getDate();
            var month = date.getMonth();
            var year = <?php echo date('Y')?>

            document.getElementById("date").innerHTML=" "+day+" "+months[month]+" "+year;
        </script>
    </body>
    </html>