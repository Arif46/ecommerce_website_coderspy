@extends('website.layouts.master')
@section('title','Contact Us')
@section('content')


<body class="body-bg2">

    <!-- Subscription End -->
    <div class="country-region-area mt-50">
        <div class="container">
            <div class="perfumers-wrapper2 gray-bg">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input_wrap4 mb-50 pt-30">
                            <h2>Country/Region</h2>
                            <strong>Select your preferred country/region website:</strong>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="input_wrap4 mb-30">
                            <strong>Changing country/region website</strong>
                            <p>Changing the country/region you shop from may affect factors including price, shipping options and product availability.</p>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="url" id="url" value="{{URL::to('/')}}">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="input_wrap4">
                            <!-- Select Region -->
                            <div class="single-select-box">
                                <label for="#">Select Region</label>
                                <select name="region_id" class="nice_Select" id="select_region">
                                    @foreach ($regions as $region)
                                        <option value="{{@$region->id}}">{{@$region->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="input_wrap4">
                            <!-- Select Region -->
                            <div class="single-select-box"  id="select_country_div">
                                <label for="#">Select Country</label>
                                <select name="country_id" class="nice_Select" id="select_country">
                                    <option>Select</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                         <div class="input_wrap4">
                            <div class="single-select-box">
                                <label for="#">&nbsp; &nbsp; </label>
                                <button type="submit" class="btnw apply-btn">Apply</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="note pt-30">
                            <p><strong>NOTE:</strong> A new country/region website selection will open in a new tab.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>



<script src="{{ url('public/frontend/js/jquery-3.2.1.min.js') }}" async=""></script>
<script>
	
	//Get Upazila List
$(document).ready(function () {

    $("#select_region").change(function () {
        var url = $('#url').val();
       
        var formData = {
            id: $(this).val()
        };
       console.log(formData);
        // get section for student
        $.ajax({
            type: "GET",
            data: formData,
            dataType: 'json',
            url: url + '/' + 'ajaxCountryList',
            success: function (data) {

                // console.log(data);
                var a = '';
               $.each(data, function (i, item) {
                    if (item.length) {
                        $('#select_country').find('option').not(':first').remove();
                        $('#select_country_div ul').find('li').not(':first').remove();
                        
                        $.each(item, function (i, country) {
                            // console.log(country.name);
                            $('#select_country').append($('<option>', {
                                value: country.id,
                                text: country.name
                            }));

                            $("#select_country_div ul").append("<li data-value='" + country.id + "' class='option'>" + country.name + "</li>");
                        });
                    } else {
                        $('#select_country_div .current').html('SELECT Country *');
                        $('#select_country').find('option').not(':first').remove();
                        $('#select_country_div ul').find('li').not(':first').remove();
                    }
                });
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });

});
</script>
@endsection

@push('script')

@endpush
