(function($) {
	$(window)
			.load(
					function() {
						var $optionSets = $('nav.primary ul'), $optionLinks = $optionSets
								.find('a');

						$optionLinks.click(function() {
							var $this = $(this);
							// don't proceed if already selected
							if ($this.hasClass('selected')) {
								return false;
							}
							var $optionSet = $this.parents('nav.primary ul');
							$optionSet.find('.selected')
									.removeClass('selected');
							$this.addClass('selected');
						});

						$('.dropdown-toggle').dropdown()

					});
})(jQuery);