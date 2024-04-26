// <![CDATA[
function formatNumber(n) {
  if (n < 10) {
     return "0" + n;
  } else {
     return n;
  }
}

function formatTime(time) {
   var t = parseInt(time);
   var hours = parseInt(t / 3600);
   var minutes = parseInt(t / 60);
   var seconds = t - ((hours * 3600) + (minutes * 60));
   if (hours > 0) {
      return formatNumber(hours) + ":" + formatNumber(minutes) + ":" + formatNumber(seconds);
   } else {
      return formatNumber(minutes) + ":" + formatNumber(seconds);
   }
}


   function play() {
     var play = document.getElementById("playButton");
     play.textContent ="Pause";
     var playShape = document.getElementById("playShape");
     var pauseShape = document.getElementById("pauseShape");
     playShape.style.setProperty("display", "none", "");
     pauseShape.style.setProperty("display", "inline", "");
     var eventShape = document.getElementById("eventShape");
     eventShape.setAttribute("aria-pressed", "true");
   }
   function pause() {
     var play = document.getElementById("playButton");
     play.textContent ="Play";
     var playShape = document.getElementById("playShape");
     var pauseShape = document.getElementById("pauseShape");
     playShape.style.setProperty("display", "inline", "");
     pauseShape.style.setProperty("display", "none", "");
     var eventShape = document.getElementById("eventShape");
     eventShape.setAttribute("aria-pressed", "false");
   }
   function playAndPause()
   {
     var v = document.getElementById("vid");

     if (v.paused)
     {
        v.play();
     } else {
        v.pause();
     }

   }
   function timeupdate()
   {
     var v = document.getElementById("vid");
     var t = document.getElementById("current");

     t.textContent = formatTime(v.currentTime);

     var currentProgress = ( v.currentTime / v.duration );

     var shape = document.getElementById("timeBar");
     shape.setAttribute("width", currentProgress * 220);
   }
   function progressupdate(e)
   {
     var v = document.getElementById("vid");

     var currentProgress = ( e.loaded / e.total );

     var shape = document.getElementById("progressBar");
     shape.setAttribute("width", currentProgress * 220);
   }
   function durationupdate(e)
   {
     var v = document.getElementById("vid");
     var t = document.getElementById("duration");

     t.textContent = formatTime(v.duration);
    
   }
  function init()
  {
     var v = document.getElementById("vid");
     v.addEventListener("play", play, false);
     v.addEventListener("pause", pause, false);
     v.addEventListener("ended", pause, false);
     v.addEventListener("timeupdate", timeupdate, false);
     v.addEventListener("progress", progressupdate, false);

     v.addEventListener("durationchange", durationupdate, false);
     var v = document.getElementById("vid");
     var t = document.getElementById("duration");

     t.textContent = formatTime(v.duration);
    

     var b = document.getElementById("playButton");
     b.addEventListener("click", playAndPause, false);

     var b = document.getElementById("eventShape");
     b.addEventListener("click", playAndPause, false);
  }

// ]]>
