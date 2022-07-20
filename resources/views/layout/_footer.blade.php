<footer class="page-footer">
    <div class="container">
        <p>Keroles</p>
        <p id="copyright">Copyright &copy; 2022 <a>Kero</a>. All right reserved</p>
    </div>
</footer>
<!-- add new card modal  -->
<div class="modal fade" id="addNewObligation" tabindex="-1" aria-labelledby="addNewObligation" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-sm-5 mx-50 pb-5">
                <h1 class="text-center mb-1" id="addNewCardTitle">Obligation</h1>
                <p class="text-center">This Obligation That is You Accept</p>

                <!-- form -->
                <form  id="addNewObligationForm" class="row gy-1 gx-2 mt-75">

                    <ul id="showError" class="text-danger"></ul>
                    <div class="col-12">
                        <label class="form-label" for="modalAddFullName">Full Name</label>
                        <div class="input-group input-group-merge">
                            <input id="modalAddFullName" required name="full_name" class="form-control add-credit-card-mask" type="text" placeholder="please enter your full name" aria-describedby="modalAddCard2" data-msg="Please enter your Full Name" />
                        </div>
                    </div>

                    <div class="col-12">
                        <label class="form-label" for="modalNationalNumber">National Number</label>
                        <input type="number" min="14" required id="modalNationalNumber" name="national_number" class="form-control" placeholder="please Enter National Number" />
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="modalNumber">Real Number</label>
                        <input type="number"   required id="modalNumber" name="number" class="form-control" placeholder="please Enter A Real Number" />
                    </div>
                    <div class="col-12">
                        <div class="d-flex align-items-center">
                            <div class="form-check form-switch form-check-primary me-25">
                                <input type="checkbox" value="1" name="obligation_accept" class="form-check-input" id="saveCard" checked />
                                <label class="form-check-label" for="saveCard">
                                    <span class="switch-icon-left"><i data-feather="check"></i></span>
                                    <span class="switch-icon-right"><i data-feather="x"></i></span>
                                </label>
                            </div>
                            <label class="form-check-label fw-bolder" for="saveCard">I Accepted For My Obligation</label>
                        </div>
                    </div>

                    <div class="col-12 text-center">
                        <button id="submitObligation" class="btn btn-primary me-1 mt-1">Submit</button>
                        <button type="reset" class="btn btn-outline-secondary mt-1" data-bs-dismiss="modal" aria-label="Close">
                            Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--/ add new card modal  -->

<script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>

<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('assets/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('assets/vendor/wow/wow.min.js')}}"></script>

<script src="{{asset('assets/js/theme.js')}}"></script>


<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

@include('partials.swal')
@yield('js')
</body>
</html>
