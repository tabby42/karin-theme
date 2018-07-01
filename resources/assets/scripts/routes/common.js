export default {
  init() {
    // JavaScript to be fired on all pages
    var eventSummary = $("article.event .entry-summary"),
        btnDetail = $(".btn.btn-details");

    eventSummary.hide();
    btnDetail.on("click", function() {
      $(this).parent().parent().find(".entry-summary").slideToggle(1000);
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
