<div id="cookiePopup">
        <h4>Cookies</h4>
        <p>Nôtre site utilise des cookies pour améliorer votre expérience d’utilisation et pour vous fournir un contenu adequat pour vous. Vous pouvez à tout moment faire part de vos choix : <a href="#">Cookie Policy & Privacy</a></p>
        <button id="acceptCookie">J'accepte</button>
        <button id="PasCookie">Ne pas accepter</button> 
        </div>


    <script type="text/javascript">
var cookieName= "CodingStatus";
var cookieValue="Coding Tutorials";
var cookieExpireDays= 30;
var NocookieName= "CodingStatus";
var NocookieValue="Coding Tutorials";
var NocookieExpireDays= 30;


let acceptCookie= document.getElementById("acceptCookie");
acceptCookie.onclick= function(){
    createCookie(cookieName, cookieValue, cookieExpireDays);
}


let PasCookie= document.getElementById("PasCookie");
PasCookie.onclick= function(){
    createCookie (NocookieName, NocookieValue, NocookieExpireDays);
}


let NocreateCookie= function(NocookieName, NocookieValue, NocookieExpireDays){
    let currentDate = new Date();
    currentDate.setTime(currentDate.getTime() + (NocookieExpireDays*24*60*60*1000));
    let expires = "expires=" + currentDate.toGMTString();
    document.cookie = NocookieName + "=" + NocookieValue + ";" + Noexpires + ";path=/";
    if(document.cookie){
    document.getElementById("cookiePopup").style.display = "none";
    }
}


let createCookie= function(cookieName, cookieValue, cookieExpireDays){
    let currentDate = new Date();
    currentDate.setTime(currentDate.getTime() + (cookieExpireDays*24*60*60*1000));
    let expires = "expires=" + currentDate.toGMTString();
    document.cookie = cookieName + "=" + cookieValue + ";" + expires + ";path=/";
    if(document.cookie){
    document.getElementById("cookiePopup").style.display = "none";
    }else{
    alert("Unable to set cookie. Please allow all cookies site from cookie setting of your browser");
    }

    }


let getCookie= function(cookieName){
    let name = cookieName + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
        c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
    }
    }
    return "";
}

let checkCookie= function(){
    let check=getCookie(cookieName);
    if(check==""){
        document.getElementById("cookiePopup").style.display = "block";
    }else{
        
        document.getElementById("cookiePopup").style.display = "none";
    }
}
checkCookie();
</script>