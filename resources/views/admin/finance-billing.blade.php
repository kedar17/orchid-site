@extends('layouts.app')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">



    <!-- Material Tracking -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0"><b>Finance & Billing</b></h1>
        <a href="#" data-bs-toggle="modal" data-bs-target="#addFinanceModal"
            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus text-white-50"></i> Add Billing Entry
        </a>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="mb-4">
                <label><strong>Select Project:</strong></label>
                <select class="form-select w-50">
                    <option selected disabled>Select a Project</option>
                    <option>Villa A</option>
                    <option>Retail Store B</option>
                    <option>Warehouse C</option>
                </select>
            </div>
            <div class="card shadow mb-4">
                <table class="table table-bordered text-center align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>Type</th>
                            <th>Category</th>
                            <th>Amount</th>
                            <th>Vendor / Party</th>
                            <th>Status</th>
                            <th>Reference</th>
                            <th>Remarks</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2025-07-01</td>
                            <td>Expense</td>
                            <td>Material</td>
                            <td class="amount">25000</td>
                            <td>ABC Cement Co.</td>
                            <td><span class="badge bg-success">Paid</span></td>
                            <td>INV-203</td>
                            <td>100 bags cement</td>
                            <td>
                                <button class="btn  ">Edit</button>
                                <button class="btn btn-sm btn-outline-danger">Delete</button>
                            </td>
                        </tr>
                        <!-- Add more rows here -->
                    </tbody>
                    <tfoot>
                        <tr class="table-secondary fw-bold">
                            <td colspan="4">Total</td>
                            <td id="totalAmount">₹0</td>
                            <td colspan="5"></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        <!-- Add Material Modal -->
        <div class="modal fade" id="addFinanceModal" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <form class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Finance / Billing Entry</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body row g-3">
                        <div class="col-md-6">
                            <label>Project</label>
                            <select class="form-select" required>
                                <option selected disabled>Select Project</option>
                                <option>Villa A</option>
                                <option>Retail Store B</option>
                                <option>Warehouse C</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label>Date</label>
                            <input type="date" class="form-control" required>
                        </div>
                        <div class="col-md-3">
                            <label>Type</label>
                            <select class="form-select">
                                <option>Income</option>
                                <option>Expense</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Category</label>
                            <select class="form-select">
                                <option>Material</option>
                                <option>Labor</option>
                                <option>Vendor Invoice</option>
                                <option>Advance Payment</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Vendor / Party Name</label>
                            <input type="text" class="form-control" placeholder="e.g., XYZ Traders">
                        </div>
                        <div class="col-md-4">
                            <label>Amount (₹)</label>
                            <input type="number" class="form-control" placeholder="e.g., 25000"
                                required>
                        </div>
                        <div class="col-md-4">
                            <label>Status</label>
                            <select class="form-select">
                                <option>Paid</option>
                                <option>Unpaid</option>
                                <option>Partial</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label>Invoice / Ref No.</label>
                            <input type="text" class="form-control" placeholder="e.g., INV-203">
                        </div>
                        <div class="col-md-12">
                            <label>Remarks</label>
                            <textarea class="form-control" rows="2"
                                placeholder="Any description or notes"></textarea>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-success">Add Entry</button>
                    </div>
                </form>
            </div>
        </div>
    </div>






</div>
<!-- End of Container -->
@endsection