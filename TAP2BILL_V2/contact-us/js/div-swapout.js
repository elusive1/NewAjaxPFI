/* ZN - swap out the divs on the how-to section */

document.getElementById("PSMS").onclick = function() { 

    document.getElementById("dcb").style.display = "none";
    document.getElementById("api").style.display = "none";
    document.getElementById("psms").style.display = "block";
};

document.getElementById("DCB").onclick = function() { 

    document.getElementById("psms").style.display = "none";
    document.getElementById("api").style.display = "none";
    document.getElementById("dcb").style.display = "block"; 

};

document.getElementById("API").onclick = function() { 

    document.getElementById("psms").style.display = "none";
    document.getElementById("dcb").style.display = "none";
    document.getElementById("api").style.display = "block";  

};

// For the services button on the menu
function servicesMenu() {
    var section = document.getElementById("js-services");
    section.scrollIntoView({ behavior: 'smooth', block: 'start'});
};

// For the about-us section on the menu
function AboutusMenu() {
    var section = document.getElementById("fh5co-pricing");
    section.scrollIntoView({ behavior: 'smooth', block: 'start'});
};

// For the about-us section on the menu
function Partners() {
    var section = document.getElementById("fh5co-testimonial");
    section.scrollIntoView({ behavior: 'smooth', block: 'start'});
};

// For the More section on the DCB section
function MoreDCB() {
    var section = document.getElementById("fh5co-schedule");
    section.scrollIntoView({ behavior: 'smooth', block: 'start'});
    document.getElementById("psms").style.display = "none";
    document.getElementById("api").style.display = "none";
    document.getElementById("dcb").style.display = "block";
};

// For the More section on the PSMS section
function MorePSMS() {
    var section = document.getElementById("fh5co-schedule");
    section.scrollIntoView({ behavior: 'smooth', block: 'start'});
    document.getElementById("dcb").style.display = "none";
    document.getElementById("api").style.display = "none";
    document.getElementById("psms").style.display = "block";
};

// For the More section on the API section
function MoreAPI() {
    var section = document.getElementById("fh5co-schedule");
    section.scrollIntoView({ behavior: 'smooth', block: 'start'});
    document.getElementById("psms").style.display = "none";
    document.getElementById("dcb").style.display = "none";
    document.getElementById("api").style.display = "block";  
};