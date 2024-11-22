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
    <code>
        <pre>
        <?php print_r(WPSXB_BACKUP_FILES_LIST); ?>
        </pre>
    </code>
    <?php if (WPSXB_BACKUP_FILES_EXISTS) : ?>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th class="text-center" scope="col" style="width: 60px;">#</th>
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
                    <td><?php echo '<i class="fa-solid fa-file-code"></i> ' . __('Files'); ?></td>
                    <td>320 Mb</td>
                    <td>November 21, 2024 at 21:00</td>
                    <td>
                        <a type="button"
                                class="btn btn-success btn-sm"
                                data-name="wpsxb_files_34579847539"
                                title="<?php echo __('Download'); ?>"
                        >
                            <i class="fa-solid fa-download"></i>
                        </a>
                        <a type="button" class="btn btn-danger btn-sm" title="<?php echo __('Delete'); ?>">
                            <i class="fa-solid fa-trash-can"></i>
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
                <!-- <tr>
                    <th class="text-center" scope="row">2</th>
                    <td><?php echo '<i class="fa-solid fa-database"></i> ' . __('Database'); ?></td>
                    <td>322 Kb</td>
                    <td>November 21, 2024 at 21:05</td>
                    <td>
                        <a type="button"
                                class="btn btn-success btn-sm"
                                data-name="wpsxb_files_34579847564"
                                title="<?php echo __('Download'); ?>">
                            <i class="fa-solid fa-download"></i>
                        </a>
                        <a type="button" class="btn btn-danger btn-sm" title="<?php echo __('Delete'); ?>">
                            <i class="fa-solid fa-trash-can"></i>
                        </a>
                    </td>
                </tr> -->
            </tbody>
        </table>
    <?php else : ?>
        <p class="mt-3"><?php echo __('Backups not created yet.'); ?></p>
    <?php endif; ?>
</div>