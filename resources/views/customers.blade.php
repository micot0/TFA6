<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel POS - Customers</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav>
        <a href="/">Laravel POS</a>
        <a href="/about">About</a>
        <a href="/customers">Customer Accounts</a>
        <a href="/users">User Accounts</a>
    </nav>

    <main class="container">
        <h1>Customer Accounts</h1>
        <p>View and manage customer account information.</p>

        <div class="card">
            <h2>Customer List</h2>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer)
                            <tr>
                                <td>{{ $customer->id }}</td>
                                <td>{{ $customer->full_name }}</td>
                                <td>{{ $customer->email }}</td>
                                <td>{{ $customer->phone }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>