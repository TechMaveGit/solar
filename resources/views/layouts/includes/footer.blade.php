                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; 2024 Munster Solar. Design & Developed by <a
                                    href="https://techmavesoftware.com/" target="_blank">TechMave Software</a></div>
                            <div class="nk-footer-links">
                                <ul class="nav nav-sm">

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/bundlee5ca.js')}}"></script>
    <script src="{{ asset('assets/js/scriptse5ca.js')}}"></script>
    <script src="{{ asset('assets/js/demo-settingse5ca.js')}}"></script>
    <script src="{{ asset('assets/js/charts/gd-defaulte5ca.js')}}"></script>
    <script src="{{ asset('assets/js/example-sweetalerte5ca.js?ver=3.2.3')}}"></script>

    <script src="{{ asset('assets/js/libs/datatable-btnse5ca.js?ver=3.2.3')}}"></script>
    <script src="{{ asset('assets/js/flatpickr.js')}}"></script>

    <!-- ------------------------------------
    Time Picker custom plughin start
    -------------------------------------- -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/timepicker/mdtimepicker.css')}}">
    <script type="text/javascript" src="{{ asset('assets/timepicker/mdtimepicker.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('.time__pickers').mdtimepicker(); //Initializes the time picker
        });

        $(document).ready(function(){
            $('.phoneNumber').on('input', function(){
                this.value = this.value.replace(/[^0-9]/g, '');
            });
        });

    </script>
    <script>
         $(".date-pickerss").flatpickr({
            dateFormat: "m/d/Y",
            minDate: "today"
        });
        $(".daterange-pickerss").flatpickr({
            mode: "range",
            dateFormat: "Y-m-d",
        });

    </script>

<script>
    $(function(){
        $('#modal-alert-data').modal('show');
    })
</script>
    <!-- ------------------------------------
Time Picker custom plughin end
-------------------------------------- -->

</body>
</html>
