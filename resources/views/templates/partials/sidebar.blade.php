@if($tags->count())
    <h3>Tags</h3>
    @foreach($tags as $tag)
        <a href="{{ route('posts.tagged',$tag->slug) }}" class="tag {{$loop->last ? 'tag__extra_margin' : ''}}">{{ $tag->name }}</a>
    @endforeach
@endif