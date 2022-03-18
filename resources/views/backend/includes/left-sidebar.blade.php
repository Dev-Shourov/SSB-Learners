    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href=""><span>[</span>SSB <i>Commerce</i><span>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar">
      <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
      <ul class="br-sideleft-menu">

        <li class="br-menu-item">
          <a href="{{ route('admin.dashboard') }}" class="br-menu-link active">
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">Dashboard</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->

        <!-- Dashboard Menus -->
        <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Education Department</label>
        
        <!-- Courses -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-24"></i>
            <span class="menu-item-label">Courses</span>
          </a>
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ route('course.view') }}" class="sub-link">Manage All Courses</a></li>
            <li class="sub-item"><a href="{{ route('course.create') }}" class="sub-link">Add New Course</a></li>
          </ul>
        </li>
        <!-- end Courses -->

        <!-- Curriculum -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-book-outline tx-24"></i>
            <span class="menu-item-label">Course Curriculum</span>
          </a>
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ route('curriculum.view') }}" class="sub-link">Manage All Curriculums</a></li>
            <li class="sub-item"><a href="{{ route('curriculum.create') }}" class="sub-link">Add New Curriculum</a></li>
          </ul>
        </li>
        <!-- end Curriculum -->

        <!-- Batch -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-paper-outline tx-24"></i>
            <span class="menu-item-label">Batchs</span>
          </a>
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ route('batch.view') }}" class="sub-link">Admission Going on</a></li>
            <li class="sub-item"><a href="{{ route('batch.create') }}" class="sub-link">Add New Batch</a></li>
          </ul>
        </li>
        <!-- end Batch -->

        <!-- Coupon -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-pricetag-outline tx-24"></i>
            <span class="menu-item-label">Coupons</span>
          </a>
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ route('coupon.view') }}" class="sub-link">Manage All Coupons</a></li>
            <li class="sub-item"><a href="{{ route('coupon.create') }}" class="sub-link">Add New Coupon</a></li>
          </ul>
        </li>

        <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">HR Management</label>

        <!-- Branch -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Branch</span>
          </a>
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ route('branch.view') }}" class="sub-link">Manage Branch</a></li>
            <li class="sub-item"><a href="{{ route('branch.create') }}" class="sub-link">Add New Branch</a></li>
          </ul>
        </li>
        <!-- end Branch -->

        <!-- Mentors -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-people-outline tx-24"></i>
            <span class="menu-item-label">Mentors</span>
          </a>
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ route('mentor.view') }}" class="sub-link">Manage All Mentors</a></li>
            <li class="sub-item"><a href="{{ route('mentor.create') }}" class="sub-link">Add New Mentor</a></li>
          </ul>
        </li>
        <!-- end Mentors -->
      </ul><!-- br-sideleft-menu -->

      <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Information Summary</label>

      <div class="info-list">
        <div class="info-list-item">
          <div>
            <p class="info-list-label">Memory Usage</p>
            <h5 class="info-list-amount">32.3%</h5>
          </div>
          <span class="peity-bar" data-peity='{ "fill": ["#336490"], "height": 35, "width": 60 }'>8,6,5,9,8,4,9,3,5,9</span>
        </div><!-- info-list-item -->

        <div class="info-list-item">
          <div>
            <p class="info-list-label">CPU Usage</p>
            <h5 class="info-list-amount">140.05</h5>
          </div>
          <span class="peity-bar" data-peity='{ "fill": ["#1C7973"], "height": 35, "width": 60 }'>4,3,5,7,12,10,4,5,11,7</span>
        </div><!-- info-list-item -->

        <div class="info-list-item">
          <div>
            <p class="info-list-label">Disk Usage</p>
            <h5 class="info-list-amount">82.02%</h5>
          </div>
          <span class="peity-bar" data-peity='{ "fill": ["#8E4246"], "height": 35, "width": 60 }'>1,2,1,3,2,10,4,12,7</span>
        </div><!-- info-list-item -->

        <div class="info-list-item">
          <div>
            <p class="info-list-label">Daily Traffic</p>
            <h5 class="info-list-amount">62,201</h5>
          </div>
          <span class="peity-bar" data-peity='{ "fill": ["#9C7846"], "height": 35, "width": 60 }'>3,12,7,9,2,3,4,5,2</span>
        </div><!-- info-list-item -->
      </div><!-- info-list -->

      <br>
    </div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->