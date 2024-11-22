<div class="wrap mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="d-block wp-heading-inline"><?php echo __('WP SimpleX Backup & Migrations'); ?></h1>
                <p class="mb-1"><?php echo __('This is simple plugin for making backups and migrations of your site.'); ?></p>
                <p class="mb-1"><?php echo __('Version: ') . WPSXB_PLUGIN_VERSION; ?></p>
                <p>
                    <?php echo __('Developed by: '); ?>
                    <a href="<?php echo WPSXB_PLUGIN_AUTHOR_URL; ?>"
                        title="<?php echo WPSXB_PLUGIN_AUTHOR_NAME; ?>"
                        target="_blank"
                    >
                        <?php echo WPSXB_PLUGIN_AUTHOR_NAME; ?> <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </a>
                </p>
                <div class="card mw-100 pt-4">
                    <img src="<?php echo WPSXB_PLUGIN_URL . 'assets/images/intake-digital-logo.svg'; ?>"
                        alt="INTAKE Digital Logo"
                        width="120"
                        height="22"
                    >
                    <span class="divider my-3"></span>
                    <ul class="panel-tabs nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item mb-0" role="presentation">
                            <button class="nav-link<?php echo !isset($_GET['tab']) ? ' active' : null; ?>" id="pills-backups-tab" data-target-item="backups" data-bs-toggle="pill" data-bs-target="#pills-backups" type="button" role="tab" aria-controls="pills-backups" aria-selected="true">
                                <?php echo '<i class="fa-solid fa-server"></i> ' . __('Backups'); ?>
                            </button>
                        </li>
                        <li class="nav-item mb-0" role="presentation">
                            <button class="nav-link<?php echo isset($_GET['tab']) && $_GET['tab'] == 'migrations' ? ' active' : null; ?>" id="pills-migrations-tab" data-target-item="migrations" data-bs-toggle="pill" data-bs-target="#pills-migrations" type="button" role="tab" aria-controls="pills-migrations" aria-selected="false">
                                <?php echo '<i class="fa-solid fa-right-left"></i> ' . __('Migrations'); ?>
                            </button>
                        </li>
                        <li class="nav-item mb-0" role="presentation">
                            <button class="nav-link<?php echo isset($_GET['tab']) && $_GET['tab'] == 'settings' ? ' active' : null; ?>" id="pills-settings-tab" data-target-item="settings" data-bs-toggle="pill" data-bs-target="#pills-settings" type="button" role="tab" aria-controls="pills-settings" aria-selected="false">
                                <?php echo '<i class="fa-solid fa-screwdriver-wrench"></i> ' . __('Settings'); ?>
                            </button>
                        </li>
                    </ul>
                    <span class="divider mb-3"></span>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade<?php echo !isset($_GET['tab']) ? ' show active' : null; ?>" id="pills-backups" role="tabpanel" aria-labelledby="pills-backups-tab">
                            <?php require_once WPSXB_PLUGIN_PATH . 'views/backups.php'; ?>
                        </div>
                        <div class="tab-pane fade<?php echo isset($_GET['tab']) && $_GET['tab'] == 'migrations' ? ' show active' : null; ?>" id="pills-migrations" role="tabpanel" aria-labelledby="pills-migrations-tab">
                            <?php require_once WPSXB_PLUGIN_PATH . 'views/migrations.php'; ?>
                        </div>
                        <div class="tab-pane fade<?php echo isset($_GET['tab']) && $_GET['tab'] == 'settings' ? ' show active' : null; ?>" id="pills-settings" role="tabpanel" aria-labelledby="pills-settings-tab">
                            <?php require_once WPSXB_PLUGIN_PATH . 'views/settings.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>