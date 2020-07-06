<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
/* Default comment here */ 
$("#siteMenu li.li_main").on('click', function () {
        var elements = $(this);
        var module = elements.attr('data-module');
        var show = elements.attr('data-show');
        var load = elements.attr('data-load');
        textMenu = elements.find(".text_mnbottom").text();
        /*Reset*/
        $("#siteMenu li").attr('data-show', '0');
        $(".contentMenu").slideUp(200);
        $("#siteMenu li").find("div").css({'opacity': '1'});
        $("#siteMenu li").find(".xmenu").css({'opacity': '0'});
        /*Reset*/
        if (show === '0') {
            elements.find("div").css({'opacity': '0'});
            elements.find(".xmenu").css({'opacity': '1'});
            elements.find(".xmenu").addClass('fa-spin');
            elements.find(".xmenu").removeClass('fa-spin');
            $(".contentMenu[data-module='" + module + "']").slideDown(400);
            elements.attr('data-show', '1');
        } else {
            $(".contentMenu[data-module='" + module + "']").slideUp(200);
            elements.attr('data-show', '0');
            elements.find("div").css({'opacity': '1'});
            elements.find(".xmenu").css({'opacity': '0'});
        }
    });
</script>
<!-- end Simple Custom CSS and JS -->
