(function($) {
    $(document).ready(function() {
        const $sidebar = $('#main-sidebar');
        const $toggle = $('#sidebar-toggle');

        $toggle.on('click', function() {
            $sidebar.toggleClass('collapsed');
        });

        // Close sidebar if clicking outside on mobile (optional enhancement)
        $(document).on('click', function(event) {
            if (!$sidebar.is(event.target) && $sidebar.has(event.target).length === 0 && !$sidebar.hasClass('collapsed')) {
                // $sidebar.addClass('collapsed');
            }
        });
    });
})(jQuery)