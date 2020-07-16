@extends('layouts.app')
@push('css')
@endpush
@section('content')

    <div class="tab-base">

        <!--Nav Tabs-->
        <ul class="nav nav-tabs">
            <li class="active">
                <a data-toggle="tab" href="#demo-lft-tab-0" aria-expanded="true">{{ __('Home First Slider') }}</a>
            </li>
            <li class="">
                <a data-toggle="tab" href="#demo-lft-tab-1" aria-expanded="true">{{ __('Home slider') }}</a>
            </li>
            <li class="">
                <a data-toggle="tab" href="#demo-lft-tab-2" aria-expanded="false">{{ __('Home banner 1') }}</a>
            </li>
            <li class="">
                <a data-toggle="tab" href="#demo-lft-tab-4" aria-expanded="false">{{ __('Home categories') }}</a>
            </li>
            <li class="">
                <a data-toggle="tab" href="#demo-lft-tab-3" aria-expanded="false">{{ __('Home banner 2') }}</a>
            </li>
            <li class="">
                <a data-toggle="tab" href="#demo-lft-tab-5" aria-expanded="false">{{ __('Top 10') }}</a>
            </li>
        </ul>

        <!--Tabs Content-->
        <div class="tab-content">
            <div id="demo-lft-tab-0" class="tab-pane fade active in">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{__('First Slider Update')}}</h3>
                    </div>

                    <!--Horizontal Form-->
                    <!--===================================================-->
                    <form class="form-horizontal" action="{{ route('first_slider') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-sm-3" for="first_description">{{__('First Description')}}</label>
                                <div class="col-sm-9">
                                    <textarea rows="10" name="first_description" id="first_description" class="form-control" placeholder="First Description">{{@$firstSlider->first_description}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3" for="second_description">{{__('Second Description')}}</label>
                                <div class="col-sm-9">
                                    <textarea rows="10" name="second_description" id="second_description" class="form-control" placeholder="Second Description">{{@$firstSlider->second_description}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3" for="first_image">{{__('First Image')}}</label>
                                <div class="col-sm-8">
                                    <input type="file" name="first_image" id="first_image" class="form-control">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{url('public/')}}/{{@$firstSlider->first_image}}" alt="" height="32px" width="40px">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3" for="second_image">{{__('Second Image')}}</label>
                                <div class="col-sm-8">
                                    <input type="file" name="second_image" id="second_image" class="form-control">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{url('public/')}}/{{@$firstSlider->second_image}}" alt="" height="32px" width="40px">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3" for="third_image">{{__('Third Image')}}</label>
                                <div class="col-sm-8">
                                    <input type="file" name="third_image" id="third_image" class="form-control">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{url('public/')}}/{{@$firstSlider->third_image}}" alt="" height="32px" width="40px">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3" for="forth_image">{{__('Forth Image')}}</label>
                                <div class="col-sm-8">
                                    <input type="file" name="forth_image" id="forth_image" class="form-control">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{url('public/')}}/{{@$firstSlider->forth_image}}" alt="" height="32px" width="40px">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3" for="is_active">{{__('Status')}}</label>
                                <div class="col-sm-4">
                                    <select name="is_active" id="is_active" class="form-control" required>
                                        <option value="">Select Status</option>
                                        <option value="1" {{@$firstSlider->is_active == 1?'selected':''}}>Active</option>
                                        <option value="0" {{@$firstSlider->is_active == 0?'selected':''}}>In-active</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="panel-footer text-right">
                            <button class="btn btn-purple" type="submit">{{__('Save')}}</button>
                        </div>
                    </form>
                    <!--===================================================-->
                    <!--End Horizontal Form-->

                </div>

                <script type="text/javascript">
                    $(document).ready(function(){
                        $("#first_slider").spartanMultiImagePicker({
                            fieldName:        'first_slider_img[]',
                            maxCount:         4,
                            rowHeight:        '200px',
                            groupClassName:   'col-md-4 col-sm-9 col-xs-6',
                            maxFileSize:      '',
                            dropFileLabel : "Drop Here",
                            onExtensionErr : function(index, file){
                                console.log(index, file,  'extension err');
                                alert('Please only input png or jpg type file')
                            },
                            onSizeErr : function(index, file){
                                console.log(index, file,  'file size too big');
                                alert('File size too big');
                            }
                        });
                    });
                    $(document).ready(function(){
                        $("#photos").spartanMultiImagePicker({
                            fieldName:        'photos[]',
                            maxCount:         10,
                            rowHeight:        '200px',
                            groupClassName:   'col-md-4 col-sm-9 col-xs-6',
                            maxFileSize:      '',
                            dropFileLabel : "Drop Here",
                            onExtensionErr : function(index, file){
                                console.log(index, file,  'extension err');
                                alert('Please only input png or jpg type file')
                            },
                            onSizeErr : function(index, file){
                                console.log(index, file,  'file size too big');
                                alert('File size too big');
                            }
                        });
                    });

                </script>

            </div>
            <div id="demo-lft-tab-1" class="tab-pane fade">

                <div class="row">
                    <div class="col-sm-12">
                        <a onclick="add_slider()" class="btn btn-rounded btn-info pull-right">{{__('Add New Slider')}}</a>
                    </div>
                </div>

                <br>

                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{__('Home slider')}}</h3>
                    </div>
                    <div class="panel-body">
                        <div class="message"></div>
                        <table class="table table-striped table-bordered demo-dt-basic" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{__('Title')}}</th>
                                    <th>{{__('Serial No')}}</th>
                                    <th>{{__('Photo')}}</th>
                                    <th width="50%">{{__('Link')}}</th>
                                    <th>{{__('Published')}}</th>
                                    <th>{{__('Status')}}</th>
                                    <th width="10%">{{__('Options')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(\App\Slider::all() as $key => $slider)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$slider->title}}</td>
                                        <td>{{$slider->serial_no}}</td>
                                        <td><img loading="lazy"  class="img-md" src="{{ asset('public/'.$slider->photo)}}" alt="Slider Image"></td>
                                        <td>{{$slider->link}}</td>

                                        <td><label class="switch">
                                            <input onchange="update_slider_published(this)" value="{{ $slider->id }}" type="checkbox" <?php if($slider->published == 1) echo "checked";?> >
                                            <span class="slider round"></span></label></td>
                                        <td>
                                            <label class="switch">
                                            <input type="checkbox" check = "check" class="toggle-class" data-id = {{ $slider->id}} {{($slider->status == 1)?'checked':''}}  >
                                            <span class="slider round"></span>
                                            </label>
                                           
                                          

                                        </td>
                                        <td>
                                            <div class="btn-group dropdown">
                                                <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                                                    {{__('Actions')}} <i class="dropdown-caret"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a onclick="confirm_modal('{{route('sliders.destroy', $slider->id)}}');">{{__('Delete')}}</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div id="demo-lft-tab-2" class="tab-pane fade">

                <div class="row">
                    <div class="col-sm-12">
                        <a onclick="add_banner_1()" class="btn btn-rounded btn-info pull-right">{{__('Add New Banner')}}</a>
                    </div>
                </div>

                <br>

                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{__('Home banner')}} (Max 3 published)</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered demo-dt-basic" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{__('Photo')}}</th>
                                    <th>{{__('Position')}}</th>
                                    <th>{{__('Published')}}</th>
                                    <th width="10%">{{__('Options')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(\App\Banner::where('position', 1)->get() as $key => $banner)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td><img loading="lazy"  class="img-md" src="{{ asset('public/'.$banner->photo)}}" alt="banner Image"></td>
                                        <td>{{ __('Banner Position ') }}{{ $banner->position }}</td>
                                        <td><label class="switch">
                                            <input onchange="update_banner_published(this)" value="{{ $banner->id }}" type="checkbox" <?php if($banner->published == 1) echo "checked";?> >
                                            <span class="slider round"></span></label></td>
                                        <td>
                                            <div class="btn-group dropdown">
                                                <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                                                    {{__('Actions')}} <i class="dropdown-caret"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a onclick="edit_home_banner_1({{ $banner->id }})">{{__('Edit')}}</a></li>
                                                    <li><a onclick="confirm_modal('{{route('home_banners.destroy', $banner->id)}}');">{{__('Delete')}}</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div id="demo-lft-tab-3" class="tab-pane fade">

                <div class="row">
                    <div class="col-sm-12">
                        <a onclick="add_banner_2()" class="btn btn-rounded btn-info pull-right">{{__('Add New Banner')}}</a>
                    </div>
                </div>

                <br>

                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{__('Home banner')}} (Max 3 published)</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered demo-dt-basic" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{__('Photo')}}</th>
                                    <th>{{__('Position')}}</th>
                                    <th>{{__('Published')}}</th>
                                    <th width="10%">{{__('Options')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(\App\Banner::where('position', 2)->get() as $key => $banner)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td><img loading="lazy"  class="img-md" src="{{ asset('public/'.$banner->photo)}}" alt="banner Image"></td>
                                        <td>{{ __('Banner Position ') }}{{ $banner->position }}</td>
                                        <td><label class="switch">
                                            <input onchange="update_banner_published(this)" value="{{ $banner->id }}" type="checkbox" <?php if($banner->published == 1) echo "checked";?> >
                                            <span class="slider round"></span></label></td>
                                        <td>
                                            <div class="btn-group dropdown">
                                                <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                                                    {{__('Actions')}} <i class="dropdown-caret"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a onclick="edit_home_banner_2({{ $banner->id }})">{{__('Edit')}}</a></li>
                                                    <li><a onclick="confirm_modal('{{route('home_banners.destroy', $banner->id)}}');">{{__('Delete')}}</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div id="demo-lft-tab-4" class="tab-pane fade">

                <div class="row">
                    <div class="col-sm-12">
                        <a onclick="add_home_category()" class="btn btn-rounded btn-info pull-right">{{__('Add New Category')}}</a>
                    </div>
                </div>

                <br>

                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{__('Home Categories')}}</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered demo-dt-basic" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{__('Category')}}</th>
                                    <th>{{__('Subsubcategories')}}</th>
                                    <th>{{ __('Status') }}</th>
                                    <th width="10%">{{__('Options')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(\App\HomeCategory::all() as $key => $home_category)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$home_category->category->name}}</td>
                                        <td>
                                            @foreach (json_decode($home_category->subsubcategories) as $key => $subsubcategory_id)
                                                @if (\App\SubSubCategory::find($subsubcategory_id) != null)
                                                    <span class="badge badge-info">{{\App\SubSubCategory::find($subsubcategory_id)->name}}</span>
                                                @endif
                                            @endforeach
                                        </td>
                                        <td><label class="switch">
                                            <input onchange="update_home_category_status(this)" value="{{ $home_category->id }}" type="checkbox" <?php if($home_category->status == 1) echo "checked";?> >
                                            <span class="slider round"></span></label></td>
                                        <td>
                                            <div class="btn-group dropdown">
                                                <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                                                    {{__('Actions')}} <i class="dropdown-caret"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a onclick="edit_home_category({{ $home_category->id }})">{{__('Edit')}}</a></li>
                                                    <li><a onclick="confirm_modal('{{route('home_categories.destroy', $home_category->id)}}');">{{__('Delete')}}</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div id="demo-lft-tab-5" class="tab-pane fade">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{__('Top 10 Information')}}</h3>
                    </div>

                    <!--Horizontal Form-->
                    <!--===================================================-->
                    <form class="form-horizontal" action="{{ route('top_10_settings.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-sm-3" for="url">{{__('Top Categories (Max 10)')}}</label>
                                <div class="col-sm-9">
                                    <select class="form-control demo-select2-max-10" name="top_categories[]" multiple required>
                                        @foreach (\App\Category::all() as $key => $category)
                                            <option value="{{ $category->id }}" @if($category->top == 1) selected @endif>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3" for="url">{{__('Top Brands (Max 10)')}}</label>
                                <div class="col-sm-9">
                                    <select class="form-control demo-select2-max-10" name="top_brands[]" multiple required>
                                        @foreach (\App\Brand::all() as $key => $brand)
                                            <option value="{{ $brand->id }}" @if($brand->top == 1) selected @endif>{{ $brand->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer text-right">
                            <button class="btn btn-purple" type="submit">{{__('Save')}}</button>
                        </div>
                    </form>
                    <!--===================================================-->
                    <!--End Horizontal Form-->

                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')

<script type="text/javascript">
   
    $('.toggle-class').on('change', function(){
        var status = $(this).prop('checked')==true?1:0;
        $('input[check="check"]').not(this).prop('checked', false);
        old = !status;
        var slider_id = $(this).data('id');
        $.ajax({
            type:'GET',
            dataType:'json',
            url:'{{route("change.status")}}',
            data:{'status':status,'slider_id':slider_id,'old':old},
            success:function(data){
                console.log(data);
                 showAlert('success', 'Home Slider has been changed successfully');
                 
            }
        })
        
    });

    function updateSettings(el, type){
        if($(el).is(':checked')){
            var value = 1;
        }
        else{
            var value = 0;
        }
        $.post('{{ route('business_settings.update.activation') }}', {_token:'{{ csrf_token() }}', type:type, value:value}, function(data){
            if(data == 1){
                showAlert('success', 'Settings updated successfully');
            }
            else{
                showAlert('danger', 'Something went wrong');
            }
        });
    }

    function add_slider(){
        $.get('{{ route('sliders.create')}}', {}, function(data){
            $('#demo-lft-tab-1').html(data);
        });
    }

    function add_banner_1(){
        $.get('{{ route('home_banners.create', 1)}}', {}, function(data){
            $('#demo-lft-tab-2').html(data);
        });

    }

    function add_banner_2(){
        $.get('{{ route('home_banners.create', 2)}}', {}, function(data){
            $('#demo-lft-tab-3').html(data);
        });
    }

    function edit_home_banner_1(id){
        var url = '{{ route("home_banners.edit", "home_banner_id") }}';
        url = url.replace('home_banner_id', id);
        $.get(url, {}, function(data){
            $('#demo-lft-tab-2').html(data);
            $('.demo-select2-placeholder').select2();
        });
    }

    function edit_home_banner_2(id){
        var url = '{{ route("home_banners.edit", "home_banner_id") }}';
        url = url.replace('home_banner_id', id);
        $.get(url, {}, function(data){
            $('#demo-lft-tab-3').html(data);
            $('.demo-select2-placeholder').select2();
        });
    }

    function add_home_category(){
        $.get('{{ route('home_categories.create')}}', {}, function(data){
            $('#demo-lft-tab-4').html(data);
            $('.demo-select2-placeholder').select2();
        });
    }

    function edit_home_category(id){
        var url = '{{ route("home_categories.edit", "home_category_id") }}';
        url = url.replace('home_category_id', id);
        $.get(url, {}, function(data){
            $('#demo-lft-tab-4').html(data);
            $('.demo-select2-placeholder').select2();
        });
    }

    function update_home_category_status(el){
        if(el.checked){
            var status = 1;
        }
        else{
            var status = 0;
        }
        $.post('{{ route('home_categories.update_status') }}', {_token:'{{ csrf_token() }}', id:el.value, status:status}, function(data){
            if(data == 1){
                showAlert('success', 'Home Page Category status updated successfully');
            }
            else{
                showAlert('danger', 'Something went wrong');
            }
        });
    }

    function update_banner_published(el){
        if(el.checked){
            var status = 1;
        }
        else{
            var status = 0;
        }
        $.post('{{ route('home_banners.update_status') }}', {_token:'{{ csrf_token() }}', id:el.value, status:status}, function(data){
            if(data == 1){
                showAlert('success', 'Banner status updated successfully');
            }
            else{
                showAlert('danger', 'Maximum 4 banners to be published');
            }
        });
    }

    function update_slider_published(el){
        if(el.checked){
            var status = 1;
        }
        else{
            var status = 0;
        }
        var url = '{{ route('sliders.update', 'slider_id') }}';
        url = url.replace('slider_id', el.value);

        $.post(url, {_token:'{{ csrf_token() }}', status:status, _method:'PATCH'}, function(data){
            if(data == 1){
                showAlert('success', 'Published sliders updated successfully');
            }
            else{
                showAlert('danger', 'Something went wrong');
            }
        });
    }
     
</script>

@endsection
