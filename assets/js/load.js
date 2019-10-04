jQuery(function($){
	$('.load-btn .btn-blog').click(function(){
		$(this).text('Loading...'); 
		let data = {
			'action': 'loadmore',
			'query': true_posts,
			'page' : current_page
		};
		$.ajax({
			url:ajaxurl,
			data:data, 
			type:'POST', 
			success:function(data){
				if( data ) { 
					$('.load-btn .btn-blog').text('Load More').before(data); 
					current_page++; 
					if (current_page == max_pages) $(".load-btn .btn-blog").remove(); 
				} else {
					$('.load-btn .btn-blog').remove(); 
				}
			}
		});
	});
});