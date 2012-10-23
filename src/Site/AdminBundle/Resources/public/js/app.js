                
$(function() {
    
    jQuery.expr[':'].contains = function(a, i, m) {
        var rExps=[
        {
            re: /[\xC0-\xC6]/g, 
            ch: "A"
        },

        {
            re: /[\xE0-\xE6]/g, 
            ch: "a"
        },

        {
            re: /[\xC8-\xCB]/g, 
            ch: "E"
        },

        {
            re: /[\xE8-\xEB]/g, 
            ch: "e"
        },

        {
            re: /[\xCC-\xCF]/g, 
            ch: "I"
        },

        {
            re: /[\xEC-\xEF]/g, 
            ch: "i"
        },

        {
            re: /[\xD2-\xD6]/g, 
            ch: "O"
        },

        {
            re: /[\xF2-\xF6]/g, 
            ch: "o"
        },

        {
            re: /[\xD9-\xDC]/g, 
            ch: "U"
        },

        {
            re: /[\xF9-\xFC]/g, 
            ch: "u"
        },

        {
            re: /[\xC7-\xE7]/g, 
            ch: "c"
        },

        {
            re: /[\xD1]/g, 
            ch: "N"
        },

        {
            re: /[\xF1]/g, 
            ch: "n"
        }
        ];

        var element = $(a).text();
        var search  = m[3];

        $.each(rExps, function() {
            element    = element.replace(this.re, this.ch);
            search     = search.replace(this.re, this.ch);
        });

        return element.toUpperCase()
        .indexOf(search.toUpperCase()) >= 0;
    };
    
    
    /* French initialisation for the jQuery UI date picker plugin. */
    /* Written by Keith Wood (kbwood{at}iinet.com.au) and StÃ©phane Nahmani (sholby@sholby.net). */
    jQuery(function($){
        $.datepicker.regional['fr'] = {
            closeText: 'Fermer',
            prevText: '&#x3c;PrÃ©c',
            nextText: 'Suiv&#x3e;',
            currentText: 'Courant',
            monthNames: ['Janvier','FÃ©vrier','Mars','Avril','Mai','Juin',
            'Juillet','AoÃ»t','Septembre','Octobre','Novembre','DÃ©cembre'],
            monthNamesShort: ['Jan','FÃ©v','Mar','Avr','Mai','Jun',
            'Jul','AoÃ»','Sep','Oct','Nov','DÃ©c'],
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

    //    $("#site_adminbundle_articlestype_resume, .wyswyg").htmlarea(); // Initialize jHtmlArea's with all default values
    $("#site_adminbundle_articlestype_dateCreated, .datepicker").datepicker({
        changeMonth: true,
        changeYear: true
    });
    
    $('.fancybox').fancybox({
        openEffect	: 'elastic',
        closeEffect	: 'elastic'
    });
    
    var minlength = 3;
    $('.filter_input').keyup(function(){
        var that = this;
        value = $(this).val();
        if (value.length >= minlength ) {
            $(".table-striped tbody tr").not(":contains('"+value+"')").hide();
        }
        else{
            $(".table-striped tbody tr").show();
        }
    });
    
    $('.reset_input').click(function(){
        $('.filter_input').val('');
        $(".table-striped tr").show();
    });
    
    $('.timepicker').timepicker({
        timeSeparator: ':',           // The character to use to separate hours and minutes. (default: ':')
        showLeadingZero: true
    });
                
    $("input:checkbox, input:radio, input:file, select").uniform();
    
    $("#scrollTop, .scrollTop").click(function(){
        $('body').scrollTo( 0,800, {
            easing:'easeInOutQuart'
        } );
    });
                
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
        
    $( ".city" ).autocomplete({
        source: function( request, response ) {
            $.ajax({
                url: "http://ws.geonames.org/searchJSON",
                dataType: "jsonp",
                data: {
                    featureClass: "P",
                    style: "medium",
                    maxRows: 12,
                    country: 'FR',
                    name_startsWith: request.term
                },
                success: function( data ) {
                    response( $.map( data.geonames, function( item ) {
                        return {
                            label: item.name + (item.adminName1 ? ", " + item.adminName1 : ""),
                            value: item.name
                        };
                    }));
                }
            });
        },
        minLength: 2,
        open: function() {
            $( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
        },
        close: function() {
            $( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
        }
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
    
    $('.textarea').wysihtml5({
        'locale': "fr-FR",
        "font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
        "emphasis": true, //Italics, bold, etc. Default true
        "lists": true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
        "html": true, //Button which allows you to edit the generated HTML. Default false
        "link": true, //Button to insert a link. Default true
        "image": true, //Button to insert an image. Default true,
        "color": true //Button to change color of font  
    });
    
});
