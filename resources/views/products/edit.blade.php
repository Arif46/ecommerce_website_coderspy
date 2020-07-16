@extends('layouts.app')
@push('style')
	<style>
		.sp-replacer {
			padding: 0;
			border: 1px solid rgba(0,0,0,.125);
			border-radius: 5px 0 0 5px;
			border-right: none;
		}
		.sp-preview {
			width: 100px;
			height: 44px;
			border: 0;
		}

		.sp-preview-inner {
			width: 110px;
		}

		.sp-dd{
			display: none;
		}

		.input-group > .form-control:not(:first-child) {
			border-top-left-radius: 0 !important;
			border-bottom-left-radius: 0 !important;
		}


		.column1 {
			float:left;
			width:500px;
		}
		.column2 {
			float:left;
			padding-left:20px;
			width:170px;
		}
		#panel {
			border:1px #000 solid;
			box-shadow:4px 6px 6px #444444;
			cursor:crosshair;
		}
		.column2 > div {
			margin-bottom:10px;
		}
		#swImage {
			border:1px #000 solid;
			box-shadow:2px 3px 3px #444444;
			cursor:pointer;
			height:25px;
			line-height:25px;
			border-radius:3px;
			-moz-border-radius:3px;
			-webkit-border-radius:3px;
		}
		#swImage:hover {
			margin-left:2px;
		}
		#preview {
			border:1px #000 solid;
			box-shadow:2px 3px 3px #444444;
			height:80px;
			width:80px;
			border-radius:3px;
			-moz-border-radius:3px;
			-webkit-border-radius:3px;
		}
		.column2 input[type=text] {
			float:right;
			width:110px;
		}
	</style>
	<link rel="stylesheet" href="{{ asset('css/spectrum.css') }}">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
@endpush
@section('content')


	<div class="row">
		<form class="form form-horizontal mar-top" action="{{route('products.update', $product->id)}}" method="POST" enctype="multipart/form-data" id="choice_form">
			<input name="_method" type="hidden" value="POST">
			<input type="hidden" name="id" value="{{ $product->id }}">
			@csrf
			<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">{{__('Product Information')}}</h3>
				</div>
				<div class="panel-body">
					<div class="tab-base tab-stacked-left">
						<!--Nav tabs-->
						<ul class="nav nav-tabs">
							<li class="active">
								<a data-toggle="tab" href="#demo-stk-lft-tab-1" aria-expanded="true">{{__('General')}}</a>
							</li>
							<li class="">
								<a data-toggle="tab" href="#demo-stk-lft-tab-2" aria-expanded="false">{{__('Images')}}</a>
							</li>
							<li class="">
								<a data-toggle="tab" href="#demo-stk-lft-tab-3" aria-expanded="false">{{__('Videos')}}</a>
							</li>
							<li class="">
								<a data-toggle="tab" href="#demo-stk-lft-tab-4" aria-expanded="false">{{__('Meta Tags')}}</a>
							</li>
							<li class="">
								<a data-toggle="tab" href="#demo-stk-lft-tab-5" aria-expanded="false">{{__(' Notes & Fragnce')}}</a>
							</li>
							<li class="">
								<a data-toggle="tab" href="#demo-stk-lft-tab-6" aria-expanded="false">{{__('Price')}}</a>
							</li>
							<li class="">
								<a data-toggle="tab" href="#demo-stk-lft-tab-7" aria-expanded="false">{{__('Description')}}</a>
							</li>
							{{-- <li class="">
                                <a data-toggle="tab" href="#demo-stk-lft-tab-8" aria-expanded="false">Display Settings</a>
                            </li> --}}
							<li class="">
								<a data-toggle="tab" href="#demo-stk-lft-tab-9" aria-expanded="false">{{__('Shipping Info')}}</a>
							</li>
							<li class="">
								<a data-toggle="tab" href="#demo-stk-lft-tab-11" aria-expanded="false">{{__('Other')}}</a>
							</li>
							<li class="">
								<a data-toggle="tab" href="#demo-stk-lft-tab-10" aria-expanded="false">{{__('PDF Specification')}}</a>
							</li>
						</ul>

						<!--Tabs Content-->
						<div class="tab-content">
							<div id="demo-stk-lft-tab-1" class="tab-pane fade active in">
								<div class="form-group">
									<label class="col-lg-2 control-label">{{__('Product Name')}}</label>
									<div class="col-lg-7">
										<input type="text" class="form-control" name="name" placeholder="{{__('Product Name')}}" value="{{$product->name}}" required>
									</div>
								</div>
								<div class="form-group" id="category">
									<label class="col-lg-2 control-label">{{__('Category')}}</label>
									<div class="col-lg-7">
										<select class="form-control demo-select2-placeholder" name="category_id" id="category_id" required>
											<option>Select an option</option>
											@foreach($categories as $category)
												<option value="{{$category->id}}" <?php if($product->category_id == $category->id) echo "selected"; ?> >{{__($category->name)}}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="form-group" id="subcategory">
									<label class="col-lg-2 control-label">{{__('Subcategory')}}</label>
									<div class="col-lg-7">
										<select class="form-control demo-select2-placeholder" name="subcategory_id" id="subcategory_id" >

										</select>
									</div>
								</div>
								<div class="form-group" id="subsubcategory">
									<label class="col-lg-2 control-label">{{__('Sub Subcategory')}}</label>
									<div class="col-lg-7">
										<select class="form-control demo-select2-placeholder" name="subsubcategory_id" id="subsubcategory_id" >

										</select>
									</div>
								</div>
								<div class="form-group" id="brand">
									<label class="col-lg-2 control-label">{{__('Brand')}}</label>
									<div class="col-lg-7">
										<select class="form-control demo-select2-placeholder" name="brand_id" id="brand_id">
											@foreach (\App\Brand::all() as $brand)
												<option value="{{ $brand->id }}" @if($product->brand_id == $brand->id) selected @endif>{{ $brand->name }}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="form-group" id="brand">
									<label class="col-lg-2 control-label">{{__('Perfumer')}}</label>
									<div class="col-lg-7">
										<select class="form-control demo-select2-placeholder" name="perfumer_id" id="perfumer_id">
											@foreach (\App\Perfume::all() as $perfume)
												<option value="{{ $perfume->id }}" @if($product->perfumer_id == $perfume->id) selected @endif>{{ $perfume->name }}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">{{__('Unit')}}</label>
									<div class="col-lg-7">
										<input type="text" class="form-control" name="unit" placeholder="Unit (e.g. KG, Pc etc)" value="{{$product->unit}}" required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">{{__('Barcode')}}</label>
									<div class="col-lg-7">
										<input type="text" class="form-control" name="barcode" value="{{$product->barcode}}" required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-3 control-label">Gender</label>
									<div class="col-lg-4">
										<select class="form-control" name="gender">
											<option @if($product->gender=="Male")  selected @endif value="Male">Male</option>
											<option @if($product->gender=="Female")  selected @endif value="Female">Female</option>
											<option @if($product->gender=="Unisex")  selected @endif value="Unisex">Unisex</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label class="col-lg-3 control-label">Sample</label>
									<div class="col-lg-4">
										<select class="form-control" name="sample">
											<option @if($product->sample==0)  selected @endif value="0">No</option>
											<option @if($product->sample==1)  selected @endif value="1">Yes</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">{{__('Tags')}}</label>
									<div class="col-lg-7">
										<input type="text" class="form-control" name="tags[]" id="tags" value="{{ $product->tags }}" placeholder="Type to add a tag" data-role="tagsinput">
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">{{__('Accessories')}}</label>
									<div class="col-lg-7">
										<input type="radio" name="is_accessories" value="1" <?php if($product->is_accessories == 1): echo "checked"; endif;?> > Yes
										<input type="radio" name="is_accessories" value="0" <?php if($product->is_accessories == 0): echo "checked"; endif;?>> No
									</div>
								</div>
								@php
									$refund_request_addon = \App\Addon::where('unique_identifier', 'refund_request')->first();
								@endphp
								@if ($refund_request_addon != null && $refund_request_addon->activated == 1)
									<div class="form-group">
										<label class="col-lg-2 control-label">{{__('Refundable')}}</label>
										<div class="col-lg-7">
											<label class="switch" style="margin-top:5px;">
												<input type="checkbox" name="refundable" @if ($product->refundable == 1) checked @endif>
												<span class="slider round"></span></label>
											</label>
										</div>
									</div>
								@endif
							</div>
							<div id="demo-stk-lft-tab-2" class="tab-pane fade">
								<div class="form-group">
									<label class="col-lg-2 control-label">{{__('Main Images')}}</label>
									<div class="col-lg-7">

										<div class="container">
											<div class="column1">
												<canvas id="panel" width="500" height="333"></canvas>
											</div>
											<div class="column2">
												<div><input type="button" value="Next image" id="swImage" /></div>
												<div>Preview:</div>
												<div id="preview"></div>
												<div>Color:</div>
												<div>HEX: <input type="text" id="hexVal" name="hexVal[]" class="hexValure"/></div>
												<a class="btn btn-primary pickColor">Submit</a>
												<hr />
											</div>
											<div style="clear:both;"></div>
										</div>


										<div id="photos">
											@if(is_array(json_decode($product->photos)))
												@foreach (json_decode($product->photos) as $key => $photo)
													<div class="col-md-4 col-sm-4 col-xs-6">
														<div class="img-upload-preview">
															<img loading="lazy"  src="{{ asset('public/'.$photo) }}" alt="" class="img-responsive">
															<input type="hidden" name="previous_photos[]" value="{{ $photo }}">
															<button type="button" class="btn btn-danger close-btn remove-files"><i class="fa fa-times"></i></button>
														</div>
													</div>
												@endforeach
											@endif
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">{{__('Thumbnail Image')}} <small>(290x300)</small></label>
									<div class="col-lg-7">
										<div id="thumbnail_img">
											@if ($product->thumbnail_img != null)
												<div class="col-md-4 col-sm-4 col-xs-6">
													<div class="img-upload-preview">
														<img loading="lazy"  src="{{ asset('public/'.$product->thumbnail_img) }}" alt="" class="img-responsive">
														<input type="hidden" name="previous_thumbnail_img" value="{{ $product->thumbnail_img }}">
														<button type="button" class="btn btn-danger close-btn remove-files"><i class="fa fa-times"></i></button>
													</div>
												</div>
											@endif
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">{{__('Featured')}} <small>(290x300)</small></label>
									<div class="col-lg-7">
										<div id="featured_img">
											@if ($product->featured_img != null)
												<div class="col-md-4 col-sm-4 col-xs-6">
													<div class="img-upload-preview">
														<img loading="lazy"  src="{{ asset('public/'.$product->featured_img) }}" alt="" class="img-responsive">
														<input type="hidden" name="previous_featured_img" value="{{ $product->featured_img }}">
														<button type="button" class="btn btn-danger close-btn remove-files"><i class="fa fa-times"></i></button>
													</div>
												</div>
											@endif
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">{{__('Flash Deal')}} <small>(290x300)</small></label>
									<div class="col-lg-7">
										<div id="flash_deal_img">
											@if ($product->flash_deal_img != null)
												<div class="col-md-4 col-sm-4 col-xs-6">
													<div class="img-upload-preview">
														<img loading="lazy"  src="{{ asset('public/'.$product->flash_deal_img) }}" alt="" class="img-responsive">
														<input type="hidden" name="previous_flash_deal_img" value="{{ $product->flash_deal_img }}">
														<button type="button" class="btn btn-danger close-btn remove-files"><i class="fa fa-times"></i></button>
													</div>
												</div>
											@endif
										</div>
									</div>
								</div>
							</div>
							<div id="demo-stk-lft-tab-3" class="tab-pane fade">
								<div class="form-group">
									<label class="col-lg-2 control-label">{{__('Video Provider')}}</label>
									<div class="col-lg-7">
										<select class="form-control demo-select2-placeholder" name="video_provider" id="video_provider">
											<option value="youtube" <?php if($product->video_provider == 'youtube') echo "selected";?> >{{__('Youtube')}}</option>
											<option value="dailymotion" <?php if($product->video_provider == 'dailymotion') echo "selected";?> >{{__('Dailymotion')}}</option>
											<option value="vimeo" <?php if($product->video_provider == 'vimeo') echo "selected";?> >{{__('Vimeo')}}</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">{{__('Video Link')}}</label>
									<div class="col-lg-7">
										<input type="text" class="form-control" name="video_link" value="{{ $product->video_link }}" placeholder="Video Link">
									</div>
								</div>
							</div>
							<div id="demo-stk-lft-tab-4" class="tab-pane fade">
								<div class="form-group">
									<label class="col-lg-2 control-label">{{__('Meta Title')}}</label>
									<div class="col-lg-7">
										<input type="text" class="form-control" name="meta_title" value="{{ $product->meta_title }}" placeholder="{{__('Meta Title')}}">
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">{{__('Description')}}</label>
									<div class="col-lg-7">
										<textarea name="meta_description" rows="8" class="form-control">{{ $product->meta_description }}</textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">{{ __('Meta Image') }}</label>
									<div class="col-lg-7">
										<div id="meta_photo">
											@if ($product->meta_img != null)
												<div class="col-md-4 col-sm-4 col-xs-6">
													<div class="img-upload-preview">
														<img loading="lazy"  src="{{ asset('public/'.$product->meta_img) }}" alt="" class="img-responsive">
														<input type="hidden" name="previous_meta_img" value="{{ $product->meta_img }}">
														<button type="button" class="btn btn-danger close-btn remove-files"><i class="fa fa-times"></i></button>
													</div>
												</div>
											@endif
										</div>
									</div>
								</div>
							</div>
{{--							<div id="demo-stk-lft-tab-5" class="tab-pane fade">--}}
{{--								<div class="form-group">--}}
{{--									@php @$array = json_decode($product->colors) @endphp--}}
{{--									<label class="col-lg-2 control-label">{{__('Color One')}}</label>--}}
{{--									<div class="col-lg-7">--}}
{{--										<div class="input-group">--}}
{{--                                <span class="input-group-addon ">--}}
{{--                                    <input type='text' class="form-control colorPicker" value=""/>--}}
{{--                                </span>--}}
{{--											<input type="text" class="form-control colorCode" name="color[]" value="{{@$array[0] }}" />--}}
{{--										</div>--}}
{{--									</div>--}}
{{--								</div>--}}

{{--								<div class="form-group">--}}
{{--									<label class="col-lg-2 control-label">{{__('Color Two')}}</label>--}}
{{--									<div class="col-lg-7">--}}
{{--										<div class="input-group">--}}
{{--                                <span class="input-group-addon">--}}
{{--                                    <input type='text' class="form-control colorPicker" />--}}
{{--                                </span>--}}
{{--											<input type="text" class="form-control colorCode" name="color[]" value="{{$array[1] }}"/>--}}
{{--										</div>--}}
{{--									</div>--}}
{{--								</div>--}}


{{--								<div class="form-group">--}}
{{--									<label class="col-lg-2 control-label">{{__('Base Notes')}}</label>--}}
{{--									<div class="col-lg-7">--}}
{{--										<select class="form-control base-select" multiple="multiple" name="baseNotes[]">--}}

{{--											@foreach($base as $tag)--}}
{{--												<option @foreach($product->baseNotes as $questionTag)--}}
{{--														{{$questionTag->id == $tag->id ? 'selected': ''}}--}}
{{--														@endforeach--}}
{{--														value="{{ $tag->id }}">{{$tag->name}}</option>--}}

{{--											@endforeach--}}
{{--										</select>--}}
{{--									</div>--}}
{{--								</div>--}}
{{--								<div class="form-group">--}}
{{--									<label class="col-lg-2 control-label">{{__('Middle Notes')}}</label>--}}
{{--									<div class="col-lg-7">--}}
{{--										<select class="form-control mid-select" multiple="multiple" name="midNotes[]">--}}
{{--											@foreach($mid as $tag)--}}
{{--												<option @foreach($product->midNotes as $questionTag)--}}
{{--														{{$questionTag->id == $tag->id ? 'selected': ''}}--}}
{{--														@endforeach--}}
{{--														value="{{ $tag->id }}">{{$tag->name}}</option>--}}

{{--											@endforeach--}}
{{--										</select>--}}
{{--									</div>--}}
{{--								</div>--}}
{{--								<div class="form-group">--}}
{{--									<label class="col-lg-2 control-label">{{__('Top Notes')}}</label>--}}
{{--									<div class="col-lg-7">--}}
{{--										<select class="form-control top-select" multiple="multiple" name="topNotes[]">--}}
{{--											@foreach($top as $tag)--}}
{{--												<option @foreach($product->topNotes as $questionTag)--}}
{{--														{{$questionTag->id == $tag->id ? 'selected': ''}}--}}
{{--														@endforeach--}}
{{--														value="{{ $tag->id }}">{{$tag->name}}</option>--}}

{{--											@endforeach--}}
{{--										</select>--}}
{{--									</div>--}}
{{--								</div>--}}


{{--								<div class="form-group">--}}
{{--									<label class="col-lg-2 control-label">{{__('Fragrance Family')}}</label>--}}
{{--									<div class="col-lg-7">--}}
{{--										<input type="text" class="form-control" name="frag_family" placeholder="{{__('Fragrance Family')}}" value="{{$product->frag_family}}">--}}
{{--									</div>--}}
{{--								</div>--}}
{{--								<div class="form-group">--}}
{{--									<label class="col-lg-2 control-label">{{__('Fragrance Type')}}</label>--}}
{{--									<div class="col-lg-7">--}}
{{--										<input type="text" class="form-control" name="frag_type" placeholder="{{__('Fragrance Type')}}" value="{{$product->frag_type}}">--}}
{{--									</div>--}}
{{--								</div>--}}
{{--								<div class="form-group">--}}
{{--									<label class="col-lg-2 control-label">{{__('Alcohol')}}</label>--}}
{{--									<div class="col-lg-7">--}}
{{--										<input type="text" class="form-control" name="alcohol" placeholder="{{__('Alcohol')}}" value="{{$product->alcohol}}">--}}
{{--									</div>--}}
{{--								</div>--}}
{{--								<div class="form-group">--}}
{{--									<label class="col-lg-2 control-label">{{__('Country of Origin')}}</label>--}}
{{--									<div class="col-lg-7">--}}
{{--										<input type="text" class="form-control" name="country" placeholder="{{__('Country of Origin')}}" value="{{$product->country}}">--}}
{{--									</div>--}}
{{--								</div>--}}
{{--								<div class="form-group">--}}
{{--									<label class="col-lg-2 control-label">{{__('Product Rebate ')}}</label>--}}
{{--									<div class="col-lg-7">--}}
{{--										<input type="text" class="form-control" name="rebate" placeholder="{{__('Country of Origin')}}" value="{{$product->rebate}} ">--}}
{{--									</div>--}}
{{--								</div>--}}

{{--								<div class="customer_choice_options" id="customer_choice_options">--}}

{{--								</div>--}}

{{--								--}}{{-- <div class="customer_choice_options" id="customer_choice_options">--}}

{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <div class="col-lg-2">--}}
{{--                                        <button type="button" class="btn btn-info" onclick="add_more_customer_choice_option()">{{ __('Add more customer choice option') }}</button>--}}
{{--                                    </div>--}}
{{--                                </div> --}}
{{--							</div>--}}
							<div id="demo-stk-lft-tab-6" class="tab-pane fade">
								<div class="form-group">
									<label class="col-lg-2 control-label">{{__('Unit price')}}</label>
									<div class="col-lg-7">
										<input type="text" placeholder="{{__('Unit price')}}" name="unit_price" class="form-control" value="{{$product->unit_price}}" required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">{{__('Purchase price')}}</label>
									<div class="col-lg-7">
										<input type="number" min="0" step="0.01" placeholder="{{__('Purchase price')}}" name="purchase_price" class="form-control" value="{{$product->purchase_price}}" required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">{{__('Tax')}}</label>
									<div class="col-lg-7">
										<input type="number" min="0" step="0.01" placeholder="{{__('tax')}}" name="tax" class="form-control" value="{{$product->tax}}" required>
									</div>
									<div class="col-lg-1">
										<select class="demo-select2" name="tax_type" required>
											<option value="amount" <?php if($product->tax_type == 'amount') echo "selected";?> >$</option>
											<option value="percent" <?php if($product->tax_type == 'percent') echo "selected";?> >%</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">{{__('Discount')}}</label>
									<div class="col-lg-7">
										<input type="number" min="0" step="0.01" placeholder="{{__('Discount')}}" name="discount" class="form-control" value="{{ $product->discount }}" required>
									</div>
									<div class="col-lg-1">
										<select class="demo-select2" name="discount_type" required>
											<option value="amount" <?php if($product->discount_type == 'amount') echo "selected";?> >$</option>
											<option value="percent" <?php if($product->discount_type == 'percent') echo "selected";?> >%</option>
										</select>
									</div>
								</div>
								<div class="form-group" id="quantity">
									<label class="col-lg-2 control-label">{{__('Quantity')}}</label>
									<div class="col-lg-7">
										<input type="number" min="0" value="{{ $product->current_stock }}" step="1" placeholder="{{__('Quantity')}}" name="current_stock" class="form-control" required>
									</div>
								</div>
								<br>
								<div class="sku_combination" id="sku_combination">

								</div>
							</div>
							<div id="demo-stk-lft-tab-7" class="tab-pane fade">
								<div class="form-group">
									<label class="col-lg-2 control-label">{{__('Description')}}</label>
									<div class="col-lg-9">
										<textarea class="editor" name="description">{{$product->description}}</textarea>
									</div>
								</div>
							</div>
							{{-- <div id="demo-stk-lft-tab-8" class="tab-pane fade">

                            </div> --}}
							<div id="demo-stk-lft-tab-9" class="tab-pane fade">
								<div class="row bord-btm">
									<div class="col-md-2">
										<div class="panel-heading">
											<h3 class="panel-title">{{__('Free Shipping')}}</h3>
										</div>
									</div>
									<div class="col-md-10">
										<div class="form-group">
											<label class="col-lg-2 control-label">{{__('Status')}}</label>
											<div class="col-lg-7">
												<label class="switch" style="margin-top:5px;">
													<input type="radio" name="shipping_type" value="free" @if($product->shipping_type == 'free') checked @endif>
													<span class="slider round"></span>
												</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row bord-btm">
									<div class="col-md-2">
										<div class="panel-heading">
											<h3 class="panel-title">{{__('Local Pickup')}}</h3>
										</div>
									</div>
									<div class="col-md-10">
										<div class="form-group">
											<label class="col-lg-2 control-label">{{__('Status')}}</label>
											<div class="col-lg-7">
												<label class="switch" style="margin-top:5px;">
													<input type="radio" name="shipping_type" value="local_pickup" @if($product->shipping_type == 'local_pickup') checked @endif>
													<span class="slider round"></span>
												</label>
											</div>
										</div>
										<div class="form-group">
											<label class="col-lg-2 control-label">{{__('Shipping cost')}}</label>
											<div class="col-lg-7">
												<input type="number" min="0" step="0.01" placeholder="{{__('Shipping cost')}}" name="local_pickup_shipping_cost" class="form-control" value="{{ $product->shipping_cost }}" required>
											</div>
										</div>
									</div>
								</div>

								<div class="row bord-btm">
									<div class="col-md-2">
										<div class="panel-heading">
											<h3 class="panel-title">{{__('Flat Rate')}}</h3>
										</div>
									</div>
									<div class="col-md-10">
										<div class="form-group">
											<label class="col-lg-2 control-label">{{__('Status')}}</label>
											<div class="col-lg-7">
												<label class="switch" style="margin-top:5px;">
													<input type="radio" name="shipping_type" value="flat_rate" @if($product->shipping_type == 'flat_rate') checked @endif>
													<span class="slider round"></span>
												</label>
											</div>
										</div>
										<div class="form-group">
											<label class="col-lg-2 control-label">{{__('Shipping cost')}}</label>
											<div class="col-lg-7">
												<input type="number" min="0" step="0.01" placeholder="{{__('Shipping cost')}}" name="flat_shipping_cost" class="form-control" value="{{ $product->shipping_cost }}" required>
											</div>
										</div>
									</div>
								</div>

							</div>
							<div id="demo-stk-lft-tab-11" class="tab-pane fade">
								<div class="form-group">
									<label class="col-lg-2 control-label">{{__('Product Length')}}</label>
									<div class="col-lg-7">
										<input type="text" class="form-control" placeholder="{{__('Product Length')}}" name="poduct_length" value="{{$product->poduct_length }}">
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">{{__('Product Height')}}</label>
									<div class="col-lg-7">
										<input type="text" class="form-control" placeholder="{{__('Product Height')}}" name="product_height" value="{{$product->product_height }}">
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">{{__('Product Width')}}</label>
									<div class="col-lg-7">
										<input type="text" class="form-control" placeholder="{{__('Product width ')}}" name="product_width" value="{{$product->product_width }}">
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">{{__('Product Marketing')}}</label>
									<div class="col-lg-7">
										<input type="text" class="form-control" placeholder="{{__('Product Marketing')}}" name="marketting" value="{{$product->marketting }}">
									</div>
								</div>
							</div>
							<div id="demo-stk-lft-tab-10" class="tab-pane fade">
								<div class="form-group">
									<label class="col-lg-2 control-label">{{__('PDF Specification')}}</label>
									<div class="col-lg-7">
										<input type="file" class="form-control" placeholder="{{__('PDF')}}" name="pdf" accept="application/pdf">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-footer text-right">
					<button type="submit" name="button" class="btn btn-purple">{{ __('Save') }}</button>
				</div>
			</div>
		</form>
	</div>
	<div id="searcResult" type="text">

		@endsection

		@section('script')

			<script type="text/javascript">

				// var i = $('input[name="choice_no[]"').last().val();
				// if(isNaN(i)){
				// 	i =0;
				// }

				function add_more_customer_choice_option(i, name){
					$('#customer_choice_options').append('<div class="form-group"><div class="col-lg-2"><input type="hidden" name="choice_no[]" value="'+i+'"><input type="text" class="form-control" name="choice[]" value="'+name+'" readonly></div><div class="col-lg-7"><input type="text" class="form-control" name="choice_options_'+i+'[]" placeholder="Enter choice values" data-role="tagsinput" onchange="update_sku()"></div></div>');
					$("input[data-role=tagsinput], select[multiple][data-role=tagsinput]").tagsinput();
				}

				$('input[name="colors_active"]').on('change', function() {
					if(!$('input[name="colors_active"]').is(':checked')){
						$('#colors').prop('disabled', true);
					}
					else{
						$('#colors').prop('disabled', false);
					}
					update_sku();
				});

				$('#colors').on('change', function() {
					update_sku();
				});

				// $('input[name="unit_price"]').on('keyup', function() {
				//     update_sku();
				// });

				function delete_row(em){
					$(em).closest('.form-group').remove();
					update_sku();
				}

				function update_sku(){
					$.ajax({
						type:"POST",
						url:'{{ route('products.sku_combination_edit') }}',
						data:$('#choice_form').serialize(),
						success: function(data){
							$('#sku_combination').html(data);
							if (data.length > 1) {
								$('#quantity').hide();
							}
							else {
								$('#quantity').show();
							}
						}
					});
				}

				function get_subcategories_by_category(){
					var category_id = $('#category_id').val();
					$.post('{{ route('subcategories.get_subcategories_by_category') }}',{_token:'{{ csrf_token() }}', category_id:category_id}, function(data){
						$('#subcategory_id').html(null);
						for (var i = 0; i < data.length; i++) {
							$('#subcategory_id').append($('<option>', {
								value: data[i].id,
								text: data[i].name
							}));
						}
						$("#subcategory_id > option").each(function() {
							if(this.value == '{{$product->subcategory_id}}'){
								$("#subcategory_id").val(this.value).change();
							}
						});

						$('.demo-select2').select2();

						get_subsubcategories_by_subcategory();
					});
				}

				function get_subsubcategories_by_subcategory(){
					var subcategory_id = $('#subcategory_id').val();
					$.post('{{ route('subsubcategories.get_subsubcategories_by_subcategory') }}',{_token:'{{ csrf_token() }}', subcategory_id:subcategory_id}, function(data){
						$('#subsubcategory_id').html(null);
						for (var i = 0; i < data.length; i++) {
							$('#subsubcategory_id').append($('<option>', {
								value: data[i].id,
								text: data[i].name
							}));
						}
						$("#subsubcategory_id > option").each(function() {
							if(this.value == '{{$product->subsubcategory_id}}'){
								$("#subsubcategory_id").val(this.value).change();
							}
						});

						$('.demo-select2').select2();

						//get_brands_by_subsubcategory();
						//get_attributes_by_subsubcategory();
					});
				}

				// function get_brands_by_subsubcategory(){
				// 	var subsubcategory_id = $('#subsubcategory_id').val();
				// 	$.post('{{ route('subsubcategories.get_brands_by_subsubcategory') }}',{_token:'{{ csrf_token() }}', subsubcategory_id:subsubcategory_id}, function(data){
				// 	    $('#brand_id').html(null);
				// 	    for (var i = 0; i < data.length; i++) {
				// 	        $('#brand_id').append($('<option>', {
				// 	            value: data[i].id,
				// 	            text: data[i].name
				// 	        }));
				// 	    }
				// 	    $("#brand_id > option").each(function() {
				// 	        if(this.value == '{{$product->brand_id}}'){
				// 	            $("#brand_id").val(this.value).change();
				// 	        }
				// 	    });
				//
				// 	    $('.demo-select2').select2();
				//
				// 	});
				// }

				function get_attributes_by_subsubcategory(){
					var subsubcategory_id = $('#subsubcategory_id').val();
					$.post('{{ route('subsubcategories.get_attributes_by_subsubcategory') }}',{_token:'{{ csrf_token() }}', subsubcategory_id:subsubcategory_id}, function(data){
						$('#choice_attributes').html(null);
						for (var i = 0; i < data.length; i++) {
							$('#choice_attributes').append($('<option>', {
								value: data[i].id,
								text: data[i].name
							}));
						}
						$("#choice_attributes > option").each(function() {
							var str = @php echo $product->attributes @endphp;
							$("#choice_attributes").val(str).change();
						});

						$('.demo-select2').select2();
					});
				}

				$(document).ready(function(){
					$('#container').removeClass('mainnav-lg').addClass('mainnav-sm');
					get_subcategories_by_category();
					$("#photos").spartanMultiImagePicker({
						fieldName:        'photos[]',
						maxCount:         10,
						rowHeight:        '200px',
						groupClassName:   'col-md-4 col-sm-4 col-xs-6',
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
					$("#thumbnail_img").spartanMultiImagePicker({
						fieldName:        'thumbnail_img',
						maxCount:         1,
						rowHeight:        '200px',
						groupClassName:   'col-md-4 col-sm-4 col-xs-6',
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
					$("#featured_img").spartanMultiImagePicker({
						fieldName:        'featured_img',
						maxCount:         1,
						rowHeight:        '200px',
						groupClassName:   'col-md-4 col-sm-4 col-xs-6',
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
					$("#flash_deal_img").spartanMultiImagePicker({
						fieldName:        'flash_deal_img',
						maxCount:         1,
						rowHeight:        '200px',
						groupClassName:   'col-md-4 col-sm-4 col-xs-6',
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
					$("#meta_photo").spartanMultiImagePicker({
						fieldName:        'meta_img',
						maxCount:         1,
						rowHeight:        '200px',
						groupClassName:   'col-md-4 col-sm-4 col-xs-6',
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

					update_sku();

					$('.remove-files').on('click', function(){
						$(this).parents(".col-md-4").remove();
					});
				});

				$('#category_id').on('change', function() {
					get_subcategories_by_category();
				});

				$('#subcategory_id').on('change', function() {
					get_subsubcategories_by_subcategory();
				});

				$('#subsubcategory_id').on('change', function() {
					//get_brands_by_subsubcategory();
					//get_attributes_by_subsubcategory();
				});

				$('#choice_attributes').on('change', function() {
					//$('#customer_choice_options').html(null);
					$.each($("#choice_attributes option:selected"), function(j, attribute){
						flag = false;
						$('input[name="choice_no[]"]').each(function(i, choice_no) {
							if($(attribute).val() == $(choice_no).val()){
								flag = true;
							}
						});
						if(!flag){
							add_more_customer_choice_option($(attribute).val(), $(attribute).text());
						}
					});

					var str = @php echo $product->attributes @endphp;

					$.each(str, function(index, value){
						flag = false;
						$.each($("#choice_attributes option:selected"), function(j, attribute){
							if(value == $(attribute).val()){
								flag = true;
							}
						});
						if(!flag){
							//console.log();
							$('input[name="choice_no[]"][value="'+value+'"]').parent().parent().remove();
						}
					});

					update_sku();
				});

			</script>
			<script>
				$('.colorPicker').spectrum({
					color: $(this).data('color'),
					change: function (color) {
						$(this).parent().siblings('.colorCode').val(color.toHexString().replace(/^#?/, '#'));
					}
				});

				$('.colorCode').on('input', function() {
					var clr = $(this).val();
					$(this).parents('.input-group').find('.colorPicker').spectrum({
						color: clr,
					});
				});

				$(document).ready(function() {
					$('.base-select').select2();
					$('.top-select').select2();
					$('.mid-select').select2();
				});

			</script>

{{--				<script>--}}
{{--					var canvas;--}}
{{--					var ctx;--}}
{{--					var images = [--}}
{{--						'http://localhost/projects/myfrag/public/uploads/products/photos/1.png',--}}
{{--						'http://localhost/projects/myfrag/public/uploads/products/photos/2.png',--}}
{{--						'http://localhost/projects/myfrag/public/uploads/products/photos/3.png',--}}
{{--					];--}}
{{--					var iActiveImage = 0;--}}
{{--					$(function(){--}}
{{--						// drawing active image--}}
{{--						var image = new Image();--}}
{{--						image.onload = function () {--}}
{{--							ctx.drawImage(image, 0, 0, image.width, image.height); // draw the image on the canvas--}}
{{--						}--}}
{{--						image.src = images[iActiveImage];--}}
{{--						// creating canvas object--}}
{{--						canvas = document.getElementById('panel');--}}
{{--						ctx = canvas.getContext('2d');--}}
{{--						$('#panel').mousemove(function(e) { // mouse move handler--}}
{{--							var canvasOffset = $(canvas).offset();--}}
{{--							var canvasX = Math.floor(e.pageX - canvasOffset.left);--}}
{{--							var canvasY = Math.floor(e.pageY - canvasOffset.top);--}}
{{--							var imageData = ctx.getImageData(canvasX, canvasY, 1, 1);--}}
{{--							var pixel = imageData.data;--}}
{{--							var pixelColor = "rgba("+pixel[0]+", "+pixel[1]+", "+pixel[2]+", "+pixel[3]+")";--}}
{{--							$('#preview').css('backgroundColor', pixelColor);--}}
{{--						});--}}
{{--						$('#panel').click(function(e) { // mouse click handler--}}
{{--							var canvasOffset = $(canvas).offset();--}}
{{--							var canvasX = Math.floor(e.pageX - canvasOffset.left);--}}
{{--							var canvasY = Math.floor(e.pageY - canvasOffset.top);--}}
{{--							var imageData = ctx.getImageData(canvasX, canvasY, 1, 1);--}}
{{--							var pixel = imageData.data;--}}
{{--							$('#rVal').val(pixel[0]);--}}
{{--							$('#gVal').val(pixel[1]);--}}
{{--							$('#bVal').val(pixel[2]);--}}
{{--							$('#rgbVal').val(pixel[0]+','+pixel[1]+','+pixel[2]);--}}
{{--							$('#rgbaVal').val(pixel[0]+','+pixel[1]+','+pixel[2]+','+pixel[3]);--}}
{{--							var dColor = pixel[2] + 256 * pixel[1] + 65536 * pixel[0];--}}
{{--							$('#hexVal').val( '#' + dColor.toString(16) );--}}
{{--						});--}}
{{--						$('#swImage').click(function(e) { // switching images--}}
{{--							iActiveImage++;--}}
{{--							if (iActiveImage >= 10) iActiveImage = 0;--}}
{{--							image.src = images[iActiveImage];--}}
{{--						});--}}
{{--					});--}}
{{--				</script>--}}

			<script>

				$(document).ready(function(){
					var allImages = new Array();
					var all = new Array()
					 all = $.ajax({
						url: '{{ route('allImages',$product->id) }}',
						type: 'get',
						data: {},
						async: false,
						global:false,
						success: function (data) {
							return  data.allImage

						}
					}).responseText;
					//images = all;


				var images = [
					'http://localhost/projects/myfrag/public/uploads/products/photos/1.png',
					'http://localhost/projects/myfrag/public/uploads/products/photos/2.png',
					'http://localhost/projects/myfrag/public/uploads/products/photos/3.png',
					];
					var canvas;
					var ctx;

					var iActiveImage = 0;
					$(function(){
						// drawing active image
						var image = new Image();
						image.onload = function () {
							ctx.drawImage(image, 0, 0, image.width, image.height); // draw the image on the canvas
						}
						image.src = images[iActiveImage];
						console.log(image.src);
						// creating canvas object
						canvas = document.getElementById('panel');

						ctx = canvas.getContext('2d');
						$('#panel').mousemove(function(e) { // mouse move handler
							var canvasOffset = $(canvas).offset();
							var canvasX = Math.floor(e.pageX - canvasOffset.left);
							var canvasY = Math.floor(e.pageY - canvasOffset.top);
							var imageData = ctx.getImageData(canvasX, canvasY, 1, 1);
							var pixel = imageData.data;
							var pixelColor = "rgba("+pixel[0]+", "+pixel[1]+", "+pixel[2]+", "+pixel[3]+")";
							$('#preview').css('backgroundColor', pixelColor);
						});
						$('#panel').click(function(e) { // mouse click handler
							var canvasOffset = $(canvas).offset();
							var canvasX = Math.floor(e.pageX - canvasOffset.left);
							var canvasY = Math.floor(e.pageY - canvasOffset.top);
							var imageData = ctx.getImageData(canvasX, canvasY, 1, 1);
							var pixel = imageData.data;
							$('#rVal').val(pixel[0]);
							$('#gVal').val(pixel[1]);
							$('#bVal').val(pixel[2]);
							$('#rgbVal').val(pixel[0]+','+pixel[1]+','+pixel[2]);
							$('#rgbaVal').val(pixel[0]+','+pixel[1]+','+pixel[2]+','+pixel[3]);
							var dColor = pixel[2] + 256 * pixel[1] + 65536 * pixel[0];
							$('#hexVal').val( '#' + dColor.toString(16) );
						});
						$('#swImage').click(function(e) { // switching images
							iActiveImage++;
							if (iActiveImage >= 10) iActiveImage = 0;
							image.src = images[iActiveImage];
							console.log(image.src)
						});
					});

				});
			</script>

			<script>
				$(".pickColor").click(function () {
					// var color = new Array()
					//  color = $('#hexVal').val();
					var color = $("input[name='hexVal[]']")
							.map(function(){return $(this).val();}).get();

					$.ajax({
						url: '{{ route('colorSubmit',$product->id) }}' ,
						type: 'get',
						data: {'color': color},
						success: function (data) {
							$('#hexVal').val('');
						}
					});

				});
			</script>

@endsection
