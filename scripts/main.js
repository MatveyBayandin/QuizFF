

$('.open-popub-log').click(function(){
    $('.popub-bg-login').fadeIn(600);
});
$('.close-popub-LOG').click(function(){
    $('.popub-bg-login').fadeOut(600);
});



$('.open-popub-reg').click(function(){
    $('.popub-bg-register').fadeIn(600);
});
$('.close-popub-REG').click(function(){
    $('.popub-bg-register').fadeOut(600);
});



$('.lalalal').click(function(){
    $('.popub-bg-login').fadeOut(600);
});




$(document).ready(function(){
    $(".myTests").click(function(){
        $(".body-User-content-interface").empty();
        $(".body-User-content-interface").load("php/MyTestsPage.php");
   });

   $(".ConpliteTests").click(function(){
        $(".body-User-content-interface").empty();
        $(".body-User-content-interface").load("php/DoneTestsPage.php");
    });

    $(".OtherTests").click(function(){
        $(".body-User-content-interface").empty();
        $(".body-User-content-interface").load("php/OtherTestsPage.php");
    });

    $(".create-button").click(function(){
        $(".body-User-content-interface").empty();
        $(".body-User-content-interface").load("php/CreateTestPage.php");
    });
    

});

const radioButton = document.querySelectorAll('input[name="RadTestnam"]');
    
radioButton.forEach(radioButton =>{
    radioButton.addEventListener('change', event =>{
            $('.popub-bg-Soglasie').fadeIn(600);
       
        
    })
})

$('.close-popub-Sogl').click(function(){
    $('.popub-bg-Soglasie').fadeOut(600);
});