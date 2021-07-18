@extends('admin.layouts.app')

<style>
.thumb {
    margin: 10px 5px 0 0;
    width: 100px;
}
</style>
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
        <div class="col-xs-12">
            <div class="col-md-12" >
                <h3> FAQ</h3>
                <form action="{{isset($purpose) ? url('admin/faq/store/'.$faq->id) :  url('admin/faq/store') }}" method="POST" id="faq" enctype="multipart/form-data">
                            {{csrf_field()}}
                <div id="field">
                <div id="field0">
                    
                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="action_id">Question</label>  
                          <div class="col-md-12">
                          <textarea id="action_id" name="question[]" required type="text" placeholder=""  class="ckeditor form-control input-md"></textarea>
                            
                          </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group mb-3">
                          <label class="col-md-4 control-label" for="ans">Answer</label>  
                          <div class="col-md-12">
                          <input id="action_name" name="ans[]" required type="text" placeholder="" class="form-control input-md">
                            
                          </div>
                        </div>
                               <!-- File Button --> 
                        <div class="form-group mb-3">
                          <label class="col-md-4 control-label" for="action_json">Action JSON File</label>
                          <div class="col-md-4">
                                      <input type="file" id="action_json" name="file[]" class="input-file" accept=".txt,.json">
                             <div id="action_jsondisplay"></div>
                          </div>
                        </div>
        
                    </div>
                    </div>
                    <!-- Button -->
                    <div class="form-group">
                      <div class="col-md-4">
                        <button id="add-more" name="add-more" class="btn btn-primary">Add More</button>
                        <input type="submit" name="submit" value="Submit"  class="btn btn-info submit">
                      </div>
                    </div>
                    <br><br>
              </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    
@stop
@section('scripts')
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script>
$(document).ready(function () {
    $("form").validate({
        ignore: [],
        rules: {
        action_id: {
        ckrequired: true //Custom required field 
        }
        , action_name: {
         required: true  //Default required field fails
        }
        }});
    
     CKEDITOR.replace( 'question[]' );
        $(document).on('click','.submit' ,function(e) {
            alert('click');
            var messageLength = CKEDITOR.instances['question[]'].getData().replace(/<[^>]*>/gi, '').length;
            console.log('length',messageLength);
            if( !messageLength ) {
                alert( 'Please enter a message' );
                e.preventDefault();
            }
        });
    //@naresh action dynamic childs
    var next = 0;
    $("#add-more").click(function(e){
        e.preventDefault();
        var addto = "#field" + next;
        var addRemove = "#field" + (next);
        next = next + 1;
        var newIn = ' <div id="field'+ next +'" name="field'+ next +'"><!-- Text input--><div class="form-group mb-3"> <label class="col-md-4 control-label" for="action_id">Question</label> <div class="col-md-12"> <input id="action_id" name="question[]" required type="text" placeholder="" class="form-control input-md"> </div></div> <!-- Text input--><div class="form-group"> <label class="col-md-4 control-label" for="action_name">Answer</label> <div class="col-md-12"> <input id="action_name" name="ans[]" required type="text" placeholder="" class="form-control input-md"> </div></div><!-- File Button --> <div class="form-group"> <label class="col-md-4 control-label" for="action_json">Action JSON File</label> <div class="col-md-4"> <input id="action_json" name="file[]" class="input-file" type="file"> </div></div></div>';
        var newInput = $(newIn);
        var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >Remove</button></div></div><div id="field">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#field" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);  
        
            $('.remove-me').click(function(e){
                e.preventDefault();
                var fieldNum = this.id.charAt(this.id.length-1);
                var fieldID = "#field" + fieldNum;
                $(this).remove();
                $(fieldID).remove();
            });
    });

});
</script>


@stop