function form(){
    let btn = jQuery('.header header .header_btn a');
    let close = jQuery('.form .contact-form .close');
    let form = jQuery('#form_connect');
    btn.click(function(){
        btn.fancybox();
    });
    close.click(function(){
        form.trigger('reset');
        jQuery.fancybox.close(); 
    });
}

function connect(){
    let form = jQuery('#form_connect');
    let action = adminUrl;
    form.on('submit',function(e){
        
        let name = jQuery('#name').val();
        let email = jQuery('#email').val();
        let website = jQuery('#website').val();
        let platform = jQuery('#platform').val();
        let comment = jQuery('#comment').val();
        let formData = {
            name: name,
            email: email,
            website: website,
            platform: platform,
            comment: comment
        };
        jQuery.ajax({
            url: action,
            type: 'POST',
            data: formData,
            error: function(){
                jQuery('.success').html(jQuery('.success').html()+'Error sending.');
            },
            success: function(){
                form.html('Sent message');
            }
        });
        return false;
        
    });
    
}

jQuery(document).ready(function(){
    form();
    connect();
});