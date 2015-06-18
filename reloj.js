// Configuración horaria (tipo: 12hs, formato: h:ma)
$(function($) {
   var options = {
        timeNotation: '24h',
        format: '%I:%M%p'
      }; 
   $('.Hora').jclock(options);
});

// Fecha
var calendarDate = getCalendarDate();
var div_date = document.getElementById('date');
div_date.innerHTML = "" + calendarDate + "";
// Días
var div_days = document.getElementById('days');
div_days.innerHTML = new Date().getDate();


function getCalendarDate()
{
   var months = new Array(13);
   months[0]  = "enero";
   months[1]  = "febrero";
   months[2]  = "marzo";
   months[3]  = "abril";
   months[4]  = "mayo";
   months[5]  = "junio";
   months[6]  = "julio";
   months[7]  = "agosto";
   months[8]  = "septiembre";
   months[9]  = "octubre";
   months[10] = "noviembre";
   months[11] = "diciembre";
   var now         = new Date();
   var monthnumber = now.getMonth();
   var monthname   = months[monthnumber];
   var monthday    = now.getDate();
   var year        = now.getYear();
   if(year < 2000) { year = year + 1900; }
   var dateString = monthname + '<br />' + year;
   return dateString;
}; 
// -------------------------------------------------------------------------------------------------