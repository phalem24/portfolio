$(document).ready(function() {
        $('.navbar--item').on('click', function() { // Au clic sur un Ã©lÃ©ment
            var page = $(this).attr('href'); // Page cible
            var speed = 750; // DurÃ©e de l'animation (en ms)
            $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
            return false;
        });
});

$('.creations--content--item').on('click', function(){
    var id=this.id;
     console.log(id);
     $(".photobox").css("display","block");
    $(".photobox").append('<img class="photoclic" src="'+id+'">');
});

$('.photop').on('click', function(){
    $(".photobox").css("display","none");
    $(".photobox img").remove();
    console.log()
});