@extends('layouts.frontend.app')

@section('template_title')
    Book a Lube
@endsection
<style>
    /* Hide all steps by default: */
    .multi-tab {
        display: none;
        /*min-height: 80vh;*/
    }
</style>

@section('content')

    <form id="regForm" action="" method="POST">
        @csrf
        <div class="multi-tab">
            <div class="container">
                <div class="row mt-4">
                    <div class="col-lg-2 page-info-div order-lg-1 order-2">
                        <div class=" page-info">
                            <p class="mb-0 pb-0">Vehicle</p>
                            <h3 class="mb-0 pb-0">Betsey</h3>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 mx-auto order-lg-2 order-1">
                        <div class="accordian-head">
                            <div class="form-number">
                                <span>3</span>/6
                            </div>
                            <h2 class="main-heading text-white text-center mb-0 pb-0">Book a Date</h2>
                            <a href="{{route('dashboard')}}" class="text-decoration-none text-white">Home
                                <img src="{{asset('frontend/assets/images/ar.svg')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-10 mx-auto order-lg-3 order-3">
                        <div class="Scriptcontent">
                            <!-- DEMO HTML -->
                            <div class="calendar-wrapper">
                                <button id="btnPrev" type="button"></button>
                                <button id="btnNext" type="button"></button>
                                <div id="divCal"></div>
                            </div>
                            <!-- END DEMO HTML -->
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="multi-tab">
            <div class="container">
                <div class="row mt-4">
                    <div class="col-lg-2 page-info-div order-lg-1 order-2">
                        <div class="page-info">
                            <p class="mb-0 pb-0">Vehicle</p>
                            <h3 class="mb-0 pb-0">Betsey</h3>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 mx-auto order-lg-2 order-1 mb-lg-3">
                        <div class="accordian-head">
                            <div class="form-number"><span>4</span>/6</div>
                            <h2 class="main-heading text-white text-center  mb-0 pb-0">
                                Book a Time
                            </h2>
                            <a href="{{route('dashboard')}}" class="text-decoration-none text-white">Home
                                <img src="{{asset('frontend/assets/images/ar.svg')}}" alt=""/>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 mx-auto order-lg-3 order-3">
                        <div class="container">
                            <div class="row d-flex mt-2">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table date-table">
                                            <thead>
                                            <tr>
                                                <th class="today-date">
                                                    <p class="text-cneter">Monday - Nov 15</p>
                                                </th>
                                                <th>
                                                    <h3 class="table-head">Bay 1</h3>
                                                </th>
                                                <th>
                                                    <h3 class="table-head">Bay 2</h3>
                                                </th>
                                                <th>
                                                    <h3 class="table-head">Bay 3</h3>
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="">
                                                <td class="text-end time-text ">9am - 10am</td>
                                                <td class="text-center seats-status">Filled</td>
                                                <td class="text-center seats-status">Filled</td>
                                                <td class="text-center seats-status">Filled</td>

                                            </tr>
                                            <tr class="">
                                                <td class="text-end time-text"
                                                    style="width: fit-content !important;">10am - 11pm
                                                </td>
                                                <td class="text-center seats-status ">
                                                    <div class="seat-available seat-selected">Booked</div>
                                                </td>
                                                <td class="text-center seats-status ">
                                                    <div class="seat-available">Available</div>
                                                </td>
                                                <td class="text-center seats-status ">
                                                    <div class="seat-available">Available</div>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td class="text-end time-text"
                                                    style="width: fit-content !important;">11am - 9pm
                                                </td>
                                                <td class="text-center seats-status">Filled</td>
                                                <td class="text-center seats-status">Filled</td>
                                                <td class="text-center seats-status">Filled</td>
                                            </tr>
                                            <tr class="">
                                                <td class="text-end time-text"
                                                    style="width: fit-content !important;">12pm - 11pm
                                                </td>
                                                <td class="text-center seats-status">Filled</td>
                                                <td class="text-center seats-status">Filled</td>
                                                <td class="text-center seats-status">Filled</td>
                                            </tr>
                                            <tr class="">
                                                <td class="text-end time-text"
                                                    style="width: fit-content !important;">1pm - 5pm
                                                </td>
                                                <td class="text-center seats-status">Filled</td>
                                                <td class="text-center seats-status">Filled</td>
                                                <td class="text-center seats-status">Filled</td>
                                            </tr>
                                            <tr class="">
                                                <td class="text-end time-text"
                                                    style="width: fit-content !important;">2pm - 11am
                                                </td>
                                                <td class="text-center seats-status">Filled</td>
                                                <td class="text-center seats-status">Filled</td>
                                                <td class="text-center seats-status">Filled</td>
                                            </tr>
                                            <tr class="">
                                                <td class="text-end time-text"
                                                    style="width: fit-content !important;">3pm - 7pm
                                                </td>
                                                <td class="text-center seats-status">Filled</td>
                                                <td class="text-center seats-status">Filled</td>
                                                <td class="text-center seats-status">Filled</td>
                                            </tr>
                                            <tr class="">
                                                <td class="text-end time-text"
                                                    style="width: fit-content !important;">4pm - 5pm
                                                </td>
                                                <td class="text-center seats-status">Filled</td>
                                                <td class="text-center seats-status">Filled</td>
                                                <td class="text-center seats-status">Filled</td>
                                            </tr>
                                            <tr class="">
                                                <td class="text-end time-text"
                                                    style="width: fit-content !important;">5pm - 6pm
                                                </td>
                                                <td class="text-center seats-status">Filled</td>
                                                <td class="text-center seats-status">Filled</td>
                                                <td class="text-center seats-status">Filled</td>
                                            </tr>
                                            <tr class="">
                                                <td class="text-end time-text"
                                                    style="width: fit-content !important;">6pm - 8pm
                                                </td>
                                                <td class="text-center seats-status">Filled</td>
                                                <td class="text-center seats-status">Filled</td>
                                                <td class="text-center seats-status">Filled</td>
                                            </tr>
                                            <tr class="">
                                                <td class="text-end time-text"
                                                    style="width: fit-content !important;">7pm - 11am
                                                </td>
                                                <td class="text-center seats-status">Filled</td>
                                                <td class="text-center seats-status">Filled</td>
                                                <td class="text-center seats-status">Filled</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div
                            class="d-flex align-items-center my-5 justify-content-center mx-auto flex-md-row flex-column">
                            <div class="me-md-2 me-0  btn-div order-md-1 order-2">
                                <a href="step3.html" class="main-btn-blank">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M8.29289 11.2929C7.90237 11.6834 7.90237 12.3166 8.29289 12.7071L13.2929 17.7071C13.6834 18.0976 14.3166 18.0976 14.7071 17.7071C15.0976 17.3166 15.0976 16.6834 14.7071 16.2929L10.4142 12L14.7071 7.70711C15.0976 7.31658 15.0976 6.68342 14.7071 6.29289C14.3166 5.90237 13.6834 5.90237 13.2929 6.29289L8.29289 11.2929Z" />
                                    </svg>

                                    Back
                                </a>
                            </div>
                            <div class="btn-div order-md-2 order-1 mb-md-0 mb-3">
                                <a href="step5.html" class="main-btn2">Submit & Next</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="multi-tab">
            <div class="container-fluid">
                <div class="d-flex align-items-center">
                    <img src="{{asset('frontend/assets/images/Avatar.png')}}" alt="" class="profile-img">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle profile-btn" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            Craig
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="settings.html">
                                    <svg width="20" class="me-2"
                                         height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M17.2685 13.4449C17.9589 12.2492 17.5492 10.7202 16.3534 10.0299L16.3017 9.99998L16.3534 9.97011C17.5491 9.27975 17.9588 7.75078 17.2685 6.55504L16.4351 5.11167C15.7448 3.91594 14.2158 3.50625 13.0201 4.1966L12.9682 4.22652V4.16669C12.9682 2.78598 11.849 1.66669 10.4682 1.66669L8.80158 1.66669C7.42087 1.66669 6.30158 2.78598 6.30158 4.16669L6.30158 4.22642L6.24981 4.19654C5.05408 3.50618 3.52511 3.91587 2.83475 5.1116L2.00142 6.55498C1.31106 7.75071 1.72075 9.27968 2.91648 9.97004L2.96833 9.99997L2.91643 10.0299C1.7207 10.7203 1.31101 12.2493 2.00137 13.445L2.8347 14.8884C3.52506 16.0841 5.05403 16.4938 6.24977 15.8034L6.30158 15.7735V15.8334C6.30158 17.2141 7.42087 18.3334 8.80158 18.3334H10.4682C11.849 18.3334 12.9682 17.2141 12.9682 15.8334V15.7734L13.0201 15.8034C14.2158 16.4937 15.7448 16.084 16.4352 14.8883L17.2685 13.4449ZM13.8016 5.66989C12.6905 6.3114 11.3016 5.50952 11.3016 4.22651V4.16669C11.3016 3.70645 10.9285 3.33335 10.4682 3.33335L8.80158 3.33335C8.34136 3.33335 7.96828 3.70642 7.96825 4.16663V4.22643C7.96824 5.50939 6.57943 6.31126 5.46833 5.66984L5.41648 5.63991C5.0179 5.40979 4.50825 5.54636 4.27813 5.94493L3.44479 7.38831C3.21467 7.78689 3.35124 8.29655 3.74981 8.52666L3.80159 8.55655C4.91277 9.19802 4.91281 10.8018 3.80166 11.4434L3.74977 11.4733C3.35119 11.7034 3.21463 12.2131 3.44474 12.6117L4.27808 14.055C4.5082 14.4536 5.01786 14.5902 5.41643 14.3601L5.46825 14.3301C6.57936 13.6887 7.96824 14.4905 7.96825 15.7735V15.8334C7.96825 16.2936 8.34134 16.6667 8.80158 16.6667H10.4682C10.9285 16.6667 11.3016 16.2936 11.3016 15.8334V15.7734C11.3016 14.4904 12.6905 13.6885 13.8017 14.3301L13.8534 14.36C14.252 14.5901 14.7617 14.4536 14.9918 14.055L15.8251 12.6116C16.0552 12.213 15.9187 11.7034 15.5201 11.4732L15.4683 11.4433C14.3572 10.8018 14.3573 9.19809 15.4683 8.55661L15.5201 8.52673C15.9187 8.2966 16.0552 7.78695 15.8251 7.38838L14.9918 5.945C14.7616 5.54642 14.252 5.40986 13.8534 5.63998L13.8016 5.66989Z"
                                              fill="#39455F"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M9.63477 11.6666C10.5552 11.6666 11.3014 10.9204 11.3014 9.99997C11.3014 9.0795 10.5552 8.3333 9.63477 8.3333C8.71429 8.3333 7.9681 9.0795 7.9681 9.99997C7.9681 10.9204 8.71429 11.6666 9.63477 11.6666ZM9.63477 13.3333C11.4757 13.3333 12.9681 11.8409 12.9681 9.99997C12.9681 8.15902 11.4757 6.66664 9.63477 6.66664C7.79382 6.66664 6.30143 8.15902 6.30143 9.99997C6.30143 11.8409 7.79382 13.3333 9.63477 13.3333Z"
                                              fill="#39455F"/>
                                    </svg>
                                    Settings</a></li>
                            <li><a class="dropdown-item" href="index.html">
                                    <svg class="me-2" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.5 17.5H4.16667C3.72464 17.5 3.30072 17.3244 2.98816 17.0118C2.67559 16.6993 2.5 16.2754 2.5 15.8333V4.16667C2.5 3.72464 2.67559 3.30072 2.98816 2.98816C3.30072 2.67559 3.72464 2.5 4.16667 2.5H7.5"
                                            stroke="#39455F" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                        <path d="M13.334 14.1667L17.5006 10L13.334 5.83337" stroke="#39455F"
                                              stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M17.5 10H7.5" stroke="#39455F" stroke-width="1.5"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                    Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row mt-4">
                    <div class="col-lg-2 page-info-div order-lg-1 order-2">
                        <div class="page-info">
                            <p class="mb-0 pb-0">Vehicle</p>
                            <h3 class="mb-0 pb-0">Betsey</h3>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 mx-auto order-lg-2 order-1">
                        <div class="accordian-head">
                            <div class="form-number">
                                <span>5</span>/6
                            </div>
                            <h2 class="main-heading text-white text-center mb-0 pb-0">Book a Lube</h2>
                            <a href="{{route('dashboard')}}" class="text-decoration-none text-white">Home
                                <img src="{{asset('frontend/assets/images/ar.svg')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-10 mx-auto mt-lg-3 order-lg-3 order-3 ">
                        <form action="" class="mt-3">
                            <div>
                                <div class="d-flex align-items-center check-div mb-3">
                                    <p class="mb-0 pb-0">Engine Oil/Filter</p>
                                    <div class="border mx-3"></div>
                                    <div class="check--div">
                                        <input type="checkbox" name="" id="" class="me-2 form-check-input">
                                        <span class="mb-0 pb-0">
                                            $25
                                        </span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center check-div mb-3">
                                    <p class="mb-0 pb-0">Air Filter</p>
                                    <div class="border mx-3"></div>
                                    <div class="check--div">
                                        <input type="checkbox" name="" id="" class="me-2 form-check-input">
                                        <span class="mb-0 pb-0">
                                            $10
                                        </span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center check-div mb-3">
                                    <p class="mb-0 pb-0">Transmission Oil</p>
                                    <div class="border mx-3"></div>
                                    <div class="check--div">
                                        <input type="checkbox" name="" id="" class="me-2 form-check-input">
                                        <span class="mb-0 pb-0">
                                            $2
                                        </span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center check-div mb-3">
                                    <p class="mb-0 pb-0">Tire Rotation</p>
                                    <div class="border mx-3"></div>
                                    <div class="check--div">
                                        <input type="checkbox" name="" id="" class="me-2 form-check-input">
                                        <span class="mb-0 pb-0">
                                            $25
                                        </span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center check-div mb-3">
                                    <p class="mb-0 pb-0">Tire Charge over</p>
                                    <div class="border mx-3"></div>
                                    <div class="check--div">
                                        <input type="checkbox" name="" id="" class="me-2 form-check-input">
                                        <span class="mb-0 pb-0">
                                            $25
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="multi-tab">
            <div class="container">
                <div class="row mt-4">
                    <div class="col-lg-11 col-md-11 mx-auto">
                        <div class="accordian-head">
                            <div class="form-number">
                                <span>6</span>/6
                            </div>
                            <h2 class="main-heading text-white text-center mb-0 pb-0">Purchase Summary</h2>
                            <a href="{{route('dashboard')}}" class="text-decoration-none text-white">Home
                                <img src="{{asset('frontend/assets/images/ar.svg')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-10 mx-auto  mt-lg-3 ">
                        <div class="summary-card">
                            <div class="summary-card-heading">
                                Booking Information
                            </div>
                            <div class="summary-card-header my-3">
                                <p class="mb-0 pb-0">Vehicle Name</p>
                                <h2 class="mb-0 pb-0">Betsey</h2>
                            </div>
                            <div class="summary-card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-0 pb-0"><span>Date</span>5/12/2023</p>
                                    <p class="mb-0 pb-0"><span>Time:</span>12:00 pm</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-0 pb-0">Engine Oil/Filter</p>
                                    <p class="mb-0 pb-0">$25</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-0 pb-0">Tire Exchange</p>
                                    <p class="mb-0 pb-0">$10</p>
                                </div>
                                <div class="border-new"></div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-0 pb-0">HST@13%</p>
                                    <p class="mb-0 pb-0">$10</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center bg-gray-light">
                                    <h4 class="mb-0 pb-0">Total</h4>
                                    <h4 class="mb-0 pb-0">$45</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-10 mx-auto  mt-lg-3 mt-4 ">
                        <div class="summary-card">
                            <div class="summary-card-heading">
                                Payment Information
                            </div>
                            <div class="summary-card-body mt-3">
                                <div class="mb-2 lube-input">
                                    <label for="number" class="form-label">Card Number</label>
                                    <input type="text" class="form-control ps-2" id="number"
                                           placeholder="5451215215202">
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="mb-2 lube-input">
                                        <label for="number" class="form-label">MM/YY</label>
                                        <input type="text" class="form-control ps-2" id="number" placeholder="05/23">
                                    </div>
                                    <div class="mb-2 lube-input ms-2">
                                        <label for="number" class="form-label">CSV</label>
                                        <input type="text" class="form-control ps-2" id="number" placeholder="133">
                                    </div>
                                </div>
                                <div class="form-check d-flex align-items-center justify-content-start">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        <p class="mb-0 pb-0 mt-3 text-start">Save card information for next payment</p>
                                    </label>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div style="overflow:auto;" class="form-buttons">

            <div class=" d-flex align-items-center my-5 justify-content-center mx-auto flex-md-row flex-column ">
                <div class="me-md-2 me-0  btn-div order-md-1 order-2">
                    <button type="button" class="main-btn-blank" onclick="nextPrev(-1)" id="prevBtn">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M8.29289 11.2929C7.90237 11.6834 7.90237 12.3166 8.29289 12.7071L13.2929 17.7071C13.6834 18.0976 14.3166 18.0976 14.7071 17.7071C15.0976 17.3166 15.0976 16.6834 14.7071 16.2929L10.4142 12L14.7071 7.70711C15.0976 7.31658 15.0976 6.68342 14.7071 6.29289C14.3166 5.90237 13.6834 5.90237 13.2929 6.29289L8.29289 11.2929Z"/>
                        </svg>
                        Back
                    </button>
                </div>
                <div class="btn-div order-md-2 order-1 mb-md-0 mb-3">

                    <button type="button" class="main-btn2" id="nextBtn" onclick="nextPrev(1)">Submit</button>
                </div>
            </div>
        </div>

    </form>

    <!-- Modal -->
    <div class="modal fade modal-done" id="done" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered confirm-modal">
            <div class="modal-content">
                <div class="modal-body">
                    <h1 class="main-heading text-center">Confirm Booking</h1>
                    <div class="text texr-centerd f-16">
                        You will only be billed once work is complete
                        <br> <br>

                        If more than 10 minutes late, your appointment will be cancelled and you will charged a
                        <b>$20 cancellation fee</b>.
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-center  flex-md-row flex-column my-4">
                    <a href="booking.html" class="main-btn-blank order-md-1 order-2">Cancel</a>
                    <a href="confirm.html" class="main-btn2 ms-md-2 mb-md-0 mb-2 order-md-2 order-1">OK</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.slim.js"
            integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
    <!-- Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"
            integrity="sha512-nnzkI2u2Dy6HMnzMIkh7CPd1KX445z38XIu4jG1jGw7x5tSL3VBjE44dY4ihMU1ijAQV930SPM12cCFrB18sVw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- bootstrap5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>

    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("multi-tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            //... and run a function that will display the correct step indicator:
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("multi-tab");
            var formBtns = document.getElementsByClassName("form-buttons");
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {

                $('#done').modal('show');

                // return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }



    </script>
    <script src="{{asset('frontend/assets/js/calendar.js')}}"></script>
@endsection
