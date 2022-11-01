<aside class="left-sidebar nav-sidebar" data-sidebarbg="skin5">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                {{-- Dashboard --}}
                <li class="sidebar-item "> <a class="sidebar-link waves-effect waves-dark sidebar-link "
                        href="{{ route('admin.dashboard') }}" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a>
                </li>
                {{-- change li.selected a.active --}}
                {{-- change ul.in li.active --}}

                {{-- User --}}
                {{-- @if (Route::has('admin.user.index'))
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                    href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account"></i>
                                    <span class="hide-menu">Users </span></a>

                              <ul style="margin-left:20px" aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item"><a href="{{route('admin.user.create')}}"
                        class="sidebar-link "><i class="mdi mdi-creation"></i><span class="hide-menu"> Add User
                        </span></a></li>

                        <li class="sidebar-item"><a href="{{route('admin.user.index')}}" class="sidebar-link"><i
                                          class="mdi mdi-multiplication-box"></i><span class="hide-menu"> Manage User
                                    </span></a></li>
                  </ul>
                  </li>
                  @endif --}}
                {{-- News --}}
                <li
                    class="sidebar-item @isset($category) @if ($category == 'News') selected @endif @endisset">

                    <a class=" sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                        aria-expanded="false"><i class="mdi mdi-fan"></i>
                        <span class="hide-menu">News </span></a>

                    <ul style="margin-left:20px" aria-expanded="false"
                        class="collapse first-level @isset($category) @if ($category == 'News') in @endif
                              @endisset">
                        <li class="sidebar-item">
                            <form id="add-form-news" style="display: none" action="{{ route('admin.program.create') }}">
                                <input type="hidden" name="category" value="News">
                            </form>
                            <a onclick="document.getElementById('add-form-news').submit();" href="#"
                                class="sidebar-link active"><i class="mdi mdi-creation"></i><span class="hide-menu">
                                    Add News
                                </span></a>
                        </li>
                        <li class="sidebar-item">
                            <form id="manage-form-news" style="display: none"
                                action="{{ route('admin.program.index') }}">
                                <input type="hidden" name="category" value="News">
                            </form>
                            <a onclick="document.getElementById('manage-form-news').submit();" href="#"
                                class="sidebar-link active"><i class="mdi mdi-creation"></i><span class="hide-menu">
                                    Manage News
                                </span></a>
                        </li>


                    </ul>
                </li>
                {{-- Event --}}
                <li
                    class="sidebar-item @isset($category) @if ($category == 'Event') selected @endif @endisset">

                    <a class=" sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                        aria-expanded="false"><i class="mdi mdi-window-restore"></i>
                        <span class="hide-menu">Event </span></a>

                    <ul style="margin-left:20px" aria-expanded="false"
                        class="collapse first-level @isset($category) @if ($category == 'Event') in @endif
                              @endisset">
                        {{-- Add --}}
                        <li class="sidebar-item">
                            <form id="add-form-event" style="display: none"
                                action="{{ route('admin.program.create') }}">
                                <input type="hidden" name="category" value="Event">
                            </form>
                            <a onclick="document.getElementById('add-form-event').submit();" href="#"
                                class="sidebar-link active"><i class="mdi mdi-creation"></i><span class="hide-menu">
                                    Add Event
                                </span></a>
                        </li>
                        {{-- Manage --}}
                        <li class="sidebar-item">
                            <form id="manage-form-event" style="display: none"
                                action="{{ route('admin.program.index') }}">
                                <input type="hidden" name="category" value="Event">
                            </form>
                            <a onclick="document.getElementById('manage-form-event').submit();" href="#"
                                class="sidebar-link active"><i class="mdi mdi-creation"></i><span class="hide-menu">
                                    Manage Event
                                </span></a>
                        </li>


                    </ul>
                </li>
                {{-- Program --}}
                <li
                    class="sidebar-item @isset($category) @if ($category == 'Program') selected @endif @endisset"">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                        aria-expanded="false"><i class="mdi mdi-airplay"></i>
                        <span class="hide-menu">Services </span></a>

                    <ul style="margin-left:20px" aria-expanded="false"
                        class="collapse first-level @isset($category) @if ($category == 'Program') in @endif
                              @endisset">
                        {{-- Add --}}
                        <li class="sidebar-item">
                            <form id="add-form-program" style="display: none"
                                action="{{ route('admin.program.create') }}">
                                <input type="hidden" name="category" value="Program">
                            </form>
                            <a onclick="document.getElementById('add-form-program').submit();" href="#"
                                class="sidebar-link active"><i class="mdi mdi-creation"></i><span class="hide-menu">
                                    Add Service
                                </span></a>
                        </li>
                        {{-- Manage --}}
                        <li class="sidebar-item">
                            <form id="manage-form-program" style="display: none"
                                action="{{ route('admin.program.index') }}">
                                <input type="hidden" name="category" value="Program">
                            </form>
                            <a onclick="document.getElementById('manage-form-program').submit();" href="#"
                                class="sidebar-link active "><i class="mdi mdi-creation"></i><span class="hide-menu">
                                    Manage Service
                                </span></a>
                        </li>
                    </ul>
                </li>
                {{-- Project --}}
                <li
                    class="sidebar-item @isset($category) @if ($category == 'Project') selected @endif @endisset"">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                        aria-expanded="false"><i class="mdi mdi-move-resize-variant"></i>
                        <span class="hide-menu">Projects </span></a>

                    <ul style="margin-left:20px" aria-expanded="false"
                        class="collapse first-level @isset($category) @if ($category == 'Project') in @endif
                              @endisset">
                        {{-- Add --}}
                        <li class="sidebar-item">
                            <form id="add-form-project" style="display: none"
                                action="{{ route('admin.program.create') }}">
                                <input type="hidden" name="category" value="Project">
                            </form>
                            <a onclick="document.getElementById('add-form-project').submit();" href="#"
                                class="sidebar-link active"><i class="mdi mdi-creation"></i><span class="hide-menu">
                                    Add Project
                                </span></a>
                        </li>
                        {{-- Manage --}}
                        <li class="sidebar-item">
                            <form id="manage-form-project" style="display: none"
                                action="{{ route('admin.program.index') }}">
                                <input type="hidden" name="category" value="Project">
                            </form>
                            <a onclick="document.getElementById('manage-form-project').submit();" href="#"
                                class="sidebar-link active "><i class="mdi mdi-creation"></i><span class="hide-menu">
                                    Manage Project
                                </span></a>
                        </li>


                    </ul>
                </li>
                {{-- Associate --}}
                <li
                    class="sidebar-item @isset($category) @if ($category == 'Associate') selected @endif @endisset"">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                        aria-expanded="false"><i class="mdi mdi-comment-outline"></i>
                        <span class="hide-menu">Clients </span></a>

                    <ul style="margin-left:20px" aria-expanded="false"
                        class="collapse first-level @isset($category) @if ($category == 'Client') in @endif
                              @endisset">
                        {{-- Add --}}
                        <li class="sidebar-item">
                            <form id="add-form-client" style="display: none"
                                action="{{ route('admin.program.create') }}">
                                <input type="hidden" name="category" value="Client">
                            </form>
                            <a onclick="document.getElementById('add-form-client').submit();" href="#"
                                class="sidebar-link active"><i class="mdi mdi-creation"></i><span class="hide-menu">
                                    Add Client
                                </span></a>
                        </li>
                        {{-- Manage --}}
                        <li class="sidebar-item">
                            <form id="manage-form-client" style="display: none"
                                action="{{ route('admin.program.index') }}">
                                <input type="hidden" name="category" value="Client">
                            </form>
                            <a onclick="document.getElementById('manage-form-client').submit();" href="#"
                                class="sidebar-link active "><i class="mdi mdi-creation"></i><span class="hide-menu">
                                    Manage Clients
                                </span></a>
                        </li>


                    </ul>
                </li>
                {{-- Affiliate --}}
                {{-- <li class="sidebar-item @isset($category) @if ($category == 'Affiliate') selected @endif @endisset"">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                              aria-expanded="false"><i class="mdi mdi-comment-check"></i>
                              <span class="hide-menu">Affiliates </span></a>

                        <ul style="margin-left:20px" aria-expanded="false"
                              class="collapse first-level @isset($category) @if ($category == 'Affiliate') in @endif
                              @endisset">
                              <li class="sidebar-item">
                                    <form id="add-form-affiliate" style="display: none"
                                          action="{{route('admin.program.create')}}">
                                          <input type="hidden" name="category" value="Affiliate">
                                    </form>
                                    <a onclick="document.getElementById('add-form-affiliate').submit();" href="#"
                                          class="sidebar-link active"><i class="mdi mdi-creation"></i><span
                                                class="hide-menu">
                                                Add Affiliate
                                          </span></a>
                              </li>
                              <li class="sidebar-item">
                                    <form id="manage-form-affiliate" style="display: none"
                                          action="{{route('admin.program.index')}}">
                                          <input type="hidden" name="category" value="Affiliate">
                                    </form>
                                    <a onclick="document.getElementById('manage-form-affiliate').submit();" href="#"
                                          class="sidebar-link active "><i class="mdi mdi-creation"></i><span
                                                class="hide-menu">
                                                Manage Affiliate
                                          </span></a>
                              </li>


                        </ul>
                  </li> --}}

                {{-- Notice --}}
                <li
                    class="sidebar-item @isset($category) @if ($category == 'Notice') selected @endif @endisset">

                    <a class=" sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                        aria-expanded="false"><i class="mdi mdi-window-restore"></i>
                        <span class="hide-menu">Notices </span></a>

                    <ul style="margin-left:20px" aria-expanded="false"
                        class="collapse first-level @isset($category) @if ($category == 'Notice') in @endif
                              @endisset">
                        {{-- Add --}}
                        {{-- <li class="sidebar-item">
                            <form id="add-form-notice" style="display: none"
                                action="{{ route('admin.program.create') }}">
                                <input type="hidden" name="category" value="Notice">
                            </form>
                            <a onclick="document.getElementById('add-form-notice').submit();" href="#"
                                class="sidebar-link active"><i class="mdi mdi-creation"></i><span class="hide-menu">
                                    Add Notice
                                </span></a>
                        </li> --}}
                        {{-- Manage --}}
                        <li class="sidebar-item">
                            <form id="manage-form-notice" style="display: none"
                                action="{{ route('admin.program.index') }}">
                                <input type="hidden" name="category" value="Notice">
                            </form>
                            <a onclick="document.getElementById('manage-form-notice').submit();" href="#"
                                class="sidebar-link active"><i class="mdi mdi-creation"></i><span class="hide-menu">
                                    Manage Notice
                                </span></a>
                        </li>


                    </ul>
                </li>
                {{-- Resource --}}
                {{-- <li
                    class="sidebar-item @isset($category) @if ($category == 'Resource') selected @endif @endisset">

                    <a class=" sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                        aria-expanded="false"><i class="mdi mdi-window-restore"></i>
                        <span class="hide-menu">Resources </span></a>

                    <ul style="margin-left:20px" aria-expanded="false"
                        class="collapse first-level @isset($category) @if ($category == 'Resource') in @endif
                              @endisset">
                        {{-- Add --}}
                {{-- <li class="sidebar-item">
                            <form id="add-form-resource" style="display: none"
                                action="{{ route('admin.program.create') }}">
                                <input type="hidden" name="category" value="Resource">
                            </form>
                            <a onclick="document.getElementById('add-form-resource').submit();" href="#"
                                class="sidebar-link active"><i class="mdi mdi-creation"></i><span class="hide-menu">
                                    Add Resource
                                </span></a>
                        </li> --}}
                {{-- Manage --}}
                {{-- <li class="sidebar-item">
                            <form id="manage-form-resource" style="display: none"
                                action="{{ route('admin.program.index') }}">
                                <input type="hidden" name="category" value="Resource">
                            </form>
                            <a onclick="document.getElementById('manage-form-resource').submit();" href="#"
                                class="sidebar-link active"><i class="mdi mdi-creation"></i><span class="hide-menu">
                                    Manage Resource
                                </span></a>
                        </li>


                    </ul>
                </li> --}}
                {{-- Blog --}}
                @if (Route::has('admin.blog.index'))
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                            href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-blogger"></i>
                            <span class="hide-menu">Blogs </span></a>

                        <ul style="margin-left:20px" aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item"><a href="{{ route('admin.blog.create') }}"
                                    class="sidebar-link "><i class="mdi mdi-creation"></i><span class="hide-menu">
                                        Add Blog
                                    </span></a></li>

                            <li class="sidebar-item"><a href="{{ route('admin.blog.index') }}"
                                    class="sidebar-link"><i class="mdi mdi-multiplication-box"></i><span
                                        class="hide-menu"> Manage
                                        Blog </span></a></li>
                        </ul>
                    </li>
                @endif
                {{-- Team --}}
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-multiple-plus"></i>
                        <span class="hide-menu">Teams </span></a>

                    <ul style="margin-left:20px" aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item"><a href="{{ route('admin.team.create') }}" class="sidebar-link "><i
                                    class="mdi mdi-creation"></i><span class="hide-menu"> Add Team
                                </span></a></li>

                        <li class="sidebar-item"><a href="{{ route('admin.team.index') }}" class="sidebar-link"><i
                                    class="mdi mdi-multiplication-box"></i><span class="hide-menu"> Manage
                                    Team </span></a></li>
                    </ul>
                </li>
                {{-- Testimonials --}}
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-check"></i>
                        <span class="hide-menu">Testimonials </span></a>

                    <ul style="margin-left:20px" aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item"><a href="{{ route('admin.testimonial.create') }}"
                                class="sidebar-link "><i class="mdi mdi-creation"></i><span class="hide-menu">
                                    Add Testimonial
                                </span></a></li>

                        <li class="sidebar-item"><a href="{{ route('admin.testimonial.index') }}"
                                class="sidebar-link"><i class="mdi mdi-multiplication-box"></i><span
                                    class="hide-menu"> Manage
                                    Testimonial </span></a></li>
                    </ul>
                </li>
                {{-- Job --}}
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-cart"></i>
                        <span class="hide-menu">Jobs </span></a>

                    <ul style="margin-left:20px" aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item"><a href="{{ route('admin.job.create') }}" class="sidebar-link "><i
                                    class="mdi mdi-creation"></i><span class="hide-menu"> Add Job
                                </span></a></li>

                        <li class="sidebar-item"><a href="{{ route('admin.job.index') }}" class="sidebar-link"><i
                                    class="mdi mdi-multiplication-box"></i><span class="hide-menu"> Manage
                                    Job </span></a></li>
                    </ul>
                </li>
                {{-- Branch --}}
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-blogger"></i>
                        <span class="hide-menu">Branches </span></a>

                    <ul style="margin-left:20px" aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item"><a href="{{ route('admin.branch.create') }}"
                                class="sidebar-link "><i class="mdi mdi-creation"></i><span class="hide-menu">
                                    Add Branch
                                </span></a></li>

                        <li class="sidebar-item"><a href="{{ route('admin.branch.index') }}" class="sidebar-link"><i
                                    class="mdi mdi-multiplication-box"></i><span class="hide-menu"> Manage
                                    Branch </span></a></li>
                    </ul>
                </li>
                {{-- Gallery --}}
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-file-image"></i>
                        <span class="hide-menu">Galleries </span></a>

                    <ul style="margin-left:20px" aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item"><a href="{{ route('admin.gallery.create') }}"
                                class="sidebar-link "><i class="mdi mdi-creation"></i><span class="hide-menu">
                                    Add Gallery
                                </span></a></li>

                        <li class="sidebar-item"><a href="{{ route('admin.gallery.index') }}"
                                class="sidebar-link"><i class="mdi mdi-multiplication-box"></i><span
                                    class="hide-menu"> Manage
                                    Gallery </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item "> <a class="sidebar-link waves-effect waves-dark sidebar-link "
                        href="{{ route('admin.setting') }}" aria-expanded="false">
                        <i class="mdi mdi-settings"></i><span class="hide-menu">Setting</span></a>
                </li>
                {{-- Contacts --}}
                @if (Route::has('admin.contacts'))
                    <li class="sidebar-item "> <a class="sidebar-link waves-effect waves-dark sidebar-link "
                            href="{{ route('admin.contacts') }}" aria-expanded="false">
                            <i class="mdi mdi-contacts"></i><span class="hide-menu">Contacts</span></a>
                    </li>
                @endif
                {{-- Feedbacks --}}
                @if (Route::has('admin.feedbacks'))
                    <li class="sidebar-item "> <a class="sidebar-link waves-effect waves-dark sidebar-link "
                            href="{{ route('admin.feedbacks') }}" aria-expanded="false">
                            <i class="mdi mdi-account-multiple"></i><span class="hide-menu">Feedbacks</span></a>
                    </li>
                @endif



                {{-- Demo1 --}}
                {{-- <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-move-resize-variant"></i><span class="hide-menu">Demo 1 </span></a>
                              <ul style="margin-left:20px" aria-expanded="false" class="collapse  first-level">
                                  <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="mdi mdi-creation"></i><span class="hide-menu"> Add </span></a></li>
                                  <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="mdi mdi-multiplication-box"></i><span class="hide-menu"> Manage</span></a></li>
                              </ul>
                          </li> --}}

                {{-- Demo2 --}}
                {{-- <li class="sidebar-item "> <a class="sidebar-link waves-effect waves-dark sidebar-link "
                              href="#" aria-expanded="false">
                              <i class="mdi mdi-border-inside"></i><span class="hide-menu">Single link</span></a>
                        </li> --}}

            </ul>
        </nav>
    </div>
</aside>
