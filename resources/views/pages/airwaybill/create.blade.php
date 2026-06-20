@extends('layouts.master')

@section('content')

    <!--APP-CONTENT START-->
    <div class="main-content app-content">
        <div class="container-fluid">

            <!-- Page Header -->
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <h1 class="page-title fw-semibold fs-18 mb-0">Create Air Way Bill</h1>
                <div class="ms-md-1 ms-0">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Air Way Bill</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- Page Header Close -->

            <form action="#" method="POST">
                @csrf

                <!-- Service & Customer Section -->
                <div class="card custom-card mb-3">
                    <div class="card-body">
                        <div class="row g-3 align-items-end">

                            <!-- Select Service -->
                            <div class="col-md-3">
                                <label class="form-label">Select Service</label>
                                <select class="form-select" name="service">
                                    <option value="" selected disabled>Select Service</option>
                                    <option value="domestic">Domestic</option>
                                    <option value="international">International</option>
                                    <option value="express">Express</option>
                                    <option value="freight">Freight</option>
                                </select>
                            </div>

                            <!-- Service Type -->
                            <div class="col-md-3">
                                <label class="form-label">Service Type</label>
                                <select class="form-select" name="service_type">
                                    <option value="" selected disabled>Select Service Type</option>
                                    <option value="door_to_door">Door to Door</option>
                                    <option value="door_to_port">Door to Port</option>
                                    <option value="port_to_port">Port to Port</option>
                                    <option value="port_to_door">Port to Door</option>
                                </select>
                            </div>

                            <!-- Customer Search -->
                            <div class="col-md-6">
                                <label class="form-label">Customer Search</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="customer_search" placeholder="Search by Customer ID, Name, Mobile Number or Address">
                                    <button class="btn btn-primary" type="button">
                                        <i class="ri-search-line"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Customer sub-fields -->
                            <div class="col-md-3">
                                <label class="form-label">Customer ID</label>
                                <input type="text" class="form-control" name="customer_id" placeholder="Enter Customer ID">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Customer Name</label>
                                <input type="text" class="form-control" name="customer_name" placeholder="Enter Customer Name">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Mobile Number</label>
                                <input type="text" class="form-control" name="customer_mobile" placeholder="Enter Mobile Number">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control" name="customer_address" placeholder="Enter Address">
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Service & Customer Section -->

                <!-- Shipper Details -->
                <div class="card custom-card mb-3">
                    <div class="card-header">
                        <div class="card-title">Shipper Details</div>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">

                            <div class="col-md-6">
                                <label class="form-label">Company Name</label>
                                <input type="text" class="form-control" name="shipper_company" placeholder="Enter Company Name">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Contact Person Name</label>
                                <input type="text" class="form-control" name="shipper_contact_person" placeholder="Enter Contact Person Name">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Reference</label>
                                <input type="text" class="form-control" name="shipper_reference" placeholder="Enter Reference">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Address</label>
                                <textarea class="form-control" name="shipper_address" rows="1" placeholder="Enter Shipper Address"></textarea>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">State</label>
                                <input type="text" class="form-control" name="shipper_state" placeholder="Enter Shipper State">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">City</label>
                                <input type="text" class="form-control" name="shipper_city" placeholder="Enter Shipper City">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Postal Code</label>
                                <input type="text" class="form-control" name="shipper_postal_code" placeholder="Enter Shipper State Postal Code">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Mobile Number</label>
                                <input type="text" class="form-control" name="shipper_mobile" placeholder="Enter Shipper Mobile Number">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Phone Number</label>
                                <input type="text" class="form-control" name="shipper_phone" placeholder="Enter Shipper Phone Number">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">NTN/CNIC</label>
                                <input type="text" class="form-control" name="shipper_ntn_cnic" placeholder="Enter Shipper NTN/CNIC">
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Shipper Details -->

                <!-- Receiver Details -->
                <div class="card custom-card mb-3">
                    <div class="card-header">
                        <div class="card-title">Receiver Details</div>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">

                            <div class="col-md-6">
                                <label class="form-label">Company</label>
                                <input type="text" class="form-control" name="receiver_company" placeholder="Enter Company Name">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Contact Person Name</label>
                                <input type="text" class="form-control" name="receiver_contact_person" placeholder="Enter Contact Person Name">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Address</label>
                                <textarea class="form-control" name="receiver_address" rows="1" placeholder="Enter Receiver Address"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Country</label>
                                <input type="text" class="form-control" name="receiver_country" placeholder="Enter Receiver Country">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">State</label>
                                <input type="text" class="form-control" name="receiver_state" placeholder="Enter Receiver State">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">City</label>
                                <input type="text" class="form-control" name="receiver_city" placeholder="Enter Receiver City">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Postal Code</label>
                                <input type="text" class="form-control" name="receiver_postal_code" placeholder="Enter Receiver State Postal Code">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Mobile Number</label>
                                <input type="text" class="form-control" name="receiver_mobile" placeholder="Enter Receiver Mobile Number">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Phone Number</label>
                                <input type="text" class="form-control" name="receiver_phone" placeholder="Enter Receiver Phone Number">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="receiver_email" placeholder="Enter Receiver Email">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">EORI Number</label>
                                <input type="text" class="form-control" name="receiver_eori" placeholder="Enter EORI Number">
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Receiver Details -->

                <!-- Shipment Details -->
                <div class="card custom-card mb-3">
                    <div class="card-header">
                        <div class="card-title">Shipment Details</div>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">

                            <div class="col-md-3">
                                <label class="form-label">Number of Pieces</label>
                                <input type="number" class="form-control" name="pieces" min="1" placeholder="0">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Actual Weight (kg)</label>
                                <input type="number" class="form-control" name="actual_weight" step="0.01" placeholder="0.00">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Volumetric Weight (kg)</label>
                                <input type="number" class="form-control" name="volumetric_weight" step="0.01" placeholder="0.00">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Chargeable Weight (kg)</label>
                                <input type="number" class="form-control" name="chargeable_weight" step="0.01" placeholder="0.00">
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">Length (cm)</label>
                                <input type="number" class="form-control" name="length" step="0.01" placeholder="0.00">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Width (cm)</label>
                                <input type="number" class="form-control" name="width" step="0.01" placeholder="0.00">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Height (cm)</label>
                                <input type="number" class="form-control" name="height" step="0.01" placeholder="0.00">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Declared Value</label>
                                <input type="number" class="form-control" name="declared_value" step="0.01" placeholder="0.00">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Description of Goods</label>
                                <textarea class="form-control" name="goods_description" rows="2" placeholder="Enter description of goods"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Special Instructions</label>
                                <textarea class="form-control" name="special_instructions" rows="2" placeholder="Enter any special instructions"></textarea>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Content Type</label>
                                <select class="form-select" name="content_type">
                                    <option value="" selected disabled>Select Content Type</option>
                                    <option value="documents">Documents</option>
                                    <option value="non_documents">Non-Documents</option>
                                    <option value="samples">Samples</option>
                                    <option value="gifts">Gifts</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Payment Type</label>
                                <select class="form-select" name="payment_type">
                                    <option value="" selected disabled>Select Payment Type</option>
                                    <option value="prepaid">Prepaid</option>
                                    <option value="cod">Cash on Delivery (COD)</option>
                                    <option value="account">On Account</option>
                                    <option value="credit">Credit</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Shipment Date</label>
                                <input type="date" class="form-control" name="shipment_date">
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Shipment Details -->

                <!-- Form Actions -->
                <div class="card custom-card mb-4">
                    <div class="card-body">
                        <div class="d-flex gap-2 justify-content-end">
                            <a href="javascript:void(0);" class="btn btn-light">Cancel</a>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                            <button type="submit" class="btn btn-primary">
                                <i class="ri-file-add-line me-1"></i> Create Air Way Bill
                            </button>
                        </div>
                    </div>
                </div>
                <!-- End Form Actions -->

            </form>

        </div>
    </div>
    <!--APP-CONTENT CLOSE-->

@endsection
