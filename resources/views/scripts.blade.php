<script type="text/javascript">
window.addEventListener('DOMContentLoaded', function() {
    const selectElement = document.querySelector("#template-select");
    selectElement.addEventListener("change", (event) => {
        hide = document.querySelectorAll('.hide');
        function change() {
            [].forEach.call(hide, function(el) {
            const add = el.classList.contains(selectElement.value) ? "add" : "remove";
            el.classList[add]('show');
    });
  }
  selectElement.addEventListener('change', change);
  change()
  });

    });

    window.addEventListener('DOMContentLoaded', function() {
    const selectElement = document.querySelector("#type-select");
    selectElement.addEventListener("change", (event) => {
        hide = document.querySelectorAll('.hide-div');
        function change() {
            [].forEach.call(hide, function(el) {
            const add = el.classList.contains(selectElement.value) ? "add" : "remove";
            el.classList[add]('show-div');
    });
  }
  selectElement.addEventListener('change', change);
  change()
  });

    });


</script>
