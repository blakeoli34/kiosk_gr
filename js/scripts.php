  <script src="js/jquery.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="js/jquery.js"></script>
<script>
	$(function() {
		jcf.replaceAll();
	});
</script>
  <script type="text/javascript">
  var tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

  function GetClock(){
  var d=new Date();
  var nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear();
  if(nyear<1000) nyear+=1900;

  var nhour=d.getHours(),nmin=d.getMinutes(),ap;
  if(nhour==0){ap=" AM";nhour=12;}
  else if(nhour<12){ap=" AM";}
  else if(nhour==12){ap=" PM";}
  else if(nhour>12){ap=" PM";nhour-=12;}

  if(nmin<=9) nmin="0"+nmin;

  document.getElementById('clockbox').innerHTML=""+nhour+":"+nmin+ap+"";
  document.getElementById('datebox').innerHTML=""+tmonth[nmonth]+" "+ndate+", "+nyear+"";
  }

  window.onload=function(){
  GetClock();
  setInterval(GetClock,1000);
  }
  </script>
  <script>
      $('#toggleoverlay').click(function() {
          $('#overlay').toggle();
		  $('.page').toggleClass('blur');
          return false;
      });
	  
  </script>  