
        <script type="text/javascript" src="Js/materialize.min.js"></script>
        <script>

            document.addEventListener('DOMContentLoaded', function() {
                console.log('DOMContentLoaded');
                var elems = document.querySelectorAll('.dropdown-trigger');
                var instance = M.Dropdown.init(elems);
            });

            document.addEventListener('DOMContentLoaded', function() {
                console.log('DOMContentLoaded');
                var elems = document.querySelectorAll('.modal');
                var instances = M.Modal.init(elems);
            });

        </script>
    </body>
</html>