/*******   JavaScript created by Zeshaan Nawaz. ********/

//trying out merchantcall on page load
let MerchantCall = function(hidebutton, serviceId, reference, contentUrl, contentId){
    hidebutton = "hidebutton";
    serviceId = "875";
    reference = "powerade";
    contentUrl = "/index.html";
    contentId = "sub1";
}
document.getElementById('Merchantbutton2').onload = MerchantCall(hidebutton, serviceId, reference, contentUrl, contentId);

//Hide the powerade GIF when buy now is clicked.
document.getElementById('Merchantbutton').onclick = function() {
    document.getElementById('powerade').style.display = 'none';
  }

