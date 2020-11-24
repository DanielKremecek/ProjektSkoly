<br><br>
<h1 align="center">Mapa</h1>
<hr>
<div>
    <div id ="map"></div>
    <style>#map { height: 700px; }</style>
    <script>
        var map = L.map('map').setView([49.067068, 17.460288], 13);
        
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);            
    </script>

 <?php
    foreach ($data as $skola){?>
    <script>
        var marker = L.marker([<?php echo $skola->geolat?>, <?php echo $skola->geolong ?>]).addTo(map);
            marker.bindPopup("<b><?php echo $skola->nazev?></b><br><?php echo $skola->pocet?>");
    </script><?php 
    
    }?>
</div>

