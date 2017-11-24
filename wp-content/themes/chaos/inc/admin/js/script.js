jQuery(document).ready(function () {



    jQuery('.retail-repeater').repeater({
        defaultValues: {

        },
        show: function () {
            var count = 1;
            jQuery('.retail-repeater .repeterin').each(function(){
                jQuery(this).find('.rowno').text(count);
                count++;
            });
            jQuery(this).slideDown();

            populateSelect(jQuery(this).find('.search_player'))
        },
        hide: function (deleteElement) {
            if(confirm('Are you sure you want to delete this element?')) {
                jQuery(this).slideUp(deleteElement);

                var count = 1;
                jQuery('.retail-repeater .repeterin').each(function(){ 
                    jQuery(this).find('.rowno').text(count);
                    count++;
                });
            }
        },
        ready: function (setIndexes) {
            
        }
    });

    populateSelect(jQuery(".search_player"));

});














    function formatCustomerNamea (state) {
        if (!state.id) {
            return state.id;
        }
        var $state = jQuery(
        '<span>' +
          state.name +
        '</span>'
        );
        return $state;
    };

    function formatCustomerNameb (state) {
        if (!state.id) {
            return state.id;
        }
        var $state = jQuery(
        '<span>' +
          state.id +
        '</span>'
        );
        return $state;
    };


    function populateSelect($selector) {
        $selector.select2({
            width: '200px',
            multiple: false,
            minimumInputLength: 1,
            allowClear: true,
            placeholder: "Search Lot Number",

            ajax: {
                type: 'POST',
                url: frontendajax.ajaxurl,
                delay: 250,
                dataType: 'json',
                data: function(params) {
                    return {
                        action: 'searchPlayer', // search term
                        page: 1,
                        search_key: params.term,
                    };
                },
                processResults: function(data) {
                    var results = [];

                    return {
                        results: jQuery.map(data.items, function(obj) {
                            return { id: obj.id, name:obj.name, phone:obj.phone};
                        })
                    };
                },
                cache: true,
            },
            initSelection: function (element, callback) {
                callback({ id: '-', name: 'Search Lot Number' });
            },
            templateResult: formatCustomerNamea,
            templateSelection: formatCustomerNamea
        }).on("select2:unselecting", function(e) {
            jQuery(this).parent().parent().find('.player_phone').text('');
        }).on("select2:select", function(e) {
            jQuery(this).parent().parent().find('.player_phone').text(e.params.data.phone);
        });
    }