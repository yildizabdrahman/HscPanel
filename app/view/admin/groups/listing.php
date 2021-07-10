<?php require view('admin/partials/header'); ?>

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-12">
                <div class="row">

                    <div class="col-4">

                        <h4 class="page-title"><?= lang('group_listing_title'); ?></h4>
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

                <div class="card">
                    <div class="card-header">

                        <div class="row">
                            <div class="col-6">
                                <i class="fa fa-table"></i> Group Listesi
                            </div>
                            <div class="col-6 text-right">
                                <a href="<?= base_url('admin/add-group'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus fa-2x"></i></a>
                                <?php if ((!url(2) || url(2) != 'trash') && $config['recycleBin'] == true) { ?>
                                    <a href="<?= base_url('admin/groups/trash') ?>" class="btn btn-success btn-sm"><i class="fa fa-recycle fa-2x"></i></a>
                                <?php } else if ($config['recycleBin'] == true) { ?>
                                    <a href="<?= base_url('admin/groups') ?>" class="btn btn-warning btn-sm"><i class="fa fa-eye fa-2x"></i></a>
                                <?php } ?>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="default-datatable" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Slug</th>
                                        <?php if (!url(2) || url(2) != 'trash') { ?>
                                            <th>CreatedAt</th>
                                        <?php } else {  ?>
                                            <th>DeletedAt</th>
                                        <?php } ?>
                                        <th>IsActive</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php foreach ($groups as $item) : ?>

                                        <?php
                                        $title = json_decode($item['title']);
                                        $current_lang = $config['defaultLanguAge'];
                                        ?>

                                        <td><?= $title->$current_lang; ?></td>
                                        <td><?= $item['slug']; ?></td>
                                        <td>
                                            <?php if (!url(2) || url(2) != 'trash') {
                                                echo $item['created_at'];
                                            } else {
                                                echo $item['deleted_at'];
                                            } ?>
                                        </td>
                                        <td>
                                            <input type="checkbox" <?= $item['is_active'] == true ? 'checked' : ''; ?> class="js-switch" data-color="#15ca20">
                                        </td>
                                        <td>
                                            <?php if (!url(2) || url(2) != 'trash') {
                                                $is_deletetype = $config['softDelete'] == true ? 'soft-delete' : 'hard-delete';
                                            ?>
                                                <a href="<?= base_url('admin/edit-group/') . $item['id']; ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit mr-1"></i>Düzenle</a>
                                                <a href="<?= base_url('admin/' . $is_deletetype . '/groups/') . $item['id']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash mr-1"></i> Sil</a>
                                            <?php } else { ?>
                                                <a href="<?= base_url('admin/recycle/groups/') . $item['id']; ?>" class="btn btn-success btn-sm"><i class="fa fa-recycle  mr-1"></i>Geri Al</a>
                                                <a href="<?= base_url('admin/hard-delete/groups/') . $item['id']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash mr-1"></i>Kalıcı Sil</a>
                                            <?php } ?>


                                        </td>
                                        </tr>
                                    <?php endforeach; ?>

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Row-->

    </div>
    <!-- End container-fluid-->

</div>
<!--End content-wrapper-->

<?php require view('admin/partials/footer'); ?>