<?php /* E:\xampp\htdocs\myfragmence\resources\views/website/pages/productDetail.blade.php */ ?>
<?php $__env->startSection('title',$detailedProduct->name); ?>
<?php $__env->startSection('content'); ?>

    <!-- Page Tittle Start -->
    <div class="page_tittle_area text-center">
       <div class="container">
         <div class="page-tittle mb-50">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Product Details</h2>
                </div>
            </div>
         </div>
       </div>
    </div>
    <!-- Page Tittle End -->

    <div class="section_padding">
        <div class="container">
            <div class="row mb-60">
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="product-details-img">
                        <div class="row">
                            <div class="col-2">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <?php $__currentLoopData = json_decode($detailedProduct->photos); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a class="nav-link <?php if($key==0): ?> active <?php endif; ?> " id="v-pills-home-tab" data-toggle="pill" href="<?php echo e('#'.$key); ?>" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                            <img src="<?php echo e(url('public/')); ?>/<?php echo e($photo); ?>" alt="">
                                        </a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                            <div class="col-10">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <?php $__currentLoopData = json_decode($detailedProduct->photos); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="tab-pane fade <?php if($key==0): ?>show active <?php endif; ?>" id="<?php echo e($key); ?>" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                            <img class="magniflier" src="<?php echo e(url('public/')); ?>/<?php echo e($photo); ?>" alt="">
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <div class="product-toggle-right">
                                        <a href=""><i class="fa fa-trophy"></i></a>
                                        <a href=""><i class="fa fa-thumbs-o-up"></i></a>
                                        <a href=""><i class="fa fa-thumbs-o-down"></i></a>
                                        <a href=""><i class="fa fa-gift"></i></a>
                                        <a href=""><i class="fa fa-bookmark-o"></i></a>
                                        <a href=""><i class="fa fa-address-book-o"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="product-details-content">
                        <h2><?php echo e(__($detailedProduct->name)); ?></h2>
                        <h6>Barcode :<?php echo e(__($detailedProduct->barcode)); ?></h6>
                        <div class="brand">
                            <a href=""><?php echo e(__($detailedProduct->category->name)); ?></a> | <a href=""><?php echo e(__($detailedProduct->brand->name)); ?></a>
                        </div>
                        <?php
                            $qty = 0;
                            // if($detailedProduct->variant_product){
                            //     foreach ($detailedProduct->stocks as $key => $stock) {
                            //         $qty += $stock->qty;
                            //     }
                            // }
                            // else{
                                
                            // }
                            $qty = $detailedProduct->current_stock;
                        ?>

                        <?php if($qty > 0): ?>
                            <div class="stock">In Stock</div>
                        <?php else: ?>
                            <div class="stock text-danger">Out Of Stock</div>
                        <?php endif; ?>
                        <?php if(home_price($detailedProduct->id) != home_discounted_price($detailedProduct->id)): ?>
                            <div class="price">
                                <?php echo e(home_discounted_base_price($detailedProduct->id)); ?>

                                <?php if(home_base_price($detailedProduct->id) != home_discounted_base_price($detailedProduct->id)): ?>
                                    <del class="d-block"><?php echo e(home_base_price($detailedProduct->id)); ?></del>
                                <?php endif; ?>

                            </div>
                        <?php endif; ?>

                        <form id="option-choice-form">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="id" value="<?php echo e($detailedProduct->id); ?>">
                            <?php if($detailedProduct->choice_options): ?>
                                <?php $__currentLoopData = json_decode($detailedProduct->choice_options); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $choice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="row no-gutters">
                                        <div class="col-2">
                                            <div class="product-description-label mt-2 "><?php echo e(\App\Attribute::find($choice->attribute_id)->name); ?>:</div>
                                        </div>
                                        <div class="col-10">
                                            <ul class="list-inline checkbox-alphanumeric checkbox-alphanumeric--style-1 mb-2">
                                                <?php $__currentLoopData = $choice->values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li>
                                                        <input type="radio" id="<?php echo e($choice->attribute_id); ?>-<?php echo e($value); ?>" name="attribute_id_<?php echo e($choice->attribute_id); ?>" value="<?php echo e($value); ?>" <?php if($key == 0): ?> checked <?php endif; ?>>
                                                        <label for="<?php echo e($choice->attribute_id); ?>-<?php echo e($value); ?>"><?php echo e($value); ?></label>
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>


                        <!-- Quantity + Add to cart -->
                            <div class="row no-gutters">
                                <div class="col-2">
                                    <div class="product-description-label mt-2"><?php echo e(__('Quantity')); ?>:</div>
                                </div>
                                <div class="col-10">
                                    <div class="product-quantity d-flex align-items-center">
                                        <div class="input-group input-group--style-2 pr-3" style="width: 160px;">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-number" type="button" data-type="minus" data-field="quantity">
                                                        <i class="fa fa-minus"></i>
                                                    </button>
                                                </span>
                                            <input type="text" name="quantity" class="form-control input-number text-center" placeholder="1" value="1" min="1" max="10">
                                            <span class="input-group-btn">
                                                    <button class="btn btn-number" type="button" data-type="plus" data-field="quantity">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </span>
                                        </div>
                                        <div class="avialable-amount text-success">(<span id="available-quantity"><?php echo e($qty); ?></span> <?php echo e(__('available')); ?>)</div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </form>

                        <div class="btns">
                            <?php if($qty > 0): ?>
                                <a  class="add-to-cart" onclick="addToCart()">Add to Cart</a>
                                <a  class="buy-now" onclick="buyNow()">Quick Shop</a>
                            <?php else: ?>
                                <a  class="buy-now">Stock Out</a>
                            <?php endif; ?>
                        </div>
                        <div class="overview">
                            <h3>Overview:</h3>
                            <div class="row">
                                <div class="col-md-4 mt-3"><p><b>Gender :</b></p></div>
                                <div style="margin-left: -125px;" class="col-md-8">
                                    <div class="pretty p-icon p-curve p-jelly">
                                        <input type="radio" name="gender" disabled <?php echo e($detailedProduct->gender == 'Male'?'checked':''); ?>>
                                        <div class="state p-success">
                                            <i class="icon mdi mdi-check"></i>
                                            <label> Male</label>
                                        </div>
                                    </div>
                                    <div class="pretty p-icon p-curve p-jelly">
                                        <input type="radio" name="gender" disabled <?php echo e($detailedProduct->gender == 'Female'?'checked':''); ?>>
                                        <div class="state p-info">
                                            <i class="icon mdi mdi-check"></i>
                                            <label> Female</label>
                                        </div>
                                    </div>
                                    <div class="pretty p-icon p-curve p-jelly">
                                        <input type="radio" name="gender" disabled <?php echo e($detailedProduct->gender == 'Unisex'?'checked':''); ?>>
                                        <div class="state p-warning">
                                            <i class="icon mdi mdi-check"></i>
                                            <label> Unisex</label>
                                        </div>
                                    </div>
                                </div>
                            
                            <!-- end gender section -->
                                <div class="col-md-6 mt-3 mt_fix"><p><b>Product Lenght :</b></p></div>
                                <div style="margin-left: -160px;" class="col-md-6 mtc_fix">
                                    <div class="pretty p-icon p-curve p-jelly">
                                        <input type="radio" name="length" checked>
                                        <div class="state p-success">
                                            <i class="icon mdi mdi-check"></i>
                                            <label><?php echo e($detailedProduct->poduct_length); ?>cm</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3 mt_fix"><p><b>Product Height :</b></p></div>
                                <div style="margin-left: -160px;" class="col-md-6 mtc_fix">
                                    <div class="pretty p-icon p-curve p-jelly">
                                        <input type="radio" name="height" checked>
                                        <div class="state p-success">
                                            <i class="icon mdi mdi-check"></i>
                                            <label><?php echo e($detailedProduct->product_height); ?>cm</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3 mt_fix"><p><b>Product Width :</b></p></div>
                                <div style="margin-left: -160px;" class="col-md-6 mtc_fix">
                                    <div class="pretty p-icon p-curve p-jelly">
                                        <input type="radio" name="width" checked>
                                        <div class="state p-success">
                                            <i class="icon mdi mdi-check"></i>
                                            <label><?php echo e($detailedProduct->product_width); ?>cm</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- end size section -->
                                <div class="col-md-4 mt-3 mt_fix"><p><b>Lunch Year :</b></p></div>
                                <?php
                                    $timestamp = strtotime($detailedProduct->launch_date);
                                ?>
                                <div style="margin-left: -100px;" class="col-md-1 mtc_fix">
                                    <div class="pretty p-icon p-curve p-jelly">
                                        <input type="radio" name="year" checked >
                                        <div class="state p-info">
                                            <i class="icon mdi mdi-check"></i>
                                            <label> <?php echo e(2020); ?></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12"></div>
                                <div style="margin-left: 0px" class="col-md-4 mt-3 mt_fix"><p style="margin-left: 0px;"><b>Sample :</b></p></div>
                                <div style="margin-left: -110px;" class="col-md-1 mtc_fix">
                                    <div class="pretty p-icon p-curve p-jelly">
                                        <input type="radio" name="sample" checked >
                                        <div class="state <?php echo e($detailedProduct->sample == 1?'p-warning':'p-danger'); ?>">
                                            <i class="icon mdi mdi-check"></i>
                                            <label> <?php echo e($detailedProduct->sample == 1?'Yes':'No'); ?></label>
                                        </div>
                                    </div>
                                </div>
                                <!-- end year & sample section -->
                                <div class="col-md-12"></div>
                                <div class="col-md-6 mt-3 mt_fix"><p><b>Subscription available :</b></p></div>
                                <div style="margin-left: -125px;" class="col-md-6 mtc_fix">
                                    <div class="pretty p-icon p-curve p-jelly">
                                        <input type="radio" name="subscription" checked >
                                        <div class="state <?php echo e($detailedProduct->subscription == 1?'p-primary':'p-danger'); ?>">
                                            <i class="icon mdi mdi-check"></i>
                                            <label> <?php echo e($detailedProduct->subscription == 1?'Yes':'No'); ?></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-3 mt_fix"><p><b>Pack Type :</b></p></div>
                                <div style="margin-left: -108px;" class="col-md-3 mtc_fix">
                                    <div class="pretty p-icon p-curve p-jelly">
                                        <input type="radio" name="pack_type" checked >
                                        <div class="state p-info">
                                            <i class="icon mdi mdi-check"></i>
                                            <label> <?php echo e($detailedProduct->pack_type); ?></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12"></div>
                                <div class="col-md-8 mt-3"><p><b>Perfumer Name :  <a target="_blank" href="<?php echo e(url('perfumer/')); ?>/<?php echo e($detailedProduct->perfumer->id); ?>"><?php echo e($detailedProduct->perfumer->name); ?></a></b></p></div>
                            </div>

                            <!-- end subscription section -->

                            <div class="note">
                                <h4>Notes</h4>
                                <?php if($top->count() >0): ?>
                                    <h6 class="text-center">Top Notes</h6>
                                <?php else: ?>
                                <?php endif; ?>
                                <div class="row">
                                    <?php $__currentLoopData = $top; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t_note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="singlenote">
                                                <img src="<?php echo e(url('/public')); ?>/<?php echo e($t_note->image); ?>" alt="">
                                                <p><?php echo e($t_note->name); ?></p>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>

                                <?php if($mid->count() >0): ?>
                                    <h6 class="text-center">Mid Notes</h6>
                                <?php else: ?>
                                <?php endif; ?>
                                <div class="row">
                                    <?php $__currentLoopData = $mid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="singlenote">
                                                <img src="<?php echo e(url('/public')); ?>/<?php echo e($m_note->image); ?>" alt="">
                                                <p><?php echo e($m_note->name); ?></p>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <?php if($top->count() >0): ?>
                                    <h6 class="text-center">Base Notes</h6>
                                <?php else: ?>
                                <?php endif; ?>
                                <div class="row">
                                    <?php $__currentLoopData = $base; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b_note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="singlenote">
                                                <img src="<?php echo e(url('/public')); ?>/<?php echo e($b_note->image); ?>" alt="">
                                                <p><?php echo e($b_note->name); ?></p>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <?php if($top->count() ==0 && $base->count() ==0 && $mid->count() ==0): ?>
                                    <h6 class="text-left">No notes abailable !!</h6>
                                <?php else: ?>
                                <?php endif; ?>
                            </div>
                            <?php if($detailedProduct->pdf === 'NULL'): ?>
                               <?php else: ?>
                                <div class="policy">
                                    <p> <a href="<?php echo e(url('/public')); ?>/<?php echo e($detailedProduct->pdf); ?>">See PDF</a></p>
                                </div>
                            <?php endif; ?>
                            <div class="policy">
                                <p>Click to find out our <a href="">Shipping Policy</a> and <a href="">Return Policy</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="product-social-share">
                        <h4>Social Share</h4>
                        <?php $__currentLoopData = App\GeneralSetting::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e($social->google_plus); ?>"><i class="fa fa-envelope"></i></a>
                        <a href="<?php echo e($social->facebook); ?>"><i class="fa fa-facebook"></i></a>
                        <a href="<?php echo e($social->twitter); ?>"><i class="fa fa-twitter"></i></a>
                        <a href="<?php echo e($social->linkedin); ?>"><i class="fa fa-linkedin"></i></a>
                        <a href="<?php echo e($social->pinterest); ?>"><i class="fa fa-pinterest"></i></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="product-details-description">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Descriptions</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                                <p> <?php echo $detailedProduct->description; ?></p>
                                <table class="table table-bordered mb-60">
                                    <tbody>
                                    <tr>
                                        <td>ALCOHOL</td>
                                        <td><?php echo e($detailedProduct->alcohol); ?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <?php if($detailedProduct->video_link): ?>
                                <?php
                                    preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $detailedProduct->video_link, $matches);
                                ?>
                                <iframe height="350" width="100%" src="https://www.youtube.com/embed/<?php echo e($matches[1]); ?>" frameborder="0" allowfullscreen></iframe>
                            <?php endif; ?>



                            <div class="product-reviews">
                                <h4>Customer Reviews</h4>
                                <div class="row">
                                    <?php $__empty_1 = true; $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <div class="col-xl-4">
                                            <p>Rating <span>
                                                    <i class="fa fa-star <?php if($review->rating > 0): ?> count_rating <?php endif; ?>
                                                        rating_color"></i>
                                                    <i class="fa fa-star <?php if($review->rating > 1): ?> count_rating <?php endif; ?>
                                                        rating_color"></i>
                                                    <i class="fa fa-star  <?php if($review->rating > 2): ?> count_rating <?php endif; ?>
                                                        rating_color"></i>
                                                    <i class="fa fa-star <?php if($review->rating > 3): ?> count_rating <?php endif; ?>
                                                        rating_color"></i>
                                                    <i class="fa fa-star <?php if($review->rating > 4): ?> count_rating <?php endif; ?>
                                                        rating_color"></i>
                                                </span></p>
                                        </div>
                                        <div class="col-xl-6">
                                            <p><?php echo e($review->comment); ?></p>
                                            <p>By <?php echo e($review->name); ?> Posted on <?php echo e(\Carbon\Carbon::parse($review->created_at)->format('l M, d, Y')); ?></p>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <div class="col-xl-12">
                                        </div>
                                    <?php endif; ?>

                                </div>

                                <div class="col-xl-6">

                                    <form action="<?php echo e(route('reviews.store')); ?>" method="post">
                                        <div class="col-xl-12">
                                            <?php
                                                $exist ='';
                                            ?>
                                            <?php $__currentLoopData = App\Review::where('user_id',Auth()->id())
                                                                ->where('product_id',$detailedProduct->id)
                                                                ->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                              <?php 
                                                $exist = 1;
                                              ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                            <p>YOU'RE REVIEWING:</p>
                                            <p><?php echo e(__($detailedProduct->name)); ?></p>
                                            <div class="<?php echo e($exist==1?'d-none':''); ?>">
                                                
                                                <p><span>Your Rating*</span></p>
                                                <fieldset class="starability-basic">
                                                    <input type="radio" id="no-rate" class="input-no-rate" name="rating" value="0" checked aria-label="No rating." />
                                                
                                                    <input type="radio" id="rate1" name="rating" value="1" required/>
                                                    <label for="rate1">1 star.</label>
                                                
                                                    <input type="radio" id="rate2" name="rating" value="2" required/>
                                                    <label for="rate2">2 stars.</label>
                                                
                                                    <input type="radio" id="rate3" name="rating" value="3" required/>
                                                    <label for="rate3">3 stars.</label>
                                                
                                                    <input type="radio" id="rate4" name="rating" value="4" required/>
                                                    <label for="rate4">4 stars.</label>
                                                
                                                    <input type="radio" id="rate5" name="rating" value="5" required/>
                                                    <label for="rate5">5 stars.</label>
                                                
                                                    <span class="starability-focus-ring"></span>
                                                </fieldset> 
                                            </div>
                                            
                                        </div>
                                        <?php echo csrf_field(); ?>
                                        <?php if(Auth::check()): ?>
                                            <input type="hidden" name="product_id" value="<?php echo e($detailedProduct->id); ?>">
                                            <input type="hidden" name="user_id" placeholder="Nickname*" value="<?php echo e(Auth::user()->id); ?>">
                                            <input type="text" name="summary" placeholder="Summary*" required>
                                            <textarea rows="3" name="comment" placeholder="Review*" required></textarea>
                                            <button type="submit">Submit Review</button>
                                        <?php else: ?>
                                            <input type="hidden" name="product_id" value="<?php echo e($detailedProduct->id); ?>">
                                            <input type="text" name="summary" placeholder="Summary*" required>
                                            <textarea rows="3" name="comment" placeholder="Review*" required></textarea>
                                            <button onclick="alertMessage()" id="please_login" type="button">Submit Review</button>
                                        <?php endif; ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="section_padding gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-title">
                        <h2>Related Product</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $related; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-3 col-lg-3 col-sm-6 mb-30">
                        <div class="single-product-carousel">
                            <div class="single_tranding">
                                <a href="<?php echo e(route('product', $product->slug)); ?>">
                                    <img src="<?php echo e(url('public/'.$product->featured_img)); ?>" alt="">
                                    <div class="des">
                                        <p class="brand"><?php echo e($product->brand->name); ?></p>
                                        <p class="title"><?php echo e($product->name); ?></p>
                                        <p class="price"><?php echo e(home_base_price($product->id)); ?> </p>
                                    </div>
                                    <div class="des-hover">
                                        <span onclick="showAddToCartModal(<?php echo e($product->id); ?>)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-basket"></i></span>
                                        <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></span>
                                        <span onclick="addToWishList(<?php echo e($product->id); ?>)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist"><i class="fa fa-heart"></i></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" href="<?php echo e(url('public/ratings/product-rating.css')); ?>">
    <style>
        .pretty{
            margin-top: 22px!important;
        }
        .mt_fix{
            margin-top: -0px!important;
        }
        .mtc_fix{
            margin-top: -17px!important;
        }
        .fa-star{
            color:#ddd;
        }
        .count_rating{
            color:#f5bd23;
        }
    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('script'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
    <script src="<?php echo e(url('public/frontend/js/magnifier.js')); ?>" async=""></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('website.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>