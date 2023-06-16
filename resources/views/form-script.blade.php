@section('form-script')
     <script>
        function formToggle() {
            let toggler = document.querySelector(".form-login")
            let sliderHide = document.querySelector(".carousel-display")
            let bodyGradient = document.querySelector (".body-color")
            if (toggler.style.display=="none"){
                toggler.style.display="block"
                sliderHide.style.display="none"
                bodyGradient.style.background
            }
            else {
                toggler.style.display="none"
                sliderHide.style.display="block"
            }    
        }
        function formClose() {
            let toggler = document.querySelector(".form-login")
            let sliderHide = document.querySelector(".carousel-display")
            if (toggler.style.display=="block"){
                toggler.style.display="none"
                sliderHide.style.display="block"
            }    
            else  {
                toggler.style.display="block"
                sliderHide.style.display="none"
            }
        }
        function formSubmit() {
            alert("Login erfolgreich!")
        }
    </script>
@endsection