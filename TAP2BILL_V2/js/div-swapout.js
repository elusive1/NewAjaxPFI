/* ZN - swap out the  */

document.getElementById("PSMS").onclick = function() { 

    document.getElementById("dcb").style.display = "none";
    document.getElementById("api").style.display = "none";
    document.getElementById("psms").style.display = "block";
} 

document.getElementById("DCB").onclick = function() { 

    document.getElementById("psms").style.display = "none";
    document.getElementById("api").style.display = "none";
    document.getElementById("dcb").style.display = "block"; 

} 

document.getElementById("API").onclick = function() { 

    document.getElementById("psms").style.display = "none";
    document.getElementById("dcb").style.display = "none";
    document.getElementById("api").style.display = "block";  

}