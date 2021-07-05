$('.tabs-block .tab-link').on('click', function() {
    if (!$(this).hasClass('active')) {
      var parentTabs = $(this).closest('.tabs-block');
      parentTabs.find('.tab-link.active, .tab-content.active').removeClass('active');
      var elemIndex = $(this).index();
      $(this).addClass('active');
      parentTabs.find('.tab-content').eq(elemIndex).addClass('active');
    }
});