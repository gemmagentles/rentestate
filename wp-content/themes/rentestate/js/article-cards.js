jQuery(function($){ // use jQuery code inside this to avoid "$ is not defined" error
	
availabilityOrder(500);

$( "input[type=checkbox]" ).change(function() {
	availabilityOrder(5000);
});

$( "li a.search-filter-reset" ).click(function() {
	availabilityOrder(5000);
});

function availabilityOrder(time) {

	setTimeout(function(){
		$('div.article-cards__card').has('div > p.article-cards__tag--availability-price').css('order', '0');
		$('div.article-cards__card').has('div > p.article-cards__tag--coming-soon').css('order', '1');
		$('div.article-cards__card').has('div > p.article-cards__tag--rented').css('order', '2');
	  }, time);

}

$('#js-load-more-btn').click(function(){
 
		var button = $(this),
		    data = {
			'action': 'loadmore',
			'query': article_loadmore_params.posts, // that's how we get params from wp_localize_script() function
			'page' : article_loadmore_params.current_page
		};
 
		$.ajax({ // you can also use $.post here
			url : article_loadmore_params.ajaxurl, // AJAX handler
			data : data,
			type : 'POST',
			beforeSend : function ( xhr ) {
				button.text('Loading...'); // change the button text, you can also add a preloader image
			},
			success : function( data ){
				if( data ) { 
                    button.text( 'More....' );
                    $( ".article-cards__grid" ).append(data); // insert new posts
					article_loadmore_params.current_page++;
 
					if ( article_loadmore_params.current_page == article_loadmore_params.max_page ) 
						button.remove(); // if last page, remove the button
				} else {
					button.remove(); // if no data, remove the button as well
				}
			}
		});
	});
});
