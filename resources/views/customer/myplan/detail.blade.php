@extends('customer.layout.master')

@section('content')
<div class="nk-content nk-content-lg nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <div class="nk-block-head-sub"><a href="{{ route('customer.myplan.index') }}" class="text-soft back-to"><em class="icon ni ni-arrow-left"> </em><span>My Plans</span></a></div>
                        <div class="nk-block-between-md g-4">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title fw-normal">Silver - Daily 4.76% for 21 Days</h2>
                                <div class="nk-block-des">
                                    <p>INV-498238 <span class="badge bg-outline bg-primary">Running</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="card-inner">
                            <div class="row gy-gs">
                                <div class="col-md-6">
                                    <div class="nk-iv-wg3">
                                        <div class="nk-iv-wg3-group flex-lg-nowrap gx-4">
                                            <div class="nk-iv-wg3-sub">
                                                <div class="nk-iv-wg3-amount">
                                                    <div class="number">2,500.00</div>
                                                </div>
                                                <div class="nk-iv-wg3-subtitle">Invested Amount</div>
                                            </div>
                                            <div class="nk-iv-wg3-sub">
                                                <span class="nk-iv-wg3-plus text-soft"><em class="icon ni ni-plus"></em></span>
                                                <div class="nk-iv-wg3-amount">
                                                    <div class="number">1,643.76 <span class="number-up">4.76 %</span></div>
                                                </div>
                                                <div class="nk-iv-wg3-subtitle">Profit Earned</div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-md-6 col-lg-4 offset-lg-2">
                                    <div class="nk-iv-wg3 ps-md-3">
                                        <div class="nk-iv-wg3-group flex-lg-nowrap gx-4">
                                            <div class="nk-iv-wg3-sub">
                                                <div class="nk-iv-wg3-amount">
                                                    <div class="number">4,999.90 <span class="number-down">1017.14 <em class="icon ni ni-info-fill" data-bs-toggle="tooltip" data-bs-placement="right" title="tooltip text"></em></span></div>
                                                </div>
                                                <div class="nk-iv-wg3-subtitle">Total Return</div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div>
                        <div id="schemeDetails" class="nk-iv-scheme-details">
                            <ul class="nk-iv-wg3-list">
                                <li>
                                    <div class="sub-text">Term</div>
                                    <div class="lead-text">21 Days</div>
                                </li>
                                <li>
                                    <div class="sub-text">Term start at</div>
                                    <div class="lead-text">Nov 4, 2019 05:42 AM</div>
                                </li>
                                <li>
                                    <div class="sub-text">Term end at</div>
                                    <div class="lead-text">Nov 25, 2019 05:42 AM</div>
                                </li>
                                <li>
                                    <div class="sub-text">Daily interest</div>
                                    <div class="lead-text">4.76%</div>
                                </li>
                            </ul><!-- .nk-iv-wg3-list -->
                            <ul class="nk-iv-wg3-list">
                                <li>
                                    <div class="sub-text">Ordered date</div>
                                    <div class="lead-text">Nov 2, 2019 10:54 PM</div>
                                </li>
                                <li>
                                    <div class="sub-text">Approved date</div>
                                    <div class="lead-text">Nov 4, 2019 05:42 AM</div>
                                </li>
                                <li>
                                    <div class="sub-text">Payment method</div>
                                    <div class="lead-text">NioWallet</div>
                                </li>
                                <li>
                                    <div class="sub-text">Paid <small>(fee include)</small></div>
                                    <div class="lead-text"><span class="currency currency-usd">USD</span> 2,535.75</div>
                                </li>
                            </ul><!-- .nk-iv-wg3-list -->
                            <ul class="nk-iv-wg3-list">
                                <li>
                                    <div class="sub-text">Captial invested</div>
                                    <div class="lead-text"><span class="currency currency-usd">USD</span> 2,500.00</div>
                                </li>
                                <li>
                                    <div class="sub-text">Daily profit</div>
                                    <div class="lead-text"><span class="currency currency-usd">USD</span> 119.10</div>
                                </li>
                                <li>
                                    <div class="sub-text">Net profit</div>
                                    <div class="lead-text"><span class="currency currency-usd">USD</span> 2,499.90</div>
                                </li>
                                <li>
                                    <div class="sub-text">Total return</div>
                                    <div class="lead-text"><span class="currency currency-usd">USD</span> 4,999.90</div>
                                </li>
                            </ul><!-- .nk-iv-wg3-list -->
                        </div><!-- .nk-iv-scheme-details -->
                    </div>
                </div><!-- .nk-block -->
                <div class="nk-block nk-block-lg">
                    <div class="nk-block-head">
                        <h5 class="nk-block-title">Graph View</h5>
                    </div>
                    <div class="row g-gs">
                        <div class="col-lg-5">
                            <div class="card card-bordered h-100">
                                <div class="card-inner justify-center text-center h-100">
                                    <div class="nk-iv-wg5">
                                        <div class="nk-iv-wg5-head">
                                            <h5 class="nk-iv-wg5-title">Overview</h5>
                                        </div>
                                        <div class="nk-iv-wg5-ck">
                                            <input type="text" class="knob-half" value="68.9" data-fgColor="#6576ff" data-bgColor="#d9e5f7" data-thickness=".06" data-width="300" data-height="155" data-displayInput="false">
                                            <div class="nk-iv-wg5-ck-result">
                                                <div class="text-lead">68.9%</div>
                                                <div class="text-sub">112.54 / per day</div>
                                            </div>
                                            <div class="nk-iv-wg5-ck-minmax"><span>2,500.00</span><span>4,999.90</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-lg col-sm-6">
                            <div class="card card-bordered h-100">
                                <div class="card-inner justify-center text-center h-100">
                                    <div class="nk-iv-wg5">
                                        <div class="nk-iv-wg5-head">
                                            <h5 class="nk-iv-wg5-title">Net Profit</h5>
                                            <div class="nk-iv-wg5-subtitle">Earn so far <strong>1,643.76</strong> <span class="currency currency-usd">USD</span></div>
                                        </div>
                                        <div class="nk-iv-wg5-ck sm">
                                            <input type="text" class="knob-half" value="68.9" data-fgColor="#33d895" data-bgColor="#d9e5f7" data-thickness=".07" data-width="240" data-height="125" data-displayInput="false">
                                            <div class="nk-iv-wg5-ck-result">
                                                <div class="text-lead sm">4.76%</div>
                                                <div class="text-sub">Daily profit</div>
                                            </div>
                                            <div class="nk-iv-wg5-ck-minmax"><span>0.00</span><span>2,999.90</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-lg col-sm-6">
                            <div class="card card-bordered h-100">
                                <div class="card-inner justify-center text-center h-100">
                                    <div class="nk-iv-wg5">
                                        <div class="nk-iv-wg5-head">
                                            <h5 class="nk-iv-wg5-title">Day Remain</h5>
                                            <div class="nk-iv-wg5-subtitle">Earn so far <strong>1,643.76</strong> <span class="currency currency-usd">USD</span></div>
                                        </div>
                                        <div class="nk-iv-wg5-ck sm">
                                            <input type="text" class="knob-half" value="68.9" data-fgColor="#816bff" data-bgColor="#d9e5f7" data-thickness=".07" data-width="240" data-height="125" data-displayInput="false">
                                            <div class="nk-iv-wg5-ck-result">
                                                <div class="text-lead sm">8 D</div>
                                                <div class="text-sub">day remain</div>
                                            </div>
                                            <div class="nk-iv-wg5-ck-minmax"><span>0</span><span>21</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
@endsection