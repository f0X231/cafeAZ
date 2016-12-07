
function saveHeight() {
		var getHeightLeft = $('.news-divleft').height();
		var getHeightRight = $('.news-divright').height();

		if(getHeightLeft > getHeightRight) {
				$('.news-divright').css('min-height', getHeightLeft);
		}
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
				}

		});
}

function nextpages() {

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
		saveHeight();

});
