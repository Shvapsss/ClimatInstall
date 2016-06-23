<?php
/**
 * @package AkeebaBackup
 * @copyright Copyright (c)2009-2014 Nicholas K. Dionysopoulos
 * @license GNU General Public License version 3, or later
 *
 * @since 3.0
 */

// Protect from unauthorized access
defined('_JEXEC') or die();

if(!class_exists('AkeebaHelperEscape')) JLoader::import('helpers.escape', JPATH_COMPONENT_ADMINISTRATOR);
?>
<div class="akeeba-bootstrap" id="ftpdialog" title="<?php echo JText::_('CONFIG_UI_FTPBROWSER_TITLE') ?>" style="display:none;">
    <p class="instructions alert alert-info">
        <?php echo JText::_('FTPBROWSER_LBL_INSTRUCTIONS'); ?>
    </p>
    <div class="error alert alert-error" id="ftpBrowserErrorContainer">
        <h2><?php echo JText::_('FTPBROWSER_LBL_ERROR'); ?></h2>
        <p id="ftpBrowserError"></p>
    </div>
    <ul id="ak_crumbs" class="breadcrumb"></ul>
    <div class="row-fluid">
        <div class="span12">
            <table id="ftpBrowserFolderList" class="table table-striped">
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="testFtpDialog" tabindex="-1" role="dialog" aria-labelledby="testFtpDialogLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="testFtpDialogLabel">
                </h4>
            </div>
            <div class="modal-body" id="testFtpDialogBody">
                <div class="alert alert-success" id="testFtpDialogBodyOk"></div>
                <div class="alert alert-danger" id="testFtpDialogBodyFail"></div>
            </div>
        </div>
    </div>
</div>

<form name="adminForm" id="adminForm" action="index.php" method="post" class="form-horizontal">
	<input type="hidden" name="option" value="com_akeeba" />
	<input type="hidden" name="view" value="restore" />
	<input type="hidden" name="task" value="start" />
	<input type="hidden" name="id" value="<?php echo $this->id ?>" />

	<fieldset>
		<legend><?php echo JText::_('RESTORE_LABEL_EXTRACTIONMETHOD'); ?></legend>
		<div class="control-group">
			<label class="control-label" for="procengine">
				<?php echo JText::_('RESTORE_LABEL_EXTRACTIONMETHOD'); ?>
			</label>
			<div class="controls">
				<?php echo JHTML::_('select.genericlist', $this->extractionmodes, 'procengine', '', 'value', 'text', $this->ftpparams['procengine']);?>
				<p class="help-block">
					<?php echo JText::_('RESTORE_LABEL_REMOTETIP'); ?>
				</p>
			</div>
		</div>
	</fieldset>

	<fieldset>
		<legend><?php echo JText::_('RESTORE_LABEL_JPSOPTIONS'); ?></legend>
		<div class="control-group">
			<label class="control-label">
				<?php echo JText::_('CONFIG_JPS_KEY_TITLE') ?>
			</label>
			<div class="controls">
				<input id="jps_key" name="jps_key" value="" type="password" />
			</div>
		</div>
	</fieldset>

    <fieldset id="ftpOptions">
		<legend><?php echo JText::_('RESTORE_LABEL_FTPOPTIONS'); ?></legend>

		<div class="control-group">
			<label class="control-label" for="ftp_host">
				<?php echo JText::_('CONFIG_DIRECTFTP_HOST_TITLE') ?>
			</label>
			<div class="controls">
				<input id="var[ftp.host]" name="ftp_host" value="<?php echo $this->ftpparams['ftp_host']; ?>" type="text" />
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="ftp_port">
				<?php echo JText::_('CONFIG_DIRECTFTP_PORT_TITLE') ?>
			</label>
			<div class="controls">
				<input id="var[ftp.port]" name="ftp_port" value="<?php echo $this->ftpparams['ftp_port']; ?>" type="text" />
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="ftp_user">
				<?php echo JText::_('CONFIG_DIRECTFTP_USER_TITLE') ?>
			</label>
			<div class="controls">
				<input id="var[ftp.user]" name="ftp_user" value="<?php echo $this->ftpparams['ftp_user']; ?>" type="text" />
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="ftp_pass">
				<?php echo JText::_('CONFIG_DIRECTFTP_PASSWORD_TITLE') ?>
			</label>
			<div class="controls">
				<input id="var[ftp.pass]" name="ftp_pass" value="<?php echo $this->ftpparams['ftp_pass']; ?>" type="password" />
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="ftp_root">
				<?php echo JText::_('CONFIG_DIRECTFTP_INITDIR_TITLE') ?>
			</label>
			<div class="controls">
				<input id="var[ftp.root]" name="ftp_root" value="<?php echo $this->ftpparams['ftp_root']; ?>" type="text" />
<!--
				<button class="btn btn-inverse btn-mini" id="ftp-browse" onclick="return false;">
					<i class="icon-white icon-folder-open"></i>
					<?php /*echo JText::_('CONFIG_UI_BROWSE') */?>
				</button>
-->
			</div>
		</div>
	</fieldset>

	<div class="form-actions">
		<button class="btn btn-primary btn-large" id="backup-start" onclick="return false;">
			<i class="icon-retweet icon-white"></i>
			<?php echo JText::_('RESTORE_LABEL_START') ?>
		</button>
		<button class="btn" id="testftp" onclick="return false;">
			<?php echo JText::_('CONFIG_DIRECTFTP_TEST_TITLE') ?>
		</button>
	</div>

</form>

<script type="text/javascript" language="javascript">
akeeba.jQuery(document).ready(function($){
    // Initialise the translations
    akeeba.Configuration.translations['UI-BROWSE'] = '<?php echo AkeebaHelperEscape::escapeJS(JText::_('CONFIG_UI_BROWSE')) ?>';
    akeeba.Configuration.translations['UI-CONFIG'] = '<?php echo AkeebaHelperEscape::escapeJS(JText::_('CONFIG_UI_CONFIG')) ?>';
    akeeba.Configuration.translations['UI-REFRESH'] = '<?php echo AkeebaHelperEscape::escapeJS(JText::_('CONFIG_UI_REFRESH')) ?>';
    akeeba.Configuration.translations['UI-FTPBROWSER-TITLE'] = '<?php echo AkeebaHelperEscape::escapeJS(JText::_('CONFIG_UI_FTPBROWSER_TITLE')) ?>';
    akeeba.Configuration.translations['UI-ROOT'] = '<?php echo AkeebaHelperEscape::escapeJS(JText::_('FILTERS_LABEL_UIROOT')) ?>';
    akeeba.Configuration.translations['UI-TESTFTP-OK'] = '<?php echo AkeebaHelperEscape::escapeJS(JText::_('CONFIG_DIRECTFTP_TEST_OK')) ?>';
    akeeba.Configuration.translations['UI-TESTFTP-FAIL'] = '<?php echo AkeebaHelperEscape::escapeJS(JText::_('CONFIG_DIRECTFTP_TEST_FAIL')) ?>';

    // Push some custom URLs
    akeeba.Configuration.URLs['browser'] = '<?php echo AkeebaHelperEscape::escapeJS('index.php?view=browser&tmpl=component&processfolder=1&folder=') ?>';
    akeeba.Configuration.URLs['ftpBrowser'] = '<?php echo AkeebaHelperEscape::escapeJS('index.php?option=com_akeeba&view=ftpbrowser') ?>';
    akeeba.Configuration.URLs['testFtp'] = '<?php echo AkeebaHelperEscape::escapeJS('index.php?option=com_akeeba&view=restore&task=ajax&ajax=testftp') ?>';

    // Create the dialog
    $("#dialog").dialog({
        autoOpen: false,
        closeOnEscape: false,
        height: 400,
        width: 640,
        hide: 'slide',
        modal: true,
        position: 'center',
        show: 'slide'
    });

    akeeba.System.params.errorCallback = function( message ) {
        var dialog_element = new Element('div');
        var dlgHead = new Element('h3');
        dlgHead.set('html','<?php echo AkeebaHelperEscape::escapeJS(JText::_('CONFIG_UI_AJAXERRORDLG_TITLE')) ?>');
        dlgHead.inject(dialog_element);
        var dlgPara = new Element('p');
        dlgPara.set('html','<?php echo AkeebaHelperEscape::escapeJS(JText::_('CONFIG_UI_AJAXERRORDLG_TEXT')) ?>');
        dlgPara.inject(dialog_element);
        var dlgPre = new Element('pre');
        dlgPre.set('html', message);
        dlgPre.inject(dialog_element);
        SqueezeBox.open(new Element(dialog_element), {
            handler:	'adopt',
            size:		{x: 600, y: 400}
        });
    };

	$('#backup-start').click(function(event){
		document.adminForm.submit();
	});

    akeeba.System.params.errorCallback = function( message ) {
        var dialog_element = new Element('div');
        var dlgHead = new Element('h3');
        dlgHead.set('html','<?php echo AkeebaHelperEscape::escapeJS(JText::_('CONFIG_UI_AJAXERRORDLG_TITLE')) ?>');
        dlgHead.inject(dialog_element);
        var dlgPara = new Element('p');
        dlgPara.set('html','<?php echo AkeebaHelperEscape::escapeJS(JText::_('CONFIG_UI_AJAXERRORDLG_TEXT')) ?>');
        dlgPara.inject(dialog_element);
        var dlgPre = new Element('pre');
        dlgPre.set('html', message);
        dlgPre.inject(dialog_element);
        SqueezeBox.open(new Element(dialog_element), {
            handler:	'adopt',
            size:		{x: 600, y: 400}
        });
    };

    // Button hooks
    function onProcEngineChange(e)
    {
        if ($('#procengine').val() == 'direct')
        {
            document.getElementById('ftpOptions').style.display = 'none';
        }
        else
        {
            document.getElementById('ftpOptions').style.display = 'block';
        }
    }

    $('#ftp-browse').click(function(){
        akeeba.Configuration.FtpBrowser.initialise('ftp.initial_directory', 'ftp')
    });

    $(document.getElementById('testftp')).click(function(){
        akeeba.Configuration.FtpTest.testConnection('testftp', 'ftp');
    });

    $('#procengine').change(onProcEngineChange);

    onProcEngineChange();
});

</script>