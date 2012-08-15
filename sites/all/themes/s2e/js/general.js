/* 
 Copyright (c) Flying Colors
 Author: Harvey Moony
 File: General Java Script
 */
;
(function ($) {
    $(document).ready(function () {
        var FirstPage = FirstPage || {};
        FirstPage.initPosLeft = 0;
        FirstPage.initPosTop = 0;
        //MENU
        //Slider
        //Entrance and Registration
        $('#ent-reg-ico').click(function () {
            $(this).animate({left:220}, {duration:300, specialEasing:{left:'easeInOutQuad'}});
        });

        //Cost of services
        FirstPage.ajaxInfoBlock = $('#ajax-info-block');
        $('.info-block').click(function () {
            var info_block_id = $(this).attr('id');
            switch (info_block_id) {
                case 'cost':
                    FirstPage.initPosLeft = 456;
                    FirstPage.initPosTop = 228;
                    FirstPage.openInfoBlock(info_block_id, 456, 228);
                    break;
                case 'faq':
                    FirstPage.initPosLeft = 0;
                    FirstPage.initPosTop = 456;
                    FirstPage.openInfoBlock(info_block_id, 0, 456);
                    break;
                case 'support':
                    FirstPage.initPosLeft = 228;
                    FirstPage.initPosTop = 456;
                    FirstPage.openInfoBlock(info_block_id, 228, 456);
                    break;
                case 'events':
                    FirstPage.initPosLeft = 456;
                    FirstPage.initPosTop = 456;
                    FirstPage.openInfoBlock(info_block_id, 456, 456);
            }
        });

        $('#close-info-block').click(function () {
            FirstPage.closeInfoBlock(FirstPage.initPosLeft, FirstPage.initPosTop)
        });

        FirstPage.openInfoBlock = function (infoBlockId, initLeft, initTop) {
            $.getJSON('json/' + infoBlockId, {}, function (json) {
                $('#ajax-info-block h3').html(json.title);
                $('#content-info-block div').html(json.content);
            });
            //
            $('#ajax-info-block h3, #content-info-block, #close-info-block').hide();
            $('#ajax-info-block').css({'left':initLeft, 'top':initTop}).show().animate({opacity:1}, 150,
                function () {
                    $(this).animate({
                            width:646,
                            height:646,
                            left:0,
                            top:0}, {
                            duration:250,
                            specialEasing:{
                                width:'easeInOutCubic',
                                height:'easeInOutCubic',
                                left:'easeInOutCubic',
                                top:'easeInOutCubic'},
                            complete:function () {
                                $('#ajax-info-block h3').show(300);
                                $('#content-info-block').fadeIn(300);
                                $('#close-info-block').fadeIn(300);
                            }}
                    )
                });
        }

        FirstPage.closeInfoBlock = function (initLeft, initTop) {
            $('#ajax-info-block h3, #content-info-block, #close-info-block').fadeOut(300);
            $('#ajax-info-block').animate({
                    width:190,
                    height:190,
                    left:initLeft,
                    top:initTop}, {
                    duration:250,
                    specialEasing:{
                        width:'easeInOutCubic',
                        height:'easeInOutCubic',
                        left:'easeInOutCubic',
                        top:'easeInOutCubic'},
                    complete:function () {
                        $('#ajax-info-block').animate({opacity:0}, 150, function () {
                            $(this).hide()
                        });
                        $('#content-info-block div').empty();
                        $('#ajax-info-block h3').empty();
                    }
                }
            );
        };

        $("#mySlider").royalSlider({
            captionShowEffects:["moveleft", "fade"],
            controlNavEnabled:true,
            imageAlignCenter:true,
            hideArrowOnLastSlide:false,
            slideshowEnabled:true,
            slideshowDelay:6000
        });

        var clientsbanner1 = $('#clientsbanner1').royalSlider({
            slideTransitionType:"fade",
            slideTransitionSpeed:1200,
            slideTransitionEasing:"easeInOutSine",
            captionShowEffects:["moveleft", "fade"],
            captionShowDelay:150,
            captionShowSpeed:400,
            captionShowEasing:"easeOutBack",
            directionNavEnabled:false,
            slideshowEnabled:true,
            slideshowDelay:2000
        }).data("royalSlider");
    });
})(jQuery);
