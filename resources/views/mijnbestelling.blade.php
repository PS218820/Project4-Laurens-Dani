<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Laravel</title>
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
      <style>
         body {
         margin: 0;
         font-family: Arial, Helvetica, sans-serif;
         }
         /*-----------------------------------------NAV------------------------------------------------*/
        .sidenav {
          height: 100%;
          width: 200px;
          position: fixed;
          z-index: 1;
          top: 0;
          left: 0;
          background-color: #111;
          overflow-x: hidden;
          padding-top: 20px;
        }

        .sidenav a {
          padding: 6px 6px 6px 32px;
          text-decoration: none;
          font-size: 25px;
          color: #818181;
          display: block;
        }

        .sidenav a:hover {
          color: #f1f1f1;
        }

        .main {
          margin-left: 200px; /* Same as the width of the sidenav */
        }

        @media screen and (max-height: 450px) {
          .sidenav {padding-top: 15px;}
          .sidenav a {font-size: 18px;}
        }
         /*----------------------------------FOOTER + PAGINARANDEN---------------------------------------------------*/
         .box {
         margin: 0;
         padding: 5px;
         background-color: lightgray;
         }
         footer {
         text-align: center;
         padding: 3px;
         background-color: DarkSalmon;
         color: white;
         position: absolute;
         bottom: 0;
         width: 100%;
         

         
         }
         .header {
         text-align: center;
         font-size: 40px
         }
         /*-----------------------------------------GRID-----------------------------------------------------*/
         .container {
         background-color: beige;
         min-width: 800px;
         position: relative;
         min-height: 100vh;
         display: grid; 
         grid-template-columns: 200px 20px 1fr 1fr 20px; 
         grid-template-rows: 0.2fr 1.8fr 2.5rem; 
         gap: 0px 0px; 
         grid-template-areas: 
    "div1 div2 div2 div2 div2"
    "div1 . div4 div5 ."
    "div1 div3 div3 div3 div3"; 
}
   .div1 { grid-area: div1; }
   .div2 { grid-area: div2; background-color: gray; border-bottom: black; border-bottom-style: solid}
   .div3 { grid-area: div3; }
   .div4 { grid-area: div4; background-color:rgba(255, 255, 255, 0.5);}
   .div5 { grid-area: div5; background-color:rgba(255, 255, 255, 0.5)}


      </style>
   </head>
   <body>

      <div class="container">
         <div class="div1">
            <div class="sidenav">
               <a href="{{ url('/home') }}">Home</a>
               <a href="{{ url('/menu') }}">Menu</a>
               <a href="#contact">Contact</a>
               <a href="#about">About</a>
               <div class="rightfloat">
                  @if (Route::has('login'))
                  <div >
                     @auth
                     <a href="{{ url('/dashboard') }}" >Dashboard</a>
                     @else
                     <a href="{{ route('login') }}" >Log in</a>
                     @if (Route::has('register'))
                     <a href="{{ route('register') }}" >Register</a>
                     @endif
                     @endauth
                  </div>
                  @endif
               </div>
            </div>
         </div>

         <div class="div2">
            <h1 class="header">Uw Bestellingen</h1>
         </div>

         <div class="div4">

         </div>

         <div class="div5">


         </div>

      </div>
      <footer class="div3">
         <p>Blabla
            <br>
            <a href="mailto:stonkspizza@gmail.com">stonkspizza@gmail.com</a>
         </p>
      </footer>
      </div>
   </body>
</html>