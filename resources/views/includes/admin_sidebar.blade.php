<aside class="left-sidebar nav-sidebar" data-sidebarbg="skin5">
      <div class="scroll-sidebar">
            <nav class="sidebar-nav">
                  <ul id="sidebarnav" class="p-t-30">
                        {{-- Dashboard --}}
                        <li class="sidebar-item "> <a class="sidebar-link waves-effect waves-dark sidebar-link "
                                    href="{{route('admin.dashboard')}}" aria-expanded="false">
                                    <i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        {{--change li.selected a.active--}}
                        {{--change ul.in li.active--}}

                        {{-- User --}}
                        @if(Route::has('admin.user.index'))
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                    href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account"></i>
                                    <span class="hide-menu">Users </span></a>

                              <ul style="margin-left:20px" aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item"><a href="{{route('admin.user.create')}}"
                                                class="sidebar-link "><i class="mdi mdi-creation"></i><span
                                                      class="hide-menu"> Add User </span></a></li>

                                    <li class="sidebar-item"><a href="{{route('admin.user.index')}}"
                                                class="sidebar-link"><i class="mdi mdi-multiplication-box"></i><span
                                                      class="hide-menu"> Manage User </span></a></li>
                              </ul>
                        </li>
                        @endif

                        {{-- Blog --}}
                        @if(Route::has('admin.blog.index'))
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                    href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-blogger"></i>
                                    <span class="hide-menu">Blogs </span></a>

                              <ul style="margin-left:20px" aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item"><a href="{{route('admin.blog.create')}}"
                                                class="sidebar-link "><i class="mdi mdi-creation"></i><span
                                                      class="hide-menu"> Add Blog </span></a></li>

                                    <li class="sidebar-item"><a href="{{route('admin.blog.index')}}"
                                                class="sidebar-link"><i class="mdi mdi-multiplication-box"></i><span
                                                      class="hide-menu"> Manage Blog </span></a></li>
                              </ul>
                        </li>
                        @endif
                        {{-- Contacts --}}
                        @if(Route::has('admin.contacts'))
                        <li class="sidebar-item "> <a class="sidebar-link waves-effect waves-dark sidebar-link "
                                    href="{{route('admin.contacts')}}" aria-expanded="false">
                                    <i class="mdi mdi-contacts"></i><span class="hide-menu">Contacts</span></a>
                        </li>
                        @endif
                        {{-- Feedbacks --}}
                        @if(Route::has('admin.feedbacks'))
                        <li class="sidebar-item "> <a class="sidebar-link waves-effect waves-dark sidebar-link "
                                    href="{{route('admin.feedbacks')}}" aria-expanded="false">
                                    <i class="mdi mdi-account-multiple"></i><span class="hide-menu">Feedbacks</span></a>
                        </li>
                        @endif



                        {{-- Demo1 --}}
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-move-resize-variant"></i><span class="hide-menu">Demo 1 </span></a>
                              <ul style="margin-left:20px" aria-expanded="false" class="collapse  first-level">
                                  <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="mdi mdi-creation"></i><span class="hide-menu"> Add </span></a></li>
                                  <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="mdi mdi-multiplication-box"></i><span class="hide-menu"> Manage</span></a></li>
                              </ul>
                          </li>

                          {{-- Demo2 --}}
                          <li class="sidebar-item "> <a class="sidebar-link waves-effect waves-dark sidebar-link "
                              href="#" aria-expanded="false">
                              <i class="mdi mdi-border-inside"></i><span class="hide-menu">Single link</span></a>
                        </li>

                  </ul>
            </nav>
      </div>
</aside>