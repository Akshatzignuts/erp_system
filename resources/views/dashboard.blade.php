<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Webpage</title>
    <link href="{{  asset('assets/css/style.css')  }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>
    <div class="container">
        @include('common.sidebar')
        
        <main>
            <h1>Dashboard</h1>
           
                <div class="date">
                    <input type="date" id="date" name="date" value="{{ now()->format('Y-m-d') }}">
                </div>  
            <div class="insights">
                <div class="sales">
                    <span class="material-symbols-outlined">trending_up</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Sales</h3>
                            <h1>$25,023</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle r="30" cy="40" cx="40"></circle>
                            </svg>
                            <div class="number">80%</div>
                        </div>
                    </div>
                    <small>Last 24 hours</small>
                </div>
            

                <div class="expenses">
                    <span class="material-symbols-outlined">local_mall</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Expenses</h3>
                            <h1>$5,004</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle r="30" cy="40" cx="40"></circle>
                            </svg>
                            <div class="number">20%</div>
                        </div>
                    </div>
                    <small>Last 24 hours</small>
                </div>
    


                <div class="income">
                    <span class="material-symbols-outlined">stacked_line_chart</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Income</h3>
                            <h1>$20,018</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle r="30" cy="40" cx="40"></circle>
                            </svg>
                            <div class="number">80%</div>
                        </div>
                    </div>
                    <small>Last 24 hours</small>
                </div>
            </div>

            <div class="recent-order">
                <h1>Recent Order</h1>
                    <table>
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Product Number</th>
                                <th>Payments</th>
                                <th>Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Mini USB</td>
                                <td>456</td>
                                <td>Due</td>
                                <td class="warning">Pending</td>
                                <td class="primary">Details</td>
                            </tr>

                            <tr>
                                <td>Sceptre Curved</td>
                                <td>119</td>
                                <td>Due</td>
                                <td class="warning">Pending</td>
                                <td class="primary">Details</td>
                            </tr>

                            <tr>
                                <td>Razer Blackshark</td>
                                <td>30</td>
                                <td>Due</td>
                                <td class="warning">Pending</td>
                                <td class="primary">Details</td>
                            </tr>

                            <tr>
                                <td>Razer Basilisk V3</td>
                                <td>40</td>
                                <td>Due</td>
                                <td class="warning">Pending</td>
                                <td class="primary">Details</td>
                            </tr>
                        </tbody>
                    </table>
            </div>

        </main>             

        <div class="right">
            @include('common.header')
        </div>
    </div>
    @include('common.footer')
    <script src="{{ asset('assets/script/script.js')  }}"></script>
</body>
</html>
