<div>
    <div class="post-module-3">
        <div class="widget-header-1 position-relative mb-30">
            <h5 class="mt-5 mb-30">Latest posts</h5>
        </div>
        <div class="loop-list loop-list-style-1">
            
            @foreach ($posts as $post )
                <article class="hover-up-2 transition-normal wow fadeInUp animated">
                    <div class="row mb-40 list-style-2">
                        <div class="col-md-4">
                            <div class="post-thumb position-relative border-radius-5">
                                <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url({{$post->img}})">
                                    <a class="img-link" href="{{ url('post' . $post->id) }}"></a>
                                </div>
                                <ul class="social-share">
                                    <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                    <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                    <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                    <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8 align-self-center">
                            <div class="post-content">
                                <div class="entry-meta meta-0 font-small mb-10">
                                    {{-- <a href="category.html.htm"><span class="post-cat text-primary">Food</span></a> --}}
                                </div>
                                <h5 class="post-title font-weight-900 mb-20">
                                    <a href="{{ url('post' . $post->id) }}">{{ $post->title }}</a>
                                    <span class="post-format-icon"><i class="elegant-icon icon_star_alt"></i></span>
                                </h5>
                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                    <span class="post-on">7 August</span>
                                    <span class="time-reading has-dot">11 mins read</span>
                                    <span class="post-by has-dot">3k views</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article> 
            @endforeach
            {{-- <article class="hover-up-2 transition-normal wow fadeInUp animated">
                <div class="row mb-40 list-style-2">
                    <div class="col-md-4">
                        <div class="post-thumb position-relative border-radius-5">
                            <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url(assets/imgs/news/news-4.jpg)">
                                <a class="img-link" href="single.html.htm"></a>
                            </div>
                            <ul class="social-share">
                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8 align-self-center">
                        <div class="post-content">
                            <div class="entry-meta meta-0 font-small mb-10">
                                <a href="category.html.htm"><span class="post-cat text-success">Cooking</span></a>
                            </div>
                            <h5 class="post-title font-weight-900 mb-20">
                                <a href="single.html.htm">10 Easy Ways to Be Environmentally Conscious At Home</a>
                            </h5>
                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                <span class="post-on">27 Sep</span>
                                <span class="time-reading has-dot">10 mins read</span>
                                <span class="post-by has-dot">22k views</span>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="hover-up-2 transition-normal wow fadeInUp animated">
                <div class="row mb-40 list-style-2">
                    <div class="col-md-4">
                        <div class="post-thumb position-relative border-radius-5">
                            <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url(assets/imgs/news/news-2.jpg)">
                                <a class="img-link" href="single.html.htm"></a>
                            </div>
                            <ul class="social-share">
                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8 align-self-center">
                        <div class="post-content">
                            <div class="entry-meta meta-0 font-small mb-10">
                                <a href="category.html.htm"><span class="post-cat text-warning">Cooking</span></a>
                            </div>
                            <h5 class="post-title font-weight-900 mb-20">
                                <a href="single.html.htm">My Favorite Comfies to Lounge in At Home</a>
                            </h5>
                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                <span class="post-on">7 August</span>
                                <span class="time-reading has-dot">9 mins read</span>
                                <span class="post-by has-dot">12k views</span>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="hover-up-2 transition-normal wow fadeInUp animated">
                <div class="row mb-40 list-style-2">
                    <div class="col-md-4">
                        <div class="post-thumb position-relative border-radius-5">
                            <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url(assets/imgs/news/news-3.jpg)">
                                <a class="img-link" href="single.html.htm"></a>
                            </div>
                            <ul class="social-share">
                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8 align-self-center">
                        <div class="post-content">
                            <div class="entry-meta meta-0 font-small mb-10">
                                <a href="category.html.htm"><span class="post-cat text-danger">Travel</span></a>
                            </div>
                            <h5 class="post-title font-weight-900 mb-20">
                                <a href="single.html.htm">How to Give Your Space a Parisian-Inspired Makeover</a>
                            </h5>
                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                <span class="post-on">27 August</span>
                                <span class="time-reading has-dot">12 mins read</span>
                                <span class="post-by has-dot">23k views</span>
                            </div>
                        </div>
                    </div>
                </div>
            </article> --}}
        </div>
    </div>
    <div class="pagination-area mb-30 wow fadeInUp animated">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-start">
                <li class="page-item"><a class="page-link" href="#"><i class="elegant-icon arrow_left"></i></a></li>
                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                <li class="page-item"><a class="page-link" href="#">02</a></li>
                <li class="page-item"><a class="page-link" href="#">03</a></li>
                <li class="page-item"><a class="page-link" href="#">04</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="elegant-icon arrow_right"></i></a></li>
            </ul>
        </nav>
    </div>
</div>
