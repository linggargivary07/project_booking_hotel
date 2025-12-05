<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Admin - Room Management</title>
    <link rel="stylesheet" href="css/admin_room_management_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>

    <div class="main-wrapper">

        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>Hotel Admin</h2>
            </div>
            <nav class="sidebar-nav">
                <ul>
                    <li><a href="#"><i class="fa-solid fa-tachometer-alt"></i> Dashboard</a></li>
                    <li class="active"><a href="#"><i class="fa-solid fa-bed"></i> Room Management</a></li>
                    <li><a href="#"><i class="fa-solid fa-calendar-check"></i> Bookings</a></li>
                    <li><a href="#"><i class="fa-solid fa-users"></i> Guests</a></li>
                    <li><a href="#"><i class="fa-solid fa-cog"></i> Settings</a></li>
                </ul>
            </nav>
        </aside>

        <div class="content-area">
            
            <header class="content-header">
                <div class="header-left">
                    <h1 class="page-title">Dashboard</h1>
                    <p class="greeting">Welcome back, Linggar</p>
                </div>
                <button class="menu-toggle"><i class="fa-solid fa-bars"></i></button>
            </header>

            <main class="dashboard-content">

                <div class="management-bar">
                    <button class="btn-primary"><i class="fa-solid fa-plus"></i> Add New Room</button>
                    
                    <div class="filter-group">
                        <span class="filter-label">Filter:</span>
                        <select id="room-filter" class="custom-select">
                            <option value="all">All Rooms</option>
                            <option value="available">Available</option>
                            <option value="occupied">Occupied</option>
                            <option value="maintenance">Maintenance</option>
                        </select>
                    </div>

                    <div class="search-box">
                        <i class="fa-solid fa-search"></i>
                        <input type="text" placeholder="Search rooms..." class="search-input" id="room-search">
                    </div>
                </div>
                
                <div class="table-responsive">
                    <table class="room-table">
                        <thead>
                            <tr>
                                <th>Room Number</th>
                                <th>Room Type</th>
                                <th>Status</th>
                                <th>Price/Night</th>
                                <th>Last Cleaned</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="room-data">
                            <tr data-status="available">
                                <td>101</td>
                                <td>Standard Single</td>
                                <td><span class="status-badge available">Available</span></td>
                                <td>$89</td>
                                <td>2 hours ago</td>
                                <td>
                                    <button class="action-btn edit-btn" title="Edit"><i class="fa-solid fa-pen"></i></button>
                                    <button class="action-btn view-btn" title="View"><i class="fa-solid fa-eye"></i></button>
                                    <button class="action-btn delete-btn" title="Delete"><i class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr data-status="occupied">
                                <td>102</td>
                                <td>Standard Double</td>
                                <td><span class="status-badge occupied">Occupied</span></td>
                                <td>$129</td>
                                <td>1 day ago</td>
                                <td>
                                    <button class="action-btn edit-btn" title="Edit"><i class="fa-solid fa-pen"></i></button>
                                    <button class="action-btn view-btn" title="View"><i class="fa-solid fa-eye"></i></button>
                                    <button class="action-btn delete-btn" title="Delete"><i class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr data-status="available">
                                <td>103</td>
                                <td>Deluxe Suite</td>
                                <td><span class="status-badge available">Available</span></td>
                                <td>$249</td>
                                <td>3 hours ago</td>
                                <td>
                                    <button class="action-btn edit-btn" title="Edit"><i class="fa-solid fa-pen"></i></button>
                                    <button class="action-btn view-btn" title="View"><i class="fa-solid fa-eye"></i></button>
                                    <button class="action-btn delete-btn" title="Delete"><i class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr data-status="maintenance">
                                <td>201</td>
                                <td>Standard Single</td>
                                <td><span class="status-badge maintenance">Maintenance</span></td>
                                <td>$89</td>
                                <td>5 hours ago</td>
                                <td>
                                    <button class="action-btn edit-btn" title="Edit"><i class="fa-solid fa-pen"></i></button>
                                    <button class="action-btn view-btn" title="View"><i class="fa-solid fa-eye"></i></button>
                                    <button class="action-btn delete-btn" title="Delete"><i class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr data-status="occupied">
                                <td>202</td>
                                <td>Standard Double</td>
                                <td><span class="status-badge occupied">Occupied</span></td>
                                <td>$129</td>
                                <td>6 hours ago</td>
                                <td>
                                    <button class="action-btn edit-btn" title="Edit"><i class="fa-solid fa-pen"></i></button>
                                    <button class="action-btn view-btn" title="View"><i class="fa-solid fa-eye"></i></button>
                                    <button class="action-btn delete-btn" title="Delete"><i class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr data-status="available">
                                <td>301</td>
                                <td>Presidential Suite</td>
                                <td><span class="status-badge available">Available</span></td>
                                <td>$499</td>
                                <td>1 hour ago</td>
                                <td>
                                    <button class="action-btn edit-btn" title="Edit"><i class="fa-solid fa-pen"></i></button>
                                    <button class="action-btn view-btn" title="View"><i class="fa-solid fa-eye"></i></button>
                                    <button class="action-btn delete-btn" title="Delete"><i class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="pagination">
                    <button class="page-arrow prev-btn" disabled>Previous</button>
                    <button class="page-number active">1</button>
                    <button class="page-number">2</button>
                    <button class="page-number">3</button>
                    <button class="page-number">4</button>
                    <button class="page-arrow next-btn">Next</button>
                </div>
            </main>
        </div>
    </div>

    <script src="script/admin_room_management_script.js"></script>
</body>
</html>