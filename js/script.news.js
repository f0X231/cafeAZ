
function divSameHeight() {
		$('.as-same-sa-height').matchHeight();
		$('.as-same-sa-height2').matchHeight();
}

function openPages() {
		$('.pagination li').each(function(index) {
				var currentPage = getParameterByName('pages');

				if(!currentPage)
						currentPage = 1;

				$(this).removeClass('current');
				$('#news-page-' + (index+1)).css('display', 'none');

				if( (index+1) == currentPage )
				{
						$(this).addClass('current');
						$('#news-page-' + (index+1)).css('display', 'block');
						divSameHeight();
				}

		});
}

function nextpages() {
		var currentPage = getParameterByName('pages');

		if(!currentPage) 	location.href="?pages=1";
		else 							location.href="?pages=" + (parseInt(currentPage)+1);
}

jQuery(document).ready(function(){

		$('.news-content-0').removeClass('news-carousel');
		$('.orbit').on('slidechange.zf.orbit', function() {

					$('.news-carousel-content div').each(function(index) {
								if(!$('.news-content-' + index).hasClass('news-carousel')) {
										$('.news-content-' + index).addClass('news-carousel')
								}
					});

					var currentItem = $('li.orbit-slide.is-active').index();
					$('.news-content-' + currentItem).removeClass('news-carousel');
		});


		openPages();
		divSameHeight();

});
