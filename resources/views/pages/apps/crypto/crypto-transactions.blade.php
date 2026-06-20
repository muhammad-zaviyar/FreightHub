@extends('layouts.master')

@section('styles')

      
@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <h1 class="page-title fw-semibold fs-18 mb-0">Crypto Transactions</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Crypto Transactions</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start::row-1 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Crypto Transactions
                                    </div>
                                    <div class="d-flex flex-wrap gap-2">
                                        <div>
                                            <input class="form-control form-control-sm" type="text" placeholder="Search Transactions" aria-label=".form-control-sm example">
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="btn btn-primary btn-sm btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">This Month</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">This Year</a></li>
                                            </ul>
                                        </div>
                                        <div>
                                            <button class="btn btn-success btn-sm btn-wave">View All Transactions</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Hash ID</th>
                                                    <th scope="col">Token</th>
                                                    <th scope="col">Transaction Date</th>
                                                    <th scope="col">Transaction Type</th>
                                                    <th scope="col">Value (in USD)</th>
                                                    <th scope="col">Current Status</th>
                                                    <th scope="col">Wallet Address</th>
                                                    <th scope="col">Options</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                <tr class="transaction-list">
                                                    <td>0xA012MNOP345QR6789STU</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt="Ethereum">
                                                            </span>
                                                            <div class="fw-medium">Ethereum (ETH)</div>
                                                        </div>
                                                    </td>
                                                    <td>15 Aug 2024, 14:30</td>
                                                    <td class="text-success fw-medium">Deposit <i class="ri-arrow-right-up-line"></i></td>
                                                    <td>
                                                        <span class="fw-medium fs-14">$1,200.00</span>
                                                    </td>
                                                    <td><span class="badge bg-success-transparent">Successful</span></td>
                                                    <td class="text-muted">0xDEF123ABC456GHI789JKL012MNOP345QR6789STU</td>
                                                    <td>
                                                        <div class="d-flex gap-2 align-items-center">
                                                            <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View Details"><i class="ri-eye-line"></i></button>
                                                            <button class="btn btn-success-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Download"><i class="ri-download-2-line"></i></button>
                                                            <button class="btn btn-danger-light btn-icon btn-sm transactions-delete" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr> 
                                                <tr class="transaction-list">
                                                    <td>0xB123MNOP678QR1234STU</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/crypto-currencies/regular/litecoin.svg')}}" alt="Litecoin">
                                                            </span>
                                                            <div class="fw-medium">Litecoin (LTC)</div>
                                                        </div>
                                                    </td>
                                                    <td>20 Aug 2024, 11:45</td>
                                                    <td class="text-danger fw-medium">Withdrawal <i class="ri-arrow-right-down-line"></i></td>
                                                    <td>
                                                        <span class="fw-medium fs-14">$500.00</span>
                                                    </td>
                                                    <td><span class="badge bg-warning-transparent">Pending</span></td>
                                                    <td class="text-muted">0xABC123DEF456GHI789JKL012MNOP6789QRSTU</td>
                                                    <td>
                                                        <div class="d-flex gap-2 align-items-center">
                                                            <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View Details"><i class="ri-eye-line"></i></button>
                                                            <button class="btn btn-success-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Download"><i class="ri-download-2-line"></i></button>
                                                            <button class="btn btn-danger-light btn-icon btn-sm transactions-delete" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="transaction-list">
                                                    <td>0xD345MNOP890QR3456STU</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/crypto-currencies/regular/Ripple.svg')}}" alt="Ripple">
                                                            </span>
                                                            <div class="fw-medium">Ripple (XRP)</div>
                                                        </div>
                                                    </td>
                                                    <td>30 Aug 2024, 15:10</td>
                                                    <td class="text-danger fw-medium">Withdrawal <i class="ri-arrow-right-down-line"></i></td>
                                                    <td>
                                                        <span class="fw-medium fs-14">$300.00</span>
                                                    </td>
                                                    <td><span class="badge bg-danger-transparent">Failed</span></td>
                                                    <td class="text-muted">0xGHI234JKL890MNO123PQR456STU789ABCDEF</td>
                                                    <td>
                                                        <div class="d-flex gap-2 align-items-center">
                                                            <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View Details"><i class="ri-eye-line"></i></button>
                                                            <button class="btn btn-success-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Download"><i class="ri-download-2-line"></i></button>
                                                            <button class="btn btn-danger-light btn-icon btn-sm transactions-delete" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="transaction-list">
                                                    <td>0xF567MNOP012QR5678STU</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/crypto-currencies/regular/Bitcoin.svg')}}" alt="Bitcoin.svg')}}">
                                                            </span>
                                                            <div class="fw-medium">Bitcoin (BTC)</div>
                                                        </div>
                                                    </td>
                                                    <td>10 Sep 2024, 09:30</td>
                                                    <td class="text-danger fw-medium">Withdrawal <i class="ri-arrow-right-down-line"></i></td>
                                                    <td>
                                                        <span class="fw-medium fs-14">$420.00</span>
                                                    </td>
                                                    <td><span class="badge bg-warning-transparent">Pending</span></td>
                                                    <td class="text-muted">0xLMN456OPQ789RST123UVW234XYZ56789ABCD</td>
                                                    <td>
                                                        <div class="d-flex gap-2 align-items-center">
                                                            <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View Details"><i class="ri-eye-line"></i></button>
                                                            <button class="btn btn-success-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Download"><i class="ri-download-2-line"></i></button>
                                                            <button class="btn btn-danger-light btn-icon btn-sm transactions-delete" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="transaction-list">
                                                    <td>0xG678MNOP123QR6789STU</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/crypto-currencies/regular/Dash.svg')}}" alt="Dash">
                                                            </span>
                                                            <div class="fw-medium">Dash (DASH)</div>
                                                        </div>
                                                    </td>
                                                    <td>15 Sep 2024, 16:20</td>
                                                    <td class="text-success fw-medium">Deposit <i class="ri-arrow-right-up-line"></i></td>
                                                    <td>
                                                        <span class="fw-medium fs-14">$1,500.00</span>
                                                    </td>
                                                    <td><span class="badge bg-success-transparent">Successful</span></td>
                                                    <td class="text-muted">0xOPQ567RST890UVW123XYZ345ABC67890EFGH</td>
                                                    <td>
                                                        <div class="d-flex gap-2 align-items-center">
                                                            <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View Details"><i class="ri-eye-line"></i></button>
                                                            <button class="btn btn-success-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Download"><i class="ri-download-2-line"></i></button>
                                                            <button class="btn btn-danger-light btn-icon btn-sm transactions-delete" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>  
                                                <tr class="transaction-list">
                                                    <td>0xH789MNOP234QR7890STU</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt="Ethereum">
                                                            </span>
                                                            <div class="fw-medium">Ethereum (ETH)</div>
                                                        </div>
                                                    </td>
                                                    <td>20 Sep 2024, 11:15</td>
                                                    <td class="text-danger fw-medium">Withdrawal <i class="ri-arrow-right-down-line"></i></td>
                                                    <td>
                                                        <span class="fw-medium fs-14">$750.00</span>
                                                    </td>
                                                    <td><span class="badge bg-danger-transparent">Failed</span></td>
                                                    <td class="text-muted">0xRST890UVW123XYZ456ABC789DEFGH0123456</td>
                                                    <td>
                                                        <div class="d-flex gap-2 align-items-center">
                                                            <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View Details"><i class="ri-eye-line"></i></button>
                                                            <button class="btn btn-success-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Download"><i class="ri-download-2-line"></i></button>
                                                            <button class="btn btn-danger-light btn-icon btn-sm transactions-delete" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="transaction-list">
                                                    <td>0xI890MNOP345QR8901STU</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/crypto-currencies/regular/Euro.svg')}}" alt="Euro">
                                                            </span>
                                                            <div class="fw-medium">Euro (EUR)</div>
                                                        </div>
                                                    </td>
                                                    <td>25 Sep 2024, 08:45</td>
                                                    <td class="text-success fw-medium">Deposit <i class="ri-arrow-right-up-line"></i></td>
                                                    <td>
                                                        <span class="fw-medium fs-14">$1,000.00</span>
                                                    </td>
                                                    <td><span class="badge bg-success-transparent">Successful</span></td>
                                                    <td class="text-muted">0xUVW123XYZ456ABC789DEFGH01234567890IJKL</td>
                                                    <td>
                                                        <div class="d-flex gap-2 align-items-center">
                                                            <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View Details"><i class="ri-eye-line"></i></button>
                                                            <button class="btn btn-success-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Download"><i class="ri-download-2-line"></i></button>
                                                            <button class="btn btn-danger-light btn-icon btn-sm transactions-delete" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>                                    
                                                <tr class="transaction-list">
                                                    <td>0xE456MNOP901QR4567STU</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/crypto-currencies/regular/NEM.svg')}}" alt="NEM">
                                                            </span>
                                                            <div class="fw-medium">NEM (XEM)</div>
                                                        </div>
                                                    </td>
                                                    <td>05 Sep 2024, 12:45</td>
                                                    <td class="text-success fw-medium">Deposit <i class="ri-arrow-right-up-line"></i></td>
                                                    <td>
                                                        <span class="fw-medium fs-14">$950.00</span>
                                                    </td>
                                                    <td><span class="badge bg-success-transparent">Successful</span></td>
                                                    <td class="text-muted">0xJKL345MNO678PQR890STU123VWX456YZABC</td>
                                                    <td>
                                                        <div class="d-flex gap-2 align-items-center">
                                                            <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View Details"><i class="ri-eye-line"></i></button>
                                                            <button class="btn btn-success-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Download"><i class="ri-download-2-line"></i></button>
                                                            <button class="btn btn-danger-light btn-icon btn-sm transactions-delete" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>                                            
                                                <tr class="transaction-list">
                                                    <td>0xC234MNOP789QR2345STU</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('build/assets/images/crypto-currencies/regular/EOS.svg')}}" alt="EOS">
                                                            </span>
                                                            <div class="fw-medium">EOS (EOS)</div>
                                                        </div>
                                                    </td>
                                                    <td>25 Aug 2024, 09:00</td>
                                                    <td class="text-success fw-medium">Deposit <i class="ri-arrow-right-up-line"></i></td>
                                                    <td>
                                                        <span class="fw-medium fs-14">$750.00</span>
                                                    </td>
                                                    <td><span class="badge bg-success-transparent">Successful</span></td>
                                                    <td class="text-muted">0xDEF234ABC567GHI890JKL012MNOP789QRSTU</td>
                                                    <td>
                                                        <div class="d-flex gap-2 align-items-center">
                                                            <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View Details"><i class="ri-eye-line"></i></button>
                                                            <button class="btn btn-success-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Download"><i class="ri-download-2-line"></i></button>
                                                            <button class="btn btn-danger-light btn-icon btn-sm transactions-delete" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>                                        
                                        </table>
                                    </div>
                                </div>  
                                <div class="card-footer border-top-0">
                                    <nav aria-label="Page navigation">
                                        <ul class="pagination mb-0 float-end">
                                            <li class="page-item disabled">
                                                <a class="page-link">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                            <li class="page-item active" aria-current="page">
                                                <a class="page-link" href="javascript:void(0);">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0);">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')

        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>
        
    
@endsection