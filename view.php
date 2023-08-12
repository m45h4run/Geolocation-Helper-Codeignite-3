<?php
$this->load->helper('geolocation');

            $koordinat1 = '-2.9700758688522466, 122.2969432051717';
            $koordinat2 = '-4.014565748310056, 122.46997786849438';

            echo $distance_km = haversineDistance($koordinat1, $koordinat2, 'km').' Kilo meter (garis lurus)';
            echo "<br>";
            echo $distance_m = haversineDistance($koordinat1, $koordinat2, 'm');
            echo ' Meter (garis lurus) <hr> Pembulatan';

            // Membulatkan menjadi 2 desimal round($angka,2)
            $angkaBulat2Desimal = round($distance_m,2);

            echo "<br> Angka asli: $distance_m <br>";
            echo "Angka yang dibulatkan (2 desimal): $angkaBulat2Desimal Meter <br>";
