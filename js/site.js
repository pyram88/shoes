sfHover = function() {
        var sfEls = document.getElementById("menu").getElementsByTagName("LI");
        for (var i=0; i<sfEls.length; i++) {
                sfEls[i].onmouseover=function() {
                        this.className+=" sfhover";
                }
                sfEls[i].onmouseout=function() {
                        this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
                }
        }
}
if (window.attachEvent) window.attachEvent("onload", sfHover);


function deleteProduit(refProduit)
{
    $('.submit-'+refProduit).trigger('click');
}

function end(status)
{
    $.ajax({
        method:"POST",
        url: "end.php",
        data:{
            status: status
        }
    });
}

$(document).ready(function() {
    $(".confirm, .error").delay(2000).fadeOut(500);
});