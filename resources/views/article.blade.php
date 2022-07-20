@extends('layout.layout')

@section('content')

    {{--    @include('front.layout._crumb',['page_name'=>'Article'])--}}

    <div class="page-section">
        <div class="container">
            <div class="row">


                <global-home></global-home>

                <div class="col-lg-4">
                    <div class="sidebar">

                        <!-- search blog  -->
                        <div class="sidebar-block">
                            <h3 class="sidebar-title">Search</h3>
                            <form action="#" class="search-form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                                    <button type="submit" class="btn"><span class="icon mai-search"></span></button>
                                </div>
                            </form>
                        </div>
                        <!-- End  search blog  -->

                        <!-- Categories Section -->
                        <div class="sidebar-block">
                            <h3 class="sidebar-title">Categories</h3>
                            <ul class="categories">
                                <li><a href="#">Food <span>12</span></a></li>
                                <li><a href="#">Dish <span>22</span></a></li>
                                <li><a href="#">Desserts <span>37</span></a></li>
                                <li><a href="#">Drinks <span>42</span></a></li>
                                <li><a href="#">Ocassion <span>14</span></a></li>
                            </ul>
                        </div>
                        <!-- End Categories Section -->


                        <!-- Recent Blog -->
                        <div class="sidebar-block">
                            <h3 class="sidebar-title">Recent Blog</h3>
                            <div class="blog-item">
                                <a class="post-thumb" href="">
                                    <img src="../assets/img/blog/blog_1.jpg" alt="">
                                </a>
                                <div class="content">
                                    <h5 class="post-title"><a href="#">Even the all-powerful Pointing has no control</a></h5>
                                    <div class="meta">
                                        <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                                        <a href="#"><span class="mai-person"></span> Admin</a>
                                        <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-item">
                                <a class="post-thumb" href="">
                                    <img src="../assets/img/blog/blog_2.jpg" alt="">
                                </a>
                                <div class="content">
                                    <h5 class="post-title"><a href="#">Even the all-powerful Pointing has no control</a></h5>
                                    <div class="meta">
                                        <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                                        <a href="#"><span class="mai-person"></span> Admin</a>
                                        <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-item">
                                <a class="post-thumb" href="">
                                    <img src="../assets/img/blog/blog_3.jpg" alt="">
                                </a>
                                <div class="content">
                                    <h5 class="post-title"><a href="#">Even the all-powerful Pointing has no control</a></h5>
                                    <div class="meta">
                                        <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                                        <a href="#"><span class="mai-person"></span> Admin</a>
                                        <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Recent Blog -->
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .page-section -->


@endsection


@section('js')
    <script>
        $(document).ready(function(){
            // Setting Pagination Bulma Class
            $('.pagination').addClass("justify-content-center");
        });
    </script>
@endsection
