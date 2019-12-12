/*******   JavaScript created by Zeshaan Nawaz. ********/

//trying out merchantcall on page load
var hidebutton = "hidebutton";
var serviceId = "875";
var reference = "powerade";
var contentUrl = "/index.html";
var contentId = "sub1";

document.getElementById('Merchantbutton2').onload = MerchantCall(hidebutton, serviceId, reference, contentUrl, contentId);

//Hide the powerade GIF when buy now is clicked.
document.getElementById('Merchantbutton').onclick = function() {
    document.getElementById('powerade').style.display = 'none';
  }

