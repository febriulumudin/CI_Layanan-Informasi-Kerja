<!-- /.content-wrapper -->
<footer data-background-color="blue" style="border-top:1px solid #ffffff">
    <div class="panel-header bg-primary-gradient pb-4">
        <br>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <center class="text-white">
                        <small class='text-footer' style="font-family:sans-serif">Copyright &copy;2020 - <b>Layanan Informasi Kerja</b> - My Company <br>
                            Jl. Ketintang, Wonokromo, Surabaya - Telp. 089000000 - Fax. 0400 400000</small>
                    </center>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?= base_url(); ?>/template1/Atlantis-Lite-master/assets/js/core/jquery.3.2.1.min.js"></script>
<script src="<?= base_url(); ?>/template1/Atlantis-Lite-master/assets/js/core/popper.min.js"></script>
<script src="<?= base_url(); ?>/template1/Atlantis-Lite-master/assets/js/core/bootstrap.min.js"></script>
<!-- jQuery UI -->
<script src="<?= base_url(); ?>/template1/Atlantis-Lite-master/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?= base_url(); ?>/template1/Atlantis-Lite-master/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="<?= base_url(); ?>/template1/Atlantis-Lite-master/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<!-- Atlantis JS -->
<script src="<?= base_url(); ?>/template1/Atlantis-Lite-master/assets/js/atlantis.min.js"></script>
<!-- Atlantis DEMO methods, don't include it in your project! -->
<script src="<?= base_url(); ?>/template1/Atlantis-Lite-master/assets/js/setting-demo2.js"></script>
<script>
    $('#map-example').vectorMap({
        map: 'world_en',
        backgroundColor: 'transparent',
        borderColor: '#fff',
        borderWidth: 2,
        color: '#e4e4e4',
        enableZoom: true,
        hoverColor: '#35cd3a',
        hoverOpacity: null,
        normalizeFunction: 'linear',
        scaleColors: ['#b6d6ff', '#005ace'],
        selectedColor: '#35cd3a',
        selectedRegions: ['ID', 'RU', 'US', 'AU'],
        showTooltip: true,
        onRegionClick: function(element, code, region) {
            return false;
        },
        onResize: function(element, width, height) {
            console.log('Map Size: ' + width + 'x' + height);
        },
    });
</script>
<script src="<?= base_url(); ?>/template1/concept-master/assets/libs/js/gmaps.min.js"></script>
<script src="<?= base_url(); ?>/template1/concept-master/assets/libs/js/google_map.js">
</script>
<script src="<?= base_url(); ?>/template1/Atlantis-Lite-master/assets/js/plugin/sweetalert/sweetalert.min.js"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyBUb3jDWJQ28vDJhuQZxkC0NXr_zycm8D0&amp;sensor=true"></script>

<script>
    //== Class definition
    var SweetAlert2Demo = function() {

        //== Demos
        var initDemos = function() {
            //== Sweetalert Demo 1
            $('#alert_demo_1').click(function(e) {
                swal('Good job!', {
                    buttons: {
                        confirm: {
                            className: 'btn btn-success'
                        }
                    },
                });
            });

            //== Sweetalert Demo 2
            $('#alert_demo_2').click(function(e) {
                swal("Here's the title!", "...and here's the text!", {
                    buttons: {
                        confirm: {
                            className: 'btn btn-success'
                        }
                    },
                });
            });

            //== Sweetalert Demo 3
            $('#alert_demo_3_1').click(function(e) {
                swal("Good job!", "You clicked the button!", {
                    icon: "warning",
                    buttons: {
                        confirm: {
                            className: 'btn btn-warning'
                        }
                    },
                });
            });

            $('#alert_demo_3_2').click(function(e) {
                swal("Good job!", "You clicked the button!", {
                    icon: "error",
                    buttons: {
                        confirm: {
                            className: 'btn btn-danger'
                        }
                    },
                });
            });

            $('#alert_demo_3_3').click(function(e) {
                swal("Good job!", "You clicked the button!", {
                    icon: "success",
                    buttons: {
                        confirm: {
                            className: 'btn btn-success'
                        }
                    },
                });
            });

            $('#alert_demo_3_4').click(function(e) {
                swal("Good job!", "You clicked the button!", {
                    icon: "info",
                    buttons: {
                        confirm: {
                            className: 'btn btn-info'
                        }
                    },
                });
            });

            //== Sweetalert Demo 4
            $('#alert_demo_4').click(function(e) {
                swal({
                    title: "Good job!",
                    text: "You clicked the button!",
                    icon: "success",
                    buttons: {
                        confirm: {
                            text: "Confirm Me",
                            value: true,
                            visible: true,
                            className: "btn btn-success",
                            closeModal: true
                        }
                    }
                });
            });

            $('#alert_demo_5').click(function(e) {
                swal({
                    title: 'Input Something',
                    html: '<br><input class="form-control" placeholder="Input Something" id="input-field">',
                    content: {
                        element: "input",
                        attributes: {
                            placeholder: "Input Something",
                            type: "text",
                            id: "input-field",
                            className: "form-control"
                        },
                    },
                    buttons: {
                        cancel: {
                            visible: true,
                            className: 'btn btn-danger'
                        },
                        confirm: {
                            className: 'btn btn-success'
                        }
                    },
                }).then(
                    function() {
                        swal("", "You entered : " + $('#input-field').val(), "success");
                    }
                );
            });

            $('#alert_demo_6').click(function(e) {
                swal("This modal will disappear soon!", {
                    buttons: false,
                    timer: 3000,
                });
            });

            $('#alert_demo_7').click(function(e) {
                swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    buttons: {
                        confirm: {
                            text: 'Yes, delete it!',
                            className: 'btn btn-success'
                        },
                        cancel: {
                            visible: true,
                            className: 'btn btn-danger'
                        }
                    }
                }).then((Delete) => {
                    if (Delete) {
                        swal({
                            title: 'Deleted!',
                            text: 'Your file has been deleted.',
                            type: 'success',
                            buttons: {
                                confirm: {
                                    className: 'btn btn-success'
                                }
                            }
                        });
                    } else {
                        swal.close();
                    }
                });
            });

            $('#alert_demo_8').click(function(e) {
                swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    buttons: {
                        cancel: {
                            visible: true,
                            text: 'No, cancel!',
                            className: 'btn btn-danger'
                        },
                        confirm: {
                            text: 'Yes, delete it!',
                            className: 'btn btn-success'
                        }
                    }
                }).then((willDelete) => {
                    if (willDelete) {
                        swal("Poof! Your imaginary file has been deleted!", {
                            icon: "success",
                            buttons: {
                                confirm: {
                                    className: 'btn btn-success'
                                }
                            }
                        });
                    } else {
                        swal("Your imaginary file is safe!", {
                            buttons: {
                                confirm: {
                                    className: 'btn btn-success'
                                }
                            }
                        });
                    }
                });
            })

        };

        return {
            //== Init
            init: function() {
                initDemos();
            },
        };
    }();

    //== Class Initialization
    jQuery(document).ready(function() {
        SweetAlert2Demo.init();
    });
</script>

</body>

</html>