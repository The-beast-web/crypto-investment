@extends('admin.layout.master')

@section('content')
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Users Lists</h3>
                                <div class="nk-block-des text-soft">
                                    <p>You have total {{ $users->count() }} users.</p>
                                </div>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="card card-bordered card-stretch">
                            <div class="card-inner-group">
                                <div class="card-inner position-relative card-tools-toggle">
                                    <div class="card-title-group">
                                        <div class="card-tools">
                                            <div class="form-inline flex-nowrap gx-3">
                                                <div class="form-wrap w-150px">
                                                    <select class="form-select js-select2" data-search="off"
                                                        data-placeholder="Bulk Action">
                                                        <option value="">Bulk Action</option>
                                                        <option value="email">Send Email</option>
                                                        <option value="group">Change Group</option>
                                                        <option value="suspend">Suspend User</option>
                                                        <option value="delete">Delete User</option>
                                                    </select>
                                                </div>
                                                <div class="btn-wrap">
                                                    <span class="d-none d-md-block"><button
                                                            class="btn btn-dim btn-outline-light disabled">Apply</button></span>
                                                    <span class="d-md-none"><button
                                                            class="btn btn-dim btn-outline-light btn-icon disabled"><em
                                                                class="icon ni ni-arrow-right"></em></button></span>
                                                </div>
                                            </div><!-- .form-inline -->
                                        </div><!-- .card-tools -->
                                        <div class="card-tools me-n1">
                                            <ul class="btn-toolbar gx-1">
                                                <li>
                                                    <a href="#" class="btn btn-icon search-toggle toggle-search"
                                                        data-target="search"><em class="icon ni ni-search"></em></a>
                                                </li><!-- li -->
                                                <li class="btn-toolbar-sep"></li><!-- li -->
                                                <li>
                                                    <div class="toggle-wrap">
                                                        <a href="#" class="btn btn-icon btn-trigger toggle"
                                                            data-target="cardTools"><em
                                                                class="icon ni ni-menu-right"></em></a>
                                                        <div class="toggle-content" data-content="cardTools">
                                                            <ul class="btn-toolbar gx-1">
                                                                <li class="toggle-close">
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-trigger toggle"
                                                                        data-target="cardTools"><em
                                                                            class="icon ni ni-arrow-left"></em></a>
                                                                </li><!-- li -->
                                                            </ul><!-- .btn-toolbar -->
                                                        </div><!-- .toggle-content -->
                                                    </div><!-- .toggle-wrap -->
                                                </li><!-- li -->
                                            </ul><!-- .btn-toolbar -->
                                        </div><!-- .card-tools -->
                                    </div><!-- .card-title-group -->
                                    <div class="card-search search-wrap" data-search="search">
                                        <div class="card-body">
                                            <div class="search-content">
                                                <a href="#" class="search-back btn btn-icon toggle-search"
                                                    data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                                <input type="text"
                                                    class="form-control border-transparent form-focus-none"
                                                    placeholder="Search by user or email">
                                                <button class="search-submit btn btn-icon"><em
                                                        class="icon ni ni-search"></em></button>
                                            </div>
                                        </div>
                                    </div><!-- .card-search -->
                                </div><!-- .card-inner -->
                                <div class="card-inner p-0">
                                    <div class="nk-tb-list nk-tb-ulist is-compact">
                                        <div class="nk-tb-item nk-tb-head">
                                            <div class="nk-tb-col nk-tb-col-check">
                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                    <input type="checkbox" class="custom-control-input" id="uid">
                                                    <label class="custom-control-label" for="uid"></label>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col"><span class="sub-text">User</span></div>
                                            <div class="nk-tb-col tb-col-sm"><span class="sub-text">Email</span></div>
                                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Phone</span></div>
                                            <div class="nk-tb-col tb-col-xxl"><span class="sub-text">Ref</span></div>
                                            <div class="nk-tb-col tb-col-xxl"><span class="sub-text">Register Date</span></div>
                                            <div class="nk-tb-col tb-col-xxl"><span class="sub-text">Status</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-xxl"><span class="sub-text"></span>
                                            </div>
                                        </div><!-- .nk-tb-item -->
                                        @foreach ($users as $user)
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col nk-tb-col-check">
                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                    <input type="checkbox" class="custom-control-input" id="uid1">
                                                    <label class="custom-control-label" for="uid1"></label>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col">
                                                <div class="user-card">
                                                    <div class="user-name">
                                                        <span class="tb-lead">{{ $user->name }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                <span>{{ $user->email }}</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                @if (is_null($user->phone))
                                                    <span>NULL</span>
                                                    @else
                                                    <span>{{ $user->phone }}</span>
                                                @endif    
                                            </div>
                                            <div class="nk-tb-col tb-col-xxl">
                                                <span>{{ $user->ref }}</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-xxl">
                                                <span>{{ $user->created_at->toFormattedDateString() }}</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="tb-status text-success">Active</span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-2">
                                                    <li class="nk-tb-action-hidden">
                                                        <a href="{{ route('admin.users.detail', $user->id) }}" class="btn btn-sm btn-icon btn-trigger"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Details">
                                                            <em class="icon ni ni-user-fill"></em>
                                                        </a>
                                                    </li>
                                                    <li class="nk-tb-action-hidden">
                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Send Email">
                                                            <em class="icon ni ni-mail-fill"></em>
                                                        </a>
                                                    </li>
                                                    <li class="nk-tb-action-hidden">
                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Suspend">
                                                            <em class="icon ni ni-user-cross-fill"></em>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="drodown">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-trigger dropdown-toggle"
                                                                data-bs-toggle="dropdown"><em
                                                                    class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="#"><em
                                                                                class="icon ni ni-eye"></em><span>View
                                                                                Details</span></a></li>
                                                                    <li><a href="#"><em
                                                                                class="icon ni ni-repeat"></em><span>Orders</span></a>
                                                                    </li>
                                                                    <li class="divider"></li>
                                                                    <li><a href="#"><em
                                                                                class="icon ni ni-shield-star"></em><span>Reset
                                                                                Pass</span></a></li>
                                                                    <li><a href="#"><em
                                                                                class="icon ni ni-shield-off"></em><span>Reset
                                                                                2FA</span></a></li>
                                                                    <li><a href="#"><em
                                                                                class="icon ni ni-na"></em><span>Suspend
                                                                                User</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- .nk-tb-item -->
                                        @endforeach
                                    </div><!-- .nk-tb-list -->
                                </div><!-- .card-inner -->
                                <div class="card-inner">
                                    <ul class="pagination justify-content-center justify-content-md-start">
                                        <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><span class="page-link"><em
                                                    class="icon ni ni-more-h"></em></span></li>
                                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                                        <li class="page-item"><a class="page-link" href="#">7</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul><!-- .pagination -->
                                </div><!-- .card-inner -->
                            </div><!-- .card-inner-group -->
                        </div><!-- .card -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection
