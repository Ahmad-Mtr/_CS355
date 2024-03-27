

function _colorize1() {
    let title = document.getElementById("title");
   
    title.style.color = "red";

}

function _colorize2() {
    let title = document.getElementById("title");
   
    title.style.color = "green";

}

function _colorize3() {
    let title = document.getElementById("title");
    
    title.style.color = "blue";

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