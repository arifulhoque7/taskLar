<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>Product</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
        href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
        href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="{{ asset('css/listing.css') }}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

</head>

<body>

    <div id="page" class="theia-exception">

        <header class="version_1">
            <div class="layer"></div><!-- Mobile menu overlay mask -->
            <div class="main_header">
                <div class="container">
                    <div class="row small-gutters">
                        <div class="col-xl-3 col-lg-3 d-lg-flex align-items-center">
                            <div id="logo">
                                <a href="index.html"><img src="img/logo_final.png" alt="" width="150"
                                        height="35"></a>
                            </div>
                        </div>
                        <nav class="col-xl-6 col-lg-7">
                            <a class="open_close" href="javascript:void(0);">
                                <div class="hamburger hamburger--spin">
                                    <div class="hamburger-box">
                                        <div class="hamburger-inner"></div>
                                    </div>
                                </div>
                            </a>
                            <!-- Mobile menu button -->
                            <div class="main-menu">
                                <div id="header_menu">
                                    <a href="index.html"><img src="img/logo_final.png" alt="" width="150"
                                            height="35"></a>
                                    <a href="#" class="open_close" id="close_in"><i class="ti-close"></i></a>
                                </div>
                                <ul>
                                    <li class="">
                                        <a href="javascript:void(0);" class="">Search Results</a>
                                    </li>
                                </ul>
                            </div>
                            <!--/main-menu -->
                        </nav>
                        <div class="col-xl-3 col-lg-2 d-lg-flex align-items-center justify-content-end text-end">
                        </div>
                    </div>
                    <!-- /row -->
                </div>
            </div>
            <!-- /main_header -->

            <div class="main_nav inner">
                <div class="container">
                    <div class="row small-gutters">
                        <div class="col-xl-3 col-lg-3 col-md-3">
                            <nav class="categories">
                                <ul class="clearfix">
                                    <li><span>
                                            <a href="#">
                                                <span class="hamburger hamburger--spin">
                                                    <span class="hamburger-box">
                                                        <span class="hamburger-inner"></span>
                                                    </span>
                                                </span>
                                                Categories
                                            </a>
                                        </span>

                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-xl-6 col-lg-7 col-md-6 d-none d-md-block">
                            <div class="custom-search-input">
                                <input type="text" placeholder="Search">
                                <button type="submit"><i class="header-icon_search_custom"></i></button>
                            </div>
                        </div>

                    </div>
                    <!-- /row -->
                </div>
                <div class="search_mob_wp">
                    <input type="text" class="form-control" placeholder="Search over 10.000 products">
                    <input type="submit" class="btn_1 full-width" value="Search">
                </div>
                <!-- /search_mobile -->
            </div>
            <!-- /main_nav -->
        </header>
        <!-- /header -->

        <main>
            <div class="container margin_30">
                <div class="row">
                    <aside class="col-lg-3" id="sidebar_fixed">
                        <div class="filter_col">
                            <div class="inner_bt"><a href="#" class="open_filters"><i
                                        class="ti-close"></i></a></div>
                            <div class="filter_type version_2">
                                <h4><a href="#filter_1" data-bs-toggle="collapse" class="opened">Keywords</a></h4>
                                <div class="collapse show" id="filter_1">
                                    <ul>

                                        @foreach ($keywords as $keyword)
                                            <li>
                                                <label class="container_check">{{ $keyword }} <small>1</small>
                                                    <input type="checkbox" class="keyword-checkbox"
                                                        data-keyword="{{ $keyword }}">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                        @endforeach


                                    </ul>
                                </div>
                                <!-- /filter_type -->
                            </div>
                            <!-- /filter_type -->
                            <div class="filter_type version_2">
                                <h4><a href="#filter_2" data-bs-toggle="collapse" class="opened">User</a></h4>
                                <div class="collapse show" id="filter_2">
                                    <ul>
                                        @foreach ($users as $user)
                                            <li>
                                                <label class="container_check">{{ $user }} <small>01</small>
                                                    <input type="checkbox" class="user-checkbox"
                                                        data-user="{{ $user }}">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                            <!-- /filter_type -->
                            <div class="filter_type version_2">
                                <h4><a href="#filter_time_range" data-bs-toggle="collapse" class="closed">Time
                                        Range</a></h4>
                                <div class="collapse" id="filter_time_range">
                                    <ul>
                                        <li>
                                            <label class="container_check">
                                                See data from yesterday
                                                <input type="checkbox" name="time_range" value="yesterday"
                                                    class="time-range-checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">
                                                See data from last week
                                                <input type="checkbox" name="time_range" value="last_week"
                                                    class="time-range-checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">
                                                See data from last month
                                                <input type="checkbox" name="time_range" value="last_month"
                                                    class="time-range-checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="filter_type version_2">
                                <h4><a href="#filter_date_range" data-bs-toggle="collapse" class="closed">Select
                                        Date</a></h4>
                                <div class="collapse" id="filter_date_range">
                                    <ul>
                                        <li>
                                            <label for="start_date">Enter start date:</label>
                                            <input type="date" id="start_date" name="start_date">
                                        </li>
                                        <li>
                                            <label for="end_date">Enter end date:</label>
                                            <input type="date" id="end_date" name="end_date">
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="buttons">
                                <a id="clear-search" class="btn_1">Reset</a>
                            </div>
                        </div>
                    </aside>


                    <div class="col-lg-9 search_view">

                        <!-- /top_banner -->
                        <div id="stick_here"></div>

                        @include('search_view', [
                            'allResults' => $allResults,
                            'keywords' => $keywords,
                            'users' => $users,
                        ])
                        <!-- /toolbox -->

                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </main>
        <!-- /main -->

        <footer class="revealed">

        </footer>
        <!--/footer-->
    </div>
    <!-- page -->

    <div id="toTop"></div><!-- Back to top button -->

    <!-- COMMON SCRIPTS -->
    <script src="{{ asset('js/common_scripts.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- SPECIFIC SCRIPTS -->
    <script src="{{ asset('js/sticky_sidebar.min.js') }}"></script>
    <script src="{{ asset('js/specific_listing.js') }}"></script>

    <script>
        // Get all checkboxes with the class "keyword-checkbox"
        const keyword_checkboxes = document.querySelectorAll('.keyword-checkbox');
        const user_checkboxes = document.querySelectorAll('.user-checkbox');
        const timeRangeCheckboxes = document.querySelectorAll('.time-range-checkbox');

        // Add a change event listener to each checkbox
        keyword_checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                // Uncheck all other checkboxes
                keyword_checkboxes.forEach(otherCheckbox => {
                    if (otherCheckbox !== checkbox) {
                        otherCheckbox.checked = false;
                    }
                });
            });
        });


        // Add a change event listener to each checkbox
        user_checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                // Uncheck all other checkboxes
                user_checkboxes.forEach(otherCheckbox => {
                    if (otherCheckbox !== checkbox) {
                        otherCheckbox.checked = false;
                    }
                });
            });
        });

        // Add a change event listener to each checkbox
        timeRangeCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                // Uncheck all other time range checkboxes
                timeRangeCheckboxes.forEach(otherCheckbox => {
                    if (otherCheckbox !== checkbox) {
                        otherCheckbox.checked = false;
                    }
                });
            });
        });


        $(document).ready(function() {
            // Add a change event listener to each checkbox and date input
            $('.keyword-checkbox, .user-checkbox, .time-range-checkbox, #start_date, #end_date').change(function() {
                const keyword = $('.keyword-checkbox:checked').map(function() {
                    return $(this).data('keyword');
                }).get().join(', ');
                const user = $('.user-checkbox:checked').map(function() {
                    return $(this).data('user');
                }).get().join(', ');
                const timeRange = $('.time-range-checkbox:checked').map(function() {
                    return $(this).val();
                }).get().join(', ');
                const startDate = $('#start_date').val();
                const endDate = $('#end_date').val();

                sendSearchDataToBackend(keyword, user, timeRange, startDate, endDate);
            });



            function sendSearchDataToBackend(keyword = null, user = null, timeRange = null, startDate = null,
                endDate = null) {
                const url = "{{ route('element.search') }}";
                $.ajax({
                    url: url, // Replace with your Laravel route URL
                    type: 'GET',
                    dataType: 'html', // or 'GET' depending on your route
                    data: {
                        keyword: keyword,
                        user: user,
                        time_range: timeRange,
                        start_date: startDate,
                        end_date: endDate
                    },
                    success: function(response) {
                        $(".search_view").html(response);
                    },
                    error: function(error) {
                        // Handle errors here
                        console.error('Error:', error);
                    }
                });
            }

            $('#clear-search').click(function() {
                clearSearchData();
            });

            function clearSearchData() {
                // Clear all checkboxes and date inputs
                $('.keyword-checkbox, .user-checkbox, .time-range-checkbox').prop('checked', false);
                $('#start_date, #end_date').val('');

				window.location.href = "{{ route('element.index') }}";
            }
        });
    </script>

</body>

</html>
