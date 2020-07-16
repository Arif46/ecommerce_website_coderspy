@extends('website.layouts.master')
@section('title','My Samples')
@section('content')
    <section class="gry-bg py-4 profile">
        <div class="container">
            <div class="row cols-xs-space cols-sm-space cols-md-space">
                <div class="col-lg-3 d-none d-lg-block">
                    @if(Auth::user()->user_type == 'seller')
                        @include('frontend.inc.seller_side_nav')
                    @elseif(Auth::user()->user_type == 'customer')
                        @include('frontend.inc.customer_side_nav')
                    @endif
                </div>
                <div class="col-lg-9">
                    <div class="main-content">
                        <!-- Page title -->
                        <div class="page-title">
                            <div class="row align-items-center">
                                <div class="col-md-6 col-12">
                                    <h2 class="heading heading-6 text-capitalize strong-600 mb-0">
                                        {{__('My Samples')}}
                                    </h2>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="float-md-right">
                                        <ul class="breadcrumb">
                                            <li><a href="{{ route('home') }}">{{__('Home')}}</a></li>
                                            <li><a href="{{ route('dashboard') }}">{{__('Dashboard')}}</a></li>
                                            <li class="active"><a href="{{ url('my-subscription') }}">{{__('My Samples')}}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row card no-border mt-4">
                            <div class="col-md-12 table-responsive">
                                <table class="table table-striped table-bordered text-dark table-sm table-hover table-responsive-md">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Sample Id</th>
                                        <th>Shipping Charge</th>
                                        <th>Amount</th>
                                        <th>Payment Method</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php($i=0)
                                    @forelse($subscriptions as $sample)

                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td>{{$sample->id}}</td>
                                            <td>{{$sample->shipping_charge}}</td>
                                            <td>{{$sample->subscription_amount}}</td>
                                            <td>{{$sample->payment_method == 1 ?'Paypal':'Credit Card'}}</td>
                                            <td>{{$sample->subscription_date}}</td>
                                            <td>
                                                <button  style="float: left;" data-toggle="modal" data-target="#sample_modal{{$sample->id}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></button>
                                                <form method="POST" action="{{ route('subscription-store.destroy',$sample->id) }}">
                                                    @csrf
                                                    @method("DELETE")
                                                    <button onclick="" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button></td>
                                            </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center">Opps no data found</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="pagination-wrapper py-4">
                            <ul class="pagination justify-content-end">

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    $unitPrice = 0;
    $shippingCharge = 0;
    $subTotal = 0;
    $total = 0;
    ?>
    @foreach($subscriptions as $subs)
        <div class="modal fade" id="sample_modal{{$subs->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-zoom product-modal" role="document">
                <div class="modal-content position-relative">
                    <div class="modal-header">
                        <h5 class="modal-title strong-600 heading-5">{{__('Sample Details')}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body px-3 pt-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="modal-body gry-bg px-3 pt-2">
                                    <div class="card mt-4">
                                        <div class="card-header py-2 px-3 heading-6 strong-600 clearfix">
                                            <div class="float-left">Customer Information</div>
                                            <div class="float-right">Sample No :<td>{{$subs->id}}</td></div>
                                        </div>
                                        <div class="card-body pb-0">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <table class="details-table table">
                                                        <tbody>
                                                        <tr>
                                                            <td class="w-50 strong-600">Customer:</td>
                                                            <td>{{$subs->first_name}} {{$subs->last_name}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="w-50 strong-600">Email:</td>
                                                            <td>{{$subs->user->email}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="w-50 strong-600">Shipping address:</td>
                                                            <td>{{$subs->street_address}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="w-50 strong-600">Shipping Zip Code:</td>
                                                            <td>{{$subs->zip_code}}</td>
                                                        </tr>

                                                        <tr>
                                                            <td class="w-50 strong-600">Billing Zip Code:</td>
                                                            <td>{{$subs->billing_zip}}</td>
                                                        </tr>
                                                        </tbody></table>
                                                </div>
                                                <div class="col-lg-6">
                                                    <table class="details-table table">
                                                        <tbody><tr>
                                                            <td class="w-50 strong-600">Date:</td>
                                                            <td>{{$subs->subscription_date}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="w-50 strong-600">Country:</td>
                                                            <td>{{$subs->country}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="w-50 strong-600">City:</td>
                                                            <td>{{$subs->city}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="w-50 strong-600">State:</td>
                                                            <td>{{$subs->state}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="w-50 strong-600">Payment method:</td>
                                                            <td>Paypal</td>
                                                        </tr>
                                                        </tbody></table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12   ">
                                            <div class="card mt-4">
                                                <div class="card-header py-2 px-3 heading-6 strong-600">Order Details</div>
                                                <div class="card-body pb-0">
                                                    <table class="details-table table">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th width="30%">Product</th>
                                                            <th >Delivery Type</th>
                                                            <th>Price</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($subs->subscriptionInfos as $data)
                                                            <tr>
                                                                <td>1</td>
                                                                <td>
                                                                    <a href="http://localhost/myfrag/product/Product-Demo-22-NSxxK" target="_blank" class="text-dark">{{$data->product->name}}</a>
                                                                </td>
                                                                <td>
                                                                    Home Delivery
                                                                </td>
                                                                <td>$ {{$data->product_price}}</td>
                                                            </tr>
                                                            <?php
                                                            $unitPrice +=$data->product_price;
                                                            ?>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="card mt-4">
                                                <div class="card-header py-2 px-3 heading-6 strong-600">Order Ammount</div>
                                                <div class="card-body pb-0">
                                                    <table class="table details-table">
                                                        <tbody>
                                                        <?php
                                                        $unitPrice;
                                                        $shippingCharge = $subs->shipping_charge;
                                                        $subTotal = $unitPrice+$shippingCharge;
                                                        $total = $subTotal;
                                                        ?>
                                                        <tr>
                                                            <th>Subtotal</th>
                                                            <td class="text-right">
                                                                <span class="strong-600">${{$unitPrice}}</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Shipping</th>
                                                            <td class="text-right">
                                                                <span class="text-italic">${{$shippingCharge}}</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th><span class="strong-600">Total</span></th>
                                                            <td class="text-right">
                                                                <strong><span>${{$total}}</span></strong>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection

@push('css')

@endpush

@push('script')

@endpush
