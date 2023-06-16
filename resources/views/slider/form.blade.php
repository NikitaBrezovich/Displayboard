<div class="row">
    <div class="form-floating my-6 ">
        <input type="text" class="form-control" id="validationTextarea" name="eventname" required value="{{$slide->eventname ?? ''}}">
        <label for="validationTextarea" class="form-label">Eventname *</label>
    </div>
    <div class="form-floating my-6 ">
        <input type="text" class="form-control" id="floatingPassword" name="col_name_1" required value="{{$slide->col_name_1 ?? ''}}">
        <label for="floatingPassword">Column name 1 *</label>
    </div>
    <div class="form-floating my-6 ">
        <input type="text" class="form-control" id="floatingPassword" name="col_1" required value="{{$slide->col_1 ?? ''}}">
        <label for="floatingPassword">Column text 1 *</label>
    </div>
    <div class="form-floating my-6 ">
        <input type="text" class="form-control" id="floatingInput" name="col_name_2" value="{{$slide->col_name_2 ?? ''}}">
        <label for="floatingInput">Column name 2</label>
    </div>
    <div class="form-floating my-6 ">
        <input type="text" class="form-control" id="floatingPassword" name="col_2" value="{{$slide->col_2 ?? ''}}">
        <label for="floatingPassword">Column text 2</label>
    </div>
    <div class="form-floating my-6 ">
        <input type="text" class="form-control" id="floatingInput" name="col_name_3" value="{{$slide->col_name_3 ?? ''}}">
        <label for="floatingInput">Column name 3</label>
    </div>
    <div class="form-floating my-6 ">
        <input type="text" class="form-control" id="floatingPassword" name="col_3" value="{{$slide->col_3 ?? ''}}">
        <label for="floatingPassword">Column text 3</label>
    </div>
    <div class="form-floating my-6 ">
        <input type="text" class="form-control" id="floatingPassword" name="qr" value="{{$slide->qr ?? ''}}">
        <label for="floatingPassword">Qr-code (url)</label>
    </div>
    <div class="form-floating my-6 ">
        <input type="text" class="form-control" id="floatingPassword" name="image_path"value="{{$slide->image_path ?? ''}}">
        <label for="floatingPassword">Background image (url)</label>
    </div>
    <div class="my-6 text-center ">
        <button class="btn btn-success">Speichern</button>
    </div>
    <div class="my-6">
        * required
    </div>
</div>