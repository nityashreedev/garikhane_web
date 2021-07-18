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
            <div class="card-body">
                <h4 class="header-title">Create Commite Member</h4>
                <p class="sub-header"></p>
                <div class="row">
                    <div class="col-lg-6">
                      
                        <form action="{{isset($purpose) ? url('admin/commite/store/'.$commite->id) :  url('admin/commite/store') }}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="form-group mb-3">
                                <label for="simpleinput">Name</label>
                                <input type="text" required name="name" value="{{isset($commite->name) ? $commite->name : ''}}"
                                    class="form-control">
                                @error('name')

                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="form-group mb-3">
                                <label for="example-email">Member Image</label>
                                <input type="file" name="image" id="fileUpload"
                                    value="{{isset($purpose) ? ($commite->image ? '$commite->image': 'required' ): ''}}"    class="form-control"
                                    placeholder="Email">
                                @error('image')

                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror

                            </div>
                            <div id="thumb-output">
                                @if( isset($purpose) && $commite->image)
                                    <img  src="{{asset('/images/commite/'.$commite->image)}} "
                                                class="img-fluid img-thumbnails">
                                
                                @endif
                                </div>
                            
                            <br>
                            <div id="image-holder"> </div>
                            <br>
                            <div class="form-group mb-3">
                                <label for="text">Member Position</label>
                                <input type="text" required name="position" value="{{isset($commite->position) ? $commite->position : ''}}"
                                    class="form-control">
                                @error('text')

                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror

                            </div>
                            <div class="form-group mb-3 example">
                            <select class="form-control" required name="type">
                                <option value="">Select Type</option>
                               @if( isset($purpose))
                                <option value="commite" @if($commite->type == 'commite')selected @endif>Commitee Member</option>
                              <option value="board" @if($commite->type == 'board')selected @endif>Board Member</option>
                              <option value="state committe" @if($commite->type == 'state committe')selected @endif>State Committe</option>
                                @else
                                <option value="commite">Commitee Member</option>
                                <option value="board" >Board Member</option>
                                <option value="state committe" >State Committe</option>
                                @endif
                              
                              
                            </select>
                          </div>

                          <div class="form-group mb-3 example">
                            <select class="form-control"  name="state">
                                <option value="">Select State</option>
                               @if( isset($purpose))
                                <option value="प्रदेश नं १" @if($commite->state == 'प्रदेश नं १')selected @endif>प्रदेश नं १</option>
                                <option value="प्रदेश नं २" @if($commite->state == 'प्रदेश नं २')selected @endif>प्रदेश नं २</option>
                                <option value="बागमती प्रदेश" @if($commite->state == 'बागमती प्रदेश')selected @endif>बागमती प्रदेश</option>
                                <option value="गण्डकी प्रदेश" @if($commite->state == 'गण्डकी प्रदेश')selected @endif>गण्डकी प्रदेश</option>
                                <option value="लुम्बिनी प्रदेश" @if($commite->state == 'लुम्बिनी प्रदेश')selected @endif>लुम्बिनी प्रदेश</option>
                                <option value="कर्णाली प्रदेश" @if($commite->state == 'कर्णाली प्रदेश')selected @endif> कर्णाली प्रदेश</option>
                                <option value="सुदुरपश्चिम प्रदेश" @if($commite->state == 'सुदुरपश्चिम प्रदेश')selected @endif>सुदुरपश्चिम प्रदेश</option>

                               @else
                                <option value="प्रदेश नं १">प्रदेश नं १</option>
                                <option value="प्रदेश नं २" >प्रदेश नं २</option>
                                <option value="बागमती प्रदेश" >बागमती प्रदेश</option>
                                <option value="गण्डकी प्रदेश">गण्डकी प्रदेश</option>
                                <option value="लुम्बिनी प्रदेश" >लुम्बिनी प्रदेश</option>
                                <option value="कर्णाली प्रदेश" >कर्णाली प्रदेश</option>
                                <option value="सुदुरपश्चिम प्रदेश" >सुदुरपश्चिम प्रदेश</option>
                                @endif
                              
                              
                            </select>
                            @error('state')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
                          </div>
                            <button type="submit"
                                class="btn btn-primary">{{isset($purpose) ? 'Update' : 'Save'}}</button>
                        </form>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row-->
            </div>
            <!-- end card-body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->



@stop
@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){

    });
</script>

@stop