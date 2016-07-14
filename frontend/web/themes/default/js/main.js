/**
 * Created by np-admin on 11/27/2014.
 */

// for maps
/*
 *  render_map
 *
 *  This function will render a Google Map onto the selected jQuery element
 *
 *  @type	function
 *  @date	8/11/2013
 *  @since	4.3.0
 *
 *  @param	$el (jQuery element)
 *  @return	n/a
 */
function loadScript() {
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp' +
        '&signed_in=true&callback=initialize';
    document.body.appendChild(script);
}

function render_map($el) {
    (function ($) {
        // var
        var $markers = $el.find('.marker');


        // vars
        var args = {
            zoom: 16,
            scaleControl: false,
            scrollwheel: false,
            center: new google.maps.LatLng(0, 0),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        // create map
        var map = new google.maps.Map($el[0], args);

        // add a markers reference
        map.markers = [];

        // add markers
        $markers.each(function () {

            add_marker($(this), map);

        });

        // center map
        center_map(map);
    })(jQuery);

}

/*
 *  add_marker
 *
 *  This function will add a marker to the selected Google Map
 *
 *  @type	function
 *  @date	8/11/2013
 *  @since	4.3.0
 *
 *  @param	$marker (jQuery element)
 *  @param	map (Google Map object)
 *  @return	n/a
 */

function add_marker($marker, map) {
    (function ($) {
        // var
        var latlng = new google.maps.LatLng($marker.attr('data-lat'), $marker.attr('data-lng'));

        // create marker
        var marker = new google.maps.Marker({
            position: latlng,
            map: map
        });

        // add to array
        map.markers.push(marker);

        // if marker contains HTML, add it to an infoWindow
        if ($marker.html()) {
            // create info window
            var infowindow = new google.maps.InfoWindow({
                content: $marker.html()
            });

            // show info window when marker is clicked
            google.maps.event.addListener(marker, 'click', function () {

                infowindow.open(map, marker);

            });
        }
    })(jQuery);
}

/*
 *  center_map
 *
 *  This function will center the map, showing all markers attached to this map
 *
 *  @type	function
 *  @date	8/11/2013
 *  @since	4.3.0
 *
 *  @param	map (Google Map object)
 *  @return	n/a
 */

function center_map(map) {
    (function ($) {

        // vars
        var bounds = new google.maps.LatLngBounds();


        // loop through all markers and create bounds
        $.each(map.markers, function (i, marker) {

            var latlng = new google.maps.LatLng(marker.position.lat(), marker.position.lng());

            bounds.extend(latlng);

        });

        // only 1 marker?
        if (map.markers.length == 1) {
            // set center of map
            map.setCenter(bounds.getCenter());
            map.setZoom(16);
        }
        else {
            // fit to bounds
            map.fitBounds(bounds);
        }
    })(jQuery);

}
;(function ($) {

    // Browser supports HTML5 multiple file?
    var multipleSupport = typeof $('<input/>')[0].multiple !== 'undefined',
        isIE = /msie/i.test(navigator.userAgent);

    $.fn.customFile = function (placeholder) {

        return this.each(function () {

            var $file = $(this).addClass('custom-file-upload-hidden'), // the original file input
                $wrap = $('<div class="file-upload-wrapper">'),
                $input = $('<input type="text" placeholder="' + placeholder + '" class="file-upload-input" />'),
            // Button that will be used in non-IE browsers
                $button = $('<button type="button" class="file-upload-button">Upload</button>'),
            // Hack for IE
                $label = $('<label class="file-upload-button" for="' + $file[0].id + '">Upload</label>');

            // Hide by shifting to the left so we
            // can still trigger events
            $file.css({
                position: 'absolute',
                left: '-9999px'
            });

            $wrap.insertAfter($file)
                .append($file, $input, ( isIE ? $label : $button ));

            // Prevent focus
            $file.attr('tabIndex', -1);
            $button.attr('tabIndex', -1);

            $button.click(function () {
                $file.focus().click(); // Open dialog
            });

            $file.change(function () {

                var files = [], fileArr, filename;

                // If multiple is supported then extract
                // all filenames from the file array
                if (multipleSupport) {
                    fileArr = $file[0].files;
                    for (var i = 0, len = fileArr.length; i < len; i++) {
                        files.push(fileArr[i].name);
                    }
                    filename = files.join(', ');

                    // If not supported then just take the value
                    // and remove the path to just show the filename
                } else {
                    filename = $file.val().split('\\').pop();
                }

                $input.val(filename) // Set the value
                    .attr('title', filename) // Show filename in title tootlip
                    .focus(); // Regain focus

            });

            $input.on({
                blur: function () {
                    $file.trigger('blur');
                },
                keydown: function (e) {
                    if (e.which === 13) { // Enter
                        if (!isIE) {
                            $file.trigger('click');
                        }
                    } else if (e.which === 8 || e.which === 46) { // Backspace & Del
                        // On some browsers the value is read-only
                        // with this trick we remove the old input and add
                        // a clean clone with all the original events attached
                        $file.replaceWith($file = $file.clone(true));
                        $file.trigger('change');
                        $input.val('');
                    } else if (e.which === 9) { // TAB
                        return;
                    } else { // All other keys
                        return false;
                    }
                }
            });

        });

    };

    // Old browser fallback
    if (!multipleSupport) {
        $(document).on('change', 'input.customfile', function () {

            var $this = $(this),
            // Create a unique ID so we
            // can attach the label to the input
                uniqId = 'customfile_' + (new Date()).getTime(),
                $wrap = $this.parent(),

            // Filter empty input
                $inputs = $wrap.siblings().find('.file-upload-input')
                    .filter(function () {
                        return !this.value
                    }),

                $file = $('<input type="file" id="' + uniqId + '" name="' + $this.attr('name') + '"/>');

            // 1ms timeout so it runs after all other events
            // that modify the value have triggered
            setTimeout(function () {
                // Add a new input
                if ($this.val()) {
                    // Check for empty fields to prevent
                    // creating new inputs when changing files
                    if (!$inputs.length) {
                        $wrap.after($file);
                        $file.customFile();
                    }
                    // Remove and reorganize inputs
                } else {
                    $inputs.parent().remove();
                    // Move the input so it's always last on the list
                    $wrap.appendTo($wrap.parent());
                    $wrap.find('input').focus();
                }
            }, 1);

        });
    }

}(jQuery));


/* Keep webapp not go to safari */
if (("standalone" in window.navigator) && window.navigator.standalone) {

    var noddy, remotes = false;

    document.addEventListener('click', function (event) {

        noddy = event.target;

        while (noddy.nodeName !== "A" && noddy.nodeName !== "HTML") {
            noddy = noddy.parentNode;
        }

        if ('href' in noddy && noddy.href.indexOf('http') !== -1 && (noddy.href.indexOf(document.location.host) !== -1 || remotes)) {
            event.preventDefault();
            document.location.href = noddy.href;
        }

    }, false);
}

jQuery(document).ready(function () {
    (function ($) {
        $('input[type=file]').customFile('');
        $('input[type=image]').customFile('');
        $('#menu-primary-menu > li').hover(function () {
            if ($(this).find('ul').length > 0) {
                $(this).parent().addClass('mouse-over');
            }
        }, function () {
            $(this).parent().removeClass('mouse-over');
        });

        $('ul.dropdown-menu').on('hidden.bs.collapse', function () {
            $(this).prev().toggleClass('fa-chevron-right').toggleClass('fa-chevron-down');
        });

        $('#site-navigation li.dropdown i.fa').on('click', function () {
            var current_clicked = $(this);
            var current_menu_item = $(this).parent();
            current_clicked.toggleClass('fa-chevron-right').toggleClass('fa-chevron-down');
            $('ul.dropdown-menu.collapse.in', current_menu_item.parent()).collapse('hide');
            current_menu_item.find('ul.dropdown-menu').collapse('toggle');
        });

        var nav = $('.page-menu');
        var height = 0;
        if (nav.length) {
            height = nav.offset().top;
        }

        $(window).on('scroll load', function () {
            var currentScroll = $(this).scrollTop();

            if (currentScroll >= (height - 92)) {
                $('.page-menu').addClass('scrolling');

            } else {
                $('.page-menu').removeClass('scrolling');

            }

        });

        //For Slider using bxSlider and it's callbacks
        var count = $(".home-slider .carousel").attr('data-hidden');
        console.debug(count );
        if(count > 1){
            $(".home-slider .carousel").bxSlider({
                pager: true,
                speed: 1000,
                controls: false,
                mode: 'horizontal',
                onSliderLoad: function (currentIndex) {
                }
            });
        }else{
            // $(".home-slider .carousel").bxSlider({
            //     pager: false,
            //     speed: 1000,
            //     controls: false,
            //     mode: 'horizontal',
            //     onSliderLoad: function (currentIndex) {
            //     }
            // });
        }

//
        $(".home-slider .carousel .slider-item").each(function (index, element) {
            $(this).css('background-image', 'url("' + $(this).find('img').attr('src') + '")')
            $(this).find('img').addClass('hidden');

        });
//
        $('.acf-map').each(function () {
            render_map($(this));
        });
//
//        $(".colorbox-frame").colorbox({iframe:true, width:"80%", height:"80%"});
//

        $('.tab-control button').click(function () {
            $('.tab-control button').removeClass('active');
            $(this).addClass('active');
            var id = $(this).attr('data-tab');
            $('.tab-content .tab-item').removeClass('active');
            $(id).addClass('active');
        });
    })(jQuery);
});
