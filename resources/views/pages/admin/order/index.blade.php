@extends('layouts.base')
@section('content')

@include('layouts.admin.navbar')

<section class="admin" style="margin-left:0%;">
    <div class="admin-container">

        <!-- ORDER SECTION -->
        <section class="admin-item-computer" id="admin-item-order">
            <div class="admin-item-info">
                <div class="admin-item-left">
                    <p><span>1 Order</span></p>
                </div>
            </div>
            <table>
                <tr>
                    <th>Order ID</th>
                    <th>Product</th>
                    <th>Computer</th>
                    <th>Price</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>Game PC Pro</td>
                    <td>€ 1999,00</td>
                    <td>Processing</td>
                </tr>
            </table>
        </section>
    </div>
</section>

@endsection