

function _colorize() {
    let title = document.getElementById("title");
  let radio = document.querySelector("input[name='_color_value']:checked").value;
    
    switch (radio) {
      case "red":
        title.style.color = " rgb(238, 68, 68)";
        break;
      case "green":
        title.style.color = " rgb(96, 238, 68)";
        break;

      default:
        title.style.color = "rgb(68, 179, 238)";
        break;
    }

}


function _convert(){
    let jod = document.getElementById("jod_input").value;
    
    let riyal_objkt = document.getElementById("saudi_input");
    let dollar_objkt = document.getElementById("dollar_input");
    let euro_objkt = document.getElementById("euro_input");
    let yen_objkt = document.getElementById("yen_input");
    let pound_objkt = document.getElementById("pound_input");

    dollar_objkt.value = 1.41 * jod;
    riyal_objkt.value = 5.28914 * jod;
    euro_objkt.value = 1.18 * jod;
    yen_objkt.value = 151.06 * jod;
    pound_objkt.value =  1.02* jod;

    console.log( jod);
    

}
