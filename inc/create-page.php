<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
        <?php include 'components/top-bar.php' ?>
        <!-- Begin Page Content -->
        <div class="container-fluid pt-4">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800 font-weight-bold mx-auto pb-5">Create New Page</h1>
            </div>
            <!-- Content Row -->
            <div class="row">
                <!-- Products Card Example -->
                <div class="col-xl-6 col-md-6 mx-auto">
                    <form class="">
                        <div class="form-group pb-4">
                            <label for="selectlayout">Select Layout</label>
                            <select id="selectlayout" class="form-control col-md-4">
                                <option selected>Select</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group pb-4">
                            <label for="title">Write Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Title...">
                        </div>
                        <div class="form-group pb-4">
                            <label for="desc">Write Description</label>
                            <textarea class="form-control" id="desc" name="desc" rows="3" placeholder="Description..."></textarea>
                        </div>
                        <div class="form-group pb-4">
                            <label for="desc">Chose Status</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Visible</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Invisible</label>
                            </div>
                        </div>
                        <div class="form-group pb-4">
                            <label for="selectsidebar">Select Sidebar</label>
                            <select id="selectsidebar" class="form-control col-md-4">
                                <option selected>Select</option>
                                <option>...</option>
                            </select>
                        </div>
                        <button type="submit" class="btn bg-red text-white">Create Page</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
</div>
<!-- End of Content Wrapper -->