$(document).ready(function () {


   setInterval(function () {
       var time=new Date();
       var sec=time.getSeconds();
       var angle=(sec/60)*360;
       $('.sec-hand').css({'transform':'rotate('+angle+'deg) scaleY(1.02)'});
   },1000);
    setInterval(function () {
        var time=new Date();
        var min=time.getMinutes();
        var angle=(min/60)*360;
        $('.min-hand').css({'transform':'rotate('+angle+'deg) scaleY(.9)'});
    },1000);
    setInterval(function () {
        var time=new Date();
        var hr=time.getHours();
        var hour;
        if(hr>12){
            hour=hr-12
        }else{
            hour=hr;
        }
        var angle=(hour/12)*360;
        $('.hour-hand').css({'transform':'rotate('+angle+'deg)'});
    },1000);
});