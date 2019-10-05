function form(){
    let btn = $('.header header .header_btn a');
    let close = $('.form .contact-form .close');
    console.log(close);
    btn.click(function(){
        btn.fancybox();
    });
    close.click(function(){
        $.fancybox.close(); 
    });
}

jQuery(document).ready(function(){
    form();
});