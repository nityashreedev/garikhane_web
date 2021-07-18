
<link type="text/css" rel="stylesheet" href="{{asset('panel/assets/css/image-uploader.min.css')}}">
<link type="text/css" rel="stylesheet" href="{{asset('panel/assets/css/demo.css')}}">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script type="text/javascript" src="{{asset('panel/assets/js/image-uploader.min.js')}}"></script>
<!--Material Design Iconic Font-->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<form method="POST" action ="{{url('admin/product-image/store')}}"  enctype="multipart/form-data">
{{csrf_field()}}
                <div class="input-field">
                    <input type="text" name="name-2" id="name-2" value="John Doe">
                    <label for="name-2" class="active">Name</label>
                </div>
            
                <div class="input-field">
                    <input type="text" name="description-2" id="description-2"
                    value="This form is already filed with some data, including images!">
                    <label for="description-2" class="active">Description</label>
                </div>
            
                <div class="input-field">
                    <label class="active">Photos</label>
                    <div class="input-images-2" style="padding-top: .5rem;"></div>
                </div>
            
                <button>Submit and display data</button>
            
            </form>


              
<script>
   
   let preloaded = [
                    {id: 1, src: 'https://picsum.photos/500/500?random=1'},
                    {id: 2, src: 'https://picsum.photos/500/500?random=2'},
                    {id: 3, src: 'https://picsum.photos/500/500?random=3'},
                    {id: 4, src: 'https://picsum.photos/500/500?random=4'},
                    {id: 5, src: 'https://picsum.photos/500/500?random=5'},
                    {id: 6, src: 'https://picsum.photos/500/500?random=6'},
                ];
                
                $('.input-images-2').imageUploader({
                    preloaded: preloaded,
                    imagesInputName: 'photos',
                    preloadedInputName: 'old',
                    maxSize: 2 * 1024 * 1024,
                    maxFiles: 10
                });

</script>

  
