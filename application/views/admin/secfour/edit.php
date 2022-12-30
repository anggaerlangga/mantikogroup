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

                <h1 class="h3 mb-2 text-gray-800">Edit Content in Section</h1>

                <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
				<?php endif; ?>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <a href="<?php echo site_url('admin/secfour') ?>"><i class="fa fa-arrow-circle-left"></i>Back</a>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data" >    
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input class="form-control <?php echo form_error('title') ? 'is-invalid':'' ?>"
                                    type="text" name="title" placeholder="Title" value="<?php echo $secfour->title ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('title') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="subtitle">Subtitle</label>
                                <input class="form-control <?php echo form_error('subtitle') ? 'is-invalid':'' ?>"
                                    type="text" name="subtitle" placeholder="Subtitle" value="<?php echo $secfour->subtitle ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('subtitle') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <input class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
                                    type="text-area" name="description" placeholder="Description" value="<?php echo $secfour->description ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('description') ?>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="label">Label</label>
                                <input class="form-control <?php echo form_error('label') ? 'is-invalid':'' ?>"
                                    type="text" name="label" placeholder="Label" value="<?php echo $secfour->label ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('label') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="url">URL</label>
                                <input class="form-control <?php echo form_error('url') ? 'is-invalid':'' ?>"
                                    type="text" name="url" placeholder="URL" value="<?php echo $secfour->url ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('url') ?>
                                </div>
                            </div>

                            <div class="form-group">
								<label for="image">Image</label>
								<input class="form-control <?php echo form_error('image') ? 'is-invalid':'' ?>"
								 type="file" name="image" />
                                 <input type="hidden" name="old_image" value="<?php echo $secfour->image ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
								</div>
							</div>
                            
                            <input type="hidden" name="section_4_id" value="<?php echo $secfour->section_4_id ?>" />
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