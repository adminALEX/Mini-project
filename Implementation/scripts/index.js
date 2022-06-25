
function loaded(){
            
  let haveVoted = sessionStorage.getItem('haveVoted');
  if(haveVoted == 'true'){
      // document.getElementById('votenow-button').style.visibility = 'hidden';
  }
}

function on() {
            document.getElementById("overlay").style.display = "block";

    }
function redirect(){
      off();
      document.getElementById("overlay-load").style.display = "block";
      
    }
function off() {
      document.getElementById("overlay").style.display = "none";
    }

function openNav() {
      document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
    }