jQuery(function($){
	$('.load-btn .btn-blog').click(function(){
		$(this).text('Loading...'); 
		let data = {
			'action': 'loadmore',
			'query': true_posts,
			'page' : current_page
		};
		$.ajax({
			url:ajaxurl, // обработчик
			data:data, // данные
			type:'POST', // тип запроса
			success:function(data){
				if( data ) { 
					$('.load-btn .btn-blog').text('Load More').before(data); // вставляем новые посты
					current_page++; // увеличиваем номер страницы на единицу
					if (current_page == max_pages) $(".load-btn .btn-blog").remove(); // если последняя страница, удаляем кнопку
				} else {
					$('.load-btn .btn-blog').remove(); // если мы дошли до последней страницы постов, скроем кнопку
				}
			}
		});
	});
});