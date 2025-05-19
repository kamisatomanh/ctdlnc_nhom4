<div class="p-4 border rounded-md shadow">
    <h2 class="text-lg font-bold mb-4">Tìm Bài Viết Theo Thứ Hạng</h2>

    <div class="mb-4">
        <label class="block text-sm font-medium">Nhập thứ hạng:</label>
        <input type="number" wire:model.defer="rank" min="1"
               class="border px-2 py-1 rounded w-32" />
    </div>

    <button wire:click="search"
            class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
        Tìm kiếm
    </button>

    <div class="mt-4">
        @if ($topPost)
        <article class="col-md-6 mb-40 wow fadeInUp  animated">
                <div class="post-card-1 border-radius-10 hover-up">
                    <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url({{ asset('')}}{{$topPost->img}})">
                        <a class="img-link" href="single.html.htm"></a>
                        <ul class="social-share">
                            <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                            <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                            <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                            <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                        </ul>
                    </div>
                    <div class="post-content p-30">
                        <div class="entry-meta meta-0 font-small mb-10">
                            <a href="category.html.htm"><span class="post-cat text-info">Artists</span></a>
                            <a href="category.html.htm"><span class="post-cat text-success">Film</span></a>
                        </div>
                        <div class="d-flex post-card-content">
                            <h5 class="post-title mb-20 font-weight-900">
                                <a href="single.html.htm">{{ $topPost->title }}</a>
                            </h5>
                            <div class="post-excerpt mb-25 font-small text-muted">
                                <p>Graduating from a top accelerator or incubator can be as career-defining for a&nbsp;startup founder&nbsp;as an elite university diploma. The intensive programmes, which…</p>
                            </div>
                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                <span class="post-on">27 August</span>
                                <span class="time-reading has-dot">12 mins read</span>
                                <span class="post-by has-dot">23k views</span>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        @else
            <p class="text-gray-500">Chưa có kết quả.</p>
        @endif
    </div>
</div>
