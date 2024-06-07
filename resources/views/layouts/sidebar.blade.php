 <!-- start navbar -->
 <nav class="navbar-vertical navbar">
     <div id="myScrollableElement" class="h-screen" data-simplebar>
         <!-- brand logo -->
         <a class="navbar-brand" href="{{ route('home') }}">
             <img src="{{ asset('logo.png') }}" alt="" />
         </a>

         <!-- navbar nav -->
         <ul class="navbar-nav flex-col" id="sideNavbar">
             <li class="nav-item">
                 <a class="nav-link " href="{{ route('admin.dashboard') }}">
                     <i data-feather="home" class="w-4 h-4 mr-2"></i>
                     Dashboard
                 </a>
             </li>
             @if (auth()->check() && auth()->user()->user_type === 'admin')
                 <!-- nav item -->
                 <li class="nav-item">
                     <a class="nav-link  collapsed " href="#!" data-bs-toggle="collapse"
                         data-bs-target="#organization" aria-expanded="false" aria-controls="organization">
                         <i data-feather="layers" class="w-4 h-4 mr-2"></i>
                         Organization
                     </a>
                     <div id="organization" class="collapse " data-bs-parent="#sideNavbar">
                         <ul class="nav flex-col">
                             <li class="nav-item">
                                 <a class="nav-link " href="{{ route('organization.create') }}">Add Organization</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link " href="{{ route('organizations.index') }}">Organization List</a>
                             </li>
                         </ul>
                     </div>
                 </li>
             @endif
             @if (auth()->check() && auth()->user()->user_type === 'admin')
                 <!-- nav item -->
                 <li class="nav-item">
                     <a class="nav-link  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#students"
                         aria-expanded="false" aria-controls="students">
                         <i data-feather="layers" class="w-4 h-4 mr-2"></i>
                         Students
                     </a>
                     <div id="students" class="collapse " data-bs-parent="#sideNavbar">
                         <ul class="nav flex-col">
                             <li class="nav-item">
                                 <a class="nav-link " href="{{ route('students.create') }}">Add Students</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link " href="{{ route('students.index') }}">Students List</a>
                             </li>
                         </ul>
                     </div>
                 </li><!-- nav item -->
             @endif
             @if (
                 (auth()->check() && auth()->user()->user_type === 'admin') ||
                     (auth()->check() && auth()->user()->user_type === 'organization'))
                 <li class="nav-item">
                     <a class="nav-link  collapsed " href="#!" data-bs-toggle="collapse"
                         data-bs-target="#scholarship" aria-expanded="false" aria-controls="scholarship">
                         <i data-feather="layers" class="w-4 h-4 mr-2"></i>
                         Scholarship
                     </a>
                     <div id="scholarship" class="collapse " data-bs-parent="#sideNavbar">
                         <ul class="nav flex-col">
                             @if (auth()->check() && auth()->user()->user_type === 'admin')
                                 <li class="nav-item">
                                     <a class="nav-link " href="{{ route('scholarships.create') }}">Add Scholarship</a>
                                 </li>

                                 <li class="nav-item">
                                     <a class="nav-link " href="{{ route('scholarships.index') }}">Scholarship List</a>
                                 </li>
                             @endif
                             @if (auth()->check() && auth()->user()->user_type === 'organization')
                                 <li class="nav-item">
                                     <a class="nav-link " href="{{ route('scholarships.profile.create') }}">Add
                                         Scholarship</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link " href="{{ route('scholarships.profile.list') }}">Scholarship
                                         List</a>
                                 </li>
                             @endif
                         </ul>
                     </div>
                 </li>
             @endif
             @if (auth()->check() && auth()->user()->user_type === 'student')
                 <li class="nav-item">
                     <a class="nav-link " href="{{ route('student.scholarship.index') }}">
                         <i data-feather="home" class="w-4 h-4 mr-2"></i>
                         Scholarship Status
                     </a>
                 </li>
             @endif
             @if (auth()->check() && auth()->user()->user_type === 'organization')
                 <li class="nav-item">
                     <a class="nav-link " href="{{ route('scholarship.application.list') }}">
                         <i data-feather="home" class="w-4 h-4 mr-2"></i>
                         Applicants
                     </a>
                 </li>
             @endif

             @if (auth()->check() && auth()->user()->user_type === 'admin')
                 <li class="nav-item">
                     <a class="nav-link  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#blogs"
                         aria-expanded="false" aria-controls="blogs">
                         <i data-feather="layers" class="w-4 h-4 mr-2"></i>
                         Blog
                     </a>
                     <div id="blogs" class="collapse " data-bs-parent="#sideNavbar">
                         <ul class="nav flex-col">
                             @if (auth()->check() && auth()->user()->user_type === 'admin')
                                 <li class="nav-item">
                                     <a class="nav-link " href="{{ route('blogs.create') }}">Add
                                         Blog</a>
                                 </li>

                                 <li class="nav-item">
                                     <a class="nav-link " href="{{ route('blogs.index') }}">Blog
                                         List</a>
                                 </li>
                             @endif
                         </ul>
                     </div>
                 </li>
             @endif
             @if (auth()->check() && auth()->user()->user_type === 'admin')
                 <li class="nav-item">
                     <a class="nav-link " href="{{ route('usercenter') }}">
                         <i data-feather="home" class="w-4 h-4 mr-2"></i>
                         Usercenter
                     </a>
                 </li>
             @endif
             @if (auth()->check() && auth()->user()->user_type === 'admin')
                 <li class="nav-item">
                     <a class="nav-link " href="{{ route('contact.me') }}">
                         <i data-feather="home" class="w-4 h-4 mr-2"></i>
                         Contact
                     </a>
                 </li>
             @endif
         </ul>
     </div>
 </nav>
 <!--end of navbar-->
