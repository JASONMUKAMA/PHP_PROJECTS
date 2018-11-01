
    <h4><a href="post.html">{{$post->title}}</a></h4>
    <p class="author-category">By <a href="#">{{$post ->author->name}}</a> in <a href="">{{$post->created_at->format('M, d, Y')}}</a>
    </p>
    <hr>
    <p class="intro">

        {{$post->excerpt}}

    </p>
    <p class="read-more">