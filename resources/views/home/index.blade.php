<!DOCTYPE html>
<html>

<head>
    {{-- @include('home.css') --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function toggleDarkMode() {
            document.documentElement.classList.toggle('dark');
        }
        
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                  //       primary: {
                  //           50: '#f0fdfa',
                  //           100: '#ccfbf1',
                  //           200: '#99f6e4',
                  //           300: '#5eead4',
                  //           400: '#2dd4bf',
                  //           500: '#14b8a6',
                  //           600: '#0d9488',
                  //           700: '#0f766e',
                  //           800: '#115e59',
                  //           900: '#134e4a'
                  //       }
                  //   },
                  //   animation: {
                  //       'bounce-slow': 'bounce 2s infinite',
                  //   }
                        primary: {
                              50:  '#fef2f2',
                              100: '#fee2e2',
                              200: '#fecaca',
                              300: '#fca5a5',
                              400: '#f87171',
                              500: '#ef4444',
                              600: '#dc2626',
                              700: '#b91c1c',
                              800: '#991b1b',
                              900: '#7f1d1d'
                              }
                    },
                }
            }
        }
    </script>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->

        @include('home.header')

    <!-- end header section -->

    <!-- slider section -->

        @include('home.slider')
    
        <!-- end slider section -->
  </div>
  <!-- end hero area -->

  
  
  <!-- shop section -->

        @include('home.product')

  <!-- end shop section -->




  <!-- contact section -->

        @include('home.contact')

  <!-- end contact section -->

   

  <!-- info section -->

        @include('home.footer')

</body>

</html>