$(function() {
    
    function autosuggestion($container, $route, $field){
        var suggestions = [];  
        var cache = {};
        var field = $field;
        $container.autocomplete({
            source: function( request, response ) {
                $.ajax({
                    url: Routing.generate($route),
                    beforeSend: function ( xhr ) {
                        $('div.ajaxLoading').show();
                    },
                    datatype: "json",
                    type: "POST",
                    cache: true,
                    data: {
                        search: $container.val()
                    },
                    search: function() {
                        var term = extractLast( this.value );
                        if ( term.length < 2 ) {
                            return false;
                        }
                    },
                    focus: function() {
                        return false;
                    },
                    success: function(data) {
                        $('div.ajaxLoading').hide();
                        response(jQuery.map(data, function (item) {
                            return {
                                value: item.title
                            };
                        }));
                    }
                });
            },
            minLength: 3,
            delimiter: /(,|;)\s*/, // regex or character
            maxHeight:400,
            deferRequestBy: 0, //miliseconds
            zIndex: 9999,
            noCache: false, //default is false, set to true to disable caching
            select: function(event, ui) {
                this.close;
            },
            //show the drop down
            open: function() {
                $(this).removeClass("ui-corner-all").addClass("ui-corner-top");
            },
            //close the drop down
            close: function() {
                $(this).removeClass("ui-corner-top").addClass("ui-corner-all");
            }
        });
    }
    
     function clear($container){
         $container.focusout(function(){
             $(this).parents('form').find('.ajaxLoading').hide();
         });
     }
    
    
    function sortable(container, $motif, $handler,$placeholder,$route){
          $(container).sortable({
            'placeholder': $placeholder,
            'axis' : 'y',
            'opacity':'0.5',
            'delay' : 300,
            'handle': $handler,
            'nested' :  $motif,
            'item' :  $motif,
            'cursor':'pointer',
            'update' : function (event, ui) {
                serial = $(this).sortable('serialize');
                $.ajax({
                        type: 'POST',
                        url: Routing.generate($route),
                        data: serial
                });
            }
      });
      $('.sortable').disableSelection();
    }
        
        
    sortable('.sortable','.sortable','.sort_item','ui-state-highlight','categories_position');
    sortable('.sortable','.sortable','.sort_item','ui-state-highlight','articles_position');
        
        
    autosuggestion($('#site_adminbundle_searchtype_search'), 'search_query_ajax' ,'title');
    clear($('#site_adminbundle_searchtype_search'));
        
});