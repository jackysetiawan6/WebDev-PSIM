@extends('layout')
@section('title', 'home')
@section('setAktifH', 'active')

@section('content')

<div class="container mt-3 border rounded p-0 bg-light">
    
    <div class="header-container d-flex justify-content-between m-3">
        <div>
            <h5>Today</h5>
            <small>(1 - 100 of 121394 records)</small>
        </div>
        <div class="d-flex align-items-center gap-2">
            <span class="status-badge status-high">10/211</span>
            <span class="status-badge status-med">10/211</span>
            <span class="status-badge status-low">10/211</span>
            <input class="form-control ms-3" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-secondary">Refresh</button>
            <button class="btn btn-secondary">Filters</button>
        </div>
    </div>

    
    <table class="table table-dark table-striped mt-3">
        <thead>
            <tr>
                <th>Incident Id</th>
                <th>Event Id</th>
                <th>Event Timestamp</th>
                <th>Source</th>
                <th>Name</th>
                <th>Remarks</th>
                <th>Priority</th>
                <th>Incident Owner</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>0</td>
                <td>0</td>
                <td>2024-11-06 10:36:01</td>
                <td>GENSET-RM DL102 - FR3-GEN</td>
                <td>Regular text column</td>
                <td>Regular text column</td>
                <td><span class="priority-low">Low</span></td>
                <td>Regular text column</td>
            </tr>
            <tr>
                <td>0</td>
                <td>0</td>
                <td>2024-11-06 10:36:01</td>
                <td>AZ-101</td>
                <td>Stranger</td>
                <td>Stranger</td>
                <td><span class="priority-high">High</span></td>
                <td>Jacky Setiawan</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection