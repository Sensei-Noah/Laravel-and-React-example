<footer>
    <script src="{{ asset('js/manifest.js') }}"></script> {{-- always first --}}
    <script src="{{ asset('js/vendor.js') }}"></script> {{-- If there are multiple application-centric JavaScript files, they should come after the vendor script.  --}}
    <script src="{{ asset('js/app.js') }}"></script>
</footer>
