<div>
        <!-- Start Main content -->
        <main class="bg-grey pb-30">
            <div class="container single-content">
                <div class="entry-header entry-header-style-1 mb-50 pt-50">
                    <h1 class="entry-title mb-50 font-weight-900">
                        {{ $post->title }}
                    </h1>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="entry-meta align-items-center meta-2 font-small color-muted">
                                <p class="mb-5">
                                    <a class="author-avatar" href="#"><img class="img-circle" src="assets/imgs/authors/author-3.jpg" alt=""></a>
                                    By <a href="author.html"><span class="author-name font-weight-bold">{{ $user->user_name }}</span></a>
                                </p>
                                <span class="mr-10"> <span class="text-muted">on</span> {{ $post->created_at }}</span>
                                <span class="has-dot"> 8 mins read</span>
                            </div>
                        </div>
                        <div class="col-md-6 text-right d-none d-md-inline">
                            <ul class="header-social-network d-inline-block list-inline mr-15">
                                <li class="list-inline-item text-muted"><span>Share this: </span></li>
                                <li class="list-inline-item"><a class="social-icon fb text-xs-center" target="_blank" href="#"><i class="elegant-icon social_facebook"></i></a></li>
                                <li class="list-inline-item"><a class="social-icon tw text-xs-center" target="_blank" href="#"><i class="elegant-icon social_twitter "></i></a></li>
                                <li class="list-inline-item"><a class="social-icon pt text-xs-center" target="_blank" href="#"><i class="elegant-icon social_pinterest "></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--end single header-->
                <figure class="image mb-30 m-auto text-center border-radius-10">
                    <img class="border-radius-10" src="{{ asset('')}}{{ $post->img }}" alt="post-title">
                </figure>
                <!--figure-->
                <article class="entry-wraper mb-50">
                    <div class="entry-main-content dropcap wow fadeIn animated">
                        {{ $post->content }}
                    </div>
                    <div class="entry-bottom mt-50 mb-30 wow fadeIn animated">
                        <div class="tags">
                            <span>Tags: </span>
                            <a href="category.html.htm" rel="tag">deer</a>
                            <a href="category.html.htm" rel="tag">nature</a>
                            <a href="category.html.htm" rel="tag">conserve</a>
                        </div>
                    </div>
                    <div class="single-social-share clearfix wow fadeIn animated">
                        <div class="entry-meta meta-1 font-small color-grey float-left mt-10">
                            <span class="hit-count mr-15"><i class="elegant-icon icon_comment_alt mr-5"></i>182 comments</span>
                            <span class="hit-count mr-15"><i class="elegant-icon icon_like mr-5"></i>268 likes</span>
                            <span class="hit-count"><i class="elegant-icon icon_star-half_alt mr-5"></i>Rate: 9/10</span>
                        </div>
                        <ul class="header-social-network d-inline-block list-inline float-md-right mt-md-0 mt-4">
                            <li class="list-inline-item text-muted"><span>Share this: </span></li>
                            <li class="list-inline-item"><a class="social-icon fb text-xs-center" target="_blank" href="#"><i class="elegant-icon social_facebook"></i></a></li>
                            <li class="list-inline-item"><a class="social-icon tw text-xs-center" target="_blank" href="#"><i class="elegant-icon social_twitter "></i></a></li>
                            <li class="list-inline-item"><a class="social-icon pt text-xs-center" target="_blank" href="#"><i class="elegant-icon social_pinterest "></i></a></li>
                        </ul>
                    </div>
                    <!--More posts-->
                    <div class="single-more-articles border-radius-5">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">You might be interested in</h5>
                            <button class="single-more-articles-close"><i class="elegant-icon icon_close"></i></button>
                        </div>
                        <div class="post-block-list post-module-1 post-module-5">
                            <ul class="list-post">
                                <li class="mb-30">
                                    <div class="d-flex hover-up-2 transition-normal">
                                        <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                            <a class="color-white" href="single.html.htm">
                                                <img src="assets/imgs/news/thumb-1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html.htm">The Best Time to Travel to Cambodia</a></h6>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-on">27 Jan</span>
                                                <span class="post-by has-dot">13k views</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-10">
                                    <div class="d-flex hover-up-2 transition-normal">
                                        <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                            <a class="color-white" href="single.html.htm">
                                                <img src="assets/imgs/news/thumb-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html.htm">20 Photos to Inspire You to Visit Cambodia</a></h6>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-on">27 August</span>
                                                <span class="post-by has-dot">14k views</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--Comments-->
                    <div class="comments-area">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Comments</h5>
                        </div>
                        <div class="comment-list wow fadeIn animated">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="assets/imgs/authors/author-4.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <p class="comment">
                                            Vestibulum euismod, leo eget varius gravida, eros enim interdum urna, non rutrum enim ante quis metus. Duis porta ornare nulla ut bibendum
                                        </p>
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <h5>
                                                    <a href="#">Rosie</a>
                                                </h5>
                                                <p class="date">6 minutes ago </p>
                                            </div>
                                            <div class="reply-btn">
                                                <a href="#" class="btn-reply">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list wow fadeIn animated">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="assets/imgs/authors/author-2.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <p class="comment">
                                            Sed ac lorem felis. Ut in odio lorem. Quisque magna dui, maximus ut commodo sed, vestibulum ac nibh. Aenean a tortor in sem tempus auctor
                                        </p>
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <h5>
                                                    <a href="#">Agatha Christie</a>
                                                </h5>
                                                <p class="date">December 4, 2020 at 3:12 pm </p>
                                            </div>
                                            <div class="reply-btn">
                                                <a href="#" class="btn-reply">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-comment depth-2 justify-content-between d-flex mt-50">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="assets/imgs/authors/author.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <p class="comment">
                                            Sed ac lorem felis. Ut in odio lorem. Quisque magna dui, maximus ut commodo sed, vestibulum ac nibh. Aenean a tortor in sem tempus auctor
                                        </p>
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <h5>
                                                    <a href="#">Steven</a>
                                                </h5>
                                                <p class="date">December 4, 2020 at 3:12 pm </p>
                                            </div>
                                            <div class="reply-btn">
                                                <a href="#" class="btn-reply">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list wow fadeIn animated">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="assets/imgs/authors/author-3.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <p class="comment">
                                            Donec in ullamcorper quam. Aenean vel nibh eu magna gravida fermentum. Praesent eget nisi pulvinar, sollicitudin eros vitae, tristique odio.
                                        </p>
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <h5>
                                                    <a href="#">Danielle Steel</a>
                                                </h5>
                                                <p class="date">December 4, 2020 at 3:12 pm </p>
                                            </div>
                                            <div class="reply-btn">
                                                <a href="#" class="btn-reply">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--comment form-->
                    <div class="comment-form wow fadeIn animated">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Leave a Reply</h5>
                        </div>
                        <form class="form-contact comment_form" action="#" id="commentForm">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn button button-contactForm">Post Comment</button>
                            </div>
                        </form>
                    </div>
                </article>
            </div>
            <!--container-->
        </main>
        <!-- End Main content -->
</div>
