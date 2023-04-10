  <!-- initiate sidebar-->
  <div class="app-sidebar">
    <div class="sidebar-header">
        <a class="header-brand" href="https://demo.smartcart.shopping/en/admin">
            <div class="logo-img text-center">
                <h4>Smart Cart</h4>
            </div>
        </a>
        <button type="button" class="nav-toggle"><i data-toggle="expanded"
    class="ik ik-toggle-right toggle-icon"></i></button>
        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
    </div>


    <div class="sidebar-content">
        <div class="nav-container">
            <nav id="main-menu-navigation" class="navigation-main">
                <div class="px-2 py-1">
                    <input type="text" class="form-control" placeholder="Search..." id="cm_menu_search_input">
                </div>
                <div class="nav-item active" id="dashboard">
                    <a href="https://demo.smartcart.shopping/en/admin"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                </div>

                <div class="nav-item " id="dispatcher">
                    <a href="https://demo.smartcart.shopping/en/admin/customer/orders/dispatcher"><i class="fas fa-desktop"></i><span>Dispatcher</span></a>
                </div>

                <div class="nav-lavel" id="messages-management">Messages Management</div>

                <div class="nav-item ">
                    <a href="https://demo.smartcart.shopping/en/admin/support"><i class="fas fa-question"></i><span>Support Tickets</span> <span class="badge badge-warning">0 </span></a>
                </div>

                <div class="nav-item ">
                    <a href="https://demo.smartcart.shopping/en/admin/support/driver"><i class="fas fa-car"></i><span>Drivers Support Tickets</span></a>
                </div>

                <div class="nav-item ">
                    <a href="https://demo.smartcart.shopping/en/admin/send-notification"><i class="fas fa-bell"></i><span>Send Notifications</span></a>
                </div>

                <div class="nav-item ">
                    <a href="https://demo.smartcart.shopping/en/admin/feedback"><i class="fas fa-star"></i><span>Customers Feedback</span></a>
                </div>

                <div class="nav-lavel" id="customers-management">Customers Management</div>

                <div class="nav-item ">
                    <a href="https://demo.smartcart.shopping/en/admin/customer"><i class="fas fa-users"></i><span>All Customers</span></a>
                </div>

                <div class="nav-item ">
                    <a href="https://demo.smartcart.shopping/en/admin/point"><i class="fas fa-braille"></i><span>Customers Points</span></a>
                </div>

                <div class="nav-lavel" id="drivers-management">Drivers Management</div>
                <div class="nav-item ">
                    <a href="https://demo.smartcart.shopping/en/admin/driver"><i class="fas fa-car"></i><span>All Drivers</span></a>
                </div>
                <div class="nav-item ">
                    <a href="https://demo.smartcart.shopping/en/admin/pending-drivers"><i class="fas fa-people-carry"></i><span>Pending Drivers</span></a>
                </div>

                <div class="nav-item ">
                    <a href="https://demo.smartcart.shopping/en/admin/shift"><i class="fas fa-calendar-alt"></i><span>Shift Details</span></a>
                </div>
                <div class="nav-item ">
                    <a href="https://demo.smartcart.shopping/en/admin/shift/calendar"><i class="fas fa-calendar"></i><span>Shift Calendar</span></a>
                </div>

                <div class="nav-item ">
                    <a href="https://demo.smartcart.shopping/en/admin/notified-drivers"><i class="fas fa-clipboard"></i><span>Notified Drivers</span></a>
                </div>

                <div class="nav-lavel" id="merchants-management">Merchants Management</div>
                <div class="nav-item ">
                    <a href="https://demo.smartcart.shopping/en/admin/merchant"><i class="fas fa-store"></i><span>All Merchants</span></a>
                </div>

                <div class="nav-item ">
                    <a href="https://demo.smartcart.shopping/en/admin/merchant/create"><i class="fas fa-store-alt"></i><span>Add New Merchant</span></a>
                </div>

                <div class="nav-lavel" id="administrators-management">Administrators Management
                </div>

                <div class="nav-item ">
                    <a href="https://demo.smartcart.shopping/en/admin/administration"><i class="fas fa-users-cog"></i><span>All Administrators</span></a>
                </div>
                <div class="nav-item ">
                    <a href="https://demo.smartcart.shopping/en/admin/administration/create"><i class="fas fa-user-cog"></i><span>Add New Administrator</span></a>
                </div>

                <div class="nav-item ">
                    <a href="https://demo.smartcart.shopping/en/admin/log"><i class="fas fa-users-cog"></i><span>Activity Logs</span></a>
                </div>

                <div class="nav-item has-sub " id="city">
                    <a href="javascript:void(0)"><i class="fas fa-city"></i><span>Roles &amp; Permissions</span></a>
                    <div class="submenu-content">
                        <a href="https://demo.smartcart.shopping/en/admin/roles" class="menu-item"><span>Roles List</span> </a>
                        <a href="https://demo.smartcart.shopping/en/admin/roles/users" class="menu-item "><span>Users Roles</span> </a>
                    </div>
                </div>

                <div class="nav-lavel" id="catalog-management">Catalog Management</div>
                <div class="nav-item has-sub ">
                    <a href="javascript:void(0)"><i class="fas fa-cubes"></i><span>Manage Services</span></a>
                    <div class="submenu-content">
                        <a href="https://demo.smartcart.shopping/en/admin/service" class="menu-item"><span>List</span> </a>
                        <a href="https://demo.smartcart.shopping/en/admin/service/create" class="menu-item "><span>Add New</span> </a>
                    </div>
                </div>

                <div class="nav-item has-sub " id="manage-categories">
                    <a href="javascript:void(0)"><i class="fas fa-sitemap"></i><span>Manage Categories</span></a>
                    <div class="submenu-content">
                        <a href="https://demo.smartcart.shopping/en/admin/category" class="menu-item "><span>List (Tree View)</span> </a>
                        <a href="https://demo.smartcart.shopping/en/admin/catList/table" class="menu-item "><span>List (Table View)</span> </a>
                        <a href="https://demo.smartcart.shopping/en/admin/catList/diagram" class="menu-item "><span>List (Sitemap View)</span> </a>

                        <a href="https://demo.smartcart.shopping/en/admin/category/create" class="menu-item "><span>Add New</span> </a>
                    </div>
                </div>

                <div class="nav-item has-sub " id="manage-products">
                    <a href="javascript:void(0)"><i class="fas fa-list"></i><span>Manage Products</span></a>
                    <div class="submenu-content">
                        <a href="https://demo.smartcart.shopping/en/admin/product" class="menu-item "><span>List</span> </a>
                        <a href="https://demo.smartcart.shopping/en/admin/product/create" class="menu-item "><span>Add New</span> </a>
                        <a href="https://demo.smartcart.shopping/en/admin/productUnit" class="menu-item "><span>Product Unit</span> </a>
                        <a href="https://demo.smartcart.shopping/en/admin/pendingProduct" class="menu-item "><span>Pending Product</span> </a>
                    </div>
                </div>

                <div class="nav-item has-sub " id="manage-sample-products">
                    <a href="javascript:void(0)"><i class="fas fa-tasks"></i><span>Manage Sample Products</span></a>
                    <div class="submenu-content">
                        <a href="https://demo.smartcart.shopping/en/admin/sample-product" class="menu-item "><span>List</span> </a>
                        <a href="https://demo.smartcart.shopping/en/admin/sample-product/create" class="menu-item "><span>Add New</span> </a>
                    </div>
                </div>

                <div class="nav-lavel" id="all-orders">Orders Management</div>

                <div class="nav-item ">
                    <a href="https://demo.smartcart.shopping/en/admin/order"><i class="fas fa-receipt"></i><span>All Orders</span></a>
                </div>

                <div class="nav-item ">
                    <a href="https://demo.smartcart.shopping/en/admin/anythingOrder"><i class="fas fa-clipboard"></i><span>Anything Orders</span></a>
                </div>



                <div class="nav-lavel" id="merchant-statements">Merchant Statements</div>

                <div class="nav-item ">
                    <a href="https://demo.smartcart.shopping/en/admin/payout/merchant"><i class="fas fa-dollar-sign"></i><span>Payout Amount</span></a>
                </div>

                <div class="nav-item ">
                    <a href="https://demo.smartcart.shopping/en/admin/transaction"><i class="fas fa-dollar-sign"></i><span>Transactions</span></a>
                </div>

                <div class="nav-lavel" id="driver-statements">Driver Statements</div>

                <div class="nav-item ">
                    <a href="https://demo.smartcart.shopping/en/admin/payout/driver"><i class="fas fa-money-bill"></i><span>Payout Amount</span></a>
                </div>

                <div class="nav-item has-sub ">
                    <a href="javascript:void(0)"><i class="fas fa-donate"></i><span>Zain Cash</span></a>
                    <div class="submenu-content">
                        <a href="https://demo.smartcart.shopping/en/admin/zain-cash" class="menu-item"><span>All</span> </a>
                        <a href="https://demo.smartcart.shopping/en/admin/zain-cash/opened" class="menu-item "><span>Open</span> </a>
                    </div>
                </div>

                <div class="nav-lavel" id="marketing">Marketing</div>

                <div class="nav-item ">
                    <a href="https://demo.smartcart.shopping/en/admin/coupon"><i class="fas fa-percent"></i><span>Coupons</span></a>
                </div>

                <div class="nav-item ">
                    <a href="https://demo.smartcart.shopping/en/admin/offers"><i class="fas fa-bullhorn"></i><span>All Offers</span></a>
                </div>
                <div class="nav-item ">
                    <a href="https://demo.smartcart.shopping/en/admin/paid-offers"><i class="fas fa-bullhorn"></i><span>Paid Offers</span></a>
                </div>

                <div class="nav-item ">
                    <a href="https://demo.smartcart.shopping/en/admin/advertisement"><i class="fas fa-images"></i><span>Banners Managment</span></a>
                </div>

                <div class="nav-lavel" id="feedback">Feedback</div>

                <div class="nav-item ">
                    <a href="https://demo.smartcart.shopping/en/admin/review/merchant"><i class="fas fa-star"></i><span>Merchant Reviews</span></a>
                </div>

                <div class="nav-item ">
                    <a href="https://demo.smartcart.shopping/en/admin/review/driver"><i class="far fa-star"></i><span>Driver Reviews</span></a>
                </div>

                <div class="nav-item ">
                    <a href="https://demo.smartcart.shopping/en/admin/review/customer"><i class="fas fa-star"></i><span>Customer Reviews</span></a>
                </div>

                <div class="nav-lavel" id="definitions">Definitions</div>

                <div class="nav-item ">
                    <a href="https://demo.smartcart.shopping/en/admin/faq"><i class="fas fa-question-circle"></i><span>Faqs</span></a>
                </div>

                <div class="nav-item ">
                    <a href="https://demo.smartcart.shopping/en/admin/feedbackQuestion"><i class="fas fa-comments"></i><span>Feedback</span></a>
                </div>

                <div class="nav-lavel" id="delivery-management">Delivery Management</div>

                <div class="nav-item ">
                    <a href="https://demo.smartcart.shopping/en/admin/tawseleh"><i class="fas fa-shipping-fast"></i><span>Tawseleh</span></a>
                </div>

                <div class="nav-item ">
                    <a href="https://demo.smartcart.shopping/en/admin/merchants-tawseleh"><i class="fas fa-truck"></i><span>Merchants tawseleh</span></a>
                </div>

                <div class="nav-item ">
                    <a href="https://demo.smartcart.shopping/en/admin/place"><i class="fas fa-map-marker"></i><span>Areas</span></a>
                </div>

                <div class="nav-item ">
                    <a href="https://demo.smartcart.shopping/en/admin/delivery-costs"><i class="fas fa-dollar-sign"></i><span>Delivery Costs</span></a>
                </div>

                <div class="nav-lavel" id="Settings">Settings</div>

                <div class="nav-item ">
                    <a href="https://demo.smartcart.shopping/en/admin/driver-commission"><i class="fa fa-percent"></i><span>Driver Commission</span></a>
                </div>

                <div class="nav-item ">
                    <a href="https://demo.smartcart.shopping/en/admin/settings"><i class="fa fa-cogs"></i><span>Settings</span></a>
                </div>
                <div class="nav-item ">
                    <a href="https://demo.smartcart.shopping/en/admin/workingHour"><i class="far fa-clock"></i><span>Working hours</span></a>
                </div>

                <div class="nav-item has-sub ">
                    <a href="javascript:void(0)"><i class="ik ik-globe"></i><span>Country</span></a>
                    <div class="submenu-content">
                        <a href="https://demo.smartcart.shopping/en/admin/country" class="menu-item"><span>List</span> </a>
                        <a href="https://demo.smartcart.shopping/en/admin/country/create" class="menu-item "><span>Add New</span> </a>
                    </div>
                </div>

                <div class="nav-item has-sub " id="nationalities">
                    <a href="javascript:void(0)"><i class="fas fa-globe-asia"></i><span>Nationalities</span></a>
                    <div class="submenu-content">
                        <a href="https://demo.smartcart.shopping/en/admin/nationality" class="menu-item"><span>List</span> </a>
                        <a href="https://demo.smartcart.shopping/en/admin/nationality/create" class="menu-item "><span>Add New</span> </a>
                    </div>
                </div>

                <div class="nav-item has-sub " id="city">
                    <a href="javascript:void(0)"><i class="fas fa-city"></i><span>City</span></a>
                    <div class="submenu-content">
                        <a href="https://demo.smartcart.shopping/en/admin/city" class="menu-item"><span>List</span> </a>
                        <a href="https://demo.smartcart.shopping/en/admin/city/create" class="menu-item "><span>Add New</span> </a>
                    </div>
                </div>

                <div class="nav-item " id="cancel-reasons'">
                    <a href="https://demo.smartcart.shopping/en/admin/cancelationReason"><i class="fas fa-ban"></i><span>Cancel Reasons</span></a>
                </div>

                <div class="nav-item " id="static-pages">
                    <a href="https://demo.smartcart.shopping/en/admin/staticPage"><i class="fas fa-columns"></i><span>Static Pages</span></a>
                </div>

                <div class="nav-item " id="walkthrough-pages">
                    <a href="https://demo.smartcart.shopping/en/admin/walkthrough"><i class="fas fa-paste"></i><span>Walkthrough Pages</span></a>
                </div>
                <div class="nav-item " id="walkthrough-pages">
                    <a href="{{Route('products')}}"><i class="fas fa-paste"></i><span>All products</span></a>
                </div>
                <div class="nav-item " id="walkthrough-pages">
                    <a href="{{Route('import-view')}}"><i class="fas fa-paste"></i><span>Import product</span></a>
                </div>
            </nav>
        </div>
    </div>
</div>
