$(document).ready(function () {

   var serviceTime=new Date(2018,3,15,10,30);
   var serviceTimeToMilli=serviceTime.getTime();
   //get days
   setInterval(function () {
       var date=new Date();
       var dateToMilli=date.getTime();
       var diff=serviceTimeToMilli-dateToMilli;
       var diffDays=Math.floor(diff/86400000);
       if(diffDays>0){
           $('#days').html(diffDays);
       }else{
           $('#days').html('00');
       }

   },1000);

   //get hours
    setInterval(function () {
        var date=new Date();
        var dateToMilli=date.getTime();
        var diff=serviceTimeToMilli-dateToMilli;
        diff=diff%86400000;
        var diffHours=Math.floor(diff/3600000);
        if(diffHours>0){
            $('#hours').html(diffHours);
        }else{
            $('#hours').html('00');
        }
    },1000);

    //get minutes
    setInterval(function () {
        var date=new Date();
        var dateToMilli=date.getTime();
        var diff=serviceTimeToMilli-dateToMilli;
        diff=(diff%86400000)%3600000;
        var diffMinutes=Math.floor(diff/60000);
        if(diffMinutes>0){
            $('#minutes').html(diffMinutes);
        }else{
            $('#minutes').html('00');
        }

    },1000);

    //get seconds
    setInterval(function () {
        var date=new Date();
        var dateToMilli=date.getTime();
        var diff=serviceTimeToMilli-dateToMilli;
        diff=((diff%86400000)%3600000)%60000;
        var diffSec=Math.floor(diff/1000);
        if(diffSec>0){
            $('#seconds').html(diffSec);
        }else{
            $('#seconds').html('00');
        }

    },1000);
});