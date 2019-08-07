let nav = document.querySelector(".nav-mobil");
    
    nav.addEventListener("click", function(){
let meniu = document.querySelector(".mobil-nav-list");
meniu.classList.toggle('show');
    });

    // on scroll nav 
    


//jquery reikia darasyti vietoi $ keliant i wordpresa
$(window).on("scroll", function(){
    if($(window).scrollTop()){

        $('header').addClass('prideti');
    }else {
        $('header').removeClass('prideti')
    }
    
    });