(function ( api ) {
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
    // api.url
} ( window.wp.customize ) );