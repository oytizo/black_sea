<body>
      <aside id="left-panel" class="left-panel">
         <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
               <ul class="nav navbar-nav">
                  <li class="menu-title">Menu</li>
                  <li class="menu-item-has-children dropdown">
                     <a href="{{Route('admin.register.view') }}" >Register</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="{{Route('admin.student.view') }}" >Student</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="{{Route('admin.teacher.view') }}" >Teacher</a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a href="{{ Route('admin.department.view') }}" >Department</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="{{ Route('admin.course.view') }}" >Course</a>
                  </li>
               </ul>
            </div>
         </nav>
      </aside>