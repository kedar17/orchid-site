@extends('layouts.app')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Material Tracking -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0"><b>Payment & Settlement Logs</b></h1>
        <a href="#" data-bs-toggle="modal" data-bs-target="#addPaymentModal"
            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus text-white-50"></i> Add Payment Logs
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
                            <th>Project</th>
                            <th>Paid To</th>
                            <th>Amount</th>
                            <th>Mode</th>
                            <th>Reference</th>
                            <th>Status</th>
                            <th>Settled By</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2025-07-01</td>
                            <td>Villa A</td>
                            <td>Ravi Contractors</td>
                            <td class="payAmount">₹20,000</td>
                            <td>UPI</td>
                            <td>TXN845001</td>
                            <td><span class="badge bg-success">Settled</span></td>
                            <td>Admin</td>
                            <td>
                                <button class="btn btn-sm btn-outline-dark">Edit</button>
                                <button class="btn btn-sm btn-outline-danger">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class="table-secondary fw-bold">
                            <td colspan="4">Total Paid</td>
                            <td id="totalPaid">₹0</td>
                            <td colspan="5"></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        <!-- Add Material Modal -->
        <div class="modal fade" id="addPaymentModal" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <form class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Payment Entry</h5>
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
                        <div class="col-md-6">
                            <label>Paid To</label>
                            <input type="text" class="form-control" placeholder="Vendor or Contractor Name" required>
                        </div>
                        <div class="col-md-4">
                            <label>Amount (₹)</label>
                            <input type="number" class="form-control" placeholder="e.g., 20000" required>
                        </div>
                        <div class="col-md-4">
                            <label>Mode of Payment</label>
                            <select class="form-select">
                                <option>Cash</option>
                                <option>Bank Transfer</option>
                                <option>UPI</option>
                                <option>Cheque</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label>Transaction ID / Reference</label>
                            <input type="text" class="form-control" placeholder="e.g., TXN845001">
                        </div>
                        <div class="col-md-6">
                            <label>Status</label>
                            <select class="form-select">
                                <option>Settled</option>
                                <option>Pending</option>
                                <option>Partially Settled</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Settled By</label>
                            <input type="text" class="form-control" placeholder="e.g., Admin / Manager">
                        </div>
                        <div class="col-md-12">
                            <label>Remarks</label>
                            <textarea class="form-control" rows="2" placeholder="Any notes, purpose, linked task"></textarea>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-dark">Save Payment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End of Container -->
@endsection