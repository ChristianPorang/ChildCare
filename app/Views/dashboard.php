<title>Dashboard</title>

        <!-- partial -->
        
        <div class="main-panel">

            <div class="content-wrapper">

                <?php if (in_array(session() -> get('level'), [1, 2])) { ?>

                <div class="row">

                    <div class="col-md-4 grid-margin">

                        <div class="card">

                            <div class="card-body">

                                <h5>Registered Students</h5>
                                
                                <div class="row">

                                    <div class="col-6 col-sm-12 col-xl-8 my-auto">

                                        <div class="d-flex d-sm-block d-md-flex align-items-center">

                                            <h3 class="mb-0"><?php echo $onlineCounter ?> Students</h3>

                                        </div>

                                    </div>

                                    <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">

                                        <i class="icon-lg mdi mdi-school text-primary ms-auto"></i>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-4 grid-margin">

                        <div class="card">

                            <div class="card-body">

                                <h5>Active Student Invoice</h5>
                                
                                <div class="row">

                                    <div class="col-6 col-sm-12 col-xl-8 my-auto">

                                        <div class="d-flex d-sm-block d-md-flex align-items-center">

                                            <h3 class="mb-0"><?php echo $invoiceACounter ?> Invoice</h3>

                                        </div>

                                    </div>

                                    <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">

                                        <i class="icon-lg mdi mdi-file-alert text-success ms-auto"></i>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-4 grid-margin">

                        <div class="card">

                            <div class="card-body">

                                <h5>Active Student Fines</h5>
                                
                                <div class="row">

                                    <div class="col-6 col-sm-12 col-xl-8 my-auto">

                                        <div class="d-flex d-sm-block d-md-flex align-items-center">

                                            <h3 class="mb-0"><?php echo $invoiceFCounter ?> Fines</h3>

                                        </div>

                                    </div>

                                    <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">

                                        <i class="icon-lg mdi mdi-wallet text-danger ms-auto"></i>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <?php } ?>

                <div class="row">

                    <!-- STEP 1 -->

                        <div class="col-md-3 grid-margin">

                            <div class="card">

                                <div class="card-body">

                                    <h5 class="d-flex justify-content-center">STEP 1</h5>

                                    <div class="row d-flex justify-content-center">

                                        <div class="col-4 text-xl-center">
                                            <i class="icon-md mdi mdi-magnify text-secondary ms-auto"></i>
                                        </div>

                                    </div>

                                    <div class="row d-flex justify-content-center">

                                        <div class="col-12 text-xl-center">
                                            <p>Lakukan Pendaftaran terhadap Obat dan Dokter Yang dituju, jika terdapat permasalahan silahkan melapor dengan bukti pembayaran.</p>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    <!-- End STEP 1 -->

                    <!-- STEP 2 -->

                        <div class="col-md-3 grid-margin">

                            <div class="card">

                                <div class="card-body">

                                    <h5 class="d-flex justify-content-center">STEP 2</h5>

                                    <div class="row d-flex justify-content-center">

                                        <div class="col-4 text-xl-center">
                                            <i class="icon-md mdi mdi-check-all text-primary ms-auto"></i>
                                        </div>

                                    </div>

                                    <div class="row d-flex justify-content-center">

                                        <div class="col-12 text-xl-center">
                                            <p>Pilih invoice yang akan dibayar dengan melakukan ceklis dan menekan tombol bayar</p>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    <!-- End STEP 2 -->

                    <!-- STEP 3 -->

                        <div class="col-md-3 grid-margin">

                            <div class="card">

                                <div class="card-body">

                                    <h5 class="d-flex justify-content-center">STEP 3</h5>

                                    <div class="row d-flex justify-content-center">

                                        <div class="col-4 text-xl-center">
                                            <i class="icon-md mdi mdi-cash-multiple text-success ms-auto"></i>
                                        </div>

                                    </div>

                                    <div class="row d-flex justify-content-center">

                                        <div class="col-12 text-xl-center">
                                            <p>Lakukan pembayaran dengan menggunakan akun virtual melalui mobile banking</p>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    <!-- End STEP 3 -->

                    <!-- STEP 4 -->

                        <div class="col-md-3 grid-margin">

                            <div class="card">

                                <div class="card-body">

                                    <h5 class="d-flex justify-content-center">STEP 4</h5>

                                    <div class="row d-flex justify-content-center">

                                        <div class="col-4 text-xl-center">
                                            <i class="icon-md mdi mdi-printer-alert text-danger ms-auto"></i>
                                        </div>

                                    </div>

                                    <div class="row d-flex justify-content-center">

                                        <div class="col-12 text-xl-center">
                                            <p>Jangan lupa untuk menyimpan bukti pembayaran, untuk jika suatu saat diperlukan.</p>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    <!-- End STEP 4 -->

                </div>
                
            </div>