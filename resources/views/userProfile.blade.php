@extends('layouts.app')
@section('content')
<div class="content">

<!-- Inner container -->
<div class="d-flex align-items-start flex-column flex-md-row">

    <!-- Left content -->
    <div class="tab-content w-100 order-2 order-md-1">
        <div class="tab-pane fade active show" id="activity">

            <!-- Sales stats -->
            <div class="card">
                <div class="card-header header-elements-sm-inline">
                    <h6 class="card-title">Weekly statistics</h6>
                    <div class="header-elements">
                        <span><i class="icon-history mr-2 text-success"></i> Updated 3 hours ago</span>

                        <div class="list-icons ml-3">
                            <a class="list-icons-item" data-action="reload"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="chart-container">
                        <div class="chart has-fixed-height" id="tornado_negative_stack"></div>
                    </div>
                </div>
            </div>
            <!-- /sales stats -->


            <!-- Blog post -->
            <div class="card">
                <div class="card-header header-elements-sm-inline">
                    <h6 class="card-title">Himalayan sunset</h6>
                    <div class="header-elements">
                        <span><i class="icon-checkmark-circle mr-2 text-success"></i> 49 minutes ago</span>
                        <div class="list-icons ml-3">
                            <div class="dropdown">
                                <a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-arrow-down12"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Hide user posts</a>
                                    <a href="#" class="dropdown-item"><i class="icon-user-block"></i> Block user</a>
                                    <a href="#" class="dropdown-item"><i class="icon-user-minus"></i> Unfollow user</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item"><i class="icon-embed"></i> Embed post</a>
                                    <a href="#" class="dropdown-item"><i class="icon-blocked"></i> Report this post</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="card-img-actions mb-3">
                        <img class="card-img img-fluid" src="../../../../global_assets/images/placeholders/cover.jpg" alt="">
                        <div class="card-img-actions-overlay card-img">
                            <a href="blog_single.html" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
                                <i class="icon-link"></i>
                            </a>
                        </div>
                    </div>

                    <h6 class="mb-3">
                        <i class="icon-comment-discussion mr-2"></i>
                        <a href="#">Jason Ansley</a> commented:
                    </h6>

                    <blockquote class="blockquote blockquote-bordered py-2 pl-3 mb-0">
                        <p class="mb-2 font-size-base">When suspiciously goodness labrador understood rethought yawned grew piously endearingly inarticulate oh goodness jeez trout distinct hence cobra despite taped laughed the much audacious less inside tiger groaned darn stuffily metaphoric unihibitedly inside cobra.</p>
                        <footer class="blockquote-footer">Jason, <cite title="Source Title">10:39 am</cite></footer>
                    </blockquote>
                </div>

                <div class="card-footer bg-transparent d-sm-flex justify-content-sm-between align-items-sm-center border-top-0 pt-0 pb-3">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="#" class="text-default"><i class="icon-eye4 mr-2"></i> 438</a></li>
                        <li class="list-inline-item"><a href="#" class="text-default"><i class="icon-comment-discussion mr-2"></i> 71</a></li>
                    </ul>

                    <a href="#" class="d-inline-block text-default mt-2 mt-sm-0">Read post <i class="icon-arrow-right14 ml-2"></i></a>
                </div>
            </div>
            <!-- /blog post -->


            <!-- Invoices -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card border-left-3 border-left-danger rounded-left-0">
                        <div class="card-body">
                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                <div>
                                    <h6 class="font-weight-semibold">Leonardo Fellini</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Invoice #: &nbsp;0028</li>
                                        <li>Issued on: <span class="font-weight-semibold">2015/01/25</span></li>
                                    </ul>
                                </div>

                                <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
                                    <h6 class="font-weight-semibold">$8,750</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Method: <span class="font-weight-semibold">SWIFT</span></li>
                                        <li class="dropdown">
                                            Status: &nbsp;
                                            <a href="#" class="badge bg-danger-400 align-top dropdown-toggle" data-toggle="dropdown">Overdue</a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#" class="dropdown-item active"><i class="icon-alert"></i> Overdue</a>
                                                <a href="#" class="dropdown-item"><i class="icon-alarm"></i> Pending</a>
                                                <a href="#" class="dropdown-item"><i class="icon-checkmark3"></i> Paid</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#" class="dropdown-item"><i class="icon-spinner2 spinner"></i> On hold</a>
                                                <a href="#" class="dropdown-item"><i class="icon-cross2"></i> Canceled</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                            <span>
                                <span class="badge badge-mark border-danger mr-2"></span>
                                Due:
                                <span class="font-weight-semibold">2015/02/25</span>
                            </span>

                            <ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
                                <li class="list-inline-item">
                                    <a href="#" class="text-default"><i class="icon-eye8"></i></a>
                                </li>
                                <li class="list-inline-item dropdown">
                                    <a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-printer"></i> Print invoice</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit invoice</a>
                                        <a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove invoice</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card border-left-3 border-left-success rounded-left-0">
                        <div class="card-body">
                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                <div>
                                    <h6 class="font-weight-semibold">Rebecca Manes</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Invoice #: &nbsp;0027</li>
                                        <li>Issued on: <span class="font-weight-semibold">2015/02/24</span></li>
                                    </ul>
                                </div>

                                <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
                                    <h6 class="font-weight-semibold">$5,100</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Method: <span class="font-weight-semibold">Paypal</span></li>
                                        <li class="dropdown">
                                            Status: &nbsp;
                                            <a href="#" class="badge bg-success-400 align-top dropdown-toggle" data-toggle="dropdown">Paid</a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#" class="dropdown-item"><i class="icon-alert"></i> Overdue</a>
                                                <a href="#" class="dropdown-item"><i class="icon-alarm"></i> Pending</a>
                                                <a href="#" class="dropdown-item active"><i class="icon-checkmark3"></i> Paid</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#" class="dropdown-item"><i class="icon-spinner2 spinner"></i> On hold</a>
                                                <a href="#" class="dropdown-item"><i class="icon-cross2"></i> Canceled</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                            <span>
                                <span class="badge badge-mark border-success mr-2"></span>
                                Due:
                                <span class="font-weight-semibold">2015/03/24</span>
                            </span>

                            <ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
                                <li class="list-inline-item">
                                    <a href="#" class="text-default"><i class="icon-eye8"></i></a>
                                </li>
                                <li class="list-inline-item dropdown">
                                    <a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-printer"></i> Print invoice</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit invoice</a>
                                        <a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove invoice</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /invoices -->


            <!-- Video post -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header header-elements-sm-inline">
                            <h6 class="card-title">Peru mountains</h6>
                            <div class="header-elements">
                                <span><i class="icon-checkmark-circle mr-2 text-success"></i> Today, 8:39 am</span>
                                <div class="list-icons ml-3">
                                    <div class="dropdown">
                                        <a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
                                            <i class="icon-arrow-down12"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Hide user posts</a>
                                            <a href="#" class="dropdown-item"><i class="icon-user-block"></i> Block user</a>
                                            <a href="#" class="dropdown-item"><i class="icon-user-minus"></i> Unfollow user</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item"><i class="icon-embed"></i> Embed post</a>
                                            <a href="#" class="dropdown-item"><i class="icon-blocked"></i> Report this post</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <p class="mb-3">Cutting much goodness more from sympathetic unwittingly under wow affluent luckily or distinctly demonstrable strewed lewd outside coaxingly and after and rational alas this fitted. Hippopotamus noticeably oh bridled more until dutiful.</p>

                            <div class="card-img embed-responsive embed-responsive-16by9">
                                <iframe allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/126945693?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header header-elements-sm-inline">
                            <h6 class="card-title">Woodturner master</h6>
                            <div class="header-elements">
                                <span><i class="icon-checkmark-circle mr-2 text-success"></i> Yesterday, 7:52 am</span>
                                <div class="list-icons ml-3">
                                    <div class="dropdown">
                                        <a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
                                            <i class="icon-arrow-down12"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Hide user posts</a>
                                            <a href="#" class="dropdown-item"><i class="icon-user-block"></i> Block user</a>
                                            <a href="#" class="dropdown-item"><i class="icon-user-minus"></i> Unfollow user</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item"><i class="icon-embed"></i> Embed post</a>
                                            <a href="#" class="dropdown-item"><i class="icon-blocked"></i> Report this post</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <p class="mb-3">Bewitchingly amid heard by llama glanced fussily quetzal more that overcame eerie goodness badger woolly where since gosh accurate irrespective that pounded much winked urgent and furtive house gosh one while this more.</p>

                            <div class="card-img embed-responsive embed-responsive-16by9">
                                <iframe allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/126545288?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /video post -->

        </div>

        <div class="tab-pane fade" id="schedule">

            <!-- Available hours -->
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title">Available hours</h6>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload"></a>
                            <a class="list-icons-item" data-action="remove"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="chart-container">
                        <div class="chart has-fixed-height" id="available_hours"></div>
                    </div>
                </div>
            </div>
            <!-- /available hours -->


            <!-- Schedule -->
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">My schedule</h5>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload"></a>
                            <a class="list-icons-item" data-action="remove"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="my-schedule"></div>
                </div>
            </div>
            <!-- /schedule -->

        </div>

        <div class="tab-pane fade" id="settings">

            <!-- Profile info -->
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">Profile information</h5>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload"></a>
                            <a class="list-icons-item" data-action="remove"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form action="#">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Username</label>
                                    <input type="text" value="Eugene" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>Full name</label>
                                    <input type="text" value="Kopyov" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Address line 1</label>
                                    <input type="text" value="Ring street 12" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>Address line 2</label>
                                    <input type="text" value="building D, flat #67" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>City</label>
                                    <input type="text" value="Munich" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label>State/Province</label>
                                    <input type="text" value="Bayern" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label>ZIP code</label>
                                    <input type="text" value="1031" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email</label>
                                    <input type="text" readonly="readonly" value="eugene@kopyov.com" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>Your country</label>
                                    <select class="form-control form-control-select2" data-fouc>
                                        <option value="germany" selected>Germany</option> 
                                        <option value="france">France</option> 
                                        <option value="spain">Spain</option> 
                                        <option value="netherlands">Netherlands</option> 
                                        <option value="other">...</option> 
                                        <option value="uk">United Kingdom</option> 
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Phone #</label>
                                    <input type="text" value="+99-99-9999-9999" class="form-control">
                                    <span class="form-text text-muted">+99-99-9999-9999</span>
                                </div>

                                <div class="col-md-6">
                                    <label>Upload profile image</label>
                                    <input type="file" class="form-input-styled" data-fouc>
                                    <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                                </div>
                            </div>
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /profile info -->


            <!-- Account settings -->
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">Account settings</h5>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload"></a>
                            <a class="list-icons-item" data-action="remove"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form action="#">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Username</label>
                                    <input type="text" value="Kopyov" readonly="readonly" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label>Current password</label>
                                    <input type="password" value="password" readonly="readonly" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>New password</label>
                                    <input type="password" placeholder="Enter new password" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label>Repeat password</label>
                                    <input type="password" placeholder="Repeat new password" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Profile visibility</label>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="visibility" class="form-input-styled" checked data-fouc>
                                            Visible to everyone
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="visibility" class="form-input-styled" data-fouc>
                                            Visible to friends only
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="visibility" class="form-input-styled" data-fouc>
                                            Visible to my connections only
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="visibility" class="form-input-styled" data-fouc>
                                            Visible to my colleagues only
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label>Notifications</label>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-input-styled" checked data-fouc>
                                            Password expiration notification
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-input-styled" checked data-fouc>
                                            New message notification
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-input-styled" checked data-fouc>
                                            New task notification
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-input-styled">
                                            New contact request notification
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /account settings -->

        </div>
    </div>
    <!-- /left content -->


    <!-- Right sidebar component -->
    <div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-right wmin-300 border-0 shadow-0 order-1 order-lg-2 sidebar-expand-md">

        <!-- Sidebar content -->
        <div class="sidebar-content">

            <!-- Navigation -->
            <div class="card">
                <div class="card-header bg-transparent header-elements-inline">
                    <span class="card-title font-weight-semibold">Navigation</span>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body p-0">
                    <ul class="nav nav-sidebar my-2">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="icon-user"></i>
                                    My profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="icon-cash3"></i>
                                Balance
                                <span class="text-muted font-size-sm font-weight-normal ml-auto">$1,430</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="icon-tree7"></i>
                                Connections
                                <span class="badge bg-danger badge-pill ml-auto">29</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="icon-users"></i>
                                Friends
                            </a>
                        </li>

                        <li class="nav-item-divider"></li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="icon-calendar3"></i>
                                Events
                                <span class="badge bg-teal-400 badge-pill ml-auto">48</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="icon-cog3"></i>
                                Account settings
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /navigation -->


            <!-- Share your thoughts -->
            <div class="card">
                <div class="card-header bg-transparent header-elements-inline">
                    <span class="card-title font-weight-semibold">Share your thoughts</span>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form action="#">
                        <textarea name="enter-message" class="form-control mb-3" rows="3" cols="1" placeholder="Enter your message..."></textarea>

                        <div class="d-flex align-items-center">
                            <div class="list-icons list-icons-extended">
                                <a href="#" class="list-icons-item" data-popup="tooltip" title="Add photo" data-container="body"><i class="icon-images2"></i></a>
                                <a href="#" class="list-icons-item" data-popup="tooltip" title="Add video" data-container="body"><i class="icon-film2"></i></a>
                                <a href="#" class="list-icons-item" data-popup="tooltip" title="Add event" data-container="body"><i class="icon-calendar2"></i></a>
                            </div>

                            <button type="button" class="btn bg-blue btn-labeled btn-labeled-right ml-auto"><b><i class="icon-paperplane"></i></b> Share</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /share your thoughts -->


            <!-- Balance changes -->
            <div class="card">
                <div class="card-header bg-transparent header-elements-inline">
                    <span class="card-title font-weight-semibold">Balance changes</span>
                    <div class="header-elements">
                        <span><i class="icon-arrow-down22 text-danger"></i> <span class="font-weight-semibold">- 29.4%</span></span>
                    </div>
                </div>

                <div class="card-body">
                    <div class="chart-container">
                        <div class="chart has-fixed-height" id="balance_statistics"></div>
                    </div>
                </div>
            </div>
            <!-- /balance changes -->


            <!-- Latest connections -->
            <div class="card">
                <div class="card-header bg-transparent header-elements-inline">
                    <span class="card-title font-weight-semibold">Latest connections</span>
                    <div class="header-elements">
                        <span class="badge bg-success badge-pill">+32</span>
                    </div>
                </div>

                <ul class="media-list media-list-linked my-2">
                    <li class="media font-weight-semibold border-0 py-2">Office staff</li>

                    <li>
                        <a href="#" class="media">
                            <div class="mr-3">
                                <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
                            </div>
                            <div class="media-body">
                                <div class="media-title font-weight-semibold">James Alexander</div>
                                <span class="text-muted font-size-sm">UI/UX expert</span>
                            </div>
                            <div class="align-self-center ml-3">
                                <span class="badge badge-mark bg-success border-success"></span>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="media">
                            <div class="mr-3">
                                <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
                            </div>
                            <div class="media-body">
                                <div class="media-title font-weight-semibold">Jeremy Victorino</div>
                                <span class="text-muted font-size-sm">Senior designer</span>
                            </div>
                            <div class="align-self-center ml-3">
                                <span class="badge badge-mark bg-danger border-danger"></span>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="media">
                            <div class="mr-3">
                                <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
                            </div>
                            <div class="media-body">
                                <div class="media-title"><span class="font-weight-semibold">Jordana Mills</span></div>
                                <span class="text-muted">Sales consultant</span>
                            </div>
                            <div class="align-self-center ml-3">
                                <span class="badge badge-mark bg-grey-300 border-grey-300"></span>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="media">
                            <div class="mr-3">
                                <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
                            </div>
                            <div class="media-body">
                                <div class="media-title"><span class="font-weight-semibold">William Miles</span></div>
                                <span class="text-muted">SEO expert</span>
                            </div>
                            <div class="align-self-center ml-3">
                                <span class="badge badge-mark bg-success border-success"></span>
                            </div>
                        </a>
                    </li>

                    <li class="media font-weight-semibold border-0 py-2">Partners</li>

                    <li>
                        <a href="#" class="media">
                            <div class="mr-3">
                                <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
                            </div>
                            <div class="media-body">
                                <div class="media-title font-weight-semibold">Margo Baker</div>
                                <span class="text-muted font-size-sm">Google</span>
                            </div>
                            <div class="align-self-center ml-3">
                                <span class="badge badge-mark bg-success border-success"></span>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="media">
                            <div class="mr-3">
                                <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
                            </div>
                            <div class="media-body">
                                <div class="media-title font-weight-semibold">Beatrix Diaz</div>
                                <span class="text-muted font-size-sm">Facebook</span>
                            </div>
                            <div class="align-self-center ml-3">
                                <span class="badge badge-mark bg-warning-400 border-warning-400"></span>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="media">
                            <div class="mr-3">
                                <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
                            </div>
                            <div class="media-body">
                                <div class="media-title font-weight-semibold">Richard Vango</div>
                                <span class="text-muted font-size-sm">Microsoft</span>
                            </div>
                            <div class="align-self-center ml-3">
                                <span class="badge badge-mark bg-grey-300 border-grey-300"></span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /latest connections -->

        </div>
        <!-- /sidebar content -->

    </div>
    <!-- /right sidebar component -->

</div>
<!-- /inner container -->

</div>
@endsection


			