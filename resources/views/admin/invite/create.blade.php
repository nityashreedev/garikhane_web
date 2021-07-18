
<form action="{{url('admin/invite/store/')}}"  method="POST" enctype ="multipart/form-data">
    {{csrf_field()}}
    <div class="modal-body mx-3">
        <div class="md-form mb-5 form control">
            <i class="fas fa-envelope prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="defaultForm-email">User email</label>
            <input type="email" name="email"  class="form-control validate">

        </div>

        <div class="md-form mb-4 form control" >
            <i class="fa fa-tasks prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="defaultForm-pass"> User role</label>
            <select class="form-control" id="example-select" name="role" >
                <option value="admin" >admin</option>
                <option value = "editor">Editor</option>
            </select>

        </div>

    </div>
    <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-primary" type="submit">Sent Invitation</button>
    </div>
</form>

