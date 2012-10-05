$(function() {
    /* French initialisation for the jQuery UI date picker plugin. */
    /* Written by Keith Wood (kbwood{at}iinet.com.au) and Stéphane Nahmani (sholby@sholby.net). */
    jQuery(function($){
        $.datepicker.regional['fr'] = {
            closeText: 'Fermer',
            prevText: '&#x3c;Préc',
            nextText: 'Suiv&#x3e;',
            currentText: 'Courant',
            monthNames: ['Janvier','Février','Mars','Avril','Mai','Juin',
            'Juillet','Août','Septembre','Octobre','Novembre','Décembre'],
            monthNamesShort: ['Jan','Fév','Mar','Avr','Mai','Jun',
            'Jul','Aoû','Sep','Oct','Nov','Déc'],
            dayNames: ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'],
            dayNamesShort: ['Dim','Lun','Mar','Mer','Jeu','Ven','Sam'],
            dayNamesMin: ['Di','Lu','Ma','Me','Je','Ve','Sa'],
            weekHeader: 'Sm',
            dateFormat: 'dd/mm/yy',
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ''
        };
        $.datepicker.setDefaults($.datepicker.regional['fr']);
    });

    $("#site_adminbundle_articlestype_resume, .wyswyg").htmlarea(); // Initialize jHtmlArea's with all default values
    $("#site_adminbundle_articlestype_dateCreated, .datepicker").datepicker({
        changeMonth: true,
        changeYear: true
    });
    $('.fancybox').fancybox({
        openEffect	: 'elastic',
        closeEffect	: 'elastic'
    });
                
    $("input:checkbox, input:radio, input:file").uniform();
                
    $("#site_adminbundle_articlestype_special, .multipleselect, #site_adminbundle_articlestype_tag").select2();
//                
//    var select = $( ".slider" );
//    var slider = $( "<div id='slider'></div>" ).insertAfter( select ).slider({
//        min: 1,
//        max: 5,
//        range: "min",
//        value: select[ 0 ].selectedIndex + 1,
//        slide: function( event, ui ) {
//            select[ 0 ].selectedIndex = ui.value - 1;
//        }
//    });
//    $( ".slider" ).change(function() {
//        slider.slider( "value", this.selectedIndex + 1 );
//    });
                
    o = jQuery("#overscroll, .scrollbox").overscroll({
        wheelDirection :'vertical',
        scrollLeft : false,
        direction: 'vertical'
    });
    
    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();
		
    $('#calendar, .calendarfull').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,basicWeek,basicDay'
        },
        editable: true,
        events: [
        {
            title: 'All Day Event',
            start: new Date(y, m, 1)
        },
        {
            title: 'Long Event',
            start: new Date(y, m, d-5),
            end: new Date(y, m, d-2)
        },
        {
            id: 999,
            title: 'Repeating Event',
            start: new Date(y, m, d-3, 16, 0),
            allDay: false
        },
        {
            id: 999,
            title: 'Repeating Event',
            start: new Date(y, m, d+4, 16, 0),
            allDay: false
        },
        {
            title: 'Meeting',
            start: new Date(y, m, d, 10, 30),
            allDay: false
        },
        {
            title: 'Lunch',
            start: new Date(y, m, d, 12, 0),
            end: new Date(y, m, d, 14, 0),
            allDay: false
        },
        {
            title: 'Birthday Party',
            start: new Date(y, m, d+1, 19, 0),
            end: new Date(y, m, d+1, 22, 30),
            allDay: false
        },
        {
            title: 'Click for Google',
            start: new Date(y, m, 28),
            end: new Date(y, m, 29),
            url: 'http://google.com/'
        }
        ]
    });
    
    $('#example-1, .tooltiped').tipsy({
        gravity: 'w', 
        trigger: 'focus'
    });
    $(".knobed").knob();
    
    //Basic carousel, no options
    $('.carousel').carouFredSel({
        auto: {
            pauseOnHover: 'resume',
            progress: '#timer1'
        },
        prev: '#prev1',
        next: '#next1'
    });
        
        
        
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    }); 
			
    $('.scrollup').click(function(){
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });
                
});