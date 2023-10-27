<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@1.9.6/dist/tailwind.min.css" rel="stylesheet">
    <title>@yield('title')</title>
  </head>
  <body>

    <!-- START : Header -->
    <header class="absolute w-full z-50 px-4">
      <div class="container mx-auto py-5">
        <div class="flex flex-strecth item-center">
          <div class="w-56 flex items-center">
            <img src="../frontend/images/design/logo.svg" alt="Logo RSIMasyithoh - Adalah sebuah website 
            rumah sakit islam masyithoh bangil">
          </div>
          <div class="w-full"></div>

          <!-- START: menu hamburger wrapper -->
          
          <!-- END: menu hamburger wrapper -->

          </div>
        </div>
      </div>
    </header>

     <!-- END : Header -->
    
    @yield('content')
     <!-- START: Section Hero -->
     
     <!-- END: Section Hero -->

  </body>
</html>
