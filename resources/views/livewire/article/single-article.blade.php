<nav>
    <div class="container">
        <ol>
            <li><a href="index.html">Home</a></li>
            <li>Blog Details</li>
        </ol>
    </div>
</nav>
</div><!-- End Breadcrumbs -->

<!-- ======= Blog Details Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

        <div class="row g-5">

            <div class="col-lg-8">

                <article class="blog-details">

                    <div class="post-img">
                        <img src="{{asset('assets/img/blog/blog-1.jpg')}}" alt="" class="img-fluid">
                    </div>

                    <h2 class="title">{{$article->title}}</h2>

                    <div class="meta-top">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">{{$article->writer}}</a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2020-01-01">{{$article->created_at}}</time></a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12 Comments</a></li>
                        </ul>
                    </div><!-- End meta top -->

                    <div class="content">
                       <p>{{$article->body}}</p>

                    </div><!-- End post content -->

                    <div class="meta-bottom">
                        <i class="bi bi-folder"></i>
                        <ul class="cats">
                            <li><a href="#">Business</a></li>
                        </ul>

                        <i class="bi bi-tags"></i>
                        <ul class="tags">
                            <li><a href="#">Creative</a></li>
                            <li><a href="#">Tips</a></li>
                            <li><a href="#">Marketing</a></li>
                        </ul>
                    </div><!-- End meta bottom -->

                </article><!-- End blog post -->

                <div class="post-author d-flex align-items-center">
                    <img src="assets/img/blog/blog-author.jpg" class="rounded-circle flex-shrink-0" alt="">
                    <div>
                        <h4>{{$article->writer}}</h4>
                        <div class="social-links">
                            <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                            <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                            <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                        </div>
                        <p>
                            Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
                        </p>
                    </div>
                </div><!-- End post author -->
                <div class="comments">
                    <h4 class="comments-count">{{$article->comments->count()}} Comments</h4>
                    @foreach($comments as $c)
                        <div id="comment-1" class="comment">
                            <div class="d-flex">
                                <div>
                                    <h5><a href="">{{$c->user->name}}</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                                    <time datetime="2020-01-01">{{$c->created_at->diffForHumans()}}</time>
                                    <p>
                                        {{$c->body}}
                                    </p>
                                </div>
                            </div>
                        </div><!-- End comment #1 -->
                    @endforeach
                    <div class="reply-form">
                        <h4>Leave a Reply</h4>

                        <p>Your email address will not be published. Required fields are marked * </p>
                       @if(\Illuminate\Support\Facades\Auth::check())
                            <form action="">
                                <div class="row">
                                    <div class="col form-group">
                                        <textarea wire:model="comment_body" name="body" class="form-control" placeholder="Your Comment*"></textarea>
                                    </div>
                                </div>
                                @error('comment_body')
                                <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                                @enderror
                                <button wire:click="saveComment" type="button" class="btn btn-primary">Post Comment</button>
                            </form>
                        @else
                           <a href="/login" class="btn btn-info">for insert , login first</a>
                       @endif

                    </div>
                </div><!-- End blog comments -->
            </div>
            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="sidebar-item search-form">
                        <h3 class="sidebar-title">Search</h3>
                        <form action="" class="mt-3">
                            <input type="text">
                            <button type="submit"><i class="bi bi-search"></i></button>
                        </form>
                    </div><!-- End sidebar search formn-->
                    <div class="sidebar-item categories">
                        <h3 class="sidebar-title">Categories</h3>
                        <ul class="mt-3">
                            <li><a href="#">General <span>(25)</span></a></li>
                            <li><a href="#">Lifestyle <span>(12)</span></a></li>
                            <li><a href="#">Travel <span>(5)</span></a></li>
                            <li><a href="#">Design <span>(22)</span></a></li>
                            <li><a href="#">Creative <span>(8)</span></a></li>
                            <li><a href="#">Educaion <span>(14)</span></a></li>
                        </ul>
                    </div><!-- End sidebar categories-->

                    <div class="sidebar-item recent-posts">
                        <h3 class="sidebar-title">Recent Posts</h3>

                        <div class="mt-3">

                            <div class="post-item mt-3">
                                <img src="assets/img/blog/blog-recent-1.jpg" alt="">
                                <div>
                                    <h4><a href="blog-details.html">Nihil blanditiis at in nihil autem</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>
                            </div><!-- End recent post item-->

                            <div class="post-item">
                                <img src="assets/img/blog/blog-recent-2.jpg" alt="">
                                <div>
                                    <h4><a href="blog-details.html">Quidem autem et impedit</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>
                            </div><!-- End recent post item-->

                            <div class="post-item">
                                <img src="assets/img/blog/blog-recent-3.jpg" alt="">
                                <div>
                                    <h4><a href="blog-details.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>
                            </div><!-- End recent post item-->

                            <div class="post-item">
                                <img src="assets/img/blog/blog-recent-4.jpg" alt="">
                                <div>
                                    <h4><a href="blog-details.html">Laborum corporis quo dara net para</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>
                            </div><!-- End recent post item-->

                            <div class="post-item">
                                <img src="assets/img/blog/blog-recent-5.jpg" alt="">
                                <div>
                                    <h4><a href="blog-details.html">Et dolores corrupti quae illo quod dolor</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>
                            </div><!-- End recent post item-->

                        </div>

                    </div><!-- End sidebar recent posts-->

                    <div class="sidebar-item tags">
                        <h3 class="sidebar-title">Tags</h3>
                        <ul class="mt-3">
                            <li><a href="#">App</a></li>
                            <li><a href="#">IT</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Mac</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Office</a></li>
                            <li><a href="#">Creative</a></li>
                            <li><a href="#">Studio</a></li>
                            <li><a href="#">Smart</a></li>
                            <li><a href="#">Tips</a></li>
                            <li><a href="#">Marketing</a></li>
                        </ul>
                    </div><!-- End sidebar tags-->

                </div><!-- End Blog Sidebar -->

            </div>
        </div>

    </div>
</section><!-- End Blog Details Section -->

</main><!-- End #main -->
