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
            @if(Auth::chek())
                <a href="#">Inicio</a>
                <a href="#">Registrarse</a>
                <a href="#">Iniciar Sesion</a>

            @else
                
                <a href="#">Inicio</a>
                <a href="#">Mis Blogs</a>
                <a href="#">Cerrar Sesion</a>
            @endif


       
        <div class="contenido">
            
            <p>Este es un ejemplo de una página con una barra de navegación y contenido.</p>
        </div>
        
        
    </ul>
        </div>
    </body>
</html>
    
