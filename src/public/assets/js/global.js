(function ($) {
  $(document).ready(function () {
    const $toggle = $("#sidebar-toggle");
    const $mainContent = $("main");
    const $title = $("#company-name a");
    const $sidebar = $("#main-sidebar");
    const $languageSelector = $("#language-selector");
    const supportedLanguages = ["es", "en"];

    const getLocalizedPath = (language) => {
      const currentUrl = new URL(window.location.href);
      const currentSegments = currentUrl.pathname.split("/").filter(Boolean);
      const hasLanguagePrefix = supportedLanguages.includes(currentSegments[0]);
      const remainingSegments = hasLanguagePrefix
        ? currentSegments.slice(1)
        : currentSegments;
      const nextPath = `/${[language, ...remainingSegments].join("/")}`;

      return `${nextPath}${currentUrl.search}${currentUrl.hash}`;
    };

    if ($title.length > 0) {
      const fontFamilies = [
        "Bitcount Ink",
        "Nabla",
        "Science Gothic",
        "Silkscreen",
        "Unica One",
      ];


    if ($languageSelector.length > 0) {
      const currentSegments = window.location.pathname.split("/").filter(Boolean);
      const currentLanguage = supportedLanguages.includes(currentSegments[0])
        ? currentSegments[0]
        : "";

      if (currentLanguage) {
        $languageSelector.val(currentLanguage);
      }

      $languageSelector.on("change", function () {
        const selectedLanguage = $(this).val();

        if (!supportedLanguages.includes(selectedLanguage)) {
          return;
        }

        window.location.href = getLocalizedPath(selectedLanguage);
      });
    }
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
