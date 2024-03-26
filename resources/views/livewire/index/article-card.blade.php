
    <div class="col-xl-4 col-md-6">
        <article>

            <div class="post-img">
                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
            </div>

            <p class="post-category">{{$article->title}}</p>

            <h2 class="title">
                <a href="/article/{{$article->id}}">{{$article->title}}</a>
            </h2>

            <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                    <p class="post-author">{{$article->writer}}</p>
                    <p class="post-date">
                        <time datetime="2022-01-01">{{$article->date}}</time>
                    </p>
                </div>
            </div>

        </article>
    </div><!-- End post list item -->

