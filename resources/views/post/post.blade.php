@extends('templates.app')

@section('header')
    @include('post.partials.image',[
        'url' => asset('img/coding.jpeg'),
        'alt' => 'Coding',
    ])
@endsection
@section('main')
    <article class="article">

        <div class="author">
            <img src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/10420393_528650680607165_184491111002686776_n.jpg?_nc_cat=0&oh=03318ef1ad88481d019f3615d5815e7b&oe=5B97AAA3"
                 alt="Rehan Mazhar" class="author__image">
            <div class="author__details">
                <a href="#" class="author__name">Rehan Mazhar</a>
                <div class="author__post-time">5 days a go</div>
            </div>
        </div>

        <h1 class="article__header">Lorem ipsum dolor sit amet.</h1>
        <h2 class="article__subheader">Donec euismod libero lacinia ipsum luctus rhoncus a at tellus.</h2>
        <div class="article__body">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In elementum ultrices sem vitae lacinia. Nunc tempus mauris sit amet semper euismod. Proin leo felis, facilisis a sodales et, maximus non massa. Curabitur accumsan vulputate arcu ac tincidunt. Aliquam mattis, metus laoreet maximus posuere, purus orci tristique enim, in cursus quam nibh a justo. Nunc id metus a odio scelerisque consequat at id eros. Aliquam enim odio, facilisis a finibus eget, aliquam ac sem. Vivamus fermentum ut neque at molestie. Donec faucibus sem nec tortor fermentum porta. Integer fringilla eros et diam tempus commodo. Maecenas ipsum quam, euismod faucibus enim a, fringilla pellentesque purus. Donec vel dui quam. Sed sit amet felis eget felis vehicula posuere. Proin sed quam leo. Integer vel rhoncus felis. Nulla id arcu luctus, lacinia metus eget, venenatis diam.
            </p>
            <p>
                Fusce sit amet volutpat magna. Ut ipsum sapien, ultricies eu eros quis, fringilla auctor leo. Suspendisse aliquet tincidunt hendrerit. Etiam efficitur nisl ligula, at cursus diam sodales sed. Pellentesque pretium volutpat lectus, eu sodales sem ornare vitae. Aliquam rhoncus nec nibh at imperdiet. Morbi ut nibh in leo sodales volutpat ut sed enim. Nullam et urna non risus aliquet finibus quis non ante. Nunc magna erat, eleifend ac dui vitae, facilisis cursus mauris.
            </p>
            <p>
                Etiam vitae suscipit eros. Maecenas rhoncus mattis sollicitudin. Aenean pellentesque, neque eu aliquet pharetra, libero enim maximus lorem, non porttitor quam nunc id massa. Mauris tristique nisi neque, vitae rhoncus elit accumsan eu. Nullam ultricies velit quis sapien euismod, et viverra metus laoreet. Praesent elit magna, ultrices at mollis at, auctor at ante. Nam justo nisi, feugiat ut tempus at, ullamcorper eget lacus. Vestibulum leo justo, ultricies bibendum rutrum ut, varius consequat mi.
            </p>

        </div>

        <a href="#" class="tag">Coding</a>
        <a href="#" class="tag">Development</a>
    </article>
@endsection