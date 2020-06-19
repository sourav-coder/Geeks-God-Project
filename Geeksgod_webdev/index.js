
// this is the javascript file of our project



$('document').ready(function(){


    

    $('#portfolio-flters li').on('click',function(){
        $('#portfolio-flters li').removeClass('active');
        $(this).addClass('active');
    });


    $('.filter').click(function(){


        var name=$(this).attr('data-filter');
        

        if (name=='all'){
            $('.portfolio-item').show(2000);
            //console.log('all'+name);
        }
        else{
            console.log(name);
            $('.portfolio-item').not('.'+name).show('2000');
            //$(".portfolio-item").fadeOut().css('transform', 'scale(0)');

            $('.portfolio-item').filter('.'+name).hide('2000');

            
        }
    });





    




})




