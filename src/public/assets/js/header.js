(function($) {
    $(document).ready(function() {
        const $title = $('#company-name')

        if ($title.length > 0) {
            const fontFamilies = [
                'Bitcount Ink',
                'Nabla',
                'Science Gothic',
                'Silkscreen',
                'Unica One'
            ]

            setInterval(() => {
                const randomFont = fontFamilies[Math.floor(Math.random() * fontFamilies.length)];
                $title.css('font-family', randomFont);
            }, 2000)
        }
    })

})(jQuery)