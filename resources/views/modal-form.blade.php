@section('modal-form')
    <style>
        .form-login{
            display: none; 
            width: 450px;
            height: 350px; 
            /*align-self:auto;*/
            margin-left: 700px;
            margin-top:200px;
            position:static;
        }

        /*.form-block{
          position:absolute;
        }*/
    </style> 
      <div class="modal-content rounded-4 shadow form-login">
        <div class="modal-header p-5 pb-4 border-bottom-0">
          <h1 class="fw-bold mb-0 fs-2">Administration log in</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="formClose()"></button>
        </div>
      <div class="modal-body px-5 pt-0">
        <form class="">
          <div class="form-floating mb-3">
            <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
          <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" onclick="formSubmit()">Log in</button>
        </form>
      </div>
    </div>
@endsection