/* Authored by Boaz James Otieno */
/* full screen image slider */

var arr=['images/haley.jpg','images/jon.jpg','images/PB.jpg','images/inside.jpg']; //an array of image sources
var pos=0; //initializes image position in the array
$(document).ready(function () {

    var htm='';
    /* initializes the small circles html*/
    for(var i=0;i<arr.length;i++){
        htm+='<div id="'+i+'" class="circle" onclick="circleClick('+i+')"> </div> ';

    }

    $('#circles').html(htm);//show small circles
    $('#slider').html('<img src="'+arr[0]+'" class="img-slide wow slideInDown" data-wow-delay="0.8s">');//show first image
    $('#0').css({'background':'#000', 'color':'#000'});//sets the background of the first small circle to black

    /* Auto slides the images with the image sources array given as first argument and interval as second argument */
    function autoSlide(arr,interval){
        setInterval(function () {
            pos++;
            if(pos>arr.length-1){
                pos=0;
            }
            $('#slider').html('<img src="'+arr[pos]+'" class="img-slide wow fadeIn">');//shows image
            $('#'+pos).css({'background':'#000', 'color':'#000'});//sets background-color of circle representing the current active image to black
            $('#'+(pos-1)).css({'background':'#fff', 'color':'#fff'});//sets background-color of circle before active to white
            if(pos==0){
                $('#'+(arr.length-1)).css({'background':'#fff', 'color':'#fff'});
            }

        },interval);
    }
    /* end of function autoSlide */

    autoSlide(arr,5000);//calls function autoSlide

    /* displays next image */
    function next(){
        if(pos>arr.length-2){
            pos=-1;
        }
        $('#slider').html('<img src="'+arr[pos+1]+'" class="img-slide wow fadeIn">');//show image
        pos++;

        $('#'+pos).css({'background':'#000', 'color':'#000'});//sets background-color of circle representing the current active image to black
        $('#'+(pos-1)).css({'background':'#fff', 'color':'#fff'});//sets background-color of circle before active to white
        if(pos==0){
            $('#'+(arr.length-1)).css({'background':'#fff', 'color':'#fff'});
        }
    }
    /* end of function next  */

    /* displays previous image */
    function previous() {
        if(pos<1){
            pos=arr.length;
        }
        $('#slider').html('<img src="'+arr[pos-1]+'" class="img-slide wow fadeIn">');
        pos--;

        $('#'+pos).css({'background':'#000', 'color':'#000'});//sets background-color of circle representing the current active image to black
        $('#'+(pos+1)).css({'background':'#fff', 'color':'#fff'});//sets background-color of circle before active to white
        if(pos==arr.length-1){
            $('#0').css({'background':'#fff', 'color':'#fff'});
        }
    }
    /* end of function previous */

    /* onclick next */
    $('button#next').on('click',function (e) {
        e.preventDefault();
        next();//call function next
    });
    /* end of onclick next */

    /* onclick previous */
    $('button#prev').on('click',function (e) {
        e.preventDefault();
        previous();//call function previous
    });
    /* end of onclick previous */

});

/* displays image represented by the small circle */
function circleClick(position) {
    if(position!=pos){
        $('#slider').html('<img src="'+arr[position]+'" class="img-slide wow fadeIn">');//show image

        $('#'+position).css({'background':'#000', 'color':'#000'});//sets background-color of circle representing the current active image to black
        $('#'+(pos)).css({'background':'#fff', 'color':'#fff'});//sets background-color of circle before active to white

        pos=position;
    }
    /* end of function circleClick */


}