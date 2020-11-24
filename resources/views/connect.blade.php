    @extends('layout.layout')
    @section('title', 'Pre-sale')

    @section('content')

        <div class="section section-pad about-section no-pb section-bg" id="about"
            style="background-color: rgba(0, 0, 0, .03)">
            <div class="container  mt-1 pb-2">

        {{-- <ul class="nav navbar-nav ml-auto">
            <button class="btn btn-sm ml-auto connect-btn" href="#"
                style="background: linear-gradient(135deg, #4ae46e 0%, #196e2d 100%);">CONNECT</button>
        </ul> --}}
                <div class="row">
                    <div class="col-md-4">
                        <div class="card" style="border: none">
                            <div class="card-body">
                                <h5>Verified KPRP Presale Contract</h5>
                                <a href="https://etherscan.io/address/0xE5dd3e4607cC1aBA94F93494160277294b9c9AAf"
                                    class="con__" target="_blank">
                                    <h6>0xE5dd3e4607cC1aBA94F93494160277294b9c9AAf</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card"
                            style="border: none; background: linear-gradient(0deg, rgb(76 241 54) 0%, rgb(35 123 30) 100%);">
                            <div class="card-body">
                                <h5 style="color: white"><img src="{{ asset('images') }}/zinnia/ethereum-eth-logo.png"
                                        style="width: 28px; height:26px" />Your ETH Deposits</h5>
                                <h3 style="color: white">0</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card"  style="border: none;">
                            <div class="card-body">
                                <h5><img src="{{ asset('images') }}/Keeperlogo.png" style="width: 28px; height:26px" />Your
                                    KPRP Tokens</h5>
                                <h3 style="color:green">0</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="card" style="border: none;">
                            <div class="card-body">
                                <h5>
                                    <img style="width: 27px"
                                        src="data:image/png;base64,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" />
                                    Total Presale Depositors
                                </h5>
                                <h3 style="color:green">0</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="border: none;">
                            <div class="card-body">
                                <h5><img src="{{ asset('images') }}/Keeperlogo.png" style="width: 28px; height:26px" />Total
                                    Presale KPRP</h5>
                                <h3 style="color:green">0</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card"
                            style="border: none;background: linear-gradient(0deg, rgb(76 241 54) 0%, rgb(35 123 30) 100%);">
                            <div class="card-body">
                                <h5 style="color:white"><img src="{{ asset('images') }}/zinnia/ethereum-eth-logo.png"
                                        style="width: 28px; height:26px" />Total ETH Deposited</h5>
                                <h3 style="color: white">0</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="card" style="border: none">
                            <div class="card-body">
                                <h5><img src="{{ asset('images') }}/Keeperlogo.png" style="width: 28px; height:26px" />Your
                                    Staking KPRP Tokens</h5>
                                <h3 style="color:green">0</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card"
                            style="border: none;background: linear-gradient(0deg, rgb(76 241 54) 0%, rgb(35 123 30) 100%);">
                            <div class="card-body">
                                <h5 style="color: white">Connect to your web3 wallet</h5>
                                <h3 style="color: white">0</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="border: none;">
                            <div class="card-body">
                                <h5>Wallet</h5>
                                <h3 style="color:green">0</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
