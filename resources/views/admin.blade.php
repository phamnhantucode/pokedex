<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
    <link rel="stylesheet" href="{{asset('assets/css/admin_dashboard.css')}}">
</head>
<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="https://i.pinimg.com/236x/bb/06/15/bb06152d6edb8c578216fcdebd21715b.jpg" alt="">
                    <h2>POKE<span class="danger">POKE</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>

                <div class="sidebar">
                    <a href="#" class="active">
                        <span class="material-icons-sharp">grid_view</span>
                        <h3>Dashboard</h3>
                    </a>
                    <a href="#">
                        <span class="material-icons-sharp">local_library
                            </span>
                        <h3>Pokedex</h3>
                    </a>
                    <a href="#">
                        <span class="material-icons-sharp">supervisor_account</span>
                        <h3>Customer</h3>
                    </a>
                    <a href="#">
                        <span class="material-icons-sharp">
                            category
                            </span>
                        <h3>Category</h3>
                    </a>
                    <a href="#">
                        <span class="material-icons-sharp">contacts</span>
                        <h3>Staff</h3>
                    </a>
                    <a href="#">
                        <span class="material-icons-sharp">grid_view</span>
                        <h3>Product</h3>
                    </a>
                    <a href="#">
                        <span class="material-icons-sharp">grid_view</span>
                        <h3>Notification</h3>
                        <span class="message-count">99+</span>
                    </a>
                    <a href="#">
                        <span class="material-icons-sharp">grid_view</span>
                        <h3>Setting</h3>
                    </a>
                    <a href="#">
                        <span class="material-icons-sharp">logout</span>
                        <h3>Logout</h3>
                    </a>
                </div>
            </div>
        </aside>
        <!-- -->
        <main>
            <h1>Dashboard</h1>
            <div class="date">
                <input type="date">
            </div>
            <div class="insights">
                <div class="sales">
                    <span class="material-icons-sharp">analytics</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Sales</h3>
                            <h1>$25,024</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36' />
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!--  -->
                <div class="expenses">
                    <span class="material-icons-sharp">bar_chart</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Expenses</h3>
                            <h1>$25,024</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36' />
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!--  -->
                <div class="income">
                    <span class="material-icons-sharp">stacked_line_chart</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Income</h3>
                            <h1>$25,024</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36' />
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
            </div>

            <!--  -->
            <div class="recent-orders">
                <h2>Recent Order</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Product Number</th>
                            <th>Payment</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Pokemon card</td>
                            <td>23123</td>
                            <td>Cash</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Pokemon card</td>
                            <td>23123</td>
                            <td>Cash</td>
                            <td class="success">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Pokemon card</td>
                            <td>23123</td>
                            <td>Cash</td>
                            <td class="danger">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Pokemon card</td>
                            <td>23123</td>
                            <td>Cash</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Pokemon card</td>
                            <td>23123</td>
                            <td>Cash</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                    </tbody>
                </table>
                <a href="#">Show All</a>
            </div>
        </main>
        <!--  -->

        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-icons-sharp">menu</span>
                </button>
                <div class="theme-toggler">
                    <span class="material-icons-sharp active">light_mode</span>
                    <span class="material-icons-sharp">dark_mode</span>

                </div>
                <div class="profile">
                    <div class="info">
                        <p>Hey, <b>Poke</b></p>
                        <small class="text_muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="https://metruyenchu.com/assets/images/logo.png?260333" alt="">
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="recent-updates">
                <h2>Recent Updates</h2>
                <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="https://metruyenchu.com/assets/images/logo.png?260333" alt="">

                        </div>
                        <div class="message">
                            <p><b>Me</b> add one product</p>
                            <small class="text-muted">2 minutes ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="https://metruyenchu.com/assets/images/logo.png?260333" alt="">

                        </div>
                        <div class="message">
                            <p><b>Me</b> add one product</p>
                            <small class="text-muted">2 minutes ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="https://metruyenchu.com/assets/images/logo.png?260333" alt="">

                        </div>
                        <div class="message">
                            <p><b>Me</b> add one product</p>
                            <small class="text-muted">2 minutes ago</small>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!--  -->
            <div class="sales-analytics">
                <h2>Sales Analytics</h2>
                <div class="item online">
                    <div class="icon">
                        <span class="material-icons-sharp">shopping_cart</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>ONLINE ORDERS</h3>
                            <small class="text muted">Last 24 hours</small>
                        </div>
                        <h5 class="success">
                            +39%
                        </h5>
                        <h3>3849</h3>
                    </div>
                </div>
                <div class="item offline">
                    <div class="icon">
                        <span class="material-icons-sharp">shopping_cart</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>ONLINE ORDERS</h3>
                            <small class="text muted">Last 24 hours</small>
                        </div>
                        <h5 class="danger">
                            -39%
                        </h5>
                        <h3>3849</h3>
                    </div>
                </div>
                <div class="item customer">
                    <div class="icon">
                        <span class="material-icons-sharp">person</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>ONLINE ORDERS</h3>
                            <small class="text muted">Last 24 hours</small>
                        </div>
                        <h5 class="success">
                            +39%
                        </h5>
                        <h3>3849</h3>
                    </div>
                </div>
                <div class="item add-product">
                    <div>
                        <span class="material-icons-sharp">add</span>
                        <h3>Add product</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('assets/js/admin.js')}}"></script>
</body>
</html>