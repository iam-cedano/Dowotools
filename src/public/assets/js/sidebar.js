(function($) {
    $(document).ready(function() {
        const $sidebar = $('#main-sidebar');
        const $toggle = $('#sidebar-toggle');
        const $mainContent = $('#main-content');

        $toggle.on('click', function() {
            $sidebar.toggleClass('collapsed');
            $mainContent.toggleClass('sidebar-collapsed');
        });

        $(document).on('click', function(event) {
            if (!$sidebar.is(event.target) && $sidebar.has(event.target).length === 0 && !$sidebar.hasClass('collapsed')) {
            }
        });
    });
})(jQuery)