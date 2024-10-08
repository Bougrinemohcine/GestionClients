 <!-- Navbar Header -->
 <nav
 class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
>
 <div class="container-fluid">
   <nav
     class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex"
   >
     <div class="input-group">
       <div class="input-group-prepend">
         <button type="submit" class="btn btn-search pe-1">
           <i class="fa fa-search search-icon"></i>
         </button>
       </div>
       <input
         type="text"
         placeholder="Search ..."
         class="form-control"
       />
     </div>
   </nav>

   <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
     <li
       class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none"
     >
       <a
         class="nav-link dropdown-toggle"
         data-bs-toggle="dropdown"
         href="#"
         role="button"
         aria-expanded="false"
         aria-haspopup="true"
       >
         <i class="fa fa-search"></i>
       </a>
       <ul class="dropdown-menu dropdown-search animated fadeIn">
         <form class="navbar-left navbar-form nav-search">
           <div class="input-group">
             <input
               type="text"
               placeholder="Search ..."
               class="form-control"
             />
           </div>
         </form>
       </ul>
     </li>
     <li class="nav-item topbar-icon dropdown hidden-caret">
       <a
         class="nav-link dropdown-toggle"
         href="#"
         id="messageDropdown"
         role="button"
         data-bs-toggle="dropdown"
         aria-haspopup="true"
         aria-expanded="false"
       >
         <i class="fa fa-envelope"></i>
       </a>
       <ul
         class="dropdown-menu messages-notif-box animated fadeIn"
         aria-labelledby="messageDropdown"
       >
         <li>
           <div
             class="dropdown-title d-flex justify-content-between align-items-center"
           >
             Messages
             <a href="#" class="small">Mark all as read</a>
           </div>
         </li>
         <li>
           <div class="message-notif-scroll scrollbar-outer">
             <div class="notif-center">
               <a href="#">
                 <div class="notif-img">
                   <img
                     src="assets/img/jm_denis.jpg"
                     alt="Img Profile"
                   />
                 </div>
                 <div class="notif-content">
                   <span class="subject">Jimmy Denis</span>
                   <span class="block"> How are you ? </span>
                   <span class="time">5 minutes ago</span>
                 </div>
               </a>
               <a href="#">
                 <div class="notif-img">
                   <img
                     src="assets/img/chadengle.jpg"
                     alt="Img Profile"
                   />
                 </div>
                 <div class="notif-content">
                   <span class="subject">Chad</span>
                   <span class="block"> Ok, Thanks ! </span>
                   <span class="time">12 minutes ago</span>
                 </div>
               </a>
               <a href="#">
                 <div class="notif-img">
                   <img
                     src="assets/img/mlane.jpg"
                     alt="Img Profile"
                   />
                 </div>
                 <div class="notif-content">
                   <span class="subject">Jhon Doe</span>
                   <span class="block">
                     Ready for the meeting today...
                   </span>
                   <span class="time">12 minutes ago</span>
                 </div>
               </a>
               <a href="#">
                 <div class="notif-img">
                   <img
                     src="assets/img/talha.jpg"
                     alt="Img Profile"
                   />
                 </div>
                 <div class="notif-content">
                   <span class="subject">Talha</span>
                   <span class="block"> Hi, Apa Kabar ? </span>
                   <span class="time">17 minutes ago</span>
                 </div>
               </a>
             </div>
           </div>
         </li>
         <li>
           <a class="see-all" href="javascript:void(0);"
             >See all messages<i class="fa fa-angle-right"></i>
           </a>
         </li>
       </ul>
     </li>
     <li class="nav-item topbar-icon dropdown hidden-caret">
       <a
         class="nav-link dropdown-toggle"
         href="#"
         id="notifDropdown"
         role="button"
         data-bs-toggle="dropdown"
         aria-haspopup="true"
         aria-expanded="false"
       >
         <i class="fa fa-bell"></i>
         <span class="notification">4</span>
       </a>
       <ul
         class="dropdown-menu notif-box animated fadeIn"
         aria-labelledby="notifDropdown"
       >
         <li>
           <div class="dropdown-title">
             You have 4 new notification
           </div>
         </li>
         <li>
           <div class="notif-scroll scrollbar-outer">
             <div class="notif-center">
               <a href="#">
                 <div class="notif-icon notif-primary">
                   <i class="fa fa-user-plus"></i>
                 </div>
                 <div class="notif-content">
                   <span class="block"> New user registered </span>
                   <span class="time">5 minutes ago</span>
                 </div>
               </a>
               <a href="#">
                 <div class="notif-icon notif-success">
                   <i class="fa fa-comment"></i>
                 </div>
                 <div class="notif-content">
                   <span class="block">
                     Rahmad commented on Admin
                   </span>
                   <span class="time">12 minutes ago</span>
                 </div>
               </a>
               <a href="#">
                 <div class="notif-img">
                   <img
                     src="assets/img/profile2.jpg"
                     alt="Img Profile"
                   />
                 </div>
                 <div class="notif-content">
                   <span class="block">
                     Reza send messages to you
                   </span>
                   <span class="time">12 minutes ago</span>
                 </div>
               </a>
               <a href="#">
                 <div class="notif-icon notif-danger">
                   <i class="fa fa-heart"></i>
                 </div>
                 <div class="notif-content">
                   <span class="block"> Farrah liked Admin </span>
                   <span class="time">17 minutes ago</span>
                 </div>
               </a>
             </div>
           </div>
         </li>
         <li>
           <a class="see-all" href="javascript:void(0);"
             >See all notifications<i class="fa fa-angle-right"></i>
           </a>
         </li>
       </ul>
     </li>
     <li class="nav-item topbar-icon dropdown hidden-caret">
       <a
         class="nav-link"
         data-bs-toggle="dropdown"
         href="#"
         aria-expanded="false"
       >
         <i class="fas fa-layer-group"></i>
       </a>
       <div class="dropdown-menu quick-actions animated fadeIn">
         <div class="quick-actions-header">
           <span class="title mb-1">Quick Actions</span>
           <span class="subtitle op-7">Shortcuts</span>
         </div>
         <div class="quick-actions-scroll scrollbar-outer">
           <div class="quick-actions-items">
             <div class="row m-0">
               <a class="col-6 col-md-4 p-0" href="#">
                 <div class="quick-actions-item">
                   <div class="avatar-item bg-danger rounded-circle">
                     <i class="far fa-calendar-alt"></i>
                   </div>
                   <span class="text">Calendar</span>
                 </div>
               </a>
               <a class="col-6 col-md-4 p-0" href="#">
                 <div class="quick-actions-item">
                   <div
                     class="avatar-item bg-warning rounded-circle"
                   >
                     <i class="fas fa-map"></i>
                   </div>
                   <span class="text">Maps</span>
                 </div>
               </a>
               <a class="col-6 col-md-4 p-0" href="#">
                 <div class="quick-actions-item">
                   <div class="avatar-item bg-info rounded-circle">
                     <i class="fas fa-file-excel"></i>
                   </div>
                   <span class="text">Reports</span>
                 </div>
               </a>
               <a class="col-6 col-md-4 p-0" href="#">
                 <div class="quick-actions-item">
                   <div
                     class="avatar-item bg-success rounded-circle"
                   >
                     <i class="fas fa-envelope"></i>
                   </div>
                   <span class="text">Emails</span>
                 </div>
               </a>
               <a class="col-6 col-md-4 p-0" href="#">
                 <div class="quick-actions-item">
                   <div
                     class="avatar-item bg-primary rounded-circle"
                   >
                     <i class="fas fa-file-invoice-dollar"></i>
                   </div>
                   <span class="text">Invoice</span>
                 </div>
               </a>
               <a class="col-6 col-md-4 p-0" href="#">
                 <div class="quick-actions-item">
                   <div
                     class="avatar-item bg-secondary rounded-circle"
                   >
                     <i class="fas fa-credit-card"></i>
                   </div>
                   <span class="text">Payments</span>
                 </div>
               </a>
             </div>
           </div>
         </div>
       </div>
     </li>
        
        @if (Route::has('login'))
            <nav class="-mx-3 flex flex-1 justify-end">
                @auth
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="flex justify-between h-16">
                            <!-- Settings Dropdown -->
                            <div class="hidden sm:flex sm:items-center sm:ms-6">
                                <x-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                            <div>{{ Auth::user()->name }}</div>
                
                                            <div class="ms-1">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        </button>
                                    </x-slot>
                
                                    <x-slot name="content">
                                        <x-dropdown-link :href="route('profile.edit')">
                                            {{ __('Profile') }}
                                        </x-dropdown-link>
                
                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                
                                            <x-dropdown-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form>
                                    </x-slot>
                                </x-dropdown>
                            </div>
                
                            <!-- Hamburger -->
                            <div class="-me-2 flex items-center sm:hidden">
                                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                
                    <!-- Responsive Navigation Menu -->
                    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
                        <div class="pt-2 pb-3 space-y-1">
                            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                {{ __('Dashboard') }}
                            </x-responsive-nav-link>
                        </div>
                
                        <!-- Responsive Settings Options -->
                        <div class="pt-4 pb-1 border-t border-gray-200">
                            <div class="px-4">
                                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                            </div>
                
                            <div class="mt-3 space-y-1">
                                <x-responsive-nav-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-responsive-nav-link>
                
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                
                                    <x-responsive-nav-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-responsive-nav-link>
                                </form>
                            </div>
                        </div>
                    </div>
                @else
                    <a
                        href="{{ route('login') }}"
                        class="btn btn-primary"
                    >
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            class="btn btn-success"
                        >
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif   
   </ul>
 </div>
</nav>
<!-- End Navbar -->