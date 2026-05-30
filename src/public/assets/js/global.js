(function ($) {
  $(document).ready(function () {
    const $toggle = $("#sidebar-toggle");
    const $mainContent = $("#main-content");
    const $title = $("#company-name a");
    const $sidebar = $("#main-sidebar");

    if ($title.length > 0) {
      const fontFamilies = [
        "Bitcount Ink",
        "Nabla",
        "Science Gothic",
        "Silkscreen",
        "Unica One",
      ];

      setInterval(() => {
        const randomFont =
          fontFamilies[Math.floor(Math.random() * fontFamilies.length)];

        $title.css("font-family", randomFont);
      }, 2000);
    }

    if ($toggle.length > 0) {
      $toggle.on("click", function () {
        $sidebar.toggleClass("collapsed");
        $mainContent.toggleClass("sidebar-collapsed");
      });
    }

    if ($sidebar.length > 0) {
      $(document).on("click", function (event) {
        if (
          !$sidebar.is(event.target) &&
          $sidebar.has(event.target).length === 0 &&
          !$sidebar.hasClass("collapsed")
        ) {
        }
      });
    }
  });
})(jQuery);
