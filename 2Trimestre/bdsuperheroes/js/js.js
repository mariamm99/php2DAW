document.addEventListener('DOMContentLoaded', () => {
    console.log("llama a ajax");
   let input= document.getElementById("nombre");
   input.addEventListener("keyup", showHint);
});


function showHint() {
    console.log(this);
    let str=this.value;
    if (str.length == 0) {
      document.getElementById("txtHint").innerHTML = "";
      return;
    } else {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("txtHint").innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET", "vacio.php?q=" + str, true);
      xmlhttp.send();
    }
  }