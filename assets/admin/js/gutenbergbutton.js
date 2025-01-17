// add custom button in gutenberg editor
(function (window, wp) {
   // just to keep it cleaner - we refer to our link by id for speed of lookup on DOM.
   var link_id = "writegen_gutenberg_button";

   // prepare our custom link's html.
   var link_html =
      '<div id="' +
      link_id +
      '" class="button wrig-gutenberg-button">WriteGen</div>';

   // check if gutenberg's editor root element is present.
   var editorEl = document.getElementById("editor");
   if (!editorEl) {
      // do nothing if there's no gutenberg root element on page.
      return;
   }

   var unsubscribe = wp.data.subscribe(function () {
      setTimeout(function () {
         if (!document.getElementById(link_id)) {
            var toolbalEl = editorEl.querySelector(
               ".edit-post-header-toolbar__left"
            );
            if (toolbalEl instanceof HTMLElement) {
               toolbalEl.insertAdjacentHTML("beforeend", link_html);
            }
         }
      }, 1);
   });
   // unsubscribe is a function - it's not used right now
   // but in case you'll need to stop this link from being reappeared at any point you can just call unsubscribe();
})(window, wp);
