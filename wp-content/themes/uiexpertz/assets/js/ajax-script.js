(function($) {
    /**
     * Blog search filter
    */
    let paged = 2;
   $('.ajax-load-more-all-blog').on('click', function() {
        $.ajax({
            url: ajax.ajax_url,
            type: 'POST',
            data: {
                action: 'uiexpertz_perform_fetch_all_post',
                paged: paged,
            },
            beforeSend: function() {
                // Show loading spinner or message if needed
            },
            success: function(response) {
                if (response.trim() == 0) {
                    // If there's no content, remove the button
                    $('.ajax-load-more-all-blog').addClass('d-none');
                } else {
                    $('.home-filtered-blog-post-114').append(response);
                }
            },
            error: function(xhr, status, error) {
                // Handle error if AJAX request fails
                console.error('AJAX Error:', xhr.responseText);
            }
        });
        paged++;
    });
    
}(jQuery))