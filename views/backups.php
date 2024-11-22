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
        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 30%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">0%</div>
    </div>
    <table class="table table-bordered mt-4">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
        </tbody>
    </table>
</div>