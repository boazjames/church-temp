$(document).ready(function () {

    var first_child=$('.set-time div:nth-child(1)').html();
    var second_child=$('.set-time div:nth-child(2)').html();
    var third_child=$('.set-time div:nth-child(3)').html();

    function createDate(string) {
        var split=string.split(' ');
        var date_arr=split[0].split('-');
        var time_arr=split[1].split(':');
        return new Date(date_arr[0],date_arr[1]-1,date_arr[2],time_arr[0],time_arr[1]);
    }

    function nextServiceTimeToMilli(date1_to_milli,date2_to_milli,date3_to_milli) {
        var date_arr=[];
        var current_date=new Date();
        var current_date_to_milli=current_date.getTime();

        if(date1_to_milli>current_date_to_milli){
            date_arr.push(date1_to_milli);
        }

        if(date2_to_milli>current_date_to_milli){
            date_arr.push(date2_to_milli);
        }
        if(date3_to_milli>current_date_to_milli){
            date_arr.push(date3_to_milli);
        }

        var serviceTimeToMilli=date_arr[0];

        for(var i=1; i<date_arr.length; i++){
            serviceTimeToMilli=Math.min(date_arr[i],serviceTimeToMilli);
        }

        return serviceTimeToMilli;

    }

    if(first_child){
        var date1_to_milli=createDate(first_child).getTime(),
            date2_to_milli=createDate(second_child).getTime(),
            date3_to_milli=createDate(third_child).getTime();



        //get days
        setInterval(function () {
            var serviceTimeToMilli=nextServiceTimeToMilli(date1_to_milli,date2_to_milli,date3_to_milli);
            var date=new Date();
            var dateToMilli=date.getTime();
            var diff=serviceTimeToMilli-dateToMilli;
            var diffDays=Math.floor(diff/86400000);
            if(diffDays>0){
                $('#days').html(diffDays);
            }

        },1000);

        //get hours
        setInterval(function () {
            var serviceTimeToMilli=nextServiceTimeToMilli(date1_to_milli,date2_to_milli,date3_to_milli);
            var date=new Date();
            var dateToMilli=date.getTime();
            var diff=serviceTimeToMilli-dateToMilli;
            diff=diff%86400000;
            var diffHours=Math.floor(diff/3600000);
            if(diffHours>0){
                $('#hours').html(diffHours);
            }
        },1000);

        //get minutes
        setInterval(function () {
            var serviceTimeToMilli=nextServiceTimeToMilli(date1_to_milli,date2_to_milli,date3_to_milli);
            var date=new Date();
            var dateToMilli=date.getTime();
            var diff=serviceTimeToMilli-dateToMilli;
            diff=(diff%86400000)%3600000;
            var diffMinutes=Math.floor(diff/60000);
            if(diffMinutes>0){
                $('#minutes').html(diffMinutes);
            }

        },1000);

        //get seconds
        setInterval(function () {
            var serviceTimeToMilli=nextServiceTimeToMilli(date1_to_milli,date2_to_milli,date3_to_milli);
            var date=new Date();
            var dateToMilli=date.getTime();
            var diff=serviceTimeToMilli-dateToMilli;
            diff=((diff%86400000)%3600000)%60000;
            var diffSec=Math.floor(diff/1000);
            if(diffSec>0){
                $('#seconds').html(diffSec);
            }

        },1000);
    }


});