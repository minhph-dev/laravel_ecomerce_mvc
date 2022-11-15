@extends('layouts.app')
@section('title', 'My orders')
@section('content')
    <div class="py-3 py-md-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="shadow bg-white p-3">
                        <h4 class="mb-4">My orders</h4>
                        <hr>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <th>Order ID</th>
                                    <th>Tracking No</th>
                                    <th>UserName</th>
                                    <th>Payment Code</th>
                                    <th>Ordered Date</th>
                                    <th>Status message</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @forelse ($orders as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->tracking_no}}</td>
                                            <td>{{$item->fullname}}</td>
                                            <td>{{$item->payment_mode}}</td>
                                            <td>{{$item->created_at->format('d-m-Y')}}</td>
                                            <td>{{$item->status_message}}</td>
                                            <td><a href="{{url('orders/'.$item->id)}}" class="btn btn-primary">View</a></td>
                                        </tr>
                                    @empty
                                    <tr>
                                        <td colspan="7">No Orders Available</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <div>
                                {{$orders->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection