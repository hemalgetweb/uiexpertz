(function($) {


    var page = page ? page + 1: 2;
    var postType = 'project';
    var container = $('.uiexperts-case-study-wrap-row');
    $('.uiexperts-more-works-portfolio').on('click', function() {
        var max_num_pages = $(this).data('max_num_pages');
        var posts_per_page = $(this).data('posts_per_page');
        $.ajax({
            url: ajax.ajax_url,
            type: 'POST',
            data: {
                action: 'custom_next_posts',
                paged: page,
                post_type: postType,
                posts_per_page: posts_per_page
            },
            beforeSend: function() {
                // Add a loading indicator if desired
            },
            success: function(response) {
                container.append(response);
                page++;
            },
            complete: function() {
                // Remove the loading indicator if added
                $(this).hide();
            }
        });
        if(page >= max_num_pages) {
            $(this).attr('disabled', 'disable');
        }
    });
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