/*the subsciption popup takes care of opening and closing the popup*/
function subscriptionPopup(){
    // get the popup-id (this is the id we set for the popup in html)
    //popup-class is the class set for the sucribe form
    var popup-class = $('#popup-id');
    //next we have to open the popup
    // open the popup box
   popup-class.show();
//to close the popup when we click closed
$(".close").on('click',function(){
        popup-class.hide();
    });

    // close the popup when user clicks outside of the box
    //thetarget property that refers to the actual element clicked
    //"click" is an event (when the selected element is clicked). "function(e)"
    //is the event handling function (on event, object is created).

   $(window).on('click', function(e) {
       if(e.target == popup-class[0]){
           popup-class.hide();
       }
   });
}

//we’ll use jQuery cookie to check whether the popup has already
//been shown to the visitor
//we are creating a cookie called popupdisplayed
//if the popup has been displayed (not null) then we are returning a
//false and not saving the cookie_expire
$(document).ready(function() {
    var popDisplayed = $.cookie('popDisplayed');
    if(popDisplayed == '1'){
        return false;
    }else{
      //if its not been displayed before we are asking it to set
      //a cookie expire function in 600seconds i.e. 10mins
      //here  will be loaded after 10 seconds delay and a cookie
      //(popDisplayed) will be created with 10 days expiry time
        setTimeout( function() {
            subscriptionPopup();
        },600 * 1000);
        $.cookie('popDisplayed', '1', { expires: 10 });
    }
});
