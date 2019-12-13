/*******   JavaScript created by Zeshaan Nawaz. ********/

//merchantcall on page load
var hidebutton = "hidebutton";
var serviceId = "1575";
var reference = "powerade";
var contentUrl = "pfistaging.psgdemo.com\NewAjaxPFI\staging\success.html";
var contentId = "sub2";

document.getElementById('Merchantbutton2').onload = merchantCall(hidebutton, serviceId, reference, contentUrl, contentId);