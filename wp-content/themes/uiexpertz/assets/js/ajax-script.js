(function($) {

    /**
     * Blog category filter
     */
    $(".uiexperts-blog-category-filter").on('change', function() {
        var selectedCategory = $(this).val();
        $.ajax({
            url: ajax.ajax_url,
            type: 'POST',
            data: {
                action: 'uiexpertz_filter_blog_posts',
                category: selectedCategory,
            },
            beforeSend: function() {
                // Show loading spinner or message if needed
                $('#home-filtered-blog-post-114').html('Loading...');
            },
            success: function(response) {
                // Update the content of the blog post container
                $('#home-filtered-blog-post-114').html(response);
            },
            error: function(xhr, status, error) {
                // Handle error if AJAX request fails
                console.error('AJAX Error:', xhr.responseText);
            }
        });
    });
    /**
         * Blog duration filter
         */
    $('.uiexpertz-has-duration-select').on('change', function() {
        var selectedOption = $(this).val();
        $.ajax({
            url: ajax.ajax_url,
            type: 'POST',
            data: {
                action: 'uiexpertz_filter_blog_posts',
                date_filter: selectedOption,
            },
            beforeSend: function() {
                // Show loading spinner or message if needed
                $('#home-filtered-blog-post-114').html('Loading...');
            },
            success: function(response) {
                // Update the content of the blog post container
                $('#home-filtered-blog-post-114').html(response);
            },
            error: function(xhr, status, error) {
                // Handle error if AJAX request fails
                console.error('AJAX Error:', xhr.responseText);
            }
        });
    });
    /**
     * Blog search filter
    */
   $('.uiexpertz-blog-search').on('change', function() {
        var searchTerm = $(this).val();
        $.ajax({
            url: ajax.ajax_url,
            type: 'POST',
            data: {
                action: 'uiexpertz_perform_post_search',
                search_term: searchTerm,
            },
            beforeSend: function() {
                // Show loading spinner or message if needed
                $('#home-filtered-blog-post-114').html('Searching...');
            },
            success: function(response) {
                // Update the content of the search results container
                $('#home-filtered-blog-post-114').html(response);
            },
            error: function(xhr, status, error) {
                // Handle error if AJAX request fails
                console.error('AJAX Error:', xhr.responseText);
            }
        });
    });
}(jQuery))