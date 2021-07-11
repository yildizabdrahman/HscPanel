<?php require view('admin/partials/header'); ?>

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-12">
                <div class="row">

                    <div class="col-4">

                        <h4 class="page-title">Language Translate</h4>
                    </div>
                    <div class="col-8">
                        <ol style="float: right;" class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javaScript:void();">DashBoard</a></li>
                            <li class="breadcrumb-item"><a href="javaScript:void();">Languages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Language Translate</li>
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
                                <i class="fa fa-table"></i> 
                                <?php $code = $config['defaultLanguAge'];
                                echo $language['title']->$code." Çeviri Dosyası";
                                ?>
                            </div>
                            <div class="col-6 text-right">
                                <a href="<?= base_url('admin/languages'); ?>" class="btn btn-warning btn-sm"><i class="fa fa-eye fa-2x"></i></a>
                            </div>
                        </div>

                    </div>

                    <div class="card-body">

                        <form method="POST" action="">

                            <div class="form-group">
                                <textarea name="translate_text" style="font-family:sans-serif; font-size:15px; background-color: #f8f9fa; color:#333;" class="form-control py-0" name="" id="" cols="30" rows="28">
                                <?php
                                
                                for ($i = 0; $i < $rows; $i++) {
                                    echo $myfile[$i];
                                }
                                ?>

                                </textarea>
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