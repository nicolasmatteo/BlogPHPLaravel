<!DOCTYPE html>
<html>

    <head>
        <title>Blog</title>
        
        <style>
            .principal{
                display: flex;
            }
            .contenido{
                flex:1;
                padding: 20px;
            }
        </style>

    </head>

    <body>
        <div>
            <h1>Blog</h1>
            @if(Auth::check())
                Bienvenido {{ Auth::user() -> name }}. 
                <a href="/">Ver perfil</a>
                <a href="/logout">Cerrar sesión</a>
            @else 
                <a href="/login">Iniciar sesion</a>

            @endif

       
            <div class="contenido">
            @foreach ($blogs as $blog)
                <div class="post">
                    <div class="post-title">
                        <h3>{{ $blog->nombreDelBlog }}</h3>
                    </div>
                    <div class="post-body">
                        <p>{{ $blog->contenidoBlog }}</p>
                        <p>Publicated at {{$blog->fecha}} by {{ $blog->usuario}}</p>
                    </div>
                </div>
            @endforeach
            {{$blogs->links()}}
            </div>
    
        </div>
    </body>
</html>
    
