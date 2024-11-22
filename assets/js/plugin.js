'use strict';

jQuery(document).ready(function($){
    $('.panel-tabs .nav-item button').on('click', function(){
        let target = $(this).data('target-item'),
            url = new URL(window.location.href);

        if (target === 'backups') {
            url.searchParams.delete('tab');
        } else {
            url.searchParams.set('tab', target);
        }

        history.replaceState(null, '', url);
    });
});