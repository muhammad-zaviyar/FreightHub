@extends('layouts.master')

@section('styles')

      
@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Full Calendar</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Full Calendar</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->

                    <!-- Start::row-1 -->
                    <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card calendar-card">
                        <div class="card-body">
                            <div class="d-flex gap-2 justify-content-between flex-wrap align-items-center">
                            <div>
                                <h5>Monthly Overview</h5>
                                <p class="mb-0">Check your reminders and appointments for this month. You can view all upcoming events and create new ones directly from this dashboard.</p>
                            </div>
                            <div class="ms-auto">
                                <img src="{{asset('build/assets/images/media/media-98.png')}}" alt="" class="img-fluid"> 
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                        <div class="col-xxl-9">
                            <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Full Calendar</div>
                            </div>
                            <div class="card-body">
                                <div id='calendar2'></div>
                            </div>
                        </div>
                        </div>
                        <div class="col-xxl-3">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                            <div class="card-title">All Events</div>
                            <button id="addEventButton" class="btn btn-primary">Add Event</button>
                            </div>
                            <div class="card-body p-0">
                                <ul id="external-events" class="mb-0 p-3 list-unstyled column-list">
                                    <li class="fc-event mb-2 fc-h-event fc-daygrid-event fc-daygrid-block-event bg-primary-transparent" data-class="bg-primary-transparent">
                                    <div class="fc-event-main text-primary"> <span class="ms-1 me-2 d-inline-block fs-16"><i class="ri-calendar-line"></i></span>Calendar Events</div>
                                    </li>
                                    <li class="fc-event mb-2 fc-h-event fc-daygrid-event fc-daygrid-block-event bg-secondary-transparent" data-class="bg-secondary-transparent">
                                    <div class="fc-event-main text-secondary"> <span class="ms-1 me-2 d-inline-block fs-16"><i class="ri-cake-2-line"></i></span>Birthday Events</div>
                                    </li>
                                    <li class="fc-event mb-2 fc-h-event fc-daygrid-event fc-daygrid-block-event bg-success-transparent" data-class="bg-success-transparent">
                                    <div class="fc-event-main text-success"> <span class="ms-1 me-2 d-inline-block fs-16"><i class="ri-gift-line"></i></span>Holiday Calendar</div>
                                    </li>
                                    <li class="fc-event mb-2 fc-h-event fc-daygrid-event fc-daygrid-block-event bg-danger-transparent" data-class="bg-danger-transparent">
                                    <div class="fc-event-main text-danger"><span class="ms-1 me-2 d-inline-block fs-16"><i class="ri-building-line"></i></span>Office Events </div>
                                    </li>
                                    <li class="fc-event mb-2 fc-h-event fc-daygrid-event fc-daygrid-block-event bg-info-transparent" data-class="bg-info-transparent">
                                    <div class="fc-event-main text-info"><span class="ms-1 me-2 d-inline-block fs-16"><i class="ri-tent-line"></i></span>Festival Events </div>
                                    </li>
                                    <li class="fc-event mb-2 fc-h-event fc-daygrid-event fc-daygrid-block-event bg-warning-transparent" data-class="bg-warning-transparent">
                                    <div class="fc-event-main text-warning"><span class="ms-1 me-2 d-inline-block fs-16"><i class="ri-time-line"></i></span>Timeline Events </div>
                                    </li>
                                    <li class="fc-event mb-2 fc-h-event fc-daygrid-event fc-daygrid-block-event bg-teal-transparent" data-class="bg-teal-transparent">
                                    <div class="fc-event-main text-teal"><span class="ms-1 me-2 d-inline-block fs-16"><i class="ri-timeline-view"></i></span>Other Events </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card custom-card">
                            <div class="card-body">
                            <div class="upcoming-events">
                                <div class="d-flex mb-3 gap-2 flex-wrap">
                                <h6 class="mb-0">Upcoming Events</h6>
                                <a href="javascript:void(0);" class="text-success text-decoration-underline fs-12 ms-auto fw-medium">View All</a>
                                </div>
                                <ul class="mb-0 list-unstyled">
                                <li class="mb-3 d-flex gap-2 flex-wrap">
                                    <div class="fw-medium"><i class="ri-circle-line text-primary mx-2"></i>Project Meeting </div>
                                    <div class="text-muted fs-12 ms-auto">- Sep 15, 10:00 AM</div>
                                </li>
                                <li class="mb-3 d-flex gap-2 flex-wrap">
                                    <div class="fw-medium"><i class="ri-circle-line text-secondary mx-2"></i>Quarterly Review </div>
                                    <div class="text-muted fs-12 ms-auto">- Sep 22, 2:00 PM</div>
                                </li>
                                <li class="d-flex gap-2 flex-wrap">
                                    <div class="fw-medium"><i class="ri-circle-line text-success mx-2"></i>Team Building Workshop </div>
                                    <div class="text-muted fs-12 ms-auto">- Sep 30, 9:00 AM</div>
                                </li>
                                </ul>
                            </div>
                            </div>
                        </div>
                        <div class="card custom-card">
                            <div class="card-body">
                            <div class="d-flex mb-3 gap-2 flex-wrap">
                            <h6 class="mb-0">Recent Activity</h6>
                            <a href="javascript:void(0);" class="text-secondary text-decoration-underline fs-12 ms-auto fw-medium">View All</a>
                            </div>
                            <div id="full-calendar-activity">
                                <ul class="list-unstyled mb-0 fullcalendar-events-activity pe-2">
                                <li>
                                    <div class="d-flex align-items-center justify-content-between flex-wrap flex-xxl-nowrap gap-1">
                                    <p class="mb-1 fw-medium fs-12">Reviewed the final draft of the proposal</p>
                                    <span class="badge bg-primary ms-auto">Sep 10, 2024</span>
                                    </div>
                                    <div class="text-muted fs-12">
                                    <div class="avatar-list-stacked">
                                        <span class="avatar avatar-xs avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-xs avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-xs avatar-rounded bg-info">
                                            P
                                        </span>
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center justify-content-between flex-wrap flex-xxl-nowrap gap-1">
                                    <p class="mb-1 fw-medium fs-12">Completed user testing for the new feature</p>
                                    <span class="badge bg-success ms-auto">Sep 08, 2024</span>
                                    </div>
                                    <div class="text-muted fs-12">
                                    <div class="avatar-list-stacked">
                                        <span class="avatar avatar-xs avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-xs avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-xs avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                        </span>
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center justify-content-between flex-wrap flex-xxl-nowrap gap-1">
                                    <p class="mb-1 fw-medium fs-12">Updated the project timeline and shared with the team</p>
                                    <span class="badge bg-secondary ms-auto">Sep 05, 2024</span>
                                    </div>
                                    <div class="text-muted fs-12">
                                    <div class="avatar-list-stacked">
                                        <span class="avatar avatar-xs avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-xs avatar-rounded bg-success">
                                            A
                                        </span>
                                    </div>
                                    </div>
                                </li>
                                </ul>
                            </div>
                            </div>
                        </div>
                        <div class="card custom-card">
                            <div class="card-body">
                            <div class="reminders">
                                <div class="d-flex mb-3 gap-2 flex-wrap">
                                <h6 class="mb-0">Reminders</h6>
                                <a href="javascript:void(0);" class="text-primary text-decoration-underline fs-12 ms-auto fw-medium">View More</a>
                                </div>
                                <ul class="list-unstyled mb-0">
                                <li class="mb-3 d-flex gap-2 flex-wrap ms-2">
                                    <div class="d-flex gap-2">
                                    <div class=""><i class="fe fe-bell lh-1 align-center text-success"></i></div>
                                    <div class="fw-medium">Submit Report </div>
                                    </div>
                                    <div class="text-muted fs-12 ms-auto">Sep 17, 2024</div>
                                </li>
                                <li class="d-flex gap-2 flex-wrap ms-2">
                                    <div class="d-flex gap-2">
                                    <div class=""><i class="fe fe-bell lh-1 align-center text-info"></i></div>
                                    <div class="fw-medium">Prepare Presentation </div>
                                    </div>
                                    <div class="text-muted fs-12 ms-auto">Sep 28, 2024</div>
                                </li>
                                </ul>
                            </div>                        
                            </div>
                        </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                </div>
            </div>
            <!-- End::app-content -->

            <!-- Event Creation Modal -->
            <div class="modal fade" id="createEventModal" tabindex="-1" aria-labelledby="createEventModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="createEventModalLabel">Create Event</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="eventForm">
                    <div class="mb-3">
                        <label for="eventTitle" class="form-label">Event Title</label>
                        <input type="text" class="form-control" placeholder="Enter Event" id="eventTitle" autocomplete="off" required>
                        <div class="invalid-feedback">
                        Please enter an event title.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="eventDateRange" class="form-label">Event Date Range</label>
                        <input type="text" class="form-control" id="eventDateRange" placeholder="Select date range" readonly>
                    </div>
                    <div class="my-3">
                        <label for="eventColor" class="form-label">Event Color:</label>
                        <select id="eventColor" class="form-control" name="Event-Color">
                        <option value="bg-primary-transparent" selected>Primary</option>
                        <option value="bg-success-transparent">Success</option>
                        <option value="bg-danger-transparent">Danger</option>
                        <option value="bg-warning-transparent">Warning</option>
                        <option value="bg-secondary-transparent">Secondary</option>
                        <option value="bg-info-transparent">Info</option>
                    </select>
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="saveEventButton">Save Event</button>
                </div>
                </div>
            </div>
            </div>       

            <!-- Event Deletion Confirmation Modal -->
            <div class="modal fade" id="deleteEventModal" tabindex="-1" aria-labelledby="deleteEventModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="deleteEventModalLabel">Delete Event</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this event?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger" id="deleteEventButton">Delete</button>
                    </div>
                    </div>
                </div>
            </div>
    
@endsection

@section('scripts')

        <!-- Moment JS -->
        <script src="{{asset('build/assets/libs/moment/min/moment.min.js')}}"></script>

        <!-- Fullcalendar JS -->
        <script src="{{asset('build/assets/libs/fullcalendar/index.global.min.js')}}"></script>
        @vite('resources/assets/js/fullcalendar.js')
        
  
@endsection