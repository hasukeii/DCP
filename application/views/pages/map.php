<script src="<?= base_url(); ?>/assets/leaflet/leaflet.js"></script>



<div class="disparea">
    <h2 class="areatitle">REAL-TIME COLLECTOR MAP</h2>
    <p class="need">Area:</p>
    <div id="realtime">
        <div id="active">
            <h2 id="activetitle">ACTIVE</h2>
            <span id='time'></span>
        </div>
        <div id="colmap">
          <div id="map"></div>
        </div>
    </div>
    
    
</div>

<script>
    function setTime() {
    var d = new Date(),
      el = document.getElementById("time");
    
      el.innerHTML = formatAMPM(d);
    
    setTimeout(setTime, 1000);
    }
    
    function formatAMPM(date) {
      var hours = date.getHours(),
        minutes = date.getMinutes(),
        seconds = date.getSeconds(),
        ampm = hours >= 12 ? 'PM' : 'AM';
      hours = hours % 12;
      hours = hours ? hours : 12; // the hour '0' should be '12'
      minutes = minutes < 10 ? '0'+minutes : minutes;
      seconds = seconds < 10 ? '0'+seconds : seconds;
     
      var strTime = hours + ':' + minutes + ':' + seconds + ' ' + ampm;
      return strTime;
    }
    
    setTime();
</script>

 <script>
var map = L.map('map').setView([14.65, 121.07], 30  );
L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap contributors',
      maxZoom: 17,
      minZoom: 9   
}).addTo(map);
</script>
 



