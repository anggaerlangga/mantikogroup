<?php $this->load->view("admin/_partials/head.php") ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Side Bar -->
        <?php $this->load->view("admin/_partials/sidebar.php") ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php $this->load->view("admin/_partials/navbar.php") ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                <h1 class="h3 mb-2 text-gray-800">Add Content in Section</h1>

                <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
				<?php endif; ?>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <a href="<?php echo site_url('admin/content') ?>"><i class="fa fa-arrow-circle-left"></i>Back</a>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo site_url('admin/content/add') ?>" method="post" enctype="multipart/form-data" >
                            <div class="form-group">
                                <label for="page_id">Pages</label>
                                <select class="form-control" name="page_id">
								    <option value="FOSO">Founder Story</option>
									<option value="ABOUT">About US</option>
                                    <option value="CAREER">Career</option>
                                    <option value="PRODUCT">Product & Service</option>
								</select>
                                <div class="invalid-feedback">
                                    <?php echo form_error('page_id') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="lang">Language</label>
                                <select class="form-control" name="lang">
                                    <option value="ID">ID</option>
								    <option value="EN">English</option>
								</select>
                                <div class="invalid-feedback">
                                    <?php echo form_error('lang') ?>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input class="form-control <?php echo form_error('title') ? 'is-invalid':'' ?>"
                                    type="text" name="title" placeholder="Title" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('title') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="subtitle">Subtitle</label>
                                <input class="form-control <?php echo form_error('subtitle') ? 'is-invalid':'' ?>"
                                    type="text" name="subtitle" placeholder="Subtitle" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('subtitle') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
                                    rows="4" cols="50" name="description" placeholder="Description"></textarea>
                                <div class="invalid-feedback">
                                    <?php echo form_error('description') ?>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="meta_description">Meta Description</label>
                                <input class="form-control <?php echo form_error('meta_description') ? 'is-invalid':'' ?>"
                                    type="text" name="meta_description" placeholder="Meta Desription" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('meta_description') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="meta_title">Meta Title</label>
                                <input class="form-control <?php echo form_error('meta_title') ? 'is-invalid':'' ?>"
                                    type="text" name="meta_title" placeholder="Meta Title" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('meta_title') ?>
                                </div>
                            </div>

                            <div class="form-group">
								<label for="name">Photo</label>
								<input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
								 type="file" name="image" />
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
								</div>
							</div>

                            <input type="hidden" name="content_id" value="abc" />
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <input class="btn btn-success" type="submit" name="btn" value="Save" />
                
                        </form>
                    </div>
                </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php $this->load->view("admin/_partials/footer.php") ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('js/sb-admin-2.min.js') ?>"></script>

</body>

</html>