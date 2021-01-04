(function ( api ) {
    api.panel( 'about_us_block', function( panel ) {
        panel.expanded.bind( function( isExpanded ) {
            var url;
            if ( isExpanded ) {
                url = '/about-us';
                api.previewer.previewUrl.set( url );
            }
        } );
    } );
    api.section( 'au_first_page', function( section ) {
        section.expanded.bind( function( isExpanded ) {
            var url;
            if ( isExpanded ) {
                url = '/about-us/#first_page';
                api.previewer.previewUrl.set( url );
            }
        } );
    } );
    api.section( 'au_second_page', function( section ) {
        section.expanded.bind( function( isExpanded ) {
            var url;
            if ( isExpanded ) {
                url = '/about-us/#second_page';
                api.previewer.previewUrl.set( url );
            }
        } );
    } );
    api.section( 'au_third_page', function( section ) {
        section.expanded.bind( function( isExpanded ) {
            var url;
            if ( isExpanded ) {
                url = '/about-us/#third_page';
                api.previewer.previewUrl.set( url );
            }
        } );
    } );
    api.section( 'au_fourth_page', function( section ) {
        section.expanded.bind( function( isExpanded ) {
            var url;
            if ( isExpanded ) {
                url = '/about-us/#fourth_page';
                api.previewer.previewUrl.set( url );
            }
        } );
    } );
    api.panel( 'homepage_block', function( panel ) {
        panel.expanded.bind( function( isExpanded ) {
            var url;
            if ( isExpanded ) {
                url = '/';
                api.previewer.previewUrl.set( url );
            }
        } );
    } );
    api.section( 'first_page', function( section ) {
        section.expanded.bind( function( isExpanded ) {
            var url;
            if ( isExpanded ) {
                url = '/#home';
                api.previewer.previewUrl.set( url );
            }
        } );
    } );
    api.section( 'second_page', function( section ) {
        section.expanded.bind( function( isExpanded ) {
            var url;
            if ( isExpanded ) {
                url = '/#collaboration';
                api.previewer.previewUrl.set( url );
            }
        } );
    } );
    api.section( 'third_page', function( section ) {
        section.expanded.bind( function( isExpanded ) {
            var url;
            if ( isExpanded ) {
                url = '/#excellency';
                api.previewer.previewUrl.set( url );
            }
        } );
    } );
    api.section( 'fourth_page', function( section ) {
        section.expanded.bind( function( isExpanded ) {
            var url;
            if ( isExpanded ) {
                url = '/#innovation';
                api.previewer.previewUrl.set( url );
            }
        } );
    } );
    // api.url
} ( window.wp.customize ) );