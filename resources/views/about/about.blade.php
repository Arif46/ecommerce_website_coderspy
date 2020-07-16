@extends('layouts.app')

@section('content')

<style>
    .mr-10{
        margin-right: 10px;
    }
    .jodit_container .jodit_workplace {
        min-height: 150px !important;
    }
</style>

<div class="col-sm-12">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">About Us</h3>
        </div>
        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ route('about_submit') }}" method="POST" enctype="multipart/form-data">
        	@csrf
            <div class="panel-body">
                <div class="col-md-12">
                    <div class="col-md-4">
                         <div class="form-group">
                            <label class=" control-label" for="ultra_beauty_image">{{__('Ultra Beauty Image')}}</label>
                            <div>
                                <input type="file" id="ultra_beauty_image" name="ultra_beauty_image" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <img height="70" width="100" src="{{asset('/')}}{{@$about->ultra_beauty_image}}" alt="">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-4">
                         <div class="form-group">
                            <label class="control-label" for="name">{{__('Mission Title')}}</label>
                            <div class="mr-10">
                                <input type="text" placeholder="{{__('Mission Title')}}" id="mission_title" name="mission_title" value="{{@$about->mission_title}}" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                         <div class="form-group">
                            <label class="control-label" for="name">{{__('Vision Title')}}</label>
                            <div class="mr-10">
                                <input type="text" placeholder="{{__('Vision Title')}}" id="vision_title" name="vision_title"value="{{@$about->vision_title}}" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                         <div class="form-group">
                            <label class="control-label" for="name">{{__('Values Title')}}</label>
                            <div class="mr-10">
                                <input type="text" placeholder="{{__('Values Title')}}" id="value_title" name="value_title"value="{{@$about->value_title}}" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-4">
                         <div class="form-group">
                            <label class="control-label" for="name">{{__('Mission Text')}}</label>
                            <div class="mr-10">
                                <textarea class="editor" name="mission_text" required>{{@$about->mission_text}}"</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                         <div class="form-group">
                            <label class="control-label" for="name">{{__('Vision Text')}}</label>
                            <div class="mr-10">
                                <textarea class="editor" name="vision_text" required>{{@$about->vision_text}}"</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                         <div class="form-group">
                            <label class="control-label" for="name">{{__('Values Text')}}</label>
                            <div class="mr-10">
                                <textarea class="editor" name="value_text" required>{{@$about->value_text}}"</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-4">
                         <div class="form-group">
                            <label class=" control-label" for="mission_img1">{{__('Mission Image-1')}}</label>
                            <div>
                                <input type="file" id="mission_img1" name="mission_img1" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <img height="70" width="100" src="{{asset('/')}}{{@$about->mission_img1}}" alt="">
                    </div>

                    <div class="col-md-4">
                         <div class="form-group">
                            <label class=" control-label" for="mission_img2">{{__('Mission Image-2')}}</label>
                            <div>
                                <input type="file" id="mission_img2" name="mission_img2" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <img height="70" width="100" src="{{asset('/')}}{{@$about->mission_img2}}" alt="">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-6">
                         <div class="form-group">
                            <label class="control-label" for="name">{{__('Story Text')}}</label>
                            <div class="mr-10">
                                <textarea class="editor" name="story_text" required>{{@$about->story_text}}"</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="col-md-4">
                         <div class="form-group">
                            <label class=" control-label" for="story_img1">{{__('Story Image 1')}}</label>
                            <div>
                                <input type="file" id="story_img1" name="story_img1" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <img height="70" width="100" src="{{asset('/')}}{{@$about->story_img1}}" alt="">
                    </div>
                    <div class="col-md-4">
                         <div class="form-group">
                            <label class=" control-label" for="story_img2">{{__('Story Image 2')}}</label>
                            <div>
                                <input type="file" id="story_img2" name="story_img2" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <img height="70" width="100" src="{{asset('/')}}{{@$about->story_img2}}" alt="">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-6">
                         <div class="form-group">
                            <label class="control-label" for="name">{{__('Story Title 1')}}</label>
                            <div class="mr-10">
                                <input type="text" placeholder="{{__('Story Title 1')}}" id="story_title1" name="story_title1" value="{{@$about->story_title1}}" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="form-group">
                            <label class="control-label" for="name">{{__('Story Title 2')}}</label>
                            <div class="mr-10">
                                <input type="text" placeholder="{{__('Story Title 2')}}" id="story_title2" name="story_title2"value="{{@$about->story_title2}}" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="col-md-6">
                         <div class="form-group">
                            <label class="control-label" for="name">{{__('Story Text 1')}}</label>
                            <div class="mr-10">
                                <textarea class="editor" name="story_text1" required>{{@$about->story_text1}}"</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="form-group">
                            <label class="control-label" for="name">{{__('Story Text 2')}}</label>
                            <div class="mr-10">
                                <textarea class="editor" name="story_text2" required>{{@$about->story_text2}}"</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-4">
                         <div class="form-group">
                            <label class=" control-label" for="story_img3">{{__('Story Image 3')}}</label>
                            <div>
                                <input type="file" id="story_img3" name="story_img3" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <img height="70" width="100" src="{{asset('/')}}{{@$about->story_img3}}" alt="">
                    </div>
                    <div class="col-md-4">
                         <div class="form-group">
                            <label class=" control-label" for="story_img4">{{__('Story Image 4')}}</label>
                            <div>
                                <input type="file" id="story_img4" name="story_img4" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <img height="70" width="100" src="{{asset('/')}}{{@$about->story_img4}}" alt="">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-6">
                         <div class="form-group">
                            <label class="control-label" for="name">{{__('Story Title 3')}}</label>
                            <div class="mr-10">
                                <input type="text" placeholder="{{__('Story Title 3')}}" id="story_title3" name="story_title3" value="{{@$about->story_title3}}" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="form-group">
                            <label class="control-label" for="name">{{__('Story Title 4')}}</label>
                            <div class="mr-10">
                                <input type="text" placeholder="{{__('Story Title 4')}}" id="story_title4" name="story_title4"value="{{@$about->story_title4}}" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="col-md-6">
                         <div class="form-group">
                            <label class="control-label" for="name">{{__('Story Text 4')}}</label>
                            <div class="mr-10">
                                <textarea class="editor" name="story_text3" required>{{@$about->story_text3}}"</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="form-group">
                            <label class="control-label" for="name">{{__('Story Text 4')}}</label>
                            <div class="mr-10">
                                <textarea class="editor" name="story_text4" required>{{@$about->story_text4}}"</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-6">
                         <div class="form-group">
                            <label class="control-label" for="name">{{__('Guest Text')}}</label>
                            <div class="mr-10">
                                <textarea class="editor" name="guest_text" required>{{@$about->guest_text}}"</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                         <div class="form-group">
                            <label class=" control-label" for="guest_img1">{{__('Image-1')}}</label>
                            <div>
                                <input type="file" id="guest_img1" name="guest_img1" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <img height="70" width="100" src="{{asset('/')}}{{@$about->guest_img2}}" alt="">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-4">
                         <div class="form-group">
                            <label class=" control-label" for="guest_img2">{{__('Image-2')}}</label>
                            <div>
                                <input type="file" id="guest_img2" name="guest_img2" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <img height="70" width="100" src="{{asset('/')}}{{@$about->guest_img3}}" alt="">
                    </div>
                    <div class="col-md-4">
                         <div class="form-group">
                            <label class=" control-label" for="guest_img3">{{__('Image-3')}}</label>
                            <div>
                                <input type="file" id="guest_img3" name="guest_img3" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <img height="70" width="100" src="{{asset('/')}}{{@$about->guest_img3}}" alt="">
                    </div>
                </div>

                {{-- Our Associates --}}
                <div class="col-md-12">
                    <div class="col-md-6">
                         <div class="form-group">
                            <label class="control-label" for="name">{{__('Associates Text')}}</label>
                            <div class="mr-10">
                                <textarea class="editor" name="associate_text" required>{{@$about->associate_text}}"</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                         <div class="form-group">
                            <label class=" control-label" for="associate_img1">{{__('Image-1')}}</label>
                            <div>
                                <input type="file" id="associate_img1" name="associate_img1" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <img height="70" width="100" src="{{asset('/')}}{{@$about->associate_img1}}" alt="">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="col-md-2">
                         <div class="form-group">
                            <label class=" control-label" for="associate_img2">{{__('Image-2')}}</label>
                            <div>
                                <input type="file" id="associate_img2" name="associate_img2" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <img height="70" width="100" src="{{asset('/')}}{{@$about->associate_img2}}" alt="">
                    </div>

                    <div class="col-md-2">
                         <div class="form-group">
                            <label class=" control-label" for="associate_img3">{{__('Image-3')}}</label>
                            <div>
                                <input type="file" id="associate_img3" name="associate_img3" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <img height="70" width="100" src="{{asset('/')}}{{@$about->associate_img3}}" alt="">
                    </div>
                    <div class="col-md-2">
                         <div class="form-group">
                            <label class=" control-label" for="associate_img4">{{__('Image-4')}}</label>
                            <div>
                                <input type="file" id="associate_img4" name="associate_img4" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <img height="70" width="100" src="{{asset('/')}}{{@$about->associate_img4}}" alt="">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-2">
                         <div class="form-group">
                            <label class=" control-label" for="associate_img5">{{__('Image-5')}}</label>
                            <div>
                                <input type="file" id="associate_img5" name="associate_img5" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <img height="70" width="100" src="{{asset('/')}}{{@$about->associate_img5}}" alt="">
                    </div>

                    <div class="col-md-2">
                         <div class="form-group">
                            <label class=" control-label" for="associate_img6">{{__('Image-6')}}</label>
                            <div>
                                <input type="file" id="associate_img6" name="associate_img6" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <img height="70" width="100" src="{{asset('/')}}{{@$about->associate_img6}}" alt="">
                    </div>
                    <div class="col-md-2">
                         <div class="form-group">
                            <label class=" control-label" for="associate_img7">{{__('Image-7')}}</label>
                            <div>
                                <input type="file" id="associate_img7" name="associate_img7" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <img height="70" width="100" src="{{asset('/')}}{{@$about->associate_img7}}" alt="">
                    </div>
                </div>

                {{-- Our Communities --}}

                <div class="col-md-12">
                    <div class="col-md-6">
                         <div class="form-group">
                            <label class="control-label" for="name">{{__('Communities Text')}}</label>
                            <div class="mr-10">
                                <textarea class="editor" name="communitie_text" required>{{@$about->communitie_text}}"</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                         <div class="form-group">
                            <label class=" control-label" for="communitie_img1">{{__('Image-1')}}</label>
                            <div>
                                <input type="file" id="communitie_img1" name="communitie_img1" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <img height="70" width="100" src="{{asset('/')}}{{@$about->communitie_img1}}" alt="">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-4">
                         <div class="form-group">
                            <label class=" control-label" for="communitie_img2">{{__('Image-2')}}</label>
                            <div>
                                <input type="file" id="communitie_img2" name="communitie_img2" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <img height="70" width="100" src="{{asset('/')}}{{@$about->communitie_img2}}" alt="">
                    </div>
                    <div class="col-md-6">
                         <div class="form-group">
                            <label class="control-label" for="name">{{__('Communities Text 2')}}</label>
                            <div class="mr-10">
                                <textarea class="editor" name="communitie_text2" required>{{@$about->communitie_text2}}"</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="col-md-2">
                         <div class="form-group">
                            <label class=" control-label" for="communitie_img3">{{__('Image-3')}}</label>
                            <div>
                                <input type="file" id="communitie_img3" name="communitie_img3" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <img height="70" width="100" src="{{asset('/')}}{{@$about->communitie_img3}}" alt="">
                    </div>

                    <div class="col-md-2">
                         <div class="form-group">
                            <label class=" control-label" for="communitie_img4">{{__('Image-4')}}</label>
                            <div>
                                <input type="file" id="communitie_img4" name="communitie_img4" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <img height="70" width="100" src="{{asset('/')}}{{@$about->communitie_img4}}" alt="">
                    </div>
                    <div class="col-md-2">
                         <div class="form-group">
                            <label class=" control-label" for="communitie_img5">{{__('Image-5')}}</label>
                            <div>
                                <input type="file" id="communitie_img5" name="communitie_img5" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <img height="70" width="100" src="{{asset('/')}}{{@$about->communitie_img5}}" alt="">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="col-md-6">
                         <div class="form-group">
                            <label class="control-label" for="name">{{__('Communities Text 3')}}</label>
                            <div class="mr-10">
                                <textarea class="editor" name="communitie_text3" required>{{@$about->communitie_text3}}"</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                         <div class="form-group">
                            <label class=" control-label" for="communitie_img6">{{__('Image-6')}}</label>
                            <div>
                                <input type="file" id="communitie_img6" name="communitie_img6" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <img height="70" width="100" src="{{asset('/')}}{{@$about->communitie_img6}}" alt="">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-4">
                         <div class="form-group">
                            <label class=" control-label" for="communitie_img7">{{__('Image-7')}}</label>
                            <div>
                                <input type="file" id="communitie_img7" name="communitie_img7" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <img height="70" width="100" src="{{asset('/')}}{{@$about->communitie_img7}}" alt="">
                    </div>
                    <div class="col-md-6">
                         <div class="form-group">
                            <label class="control-label" for="name">{{__('Communities Text 4')}}</label>
                            <div class="mr-10">
                                <textarea class="editor" name="communitie_text4" required>{{@$about->communitie_text4}}"</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="col-md-6">
                         <div class="form-group">
                            <label class="control-label" for="name">{{__('Environment Text 4')}}</label>
                            <div class="mr-10">
                                <textarea class="editor" name="environment_text" required>{{@$about->environment_text}}"</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="form-group">
                            <label class="control-label" for="name">{{__('Partner Text 4')}}</label>
                            <div class="mr-10">
                                <textarea class="editor" name="partner_text" required>{{@$about->partner_text}}"</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="col-md-6">
                         <div class="form-group">
                            <label class="control-label" for="name">{{__('Charity Text 4')}}</label>
                            <div class="mr-10">
                                <textarea class="editor" name="charity_text" required>{{@$about->charity_text}}"</textarea>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="panel-footer text-center mb-2" style="margin-bottom: 40px;">
                <button class="btn btn-purple" type="submit">{{__('Update')}}</button>
            </div>
        </form>

        <!--===================================================-->
        <!--End Horizontal Form-->

    </div>
</div>

@endsection
