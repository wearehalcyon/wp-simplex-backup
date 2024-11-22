<div class="tab-content">
    <h4><?php echo __('Backups'); ?></h4>
    <p><?php echo __('Please choose what kind backup you want to create and download:'); ?></p>
    <form action="" method="POST">
        <div class="d-flex align-items-center form-check">
            <input class="form-check-input" type="radio" name="backup-type" id="database" checked>
            <label class="form-check-label" for="database">
                <?php echo __('Database'); ?>
            </label>
        </div>
        <div class="d-flex align-items-center form-check">
            <input class="form-check-input" type="radio" name="backup-type" id="files">
            <label class="form-check-label" for="files">
                <?php echo __('Files'); ?>
            </label>
        </div>
        <button type="submit" class="btn btn-primary btn-sm mt-2 mb-3 create-backup">
            <?php echo __('Create Backup'); ?>
        </button>
    </form>
    <div class="progress progress-shadowed mt-3">
        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">0%</div>
    </div>
    <?php if (WPSXB_BACKUP_FILES_EXISTS) : ?>
        <table class="table table-bordered table-hover mt-4">
            <thead>
                <tr>
                    <th class="text-center" scope="col" style="width: 60px;">#</th>
                    <th scope="col" style="width: 60px;"></th>
                    <th scope="col"><?php echo __('Type'); ?></th>
                    <th scope="col"><?php echo __('Size'); ?></th>
                    <th scope="col"><?php echo __('Date Created'); ?></th>
                    <th scope="col"><?php echo __('Actions'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; foreach (WPSXB_BACKUP_FILES_LIST as $key => $value) : ?>
                <tr>
                    <th class="text-center" scope="row"><?php echo $i++; ?></th>
                    <td class="text-center">
                        <?php
                            if ($value['type'] == 'files') {
                                echo '<i class="fa-solid fa-file-code"></i> ';
                            } else {
                                echo '<i class="fa-solid fa-database"></i> ';
                            }
                        ?>
                    </td>
                    <td>
                        <?php
                            if ($value['type'] == 'files') {
                                echo $value['type_name'];
                            } else {
                                echo $value['type_name'];
                            }
                        ?>
                    </td>
                    <td><?php echo $value['size']; ?></td>
                    <td><?php echo $value['date_created']; ?></td>
                    <td>
                        <a type="button"
                            href="<?php echo WPSXB_PLUGIN_BACKUPS_URI . '/' . $key; ?>"
                            class="btn btn-success btn-sm"
                            title="<?php echo __('Download'); ?>"
                            download
                        >
                            <i class="fa-solid fa-download"></i>
                        </a>
                        <a type="button"
                            href="<?php echo admin_url('/tools.php?page=' . WPSXB_PAGE_SLUG . '&action=delete&file=' . $key); ?>"
                            data-type="<?php echo $value['type_name']; ?>"
                            class="btn btn-danger btn-sm delete-backup"
                            title="<?php echo __('Delete'); ?>"
                        >
                            <i class="fa-solid fa-trash-can"></i>
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else : ?>
        <p class="mt-3"><?php echo __('Backups not created yet.'); ?></p>
    <?php endif; ?>
</div>