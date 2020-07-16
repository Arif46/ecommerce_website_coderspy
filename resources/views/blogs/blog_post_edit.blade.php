@extends('layouts.app')

@section('content')

    <div class="col-lg-12">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('Post Information')}}</h3>
            </div>
            <!--Horizontal Form-->
            <!--===================================================-->
            <form class="form-horizontal" action="{{ route('blog-posts.update',$blog->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input name="_method" type="hidden" value="PATCH">
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="title">{{__('Blog Title')}}</label>
                        <div class="col-sm-9">
                            <input type="text" id="title" name="title" class="form-control" value="{{$blog->title}}" placeholder="{{__('Blog Title')}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="category_id">{{__('Category Name')}}</label>
                        <div class="col-sm-9">
                            <select name="category_id" id="category_id"  class="form-control" required>
                                <option value="">---- Select Category ----</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" {{$blog->category_id ==$category->id ?'selected':''}}>{{$category->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="image">{{__('Image')}}</label>
                        <div class="col-sm-8">
                            <input style="width: 100%" type="file" id="image" name="image" class="form-control">
                        </div>
                        <div class="col-sm-2">
                            <img style="margin-left: -8px;" src="{{asset('public/'.$blog->image)}}" alt="blog_img" id="blog_img" height="32px" width="50px">
                          </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="description">{{__('Description')}}</label>
                        <div class="col-sm-9">
                            <textarea type="text" id="description" name="description" class="editor" required  placeholder="{{__('Description')}}">{{ $blog->description }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="active_status">{{__('Status')}}</label>
                        <div class="col-sm-9">
                            <select name="active_status" id="active_status"  class="form-control" required>
                                <option value="">---- Select Status ----</option>
                                <option value="1" {{$blog->active_status == 1?'selected':''}}>Active</option>
                                <option value="0" {{$blog->active_status == 0?'selected':''}}>In-active</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8"></div>
                    <div class="col-md-3">
                        <div class="panel-footer text-right">
                            <button class="btn btn-purple" type="submit">{{__('Save')}}</button>
                        </div>
                    </div>
                    <div class="col-md-1    "></div>
                </div>
            </form>
            <!--===================================================-->
            <!--End Horizontal Form-->

        </div>
    </div>

@endsection
@section('script')
    <script>
        function blog_img(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blog_img').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#image").change(function(){
            blog_img(this);
        });
    </script>
@endsection
