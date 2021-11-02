/**
 * Template Name: AvtoUzbegim
 * Description: AvtoUzbegim - Rent Car in Tashkent
 * Template URL: http://autoprokat.uz/
 * Version: 1.0
 */

$(function(){

    /**
     *  Application Init
     *  Init Application widgets and components.
     */
    Application.init({

        /**
         * Date Picker.
         *
         * data-widget="datePicker" - Date Picker item selector.
         * data-datepicker-locale="ru" - Date Picker locale.
         *
         * @returns {(boolean|array)} - disabled | Date Picker items array.
         */
        datePicker: function() {
            var pickers = $('[data-widget="datePicker"]');

            if(pickers.length) {
                var options = {
                    position        : 'bottom',
                    hide_on_select  : true
                };

                var locale = {
                    'ru': {
                        days        : ["Воскресенье", "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота"],
                        daysShort   : ["Вск", "Пнд", "Втр", "Срд", "Чтв", "Птн", "Суб"],
                        daysMin     : ["Вс", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб"],
                        months      : ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"],
                        monthsShort : ["Янв", "Фев", "Мар", "Апр", "Май", "Июн", "Июл", "Авг", "Сен", "Окт", "Ноя", "Дек"]
                    }
                }

                pickers.each(function(id, picker) {
                    var localeID = $(picker).attr('data-datepicker-locale');

                    if(localeID === 'ru') {
                        options['locale'] = locale[localeID];
                    }

                    $(picker).pickmeup(options);
                });

                return pickers;
            }

            return false;
        },

        /**
         * Smooth Scroll.
         *
         * data-smoothScroll-anchor="#home" - Smooth Scroll item selector.
         *
         * @returns {(boolean|array)} - disabled | Smooth Scroll items array.
         */
        smoothScroll: function() {
            var anchors = $('[data-smoothScroll-anchor]');
            var offset = 74;

            if(anchors.length) {
                anchors.on('click', function() {
                    var target = $(this).attr('data-smoothScroll-anchor');
                    var pos = $(target).offset().top;

                    console.log($(target));

                    $('html, body').animate({
                        scrollTop: pos - offset
                    }, 800);

                    return false;
                });

                return anchors;
            }

            return false;
        },

        /**
         * Nav Toggle.
         *
         * data-widget="navToggle" - Toggle Nav Selector.
         *
         * @returns {(boolean|HTMLElement)} - disabled | navToggle DOM element.
         */
        navToggle: function() {
            var navToggle = $('[data-widget="navToggle"]');

            if(navToggle) {
                var target = $(navToggle.attr('data-navtoggle-target'));

                navToggle.on('click', function() {
                    target.toggleClass('__visible');
                });

                return navToggle;
            }

            return false;
        },

        /**
         * Google Map.
         *
         * data-widget="gmap3" - Map selector.
         *
         * gmap3 docs: http://gmap3.net/en/catalog/
         *
         * @requires plugin: js/gmap3.min.js
         * @returns {(boolean|object)} - disabled | gmap3 instance.
         */
        gmap3: function() {
            var map = $('[data-widget="gmap3"]');

            if(typeof google !== 'undefined' && $.fn.gmap3 && map) {
                var lat = map.attr('data-gmap3-lat');
                var lng = map.attr('data-gmap3-lng');

                var gmap3 = map.gmap3({
                    marker: {
                        latLng: [lat, lng],
                        options: {
                            icon: 'img/src/marker.png'
                        }
                    },
                    map:{
                        options: {
                            styles: [{
                                stylers: [{
                                    "saturation":-100
                                },{
                                    "lightness": 0
                                },{
                                    "gamma": 0.5
                                }]
                            }],
                            zoom: 14,
                            disableDefaultUI: true,
                            scrollwheel: false
                        }
                    }
                }).gmap3("get");

                return gmap3;
            }

            return false;
        }
    });
});