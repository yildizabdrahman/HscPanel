<?php require view('admin/partials/header'); ?>

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-12">
                <div class="row">

                    <div class="col-4">

                        <h4 class="page-title">Groups</h4>
                    </div>
                    <div class="col-8">
                        <ol style="float: right;" class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javaScript:void();">DashBoard</a></li>
                            <li class="breadcrumb-item"><a href="javaScript:void();">Groups</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Group List</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb-->
        <div class="row">
            <div class="col-lg-12">
                <?php if ($message = session_flasdata('error')) { ?>
                    <div class="alert alert-warning p-2">
                        <?= $message; ?>
                    </div>
                <?php } ?>
                <div style="min-height: 600px;" class="card">
                    <div class="card-header">

                        <div class="row">
                            <div class="col-6">
                                <i class="fa fa-table"></i> Group Add
                            </div>
                            <div class="col-6 text-right">
                                <a href="<?= base_url('admin/languages'); ?>" class="btn btn-warning btn-sm"><i class="fa fa-eye fa-2x"></i></a>
                            </div>
                        </div>

                    </div>

                    <div class="card-body">

                        <form method="POST" action="">

                            <div class="form-group">
                                <label for="basic-input" class="col-sm-3 col-form-label">Title</label>
                                <div class="col-sm-12">

                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                                        <?php foreach ($languages as $key => $language) : ?>
                                            <li class="nav-item rounded-0" role="presentation">
                                                <a class="nav-link <?= $key == 0 ? "active" : ""; ?>" id="pills-<?= $language['code']; ?>-tab" data-toggle="pill" href="#pills-<?= $language['code']; ?>" role="tab" aria-controls="pills-<?= $language['code']; ?>" aria-selected="true"><img width="20" class="mr-2" src="<?= public_url('admin/flags/4x3/' . $language['flag']); ?>.svg" alt=""><?= $language['code']; ?></a>
                                            </li>

                                        <?php endforeach; ?>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">

                                        <?php foreach ($languages as $key => $language) : ?>
                                            <div class="tab-pane fade <?= $key == 0 ? "show active" : ""; ?>" id="pills-<?= $language['code']; ?>" role="tabpanel" aria-labelledby="pills-<?= $language['code']; ?>-tab">
                                                <input name="title[<?= $language['code']; ?>]" type="text" class="form-control" placeholder="<?= lang('form_input_title'); ?>">
                                            </div>

                                        <?php endforeach; ?>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <label>Ülke</label>
                                <select name="code" class="form-control single-select">
                                    <?php foreach (languageList() as $key => $item) { ?>

                                        <option value="<?= $key; ?>"><?= lang($key); ?></option>
                                    <?php } ?>
                                </select>
                            </div>


                            <input name="submit" type="hidden" value="1">

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary float-right mr-2">
                                    KAYDET
                                </button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div><!-- End Row-->

    </div>
    <!-- End container-fluid-->

</div>
<!--End content-wrapper-->

<?php require view('admin/partials/footer'); ?>