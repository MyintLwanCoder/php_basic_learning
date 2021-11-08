<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toogle get frouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="colapse" data-target=".navbar-exl-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">CMS Admin</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li><a href="../index.php">Home Site</a></li>
            <!-- <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i><b class="caret"></b></a>
                <ul class="dropdown-menu message-dropdown">
                    <li class="message-preview">
                      <a href="#">
                          <div class="media">
                              <span class="pull-left">
                                  <img class="media-object" src="http://placehold.it/50x50" alt="" >
                              </span>
                              <div class="media-body">
                                  <h5 class="media-heading">
                                      <strong>John Smith</strong>
                                  </h5>
                                  <p class="small text-muted"><i class="fa fa-clock-o"></i>
                                  Yesterday at 4:32 PM</p>
                                  <p>Lorem ipsum dolor sit amet consectetur...</p>
                              </div>
                          </div>
                      </a>
                    </li>
                    <li class="message-preview">
                    <a href="#">
                          <div class="media">
                              <span class="pull-left">
                                  <img class="media-object" src="http://placehold.it/50x50" alt="" >
                              </span>
                              <div class="media-body">
                                  <h5 class="media-heading">
                                      <strong>John Smith</strong>
                                  </h5>
                                  <p class="small text-muted"><i class="fa fa-clock-o"></i>
                                  Yesterday at 4:32 PM</p>
                                  <p>Lorem ipsum dolor sit amet consectetur...</p>
                              </div>
                          </div>
                      </a>
                    </li>
                    <li class="message-preview">
                    <a href="#">
                          <div class="media">
                              <span class="pull-left">
                                  <img class="media-object" src="http://placehold.it/50x50" alt="" >
                              </span>
                              <div class="media-body">
                                  <h5 class="media-heading">
                                      <strong>John Smith</strong>
                                  </h5>
                                  <p class="small text-muted"><i class="fa fa-clock-o"></i>
                                  Yesterday at 4:32 PM</p>
                                  <p>Lorem ipsum dolor sit amet consectetur...</p>
                              </div>
                          </div>
                      </a>
                    </li>
                    <li class="message-footer">
                        <a href="#">Read All New message</a>
                      </li>
                    </ul> -->
                    <!-- <li class="dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                         <ul class="dropdown-menu alert-dropdown">
                             <li>
                                 <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                             </li>
                             <li>
                                 <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                             </li>
                             <li>
                                 <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                             </li>
                             <li class="divider"></li>
                             <li>
                                 <a href="#">View All</a>
                             </li>
                         </ul>
                    </li> -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                            </li>
                            <!-- <li>
                                <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                            </li> -->
                            <li>
                                <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-exl-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li>
                            <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                        </li>
                        <!-- <li>
                            <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                        </li> -->
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#all_post"><i class="fa fa-fw fa-arrows-v"></i> Post <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="all_post" class="collapse">
                            <li>
                                <a href="post.php">View All Post</a>
                            </li>
                            <li>
                                <a href="post.php?source=add_post">Add New Post</a>
                            </li>
                        </ul>
                        </li>
                        <li>
                            <a href="admin_categories.php"><i class="fa fa-fw fa-wrench"></i> Categories</a>
                        </li>
                        <li>
                            <a href="comment.php"><i class="fa fa-fw fa-file"></i> Comments</a>
                        </li>
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#users"><i class="fa fa-fw fa-arrows-v"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="users" class="collapse">
                            <li>
                                <a href="user.php">View All Users</a>
                            </li>
                            <li>
                                <a href="user.php?source=add_user">Add User</a>
                            </li>
                        </ul>
                        </li>
                        <li>
                            <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Profile</a>
                        </li>
                        <!-- <li>
                            <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                        </li> -->
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
      </nav>