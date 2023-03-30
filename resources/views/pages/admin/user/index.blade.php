@extends('layouts.base')
@section('content')

@include('layouts.admin.navbar')

<section class="admin" style="margin-left:0%;">
    <div class="admin-container">

        <!-- USER SECTION -->
        <section class="admin-item-computer" id="admin-item-user">
            <div class="admin-item-info">
                <div class="admin-item-left">
                    @if ($users->count() > 1)
                        <p><span>{{ $users->count() }} Users</span></p>
                    @else
                        <p><span>{{ $users->count() }} User</span></p>
                    @endif
                </div>
            </div>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Admin</th>
                </tr>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                        <td>{{ $user->email }}</td>
                        @if ($user->is_admin == 1)
                            <td>Yes</td>
                        @else
                            <td>No</td>
                        @endif
                    </tr>
                @endforeach
            </table>
        </section>
    </div>
</section>

@endsection