@extends('layouts.app')
@push('css')
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
	</style>
	<link rel="stylesheet" href="{{ asset('css/spectrum.css') }}">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
	@endpush
@section('content')

<div class="row">
	<form class="form form-horizontal mar-top" action="{{route('products.store')}}" method="POST" enctype="multipart/form-data" id="choice_form">
		@csrf
		<input type="hidden" name="added_by" value="admin">
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
									<input type="text" class="form-control" name="name" placeholder="{{__('Product Name')}}" onchange="update_sku()" required>
								</div>
							</div>
							<div class="form-group" id="category">
								<label class="col-lg-2 control-label">{{__('Category')}}</label>
								<div class="col-lg-7">
									<select class="form-control demo-select2-placeholder" name="category_id" id="category_id" required>
										@foreach($categories as $category)
											<option value="{{$category->id}}">{{__($category->name)}}</option>
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
									<select class="form-control demo-select2-placeholder" name="subsubcategory_id" id="subsubcategory_id">

									</select>
								</div>
							</div>
							<div class="form-group" id="brand">
								<label class="col-lg-2 control-label">{{__('Brand')}}</label>
								<div class="col-lg-7">
									<select class="form-control demo-select2-placeholder" name="brand_id" id="brand_id">
										@foreach (\App\Brand::all() as $brand)
											<option value="{{ $brand->id }}">{{ $brand->name }}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="form-group" id="perfumers">
								<label class="col-lg-2 control-label">{{__('Perfumer')}}</label>
								<div class="col-lg-7">
									<select class="form-control demo-select2-placeholder" name="perfumer_id" id="perfumer_id ">
										@foreach (\App\Perfume::all() as $perfume)
											<option value="{{ $perfume->id }}">{{ $perfume->name }}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Unit')}}</label>
								<div class="col-lg-7">
									<input type="text" class="form-control" name="unit" placeholder="Unit (e.g. KG, Pc etc)" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Barcode')}}</label>
								<div class="col-lg-7">
									<input type="text" class="form-control" name="barcode" placeholder="Barcode" >
								</div>
							</div>

                            <div class="form-group">
                                <label class="col-lg-2 control-label" for="start_date">{{__('Launch Date')}}</label>
                                <div class="col-lg-7">
                                    <div id="demo-dp-range">
                                        <div class="input-daterange input-group" id="datepicker">
                                            <input type="text" class="form-control" name="launch_date" placeholder="Launch Date">
                                             </div>
                                    </div>
                                </div>
                            </div>
							<div class="form-group">
								<label class="col-lg-3 control-label">{{__('Gender')}}</label>
								<div class="col-lg-4">
									<select class="form-control" name="gender">
										<option value="Male">Male</option>
										<option value="Female">Female</option>
										<option value="Unisex">Unisex</option>
									</select>
								</div>
							</div>
							<div class="form-group">
							<label class="col-lg-3 control-label">{{__('Sample')}}</label>
							<div class="col-lg-4">
								<select class="form-control" name="sample">
									<option value="0">No</option>
									<option value="1">Yes</option>
								</select>
							</div>
						</div>


							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Tags')}}</label>
								<div class="col-lg-7">
									<input type="text" class="form-control" name="tags[]" placeholder="Type to add a tag" data-role="tagsinput">
								</div>
							</div>

							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Accessories')}}</label>
								<div class="col-lg-7">
									<input type="radio" name="is_accessories" value="1"> Yes
									<input type="radio" name="is_accessories" value="0" checked> No
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
											<input type="checkbox" name="refundable" checked>
				                            <span class="slider round"></span></label>
										</label>
									</div>
								</div>
							@endif
				        </div>
				        <div id="demo-stk-lft-tab-2" class="tab-pane fade">
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Main Images')}} </label>
								<div class="col-lg-7">
									<div id="photos">

									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Thumbnail Image')}} <small>(290x300)</small></label>
								<div class="col-lg-7">
									<div id="thumbnail_img">

									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Featured')}} <small>(290x300)</small></label>
								<div class="col-lg-7">
									<div id="featured_img">

									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Flash Deal')}} <small>(290x300)</small></label>
								<div class="col-lg-7">
									<div id="flash_deal_img">

									</div>
								</div>
							</div>
				        </div>
				        <div id="demo-stk-lft-tab-3" class="tab-pane fade">
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Video Provider')}}</label>
								<div class="col-lg-7">
									<select class="form-control demo-select2-placeholder" name="video_provider" id="video_provider">
										<option value="youtube">{{__('Youtube')}}</option>
										<option value="dailymotion">{{__('Dailymotion')}}</option>
										<option value="vimeo">{{__('Vimeo')}}</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Video Link')}}</label>
								<div class="col-lg-7">
									<input type="text" class="form-control" name="video_link" placeholder="{{__('Video Link')}}">
								</div>
							</div>
				        </div>
						<div id="demo-stk-lft-tab-4" class="tab-pane fade">
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Meta Title')}}</label>
								<div class="col-lg-7">
									<input type="text" class="form-control" name="meta_title" placeholder="{{__('Meta Title')}}">
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Description')}}</label>
								<div class="col-lg-7">
									<textarea name="meta_description" rows="8" class="form-control"></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">{{ __('Meta Image') }}</label>
								<div class="col-lg-7">
									<div id="meta_photo">

									</div>
								</div>
							</div>
				        </div>

						<div id="demo-stk-lft-tab-5" class="tab-pane fade">
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Color One')}}</label>
								<div class="col-lg-7">
									<div class="input-group">
                                <span class="input-group-addon ">
                                    <input type='text' class="form-control colorPicker" value=""/>
                                </span>
										<input type="text" class="form-control colorCode" name="color[]" value="" />
									</div>
								</div>
							</div>

							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Color Two')}}</label>
								<div class="col-lg-7">
									<div class="input-group">
                                <span class="input-group-addon">
                                    <input type='text' class="form-control colorPicker" />
                                </span>
										<input type="text" class="form-control colorCode" name="color[]" />
									</div>
								</div>
							</div>


							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Base Notes')}}</label>
								<div class="col-lg-7">
									<select class="form-control base-select" multiple="multiple" name="baseNotes[]">
										@foreach($base as $b)
											<option value="{{ $b->id }}">{{$b->name}}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Middle Notes')}}</label>
								<div class="col-lg-7">
									<select class="form-control mid-select" multiple="multiple" name="midNotes[]">
										@foreach($mid as $b)
											<option value="{{ $b->id }}">{{$b->name}}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Top Notes')}}</label>
								<div class="col-lg-7">
									<select class="form-control top-select" multiple="multiple" name="topNotes[]">
										@foreach($top as $b)
											<option value="{{ $b->id }}">{{$b->name}}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Fragrance Family')}}</label>
								<div class="col-lg-7">
									<input type="text" class="form-control" name="frag_family" placeholder="{{__('Fragrance Family')}}" >
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Fragrance Type')}}</label>
								<div class="col-lg-7">
									<input type="text" class="form-control" name="frag_type" placeholder="{{__('Fragrance Type')}}">
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Alcohol')}}</label>
								<div class="col-lg-7">
									<input type="text" class="form-control" name="alcohol" placeholder="{{__('Alcohol')}}">
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Country of Origin')}}</label>
								<div class="col-lg-7">
									<input type="text" class="form-control" name="country" placeholder="{{__('Country of Origin')}}">
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Product Rebate ')}}</label>
								<div class="col-lg-7">
									<input type="text" class="form-control" name="rebate" placeholder="{{__('Country of Origin')}}">
								</div>
							</div>

							<div class="customer_choice_options" id="customer_choice_options">

							</div>

							{{-- <div class="customer_choice_options" id="customer_choice_options">

							</div>
							<div class="form-group">
								<div class="col-lg-2">
									<button type="button" class="btn btn-info" onclick="add_more_customer_choice_option()">{{ __('Add more customer choice option') }}</button>
								</div>
							</div> --}}
				        </div>

						<div id="demo-stk-lft-tab-6" class="tab-pane fade">
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Product Selling Price USD')}}</label>
								<div class="col-lg-7">
									<input type="number" min="0" value="0" step="0.01" placeholder="{{__('Product Selling Price USD')}}" name="unit_price" class="form-control" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Product Listing Price USD')}}</label>
								<div class="col-lg-7">
									<input type="number" min="0" value="0" step="0.01" placeholder="{{__('Product Listing Price ')}}" name="purchase_price" class="form-control" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Product Rebate')}}</label>
								<div class="col-lg-7">
									<input type="number" min="0" value="0" step="0.01" placeholder="{{__('Product Rebate')}}" name="purchase_price" class="form-control" required>
								</div>
								<div class="col-lg-1">
									<select class="demo-select2" name="type">
										<option value="amount">$</option>
										<option value="percent">%</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Product Market Price USD')}}</label>
								<div class="col-lg-7">
									<input type="number" min="0" value="0" step="0.01" placeholder="{{__('Product Market Price USD')}}" name="purchase_price" class="form-control" required>
								</div>
							</div>

							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Subscription')}}</label>
								<div class="col-lg-7">
									<select class="form-control" name="subscription">
										<option value="1"> Yes</option>
										<option value="0"> No</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Pack Type')}}</label>
								<div class="col-lg-7">
									<select class="form-control" name="subscription">
										<option value="1">Aerosol</option>
										<option value="1">Bag</option>
										<option value="1">Bag - Paper</option>
										<option value="1">Bag - Plastic</option>
										<option value="1">Basket</option>
										<option value="1">Blister Pack</option>
										<option value="1">Bottle</option>
										<option value="1">Bowl</option>
										<option value="1">Bowl & Overwrap</option>
										<option value="1">Box</option>
										<option value="1">Can</option>
										<option value="1">Carafe</option>
										<option value="1">Card</option>
										<option value="1">Carton</option>
										<option value="1">Casket</option>
										<option value="1">Crate</option>
										<option value="1">Cryovac</option>
										<option value="1">Cylinder</option>
										<option value="1">Dispenser</option>
										<option value="1">Drum</option>
										<option value="1">Film Wrap</option>
										<option value="1">Flask</option>
										<option value="1">Flow Wrap</option>
										<option value="1">Flower Pot</option>
										<option value="1">Foil Tray & Cardboard Lid</option>
										<option value="1">Foil Wrap</option>
										<option value="1">Hanger</option>
										<option value="1">Heat Sealed</option>
										<option value="1">Jar</option>
										<option value="1">Loose</option>
										<option value="1">Modified Atmosphere Pack</option>
										<option value="1">Net</option>
										<option value="1">Not Applicable</option>
										<option value="1">Overwrap</option>
										<option value="1">Pack</option>
										<option value="1">Packet</option>
										<option value="1">Paper</option>
										<option value="1">Paper/Plastic</option>
										<option value="1">Plastic Bottle</option>
										<option value="1">Plastic Pack</option>
										<option value="1">Plastic Wind Up Stick</option>
										<option value="1">Plastic Wrap</option>
										<option value="1">Polyrider</option>
										<option value="1">Pot</option>
										<option value="1">Pouch</option>
										<option value="1">Pre Pack</option>
										<option value="1">Pump</option>
										<option value="1">Punnet</option>
										<option value="1">Re-Closable Packaging</option>
										<option value="1">Sachet</option>
										<option value="1">Set</option>
										<option value="1">Shrink Wrapped</option>
										<option value="1">Sleeve</option>
										<option value="1">Tin</option>
										<option value="1">Tray</option>
										<option value="1">Tray & Heat Sealed</option>
										<option value="1">Tray & Overwrap</option>
										<option value="1">Tub</option>
										<option value="1">Tube</option>
										<option value="1">Vacuum Packed</option>
									</select>
								</div>
							</div>


							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Subscription Price')}}</label>
								<div class="col-lg-7">
									<input type="number" min="0" value="0" step="0.01" placeholder="{{__('Subscription Price')}}" name="subcription_price" class="form-control" >
								</div>
							</div>

							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Discount')}}</label>
								<div class="col-lg-7">
									<input type="number" min="0" value="0" step="0.01" placeholder="{{__('Discount')}}" name="discount" class="form-control" required>
								</div>
								<div class="col-lg-1">
									<select class="demo-select2" name="discount_type">
										<option value="amount">$</option>
										<option value="percent">%</option>
									</select>
								</div>
							</div>
							<div class="form-group" id="quantity">
								<label class="col-lg-2 control-label">{{__('Quantity')}}</label>
								<div class="col-lg-7">
									<input type="number" min="0" value="0" step="1" placeholder="{{__('Quantity')}}" name="current_stock" class="form-control" required>
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
									<textarea class="editor" name="description"></textarea>
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
												<input type="radio" name="shipping_type" value="free" checked>
												<span class="slider round"></span>
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
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
												<input type="radio" name="shipping_type" value="flat_rate" checked>
												<span class="slider round"></span>
											</label>
										</div>
									</div>
									<div class="form-group">
										<label class="col-lg-2 control-label">{{__('Shipping cost')}}</label>
										<div class="col-lg-7">
											<input type="number" min="0" value="0" step="0.01" placeholder="{{__('Shipping cost')}}" name="flat_shipping_cost" class="form-control" required>
										</div>
									</div>
								</div>
							</div>

				        </div>
						<div id="demo-stk-lft-tab-11" class="tab-pane fade">
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Product Length')}}</label>
								<div class="col-lg-7">
									<input type="text" class="form-control" placeholder="{{__('Product Length')}}" name="poduct_length" >
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Product Height')}}</label>
								<div class="col-lg-7">
									<input type="text" class="form-control" placeholder="{{__('Product Height')}}" name="product_height" >
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Product Width')}}</label>
								<div class="col-lg-7">
									<input type="text" class="form-control" placeholder="{{__('Product width ')}}" name="product_width" >
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Product Marketing')}}</label>
								<div class="col-lg-7">
									<input type="text" class="form-control" placeholder="{{__('Product Marketing')}}" name="marketting" >
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
				<button type="submit" name="button" class="btn btn-info">{{ __('Save') }}</button>
			</div>
		</div>
	</form>
</div>


@endsection

@section('script')

<script type="text/javascript">
	function add_more_customer_choice_option(i, name){
		$('#customer_choice_options').append('<div class="form-group"><div class="col-lg-2"><input type="hidden" name="choice_no[]" value="'+i+'"><input type="text" class="form-control" name="choice[]" value="'+name+'" placeholder="Choice Title" readonly></div><div class="col-lg-7"><input type="text" class="form-control" name="choice_options_'+i+'[]" placeholder="Enter choice values" data-role="tagsinput" onchange="update_sku()"></div></div>');

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

	$('input[name="unit_price"]').on('keyup', function() {
	    update_sku();
	});

	$('input[name="name"]').on('keyup', function() {
	    update_sku();
	});

	function delete_row(em){
		$(em).closest('.form-group').remove();
		update_sku();
	}

	function update_sku(){
		$.ajax({
		   type:"POST",
		   url:'{{ route('products.sku_combination') }}',
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
		        $('.demo-select2').select2();
		    }
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
		        $('.demo-select2').select2();
		    }
		    //get_brands_by_subsubcategory();
			//get_attributes_by_subsubcategory();
		});
	}

	function get_brands_by_subsubcategory(){
		var subsubcategory_id = $('#subsubcategory_id').val();
		$.post('{{ route('subsubcategories.get_brands_by_subsubcategory') }}',{_token:'{{ csrf_token() }}', subsubcategory_id:subsubcategory_id}, function(data){
		    $('#brand_id').html(null);
		    for (var i = 0; i < data.length; i++) {
		        $('#brand_id').append($('<option>', {
		            value: data[i].id,
		            text: data[i].name
		        }));
		        $('.demo-select2').select2();
		    }
		});
	}

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
	});

	$('#category_id').on('change', function() {
	    get_subcategories_by_category();
	});

	$('#subcategory_id').on('change', function() {
	    get_subsubcategories_by_subcategory();
	});

	$('#subsubcategory_id').on('change', function() {
	    // get_brands_by_subsubcategory();
		//get_attributes_by_subsubcategory();
	});

	$('#choice_attributes').on('change', function() {
		$('#customer_choice_options').html(null);
		$.each($("#choice_attributes option:selected"), function(){
			//console.log($(this).val());
            add_more_customer_choice_option($(this).val(), $(this).text());
        });
		update_sku();
	});


</script>

<script src="{{ asset('js/tagify.js') }}"></script>
<script src="{{ asset('js/jQuery.tagify.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>


<script type="text/javascript">
	var base_notes  = document.querySelector('input[name=base_notes]');
	new Tagify(base_notes )
	</script>

	<script type="text/javascript">
	var middle_notes   = document.querySelector('input[name=middle_notes]');
	new Tagify(middle_notes  )
	</script>

	<script type="text/javascript">
	var top_notes   = document.querySelector('input[name=top_notes]');
	new Tagify(top_notes)
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



@endsection
