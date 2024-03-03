    {{-- Script --}}
    <script src="{{ asset('template/dist/js/demo-theme.min.js') }}"></script>
    <script src="{{ asset('template/dist/js/tabler.min.js') }}" defer></script>
    <script src="{{ asset('template/dist/js/demo.min.js') }}" defer></script>

    <!-- Libs JS -->
    <script src="{{ asset('./dist/libs/apexcharts/dist/apexcharts.min.js')}}" defer></script>
    <script src="{{ asset('./dist/libs/jsvectormap/dist/js/jsvectormap.min.js')}}" defer></script>
    <script src="{{ asset('./dist/libs/jsvectormap/dist/maps/world.js')}}" defer></script>
    <script src="{{ asset('./dist/libs/jsvectormap/dist/maps/world-merc.js')}}" defer></script>

    <script>
     function previewImage() {
            const imageFile = document.querySelector('#imageFile');
            const imgPreview = document.querySelector('.img-preview');
            const label = document.querySelector('#label');
            const img = document.querySelector('#plusimg');

            img.style.display = 'none';
            label.style.border = 0;
            imgPreview.style.display = 'block';

            const blob = URL.createObjectURL(imageFile.files[0]);
            imgPreview.src = blob;
        }
    </script>

    <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function() {
        new Dropzone("#dropzone-default")
      })
    </script>