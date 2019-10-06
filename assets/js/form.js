function form(){
    let btn = jQuery('.header header .header_btn a');
    let topBtn = jQuery('.top-btn a');
    let helpbtn = jQuery('.help .help_content_btn a');
    let questionbtn = jQuery('.questions .btn-questions');
    let brainbtn = jQuery('.brain .btn');
    let close = jQuery('.form .contact-form .close');
    let form = jQuery('#form_connect');
    brainbtn.click(function(){
        btn.click();
    });
    questionbtn.click(function(){
        btn.click();
    });
    helpbtn.click(function(){
        btn.click();
    });
    topBtn.click(function(event){
        btn.click();
    });
    btn.click(function(event){
        myFancybox(jQuery(this));
    });
    close.click(function(){
        form.trigger('reset');
        jQuery.fancybox.close(); 
    });
}

function myFancybox(btn){
    btn.fancybox();
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
                form.trigger('reset');
                jQuery('.success').html(jQuery('.success').html()+'<br><span>Sent message</span>');
            }
        });
        return false;
        
    });
    
}

jQuery(document).ready(function(){
    form();
    connect();
});