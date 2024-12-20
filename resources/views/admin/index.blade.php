@extends('admin.master')

@section('title', 'Thống kê Dashboard')

@section('content')
    <div class="content-wrapper-scroll">

        <!-- Content wrapper start -->
        <div class="content-wrapper">

            <!-- Row start -->
            <div class="row">
                <div class="col-xxl-3 col-sm-6 col-12">
                    <div class="stats-tile">
                        <div class="sale-icon shade-red">
                            <i class="bi bi-pie-chart"></i>
                        </div>
                        <div class="sale-details">
                            <h3 class="text-red">{{ $catalogueCount }}</h3>
                            <a href="{{ route('catalogues.index')}}">Danh Mục</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6 col-12">
                    <div class="stats-tile">
                        <div class="sale-icon shade-blue">
                            <i class="bi bi-emoji-smile"></i>
                        </div>
                        <div class="sale-details">
                            <h3 class="text-yellow">{{ $userCount }}</h3>
                            <a href="{{ route('users.index') }}">Tài Khoản</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6 col-12">
                    <div class="stats-tile">
                        <div class="sale-icon shade-yellow">
                            <i class="bi bi-box-seam"></i>
                        </div>
                        <div class="sale-details">
                            <h3 class="text-blue">{{ $productCount }}</h3>
                            <a href="{{ route('products.index') }}">Sản Phẩm</a>

                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6 col-12">
                    <div class="stats-tile">
                        <div class="sale-icon shade-green">
                            <i class="bi bi-handbag"></i>
                        </div>
                        <div class="sale-details">
                            <h3 class="text-green">{{ $orderCount }}</h3>
                            <a href="{{ route('orders.index')}}">Đơn Hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row end -->

            <!-- Row start -->
            <div class="row">
                <div class="col-xxl-9  col-sm-12 col-12">

                    <div class="card">
                        <div class="card-body">

                            <!-- Row start -->
                            <div class="row">
                                <div class="col-xxl-3 col-sm-4 col-12">
                                    <div class="reports-summary">
                                        <div class="reports-summary-block">
                                            <i class="bi bi-circle-fill text-primary me-2"></i>
                                            <div class="d-flex flex-column">
                                                <h6>Overall Sales</h6>
                                                <h5>12 Millions</h5>
                                            </div>
                                        </div>
                                        <div class="reports-summary-block">
                                            <i class="bi bi-circle-fill text-success me-2"></i>
                                            <div class="d-flex flex-column">
                                                <h6>Overall Earnings</h6>
                                                <h5>78 Millions</h5>
                                            </div>
                                        </div>
                                        <div class="reports-summary-block">
                                            <i class="bi bi-circle-fill text-danger me-2"></i>
                                            <div class="d-flex flex-column">
                                                <h6>Overall Revenue</h6>
                                                <h5>60 Millions</h5>
                                            </div>
                                        </div>
                                        <div class="reports-summary-block">
                                            <i class="bi bi-circle-fill text-warning me-2"></i>
                                            <div class="d-flex flex-column">
                                                <h6>New Customers</h6>
                                                <h5>23k</h5>
                                            </div>
                                        </div>
                                        <button class="btn btn-info download-reports">View Reports</button>
                                    </div>
                                </div>
                                <div class="col-xxl-9 col-sm-8 col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="graph-day-selection mt-2" role="group">
                                                <button type="button" class="btn active">Today</button>
                                                <button type="button" class="btn">Yesterday</button>
                                                <button type="button" class="btn">7 days</button>
                                                <button type="button" class="btn">15 days</button>
                                                <button type="button" class="btn">30 days</button>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div id="revenueGraph"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Row end -->

                        </div>
                    </div>

                </div>
                <div class="col-xxl-3  col-sm-12 col-12">

                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Sales</div>
                        </div>
                        <div class="card-body">
                            <div id="salesGraph" class="auto-align-graph"></div>
                            <div class="num-stats">
                                <h2>2100</h2>
                                <h6 class="text-truncate">12% higher than last month.</h6>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Row end -->

            <!-- Row start -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Orders</div>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table v-middle">
                                    <thead>
                                        <tr>
                                            <th>Customer</th>
                                            <th>Product</th>
                                            <th>User ID</th>
                                            <th>Ordered Placed</th>
                                            <th>Amount</th>
                                            <th>Payment Status</th>
                                            <th>Order Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="media-box">
                                                    <img src="../theme/admin/assets/images/user3.png" class="media-avatar"
                                                        alt="Bootstrap Gallery">
                                                    <div class="media-box-body">
                                                        <div class="text-truncate">Ellie Collins</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="media-box">
                                                    <img src="../theme/admin/assets/images/food/img3.jpg"
                                                        class="media-avatar" alt="Admin Themes">
                                                    <div class="media-box-body">
                                                        <div class="text-truncate">Ginger Snacks</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Arise827</td>
                                            <td>12/12/2021</td>
                                            <td>$18.00</td>
                                            <td>
                                                <span class="text-green td-status"><i class="bi bi-check-circle"></i>
                                                    Paid</span>
                                            </td>
                                            <td>
                                                <span class="badge shade-green min-90">Delivered</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media-box">
                                                    <img src="../theme/admin/assets/images/user.png" class="media-avatar"
                                                        alt="Bootstrap Gallery">
                                                    <div class="media-box-body">
                                                        <div class="text-truncate">Sophie Nguyen</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="media-box">
                                                    <img src="../theme/admin/assets/images/food/img6.jpg"
                                                        class="media-avatar" alt="Admin Themes">
                                                    <div class="media-box-body">
                                                        <div class="text-truncate">Guava Sorbet</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Arise253</td>
                                            <td>18/12/2021</td>
                                            <td>$32.00</td>
                                            <td>
                                                <span class="text-red td-status"><i class="bi bi-x-circle"></i>
                                                    Failed</span>
                                            </td>
                                            <td>
                                                <span class="badge shade-red min-90">Cancelled</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media-box">
                                                    <img src="../theme/admin/assets/images/user4.png" class="media-avatar"
                                                        alt="Bootstrap Gallery">
                                                    <div class="media-box-body">
                                                        <div class="text-truncate">Darcy Ryan</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="media-box">
                                                    <img src="../theme/admin/assets/images/food/img5.jpg"
                                                        class="media-avatar" alt="Admin Themes">
                                                    <div class="media-box-body">
                                                        <div class="text-truncate">Gooseberry Surprise</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Arise878</td>
                                            <td>22/12/2021</td>
                                            <td>$19.00</td>
                                            <td>
                                                <span class="text-blue td-status"><i class="bi bi-clock-history"></i>
                                                    Awaiting</span>
                                            </td>
                                            <td>
                                                <span class="badge shade-blue min-90">Processing</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Row end -->

            <!-- Row start -->
            <div class="row">
                <div class="col-sm-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Transactions</div>
                        </div>
                        <div class="card-body">
                            <div class="scroll370">
                                <div class="transactions-container">
                                    <div class="transaction-block">
                                        <div class="transaction-icon shade-blue">
                                            <i class="bi bi-credit-card"></i>
                                        </div>
                                        <div class="transaction-details">
                                            <h4>Visa Card</h4>
                                            <p class="text-truncate">Laptop Ordered</p>
                                        </div>
                                        <div class="transaction-amount text-blue">$1590</div>
                                    </div>
                                    <div class="transaction-block">
                                        <div class="transaction-icon shade-green">
                                            <i class="bi bi-paypal"></i>
                                        </div>
                                        <div class="transaction-details">
                                            <h4>Paypal</h4>
                                            <p class="text-truncate">Payment Received</p>
                                        </div>
                                        <div class="transaction-amount text-green">$310</div>
                                    </div>
                                    <div class="transaction-block">
                                        <div class="transaction-icon shade-blue">
                                            <i class="bi bi-pin-map"></i>
                                        </div>
                                        <div class="transaction-details">
                                            <h4>Travel</h4>
                                            <p class="text-truncate">Yosemite Trip</p>
                                        </div>
                                        <div class="transaction-amount text-blue">$4900</div>
                                    </div>
                                    <div class="transaction-block">
                                        <div class="transaction-icon shade-blue">
                                            <i class="bi bi-bag-check"></i>
                                        </div>
                                        <div class="transaction-details">
                                            <h4>Shopping</h4>
                                            <p class="text-truncate">Bill Paid</p>
                                        </div>
                                        <div class="transaction-amount text-blue">$285</div>
                                    </div>
                                    <div class="transaction-block">
                                        <div class="transaction-icon shade-green">
                                            <i class="bi bi-boxes"></i>
                                        </div>
                                        <div class="transaction-details">
                                            <h4>Bank</h4>
                                            <p class="text-truncate">Investment</p>
                                        </div>
                                        <div class="transaction-amount text-green">$150</div>
                                    </div>
                                    <div class="transaction-block">
                                        <div class="transaction-icon shade-green">
                                            <i class="bi bi-paypal"></i>
                                        </div>
                                        <div class="transaction-details">
                                            <h4>Paypal</h4>
                                            <p class="text-truncate">Amount Received</p>
                                        </div>
                                        <div class="transaction-amount text-green">$790</div>
                                    </div>
                                    <div class="transaction-block">
                                        <div class="transaction-icon shade-blue">
                                            <i class="bi bi-credit-card-2-front"></i>
                                        </div>
                                        <div class="transaction-details">
                                            <h4>Credit Card</h4>
                                            <p class="text-truncate">Online Shopping</p>
                                        </div>
                                        <div class="transaction-amount text-red">$280</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Tasks</div>
                        </div>
                        <div class="card-body">
                            <div id="taskGraph"></div>
                            <ul class="task-list-container">
                                <li class="task-list-item">
                                    <div class="task-icon shade-blue">
                                        <i class="bi bi-clipboard-plus"></i>
                                    </div>
                                    <div class="task-info">
                                        <h5 class="task-title">New</h5>
                                        <p class="amount-spend">12</p>
                                    </div>
                                </li>
                                <li class="task-list-item">
                                    <div class="task-icon shade-green">
                                        <i class="bi bi-clipboard-check"></i>
                                    </div>
                                    <div class="task-info">
                                        <h5 class="task-title">Done</h5>
                                        <p class="amount-spend">15</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Notifications</div>
                        </div>
                        <div class="card-body">
                            <div class="scroll370">
                                <ul class="user-messages">
                                    <li>
                                        <div class="customer shade-blue">MK</div>
                                        <div class="delivery-details">
                                            <span class="badge shade-blue">Sales</span>
                                            <h5>Marie Kieffer</h5>
                                            <p>Thanks for choosing Apple product, further if you have any questions please
                                                contact sales
                                                team.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="customer shade-blue">ES</div>
                                        <div class="delivery-details">
                                            <span class="badge shade-blue">Marketing</span>
                                            <h5>Ewelina Sikora</h5>
                                            <p>Boost your sales by 50% with the easiest and proven marketing tool for
                                                customer enggement
                                                &amp; motivation.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="customer shade-blue">TN</div>
                                        <div class="delivery-details">
                                            <span class="badge shade-blue">Business</span>
                                            <h5>Teboho Ncube</h5>
                                            <p>Use an exclusive promo code HKYMM50 and get 50% off on your first order in
                                                the new year.
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="customer shade-blue">CJ</div>
                                        <div class="delivery-details">
                                            <span class="badge shade-blue">Admin</span>
                                            <h5>Carla Jackson</h5>
                                            <p>Befor inviting the administrator, you must create a role that can be assigned
                                                to them.
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="customer shade-red">JK</div>
                                        <div class="delivery-details">
                                            <span class="badge shade-red">Security</span>
                                            <h5>Julie Kemp</h5>
                                            <p>Your security subscription has expired. Please renew the subscription.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Người Mua Gần Đây</div>
                        </div>
                        <div class="card-body">
                            <div class="scroll370">
                                <div class="activity-container">
                                    @foreach($recentBuyers as $buyer)
                                        <div class="activity-block">
                                            <div class="activity-user">
                                                <img src="{{ Storage::url($buyer->user->image) }}" alt="Activity User"> <!-- Hình ảnh người dùng -->
                                            </div>
                                            <div class="activity-details">
                                                <h4>{{ $buyer->user->name }}</h4> <!-- Tên người dùng -->
                                                <h5>{{ $buyer->last_order_time->diffForHumans() }}</h5> <!-- Thời gian thực hiện đơn hàng -->
                                                <p>Đã Mua: {{ $buyer->order_count }} đơn hàng</p> <!-- Số lượng đơn hàng -->
                                                <span class="badge shade-green">Mới</span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
