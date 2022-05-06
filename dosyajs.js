var _slayt=document.getElementsByClassName("slayt");
var slaytsayisi=_slayt.length;
var slaytno=0;
var i=0;
slaytGoster(slaytno);

function sonrakiSlayt()
{
    slaytno++;
    slaytGoster(slaytno);
}
function oncekiSlayt()
{
    slaytno--;
    slaytGoster(slaytno);
}


function slaytGoster(slaytnumarasi)
{
    slaytno=slaytnumarasi;
    if(slaytnumarasi>=slaytsayisi)
    {
        slaytno=0;
    }
    if(slaytnumarasi<0)
    {
        slaytno=slaytsayisi-1;
    }
    for(i=0;i<slaytsayisi;i++)
    {
        _slayt[i].style.display="none";
    }
    _slayt[slaytno].style.display="block";
}
