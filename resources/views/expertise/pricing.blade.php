@extends('layouts.layout')

@section('title')
.:: Expertise | pricing ::.
@endsection
@section('content')
<section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Pricing Table</h1>
                            <p>configure your pricing table</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

    <section class="container">
        <div class="price-table">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="single-price price-one">
                        <div class="table-heading">
                            <p class="plan-name">Basic Plan</p>
                            <p class="plan-price"><span class="dollar-sign">$</span><span class="price">29</span><span class="month">/ Month</span></p>
                        </div>
                        <ul>
                            <li>Lorem ipsum dolor <span><i class="fa fa-check"></i></span></li>
                            <li>Consectetur adipiscing <span><i class="fa fa-times"></i></span></li>
                            <li>Nulla pellentesque <span><i class="fa fa-times"></i></span> </li>
                            <li> Integer quis risus <span><i class="fa fa-check"></i></span></li>
                            <li>Phasellus et metus <span><i class="fa fa-times"></i></span></li>
                            <li>Duis nec massa inter <span><i class="fa fa-check"></i></span></li>
                        </ul>
                        <a href="#" class="btn btn-buynow">Buy Now</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="single-price price-two">
                        <div class="table-heading">
                            <p class="plan-name">Silver Plan</p>
                            <p class="plan-price"><span class="dollar-sign">$</span><span class="price">89</span><span class="month">/ Month</span></p>
                        </div>
                        <ul>
                            <li>Lorem ipsum dolor <span><i class="fa fa-check"></i></span></li>
                            <li>Consectetur adipiscing <span><i class="fa fa-times"></i></span></li>
                            <li>Nulla pellentesque <span><i class="fa fa-times"></i></span> </li>
                            <li> Integer quis risus <span><i class="fa fa-check"></i></span></li>
                            <li>Phasellus et metus <span><i class="fa fa-times"></i></span></li>
                            <li>Duis nec massa inter <span><i class="fa fa-check"></i></span></li>
                        </ul>
                        <a href="#" class="btn btn-buynow btn-hightlight">Buy Now</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="single-price price-three">
                        <div class="table-heading">
                            <p class="plan-name">Glod Plan</p>
                            <p class="plan-price"><span class="dollar-sign">$</span><span class="price">29</span><span class="month">/ Month</span></p>
                        </div>
                        <ul>
                            <li>Lorem ipsum dolor <span><i class="fa fa-check"></i></span></li>
                            <li>Consectetur adipiscing <span><i class="fa fa-times"></i></span></li>
                            <li>Nulla pellentesque <span><i class="fa fa-times"></i></span> </li>
                            <li> Integer quis risus <span><i class="fa fa-check"></i></span></li>
                            <li>Phasellus et metus <span><i class="fa fa-times"></i></span></li>
                            <li>Duis nec massa inter <span><i class="fa fa-check"></i></span></li>
                        </ul>
                        <a href="#" class="btn btn-buynow">Buy Now</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="single-price price-four">
                        <div class="table-heading">
                            <p class="plan-name">Platinum Plan</p>
                            <p class="plan-price"><span class="dollar-sign">$</span><span class="price">29</span><span class="month">/ Month</span></p>
                        </div>
                        <ul>
                            <li>Lorem ipsum dolor <span><i class="fa fa-check"></i></span></li>
                            <li>Consectetur adipiscing <span><i class="fa fa-times"></i></span></li>
                            <li>Nulla pellentesque <span><i class="fa fa-times"></i></span> </li>
                            <li> Integer quis risus <span><i class="fa fa-check"></i></span></li>
                            <li>Phasellus et metus <span><i class="fa fa-times"></i></span></li>
                            <li>Duis nec massa inter <span><i class="fa fa-check"></i></span></li>
                        </ul>
                        <a href="#" class="btn btn-buynow">Buy Now</a>
                    </div>
                </div>
            </div>
        </div><!--/#price-table-->
    </section>
@endsection
