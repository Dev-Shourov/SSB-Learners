    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- custom js -->
    <script type="text/javascript" src="{{ asset('frontend/js/custom.js') }}"></script>
    <!-- Plugin JavaScript -->
    <script src="{{ asset('frontend/assets/js/jquery.easing.min.js') }}"></script>
    <!-- Owl Carousel JS -->
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <!-- Landing Page JS File -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    <!-- ssl commerce popup -->
    <script>
    (function (window, document) {
        var loader = function () {
            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
    })(window, document);
    </script>