jQuery(function($){
    /**
     * Create case studies pagination
     */
    var page = 2;
    var loading = false;
    var loadedPosts = []; 
    var noMorePosts = false;
    var paginateNumbers = loadmore_params.number_of_pagination;

    function loadMorePosts() {
        if(loading || noMorePosts) {
            return;
        }
        loading = true;

        $.ajax({
            url: loadmore_params.ajaxurl,
            type: 'post',
            data: {
                action: 'uiexpertz_case_studies_load_more',
                nonce: loadmore_params.nonce,
                page: page,
                post_type: 'project',
                loaded_posts: loadedPosts
            },
            success: function(response) {
                if(response) {
                    if(page == paginateNumbers) {
                        $('.uiexpertz_case_studies_archive_load_more_btn').attr('disabled', 'disable');
                    }
                    $('#uiexpertz_service_archive_wrapper').append(response);
                    page++;
                    loading = false;
                    loadedPosts = loadedPosts.concat(response.loaded_posts);
                } else {
                    noMorePosts = true;
                }
            }
        });
    }

    $('.uiexpertz_case_studies_archive_load_more_btn').on('click', function(e){
        e.preventDefault();
        loadMorePosts();
    });


    /**
     * Ajax filter for both service and category
     */
    $('.case_studies_all_service_ajax, .case_studies_all_category_ajax').on('change', function() {
        var case_studies_all_service_ajax = $('.case_studies_all_service_ajax').val();
        var case_studies_all_category_ajax = $('.case_studies_all_category_ajax').val();
        if(case_studies_all_service_ajax != 0 && case_studies_all_category_ajax != 0) {
            /**
             * ajax filter for click on service and category
             */
            var selectedService = case_studies_all_service_ajax;
            var selectedCategory = case_studies_all_category_ajax;
            $.ajax({
                type: 'post',
                dataType: 'html',
                url: loadmore_params.ajaxurl,
                data: {
                    action: 'uiexpertz_service_category_based_filter_posts',
                    nonce: loadmore_params.nonce,
                    category: selectedCategory,
                    service: selectedService
                },
                success: function(response) {
                    $('#uiexpertz_service_archive_wrapper').html(response);
                    $('.uiexpertz_case_studies_archive_load_more_btn').attr('disabled', 'disable');
                }
            });
        } else if(case_studies_all_service_ajax != 0 && case_studies_all_category_ajax == 0) {
            /**
             * ajax filter for click on service
             */
             var selectedService = case_studies_all_service_ajax;
             var selectedCategory = 0;
            $.ajax({
                type: 'post',
                dataType: 'html',
                url: loadmore_params.ajaxurl,
                data: {
                    action: 'uiexpertz_service_based_filter_posts',
                    nonce: loadmore_params.nonce,
                    service: selectedService
                },
                success: function(response) {
                    $('#uiexpertz_service_archive_wrapper').html(response);
                    $('.uiexpertz_case_studies_archive_load_more_btn').attr('disabled', 'disable');
                }
            });
        } else if(case_studies_all_category_ajax != 0 && case_studies_all_service_ajax == 0) {
            /**
             * ajax filter for click on category
             */
            var selectedCategory = case_studies_all_category_ajax;
            var selectedService = 0;
            $.ajax({
                type: 'post',
                dataType: 'html',
                url: loadmore_params.ajaxurl,
                data: {
                    action: 'uiexpertz_category_based_filter_posts',
                    nonce: loadmore_params.nonce,
                    category: selectedCategory
                },
                success: function(response) {
                    $('#uiexpertz_service_archive_wrapper').html(response);
                    $('.uiexpertz_case_studies_archive_load_more_btn').attr('disabled', 'disable');
                }
            });
        } else {
            console.log('no form are selected');
        }
    })
});