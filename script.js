var m=60;
var s=00;
var flag=false;
function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
function countdown()
{
    if(m<0)
    {
            document.getElementById('time').innerHTML="00:00";
            $('.tab').hide();
            $('.tabcontent').fadeOut('slow');
            return;
    }
    if(s==0 && m==0)
    {
        var str="";
        str+=m+":"+s;
        document.getElementById('time').innerHTML=str;
        if(!flag)
        {
            s=0;
            m=0;
            flag=true;
            $('#myPopup').show();
            $('.tab').hide();
            $('.tabcontent').fadeOut('slow');
        }
        return;
    }
    if(s==-1)
    {
        m=m-1;
        s=59;
    }
        var str="";
        str+=m+":"+s;
        document.getElementById('time').innerHTML=str;
        s--;
}
function getScore()
{
    $.post('getScore.php', function(data){
        $('#score').html(data);
    });
}
